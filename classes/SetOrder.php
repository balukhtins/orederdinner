<?php

class SetOrder
{
	use ClickButton;
	
	public $env;

	public function __construct($env)
	{
		$this->env = $env;
	}


	//  если нет заказа записываем в БД 

	public function setOrder()
	{
		if (!$this->order($_GET['checkDay'])) 
		{
			//echo $this->selectDay($_GET['checkDay']);
			$query = "INSERT INTO `order` (`id_users`, `date`) " .
					"SELECT `id`, '".$this->selectDay($_GET['checkDay'])."' 
					FROM `Users` 
					WHERE `Users`.email = '".$_COOKIE['email']."'";

					mysqli_query($this->env['db'], $query) or die(mysqli_error($this->env['db']));
		}
	}
}