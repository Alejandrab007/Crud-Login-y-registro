<?php
session_start();
require_once 'db.php';


if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}

$stmt = $mysqli->prepare('SELECT id, username, email FROM users');
$stmt->execute();
$result = $stmt->get_result();

$users = [];

while ($user = $result->fetch_object()){
    $users[] = $user; 
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
      <div class="container">
        <a href="register.html" class="link">Registrar nuevo usuario</a>
    <div>
    <a href="cerrarsesion.php" class="link">Cerrar sesión</a>
    </div>
    <h2>Listado de usuarios registrados</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->username?></td>
                <td><?= $user->email?></td>
                <td>
    <a href="edit.php?id=<?= $user->id ?>" class="edit">Editar</a>
    <a href="delete.php?id=<?= $user->id ?>" class="delete" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
</td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>
