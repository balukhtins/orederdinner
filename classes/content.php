<?php

require_once 'classes/clickButton.php';


class Content
{
	use ClickButton;

	public $date;
	private $week;
	private $weektype;
	public $env;
	private $button;
	public $getDay = [1=>'Понедельник',2=>'Вторник',3=>'Среда',4=>'Четверг',5=>'Пятница'];


	public function __construct($env)
	{
		$this->env['date'] = $date;
		$this->env['week'] = $week;
		$this->env['weektype'] = $weektype;
		$this->env = $env;
	}


	function setDate()
	{


		for ($i=1; $i <= 3; $i++, $this->date++) 
		{ 
			if ($this->date < 1 || $this->date > 5) 
			{
					$this->date = 1;

					if($this->week%2 == 0)
						$this->weektype = 1;
					else 
						$this->weektype = 2;
			}

			$query = "SELECT info, f 
			FROM menu 
			WHERE weektype = ".$this->weektype." 
			AND daynumber = " .$this->date;

			$result = mysqli_query($this->env['db'], $query) or die(mysqli_error($this->env['db']));

			$info = mysqli_fetch_assoc($result);

			//print_r($this->order()) ;	
					

			if ($this->order($this->date))
				include 'templates/buttonCancel.tpl';
			else 
				include 'templates/buttonOrder.tpl';;

			$buttonDay = $this->getDay[$this->date];

			include 'W:\domains\kitchen\templates\content.tpl';

				
		}
	}

}