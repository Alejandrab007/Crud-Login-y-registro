<?php
require_once 'db.php';

if (isset($_GET['id'])) {
    
    $stmt = $mysqli->prepare('DELETE FROM users WHERE id = ?');
    $stmt->bind_param('i', $_GET['id']);
    $stmt->execute();
    header('Location: listado.php');
    exit();
}
?>
