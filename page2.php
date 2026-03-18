<?php
$text = $_GET['text'] ?? '';
if ($text === '') {
    $text = 'Нет текста';
}
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="download.txt"');
header('Content-Length: ' . strlen($text));
echo $text;
exit;
