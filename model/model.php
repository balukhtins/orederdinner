<?php

include "view/view.php";
//include 'model/autorization.php';
require_once 'classes/autorization.php';
require_once 'classes/content.php';
require_once 'classes/SetOrder.php';
require_once 'classes/DelOrder.php';




// авторизация
$act = $_REQUEST['act'] ?? '';
$email = $_REQUEST['email'] ?? '';
$pass = $_REQUEST['password'] ?? '';

if ( $email && $pass) 
{  
	$autorization = new Autorization($env);

	if ($autorization->checkUser($email,$pass))
	{ 
		$env['email'] = $autorization->env['email'];
			
		setcookie('email', $env['email'], time()+360*24*7);
	}
}

elseif($_REQUEST['act'] == "Войти" && !$env['email'])
	{
		$data = [
				'login'			=> $_REQUEST['email'],
				'loginError'	=> $act == 'Войти',
				];

		$autorization_tpl = 'autorization';
	}



// конец авторизации




//Записываем заказ в БД
if ($_REQUEST['check'] == "Заказать")
{

	if($_COOKIE['email'])
	{
		$setOrder = new SetOrder($env);
		$setOrder->setOrder();
	}

	// если не авторизован вызываем авторизацию
	else
	{
		$autorization_tpl = 'autorization';
	}
}





//Удаляем заказ из БД
if ($_GET['check'] == "Отменить")
{
		$delOrder = new DelOrder($env);
		$delOrder->delOrder();
}






	
// выбор меню в зависимости от дня недели
$env['week'] = date('W'/*, mktime(0, 0, 0, 5, 27, 2019)*/);

if($env['week']%2 == 0)
	$env['weektype'] = 2;
else 
	$env['weektype'] = 1;

$env['date'] = date('w') +1;





//Запрос на регистрацию
if($_GET['sabmit'] == "Зареєструватися")
{
	extract($_GET);
					
	$query = "INSERT INTO `dinner`.`newUsers` (name, email, password, street, home, app, tell) VALUES ('$name', '$email', '$password', '$street', '$home', '$app', '$tell')";
	mysqli_query($env['db'], $query) or die(mysqli_error($env['db']));
}




view($autorization_tpl, $data);





