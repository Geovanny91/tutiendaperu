<?php
  include ('../../../util/Config.php');
  include 'IUsuarioAccion.php';
  include SERVER_ROOT.'app/src/usuario/UsuarioBLL.php';

  class Listar implements IUsuarioAccion{
    public $id = "Listar";
    private $bl = null;    
    public function accion(){
      $bl = new UsuarioBLL();
      return $bl->listar();
    }
  }
  
  class Registrar implements IUsuarioAccion{
    public $id = "Registrar";
    private $bl = null;
    public function accion(){
      $bl = new UsuarioBLL();
      return $bl->registrar();
    }
  }

  class Modificar implements IUsuarioAccion{
    public $id = "Modificar";
    private $bl = null;
    public function accion(){
      return "respuesta del modificar";
    }
  }

  class Eliminar implements IUsuarioAccion{
    public $id = "Eliminar";
    private $bl = null;
    public function accion(){
      return "respuesta de eliminar";
    }
  }
//   $listar = new Listar();
//   print_r( $listar->accion() );

?>