<!DOCTYPE html>
<html lang="es">
<head>

	<title> Plantilla </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- LIBRERIAS BOOTSTRAP-->

	<!-- Latest compiled and minified CSS -->


	<!-- jQuery library -->


	<!-- Latest compiled JavaScript -->

</head>
<body id="top">
<header>
	<?php
		require_once('header.php');
	?>
</header>

<section>
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
