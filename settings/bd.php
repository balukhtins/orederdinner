<?php
// Подключаемся к БД
$user = 'root';
$password = '';
$db = 'dinner';
$host = 'localhost';
$port = 3306;
        
$link = mysqli_init();
$success = mysqli_real_connect(
	$link,
	$host,
	$user,
	$password,
	$db,
	$port
);

date_default_timezone_set("Europe/Kiev");
mysqli_query($link, "SET NAMES 'utf8'");

if( !$success) {
	echo 'Соединение с MySQL не установлено.';
	exit;
}
