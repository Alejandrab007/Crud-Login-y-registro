<?php
require_once 'db.php';

if (isset($_GET['id'])) {
    $stmt = $mysqli->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();
}

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    
    $stmt = $mysqli->prepare('UPDATE users SET username = ?, email = ? WHERE id = ?');
    $stmt->bind_param('ssi', $username, $email, $id); 
    $stmt->execute();

    header('Location: listado.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="loginyregistro.css">
</head>
<body>
    <div class="container">

    <h2>Editar Usuario</h2>

    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $user->id ?>">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" value="<?= $user->username ?>" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $user->email ?>" required><br><br>
        
        <input type="submit" value="Guardar cambios">
        
        <a href="listado.php">Volver a Listado</a>
    </form>
    </div>
</body>
</html>
