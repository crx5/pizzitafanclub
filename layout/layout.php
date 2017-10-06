<!DOCTYPE html>
<html lang="es">
<head>

	<title> Plantilla </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=true">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="layout/styles/header.css">
	<link rel="stylesheet" href="layout/styles/slider.css">

		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>



		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







</head>
<body id="top">
<header>
<?php
require_once('header.php');
?>
</header>

<section id="seccionContenido">
	<div class="container">
<?php
			// carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
require_once('routing.php');
?>
</div>
</section>
<footer>
<?php
		include_once('footer.php');
?>
</footer>
</body>
</html>
