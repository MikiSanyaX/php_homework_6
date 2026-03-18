<?php
session_start();
$count = $_SESSION['page3_count'] ?? 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Страница 4</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Страница 4</h1>
    <p>Страница 3 была открыта <?= $count ?> раз(а).</p>
    <p><a href="page3.php">Вернуться на страницу 3</a></p>
    <p><a href="index.php">На главную</a></p>
</body>
</html>
