<?php
session_start();

if(isset($_SESSION['user'])) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png">
</head>
<body>
<form action="assets/signin.php" method="POST">
    <label for="login">Логин: </label>
    <input type="text" id="login" name="login" placeholder="Enter login">
    <label for="pass">Пароль: </label>
    <input type="password" id="pass" name="password" placeholder="Enter password">
    <button type="submit">Вход</button>
    <p>
        Ещё нет аккаунта? - <a href="register.php">Регистрация</a>
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p class='msg'>$_SESSION[message]</p>";
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>



