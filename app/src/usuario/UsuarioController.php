<?php
  
  include ('../../util/Config.php');
  include SERVER_ROOT.'app/src/usuario/accion/UsuarioUtil.php';
  
  class UsuarioController{
    var $clases = [];
    var $identificador = "";
    
    public function __construct($identificador){
      $this->identificador = $identificador;
    }
    
    public function obtenerClase(){
      //$clases = array(new Listar(), new Registrar());//agregar clases que implementan la interfaz
      $clases = UsuarioUtil::obtenerClasesAcciones();
      foreach($clases as $clase){
         if($clase->id == $this->identificador)
           return $clase;
      }      
    }
    
    public function accion(){
      return $this->obtenerClase()->accion();
    }    
  }

  $accion = $_POST["accion"];
  $controller = new UsuarioController($accion);  
  $controller->accion();
  
?>