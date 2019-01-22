<?php
if($_GET[$arg]){
	setlocale(LC_ALL, 'ru-RU'); // Установка языка
	date_default_timezone_set("Europe/Moscow"); // и временной зоны
	// Переменные
	$file = "data.html"; // Имя файла даты
	$arg = "text"; // Название аргумента
	$string = date('[Y-m-d]-[H:i:s] ').$_GET[$arg]."<br>\n"; // Что будет записанно в дату
	// Основные функции
	file_put_contents("data.html", $string, FILE_APPEND | LOCK_EX); // Записываем строку в дату
	print_r(htmlspecialchars($_GET[$arg])); // Что было записанно в дату
} else {
	print("0x000A");
}
?>