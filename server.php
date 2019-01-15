<?php
setlocale(LC_ALL, 'ru-RU'); // Language
date_default_timezone_set("Europe/Moscow"); // Tinezone
$file = "data.html"; // Name file for data
$arg = "text"; // Arg in URL
$string = date('[Y-m-d]-[H:i:s] ').$_GET[$arg]."<br>\n"; // Convert string
if($_GET[$arg]){
	file_put_contents("data.html", $string, FILE_APPEND | LOCK_EX); // Put string with data in file
	print_r(htmlspecialchars($_GET[$arg])); // Print what put in data
} else {
	print("0x000A");
}
?>