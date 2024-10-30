<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $iniFile = parse_ini_file('danniye.ini', true);
    $username = $iniFile['danniye']['login'];
    $passwd = $iniFile['danniye']['password'];

    if ($login === $username && password_verify($password, $passwd)) {
        $_SESSION['logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = 'Неправильный логин или пароль.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <!-- Добавь свои CSS-файлы, если необходимо -->
</head>
<body>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="login">Логин:</label>
        <input type="text" name="login" id="login"><br><br>
        
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password"><br><br>

        <button type="submit">Войти</button>
    </form>
</body>
</html>
