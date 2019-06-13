<?php
require_once 'EditNewUsers.php';

	$EditNewUser = new EditNewUsers($link); 

	if (isset($_GET['delNewUser']))//удаление нового пользователя
		$EditNewUser->delUser('newUsers' ,$_GET['delNewUser']);

	if (isset($_GET['editNewUser'])) //добавление нового пользователя
		$EditNewUser->editNewUser();

	if (isset($_GET['delUser'])) //удаление пользователя из таблицы  users
		$EditNewUser->delUser('Users', $_GET['delUser']);
		//удаление улицы
		//удаление дома
		//удалене аппартаментов

	if (isset($_GET['editBlackList'])) //добавляем пользователя в поле черный список
		$EditNewUser->setBlackList('users', "`blacklist` = 'ДА'", $_GET['editBlackList']);

	if (isset($_GET['delBlackList'])) // удаляем пользователя из черного списка
		$EditNewUser->setBlackList('users',"`blacklist` = ''", $_GET['delBlackList']);