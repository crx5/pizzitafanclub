<?php

session_start();
if(isset($_SESSION['user'])){
header('Location: index.php?menu=cuenta');
}
?>

<div class="pen-title">
  <h2></h2>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">

  </div>
  <div class="form">

    <form action="controller/controllerSession.php" method="post">
      <input type="text" placeholder="Usuario" name="user"/>
      <input type="password" placeholder="Contraseña" name="password"/>
      <button name="entrar">Inicar Sesion</button>
    </form>
  </div>

  <div class="cta"><a href="#">Olvido su contraseña?</a></div>
</div>
