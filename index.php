<?php

	$env = [];	// глобальный массив, содержащий параметры приложения

	// инициализация
	$env['email'] = $_COOKIE['email'] ?? '';

	// загрузка настроек
	require_once 'settings/bd.php';
	$env['db'] = $link;

	include "model/model.php";
?>


