<?php
session_start();
require_once 'db.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Validar nombre de usuario
    if (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $username)) {
        echo "El nombre de usuario no es válido.";
        exit();
    }

    // Sanitizar el nombre de usuario
    $username_sanitized = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

    $stmt = $mysqli->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->bind_param('s', $username_sanitized);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();

    if ($user && password_verify($password, $user->password)) {
        $_SESSION['user_id'] = $user->id;
        header('Location: listado.php');
        exit();
    } else {
        echo "Credenciales incorrectas.";
    }
} else {
    echo "Por favor, completa todos los campos.";
}
?>
