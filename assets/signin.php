<?php
session_start();
require_once 'connection.php';

$username = $_POST['username'];
$password = sha1($_POST['password']);
$query = "SELECT * FROM users WHERE username = '$username' AND password_hash = '$password'";
global $connect;

$check_user = mysqli_query($connect, $query);

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "photo" => $user['photo'],
        "birthday" => $user['birthday']
    ];

    header('Location: profile.php');

} else {
    $_SESSION['message'] = 'Юзернейм или пароль не верен';
    header('Location: ../index.php');
}
