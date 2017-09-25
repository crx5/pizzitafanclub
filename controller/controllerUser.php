<?php
require_once('../db/crudUser.php');
require_once('../classes/User.php');

$crud = new CrudUser();
$user = new User();

  if(isset($_POST['insertar'])){
      $user->setCorreo($_POST['correo']);
      $user->setPassword($_POST['password']);
      $user->setTelefono($_POST['telefono']);
      $crud->insertar($user);
      header('Location: ../index.php');

  }else if (isset($_POST['actualizar'])){
    $user->setPassword($_POST['password']);
    $user->setCorreo($_POST['correo']);
    $crud->actualizar($user);
    header('Location: ../index.php');

  } else if (isset($_POST['eliminar'])){
    $crud->eliminar($_POST['correo']);
    header('Location: ../index.php');

  }



 ?>
