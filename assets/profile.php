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
    <div id="successModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Авторизация прошла успешно</p>
        </div>
    </div>

    <img src="../<?= $_SESSION['user']['photo']; ?>" alt="photo">
    <h2><?= $_SESSION['user']['name']; ?></h2>
    <div><?= $_SESSION['user']['birthday']; ?></div>
    <a href="../assets/logout.php" class="logout">Выход</a>
</main>

<script src="../script.js"></script>
</body>
</html>


