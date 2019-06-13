<?php
//include "model/model.php";

//echo $S;

//require_once 'W:\domains\kitchen\templates\\head.tpl';


define('TPL_PATH', 'templates\\');


function render ( $tpl_name, $data=[] ) {
	global $env;
	extract($data);
	
	$tpl_file = TPL_PATH. $tpl_name .'.tpl';
	
	return include $tpl_file;
}

function view ($autorization_tpl) {

	global $data;
	global $env;
	
	render('head');


	$content = new Content($env);
	$content->setDate();

	if ($autorization_tpl)
	{ 
		
		render($autorization_tpl, $data);
		
	}

	render('footer');
}



//require_once 'W:\domains\kitchen\templates\\footer.tpl';