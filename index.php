<?php

	define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
	define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
	
	/*separate the parameter*/

	$params=explode('/',$_GET['u']);

	require(ROOT.'controllers/Portfolio.php');

	if ($params[0] !="") {

		$portfolio=ucfirst($params[0]);
		$action=isset($params[1])?$params[1]:'index';

		$id=$action;
		
	}