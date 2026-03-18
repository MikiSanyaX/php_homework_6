<?php
session_start();
if (!isset($_SESSION['page3_count'])) {
    $_SESSION['page3_count'] = 0;
}
$_SESSION['page3_count']++;
if ($_SESSION['page3_count'] % 3 == 0) {
    header('Location: page4.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Страница 3</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Страница 3</h1>
    <p>Эта страница открыта <?= $_SESSION['page3_count'] ?> раз(а).</p>
    <p>После каждого третьего открытия вы будете перенаправлены на страницу 4.</p>
    <p><a href="page3.php">Обновить страницу</a></p>
    <p><a href="index.php">Вернуться на главную</a></p>
</body>
</html>
