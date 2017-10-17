<?php

  class Pizza{

    private $nombre;
    private $precio;
    private $descripcion;
    private $id;
    private $url;
    private $sku;

    function __construct(){}

    public function getNombre(){
      return $this->nombre;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;

    }

    public function getPrecio(){
      return $this->precio;
    }

    public function setPrecio($precio){
      $this->precio = $precio;
    }

    public function getDescripcion(){
      return $this->descripcion;
    }

    public function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
    }

    public function getUrl(){
      return $this->url;
    }

    public function setUrl($url){
      $this->url = $url;
    }

    public function getSku(){
        return $this->sku;
    }

    public function setSku($sku){
      $this->sku = $sku;
    }

    public function getId(){
      return $this->id;
    }


  }

 ?>
