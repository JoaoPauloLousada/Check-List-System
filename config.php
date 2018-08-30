<?php
require 'environment.php';
define ("BASE_URL", "http://localhost/spindola/");

global $config;

$config = array();
if(ENVIRONMENT == 'development'){
	$config['dbname'] = 'spindola';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	$config['dbname'] = '';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}



