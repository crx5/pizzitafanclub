<?php

require_once('../classes/User.php');
require_once('../db/CrudUser.php');
require_once('../db/conexion.php');


//inicio de Session
session_start();


$user = new User();
$crud = new CrudUser();

//verifica si la variable registrase esta definidad
// se da que esta definida cuando el usuario se loguea, ya que le envia la peticion

if(isset($_POST['registrarse'])){
  $user->setNombre($_POST['user']);
  $user->setPassword($_POST['password']);
    if($crud->buscarUser($_POST['user'])){
      $crud->insertar($user);
      header('Location: ../index.php');
    }else {
      header('Location: error.php?mensaje=el nombre de usuario ya existe');
    }

}else if (isset($_POST['entrar'])){//verifica si la variable entrar esta definidad

  $user=$crud->obtenerUser($_POST['user'],$_POST['password']);
  // si el id no es nulo entonces encontro algo
    if($user->getId()!=null){
        $_SESSION['user']=$user;
        header('Location: ../pages/cuenta.php');
    }else{

    //  header('Location: ../pages/error.php?mensaje=nombre de usuario o contraseña incorrecta');
    }
  }else if(isset($_POST['salir'])){
    //logout
    header('Location: ../index.php');
    unset($_SESSION['user']);// destruir session
  }















 ?>
