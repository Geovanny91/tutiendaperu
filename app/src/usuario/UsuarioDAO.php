<?php

	include ('../../util/Config.php');
	include SERVER_ROOT.'app/util/ICrud.php';
	include SERVER_ROOT.'app/util/Conexion.php';
	//include SERVER_ROOT.'app/src/usuario/Usuario.php';

  	class UsuarioDAO implements ICrud{
	    private $conexion = null;
	    
	    public function listar(){
	      	$conexion = new Conexion();
			try {
				$cnn = $conexion->getConexion();
				$sql = "SELECT * FROM USUARIO;";
				$statement=$cnn->prepare($sql);
				$statement->execute();
				$data["data"] = [];//arreglo vacio
				while($resultado = $statement->fetch(PDO::FETCH_ASSOC)){
					$data["data"][] = $resultado;
				}
				echo json_encode($data);
			}catch (Throwable $e) {
				return $e->getMessage();
			}finally{
				$statement->closeCursor();
				$conexion = null;
			}
	    }
	    
		public function registrar($objeto){
	      echo "Datos guardados correctamente.";
	    }
	    
		public function modificar($objeto){
	      echo "Datos actualizados correctamente.";
	    }
	    
		public function eliminar($id){
	      echo "eliminar";
	    }    
  	}

?>