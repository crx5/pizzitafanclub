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
  $user->setCorreo($_POST['correo']);
//  if(strcmp($_POST['password'],$_POST['confirm'])==0){

  $user->setPassword($_POST['password']);
//}else {

//}

  $user->setTelefono($_POST['telefono']);
    if($crud->buscarUser($_POST['correo'])){
      //if($user->getTipo == 2){
        $crud->insertar($user);
        header('Location: ../#!/cuenta');
      //}else{
        //$crud->insertarAdmin($user);



    }else {
      header('Location: ../pages/error.php?mensaje=Su correo ya esta registrado');
    }

}else if (isset($_POST['entrar'])){//verifica si la variable entrar esta definidad

  $user=$crud->obtenerUser($_POST['user'],$_POST['password']);
  // si el id no es nulo entonces encontro algo
    if($user->getId()!=null){
        $_SESSION['user']=$user;
          if($user->getTipo ==2){
              header('Location: ../#!/cuenta');
          }else{
                header('Location: ../#!/admin');
          }

        //require_once('pages/cuenta.php');


    }else{

    //  header('Location: ../pages/error.php?mensaje=nombre de usuario o contraseña incorrecta');
    }
  }else if(isset($_POST['salir'])){
    unset($_SESSION['user']);// destruir session
    header('Location: ../index.php');

  }

?>
