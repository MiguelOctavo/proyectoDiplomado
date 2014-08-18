<?php
	require 'Slim/Slim.php';
	\Slim\Slim::registerAutoloader();

	//With custom settings
	$app = new \Slim\Slim(array(
	    'log.enable' => true,
	    'log.path' => './logs',
	    'log.level' => 4
	));

	$app->get('/', function() use ($app){
		require_once 'lib/mysql.php';
		$db = connect_db();
	});
	
	$app->run();
?>