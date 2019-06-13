<?php

trait SelectDay{

	public $day;

	public function selectDay($date)
	{
		$d = date('w');
		
			for ($i=1, $f=7; $i <= 6; $i++, $f--) 
			{ 
					
				for ($j=1, $k=$i+1, $l=$f; $j <= 3; $j++, $k++, $l++) 
				{ 
									
					if ($d == $i && /*$_GET['checkDay']*/$date == $k ) 
							
					{
						$day = date('Y-m-d', strtotime("+ $j day"));	// дата заказа c понедельника по четверг
						
						break;
					}

					if ($d == $i && /*$_GET['checkDay']*/$date == $j ) 
					{
												
						$day = date('Y-m-d', strtotime("+ $l day"));	// дата заказа пятницу субботу
											
						break;
					}
					
					if ($d == 0 && /*$_GET['checkDay']*/$date == $j) 

						$day = date('Y-m-d', strtotime("+ $j day"));	// дата заказа если воскресенье
				}
			}
			return $day;
	}
}