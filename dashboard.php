<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: admin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <!-- Добавь свои CSS-файлы, если необходимо -->
</head>
<body>
    <h1>Привет, администратор!</h1>
    <p>Здесь ты можешь управлять своим сайтом.</p>
    <a href="logout.php">Выйти</a>
</body>
</html>
