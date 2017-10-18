<script src="layout/scripts/jquery.min.js"></script>
<script src="scripts/pizzaGen.js"></script>
<?php
  require_once('../db/conexion.php');
  require_once('../db/CrudPizza.php');
  require_once('../classes/Pizza.php');

  $crud = new CrudPizza();
  $array = $crud->listaPizzas();

for($i =0;$i<count($array);$i++){
  $nombre = $array[$i][0];
  $precio = $array[$i][1];
  $descripcion = $array[$i][2];
  $url = $array[$i][3];
  $cont = $cont++;

  echo "<script type='text/javascript'> generar('$nombre','$precio','$descripcion','$url','$i');</script>";

}







 ?>
<div id="cont-pizza" class="ui-view row" style="margin-top: 100px;" >

</div>
