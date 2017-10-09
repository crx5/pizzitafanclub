<script src="layout/scripts/jquery.min.js"></script>
<script src="scripts/hLinks.js"></script>
<?php
session_start();
if($_SESSION['user']){
echo "<script type='text/javascript'> hideLinks();</script>";
echo "hay sesion iniciada";
} else  {

//  echo "<script type='text/javascript'> showLinks();</script>";
}
?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
if ($_GET['menu']=='login') {
		require_once('pages/login.php');
	} else if ($_GET['menu']=='registro') {
		require_once('pages/registro.php');
	} elseif ($_GET['menu']=='cuenta') {
		require_once('pages/cuenta.php');
	}else {

		require_once('pages/main.php');
		require_once('pages/cards.php');
	}
?>
