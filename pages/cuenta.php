<script src="layout/scripts/jquery.min.js"></script>
<script src="scripts/hLinks.js"></script>
<?php
session_start();
if($_SESSION['user']){
echo "<script type='text/javascript'> hideLinks();</script>";
} else {
  echo "<script type='text/javascript'> showLinks();</script>";
}
?>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A TU CUENTA </h1>
	</div>
	<p></p>
	<form class="w3-container" action="controller/controllerSession.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
