<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: ../index.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<main class="main">
    <img src="<?= $_SESSION['user']['photo'] ?>" alt="photo">
    <h2><?= $_SESSION['user']['name']; ?></h2>
<!--    <a href="#">--><?php //= $_SESSION['user']['email'] ?><!--</a>-->
    <a href="../assets/logout.php" class="logout">Выход</a>
</main>
</body>
</html>


