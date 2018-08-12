<?php
  include 'Accion.php';

  class UsuarioUtil{
    private static function agregarClasesAcciones(){
      $clases = array( new Listar()
                      ,new Registrar()
                      ,new Modificar()
                     );
      return $clases;
    }    
    
    private static function almacenClasesAcciones(){
      return self::agregarClasesAcciones();
    }
    
    public static function obtenerClasesAcciones(){
      return self::almacenClasesAcciones();
    }
    
  }
?>