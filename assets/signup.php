<?php
session_start();
require_once 'connection.php';

$name = $_POST['name'];
//$photo = $_POST['photo'];
$birthday = $_POST['birthday'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
global $connect;

if ($password === $password_confirm) {
    $time = time();
    $path = "uploads/{$time}_{$_FILES['photo']['name']}";

    if (!move_uploaded_file($_FILES['photo']['tmp_name'], "../$path")) {
        $_SESSION['message'] = 'Ошибка загрузки файла';
        header('Location: register.php');
    }

    $password = sha1($password);
    $query = "
        INSERT INTO `users` (`id`, `username`, `password_hash`, `name`, `birthday`)
        VALUES (NULL, '$username', '$password', '$name', '$birthday');
    ";

    mysqli_query($connect, $query);
    $_SESSION['message'] = "Регистрация прошла успешно";
    header('Location: ../index.php');

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: register.php');
}



