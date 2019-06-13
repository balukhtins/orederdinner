<?php

class DelOrder
{
	use ClickButton;
	
	public $env;

	public function __construct($env)
	{
		$this->env = $env;
	}


	//  если есть заказ удаляем из БД 

	public function delOrder()
	{
		if ($this->order($_GET['dellCheckDay'])) 
		{
			$query = "DELETE `order` 
					FROM `order`, `Users`
					WHERE `Users`.`id` = `order`.`id_users`
					AND `Users`.email = '".$_COOKIE['email']."'
					AND `order`.`date` = '".$this->selectDay($_GET['dellCheckDay'])."'";
					
					mysqli_query($this->env['db'], $query) or die(mysqli_error($this->env['db']));
		}
	}

}