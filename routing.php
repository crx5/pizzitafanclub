<?php
error_reporting(E_ALL ^ E_NOTICE);

if ($_GET['menu']=='login') {
		require_once('pages/login.php');
	} else if ($_GET['menu']=='mostrar') {
		require_once('Clientes/mostrar.php');
	} else {

		require_once('main.php');
	}

 ?>
