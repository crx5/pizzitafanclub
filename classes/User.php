<?php

  class User{
     private $correo;
     private $telefono;
     private $password;
     private $id;

    function __construct(){}
     public function getCorreo(){
       return $this->correo;
       }

       public function getId(){

         return $this->id;
       }

       public function setId($id){
         $this->id = $id;
       }

      public function getTelefono(){
        return $this->telefono;
      }

      public function getPassword(){
        return $this->password;
      }

      public function setCorreo($correo){
        $this->correo = $correo;
      }

      public function setTelefono ($telefono){
        $this->telefono = $telefono;
      }

      public function setPassword($password){
        $this->password = $password;
      }
  }

 ?>
