<?php
$hostname = 'localhost';
$username = 'elgrenka';
$password = 'root';
$database = 'test_aeon_db';

$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die('Ошибка подключения к базе данных');
} else {
    echo "<script>console.log('Соединение прошло успешно')</script>";
}
