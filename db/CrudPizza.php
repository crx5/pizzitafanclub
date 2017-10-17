<?php

  require_once('conexion.php');
  require_once('../classes/Pizza.php');

    class CrudPizza{
      public function __construct(){}

      public function listaPizzas(){
        $db= Db::conectar();
        $lista = $db->prepare('SELECT nombre,precio,descripcion,url FROM pizzas');
        $lista->execute();
        $res = $lista->fetchAll();
        return $res;
      }

      public function insertar ($pizza){
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO pizzas values(NULL,:nombre,:precio,:descripcion,url)');
        $insert->bindValue('nombre',$pizza->getNombre());
        $insert->bindValue('precio',$pizza->getPrecio());
        $insert->bindValue('descripcion',$pizza->getDescripcion());
        $insert->bindValue('url',$pizza->getUrl());
        $insert->execute();
      }

      public function eliminar($nombre){
        $db=Db::conectar();
        $elminar = $db->prepare('DELETE FROM pizzas WHERE nombre=:nombre');
        $eliminar->bindValue('nombre',$nombre);
        $elminar->execute();
      }

      public function actualizar($pizza){
        $db=Db::conectar();
        $actualizar = $db->prepare('UPDATE pizza SET nombre=:nombre,precio=:precio,descripcion=:descripcion,url=:url');
        $actualizar->bindValue('nombre',$pizza->getNombre());
        $actualizar->bindValue('precio',$pizza->getPrecio());
        $actualizar->bindValue('descripcion',$pizza->getDescripcion());
        $actualizar->bindValue('url',$pizza->getUrl());
      }
    }




 ?>
