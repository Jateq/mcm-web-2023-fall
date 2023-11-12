<?php
session_start();

// Проверяем, была ли установлена переменная обновления страницы в сессии
if (!isset($_SESSION['page_updates'])) {
    // Если нет, устанавливаем ее в 0 и выводим сообщение
    $_SESSION['page_updates'] = 0;
    $message = "You have not restarted page yet";
} else {
    // Если переменная уже установлена, увеличиваем счетчик
    $_SESSION['page_updates']++;
    $message = "You have restarted page {$_SESSION['page_updates']} times";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restart counter</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>

