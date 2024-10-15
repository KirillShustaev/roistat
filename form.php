<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$logFile = 'feedback.log';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $tel = trim($_POST['tel'] ?? '');

    $logEntry = " " . date('Y-m-d H:i:s') . " | Имя: $name | Компания: $company | Телефон: $tel";

    if (file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX) === false) {
        die("Ошибка записи в файл.");
    }

    echo "Спасибо за ваше сообщение!";
} else {
    echo "Ошибка: форма не была отправлена.";
}
?>

