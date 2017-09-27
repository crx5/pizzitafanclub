<?php
error_reporting(E_ALL ^ E_NOTICE);

if ($_GET['menu']=='login') {
		require_once('pages/login.php');
	} else if ($_GET['menu']=='registro') {
		require_once('pages/registro.php');
	} else {

		require_once('main.php');
	}

 ?>
