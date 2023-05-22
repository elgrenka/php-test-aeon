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
    <title>Registration</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/style_register.css">
</head>
<body>
<form action="signup.php" method="POST" enctype="multipart/form-data">
    <label for="name">Имя</label>
    <input type="text" name="name" id="name" placeholder="Введите своё имя">

    <label for="username">Юзернейм</label>
    <input type="text" name="username" id="username" placeholder="Введите свой юзернейм">

    <label for="birthday">Дата рождения</label>
    <input type="date" name="birthday" id="birthday">

    <label for="photo">Фото</label>
    <input type="file" name="photo" id="photo">

    <label for="pass">Пароль</label>
    <input type="password" name="password" id="pass" placeholder="Введите пароль">

    <label for="pass_confirm">Подтверждение пароля</label>
    <input type="password" name="password_confirm" id="pass_confirm" placeholder="Подтвердите пароль">

    <button type="submit">Зарегистрироваться</button>
    <p>
        Уже есть аккаунт? - <a href="/">Авторизация</a>
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



