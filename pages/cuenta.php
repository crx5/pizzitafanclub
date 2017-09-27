<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: ../index.php');
	}
?>



<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A TU CUENTA </h1>
	</div>
	<p></p>
	<form class="w3-container" action="../controller/controllerSession.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
