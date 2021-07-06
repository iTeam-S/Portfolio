<?php

	define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
	define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
	
	/*separate the parameter*/

	$params=explode('/',$_GET['u']);


	require(ROOT.'controllers/Portfolio.php');


	if ($params[0] !="") {

		$action=$params[0]?$params[0]:'index';
		$id=$action;
	}else{
		/*Data file manage the case*/
	}