<?php
	session_start();
	
	require_once 'Controller/AppController.php';
			
	$app = new Application();
	$app->dispatch();
?>