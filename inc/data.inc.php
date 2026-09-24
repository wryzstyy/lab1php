<?php
setlocale(LC_ALL, "russian");
$day = date('d');
$mon = date('M');
$year = date('Y');
$hour = (int) date('H');
$welcome = "";

if ($hour >= 6 && $hour < 12) {
    $welcome = "Доброе утро ,";
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = "Добрый день ,";
} elseif ($hour >= 18 && $hour <= 23) {
    $welcome = "Добрый вечер";
} else {
    $welcome = "Доброй ночи";
}

$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'index.php?id=about'],
    ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
    ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
    ['link' => 'Калькулятор', 'href' => 'index.php?id=calc']
];