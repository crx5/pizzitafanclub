<?php

require_once('conexion.php');
require_once('../classes/User.php');

  class CrudUser{
    public function __cosntruct(){}

    public function insertar ($usuario){
      $db = Db::conectar();
      $insert=$db->prepare('INSERT INTO usuario values (NULL,:correo,:password,:telefono)');
      $insert->bindValue('correo',$usuario->getCorreo());
      $insert->bindValue('password',$usuario->getPassword());
      $insert->bindValue('telefono',$usuario->getTelefono());
      $insert->execute();

    }


    public function eliminar($correo){
      $db=Db::conectar();
      $eliminar = $db->prepare('DELETE FROM usuario WHERE correo=:correo');
      $eliminar->bindValue('correo',$correo);
      $eliminar->execute();

    }

    public function actualizar($usuario){
      $db = Db::conectar();
      $actualizar = $db->prepare('UPDATE usuario SET password=:password WHERE correo=:correo' );
      $actualizar->bindValue('password',$usuario->getPassword());
      $actualizar->bindValue('correo',$usuario->getCorreo());
      $actualizar->execute();
    }

    //validar datos Login
    public function obtenerUser($correo,$password){

      $db = Db::conectar();
      $select=$db->prepare("SELECT * FROM usuario WHERE correo=:correo");
      $select->bindValue('correo',$correo);
      $select->execute();

      $registro = $select->fetch();
    //  var_dump($registro);
      $user = new User();
      //verifica si clave es correcta

      if(strcmp($password, $registro['password'])==0){
        //si es correcta asigna valores que trae de la bd

        $user->setCorreo($registro['correo']);
        $user->setPassword($registro['password']);
        $user->setTelefono($registro['telefono']);
        $user->setId($registro['id']);

      }
      return $user;
    }

    //verificar si existe user
    public function buscarUser($correo){
      $db = Db::conectar();
      $select = $db->prepare('SELECT * FROM usuario WHERE correo=:correo');
      $select->bindValue('corrreo',$correo);
      $select->execute();
      $registro=$select->fetch();
      if($registro['id']!=NULL){
        $usado = false;
      }else{
        $usado= true;
      }
      return $usado;

    }




  }

 ?>
