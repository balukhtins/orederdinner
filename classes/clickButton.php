<?php

require_once 'classes/selectDay.php';

trait ClickButton{
	use SelectDay;
	
	function order($date)
	{
		$query = "SELECT `order`.`id_users`, `order`.`date`
					FROM `order`
					INNER JOIN `users`
					ON `users`.`id` = `order`.`id_users`
					WHERE `users`.`email` = '".$_COOKIE['email']."'
					AND order.date ='".$this->selectDay($date)."'";

			
		$result = mysqli_query($this->env['db'], $query) or die(mysqli_error($this->env['db']));
		
		if (mysqli_fetch_assoc($result))
			return true;
		
		else 
			return false;
	}
}