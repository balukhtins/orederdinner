<?php

class Autorization
{

	public $env;

	public function __construct($env)
	{
		$this->env = $env;
	}


	function checkUser ($email, $pass ) 
	{
		
		$query = 
		mysqli_query( $this->env['db'], 
			"SELECT `email`, `password` 
			FROM `users` 
			WHERE `email` = '". $email. "' and password = '". $pass."'" );


		if ( mysqli_affected_rows($this->env['db']) == 0)
			$this->env['email'] = 0;
		
		else 
		{
			$result = mysqli_fetch_assoc($query);
			$this->env['email'] = $result['email'];
		};
		
		return $this->env['email'];
	}
}
