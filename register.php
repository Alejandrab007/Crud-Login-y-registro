<?php
require_once 'db.php';

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    $username = trim($_POST['username']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validar nombre de usuario
    if (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $username)) {
        echo "El nombre de usuario no es válido.";
        exit();
    }

    // Sanitizar el nombre de usuario
    $username_sanitized = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email no es válido.";
        exit();
    }

    // Validar contraseña 
    if (!preg_match("/^[A-Za-z\d]{4,8}$/", $password)) {
    echo "La contraseña debe tener entre 4 y 8 caracteres y solo contener letras y números.";
    exit();
}


    // Verificar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden.";
        exit();
    }

    // Hash de la contraseña
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

    // Insertar el nuevo usuario en la base de datos
    $stmt = $mysqli->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
    if ($stmt) {
        $stmt->bind_param('sss', $username_sanitized, $email, $password_hashed);
        if ($stmt->execute()) {
            // Redirigir al success.php si la inserción fue exitosa
            header('Location: succes.php'); // Corregido de "succes.php" a "succes.php"
            exit();
        } else {
            echo "Error al registrar el usuario.";
            exit();
        }
    } else {
        echo "Error en la preparación de la consulta.";
        exit();
    }
} /*else {
    echo "Por favor, completa todos los campos.";
}*/
?>
