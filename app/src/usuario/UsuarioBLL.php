<?php
	//include 'Usuario.php';
	include 'UsuarioDAO.php';
	include 'UsuarioValidate.php';  

	class UsuarioBLL{
		private $dao = null;

		public function listar(){
		  $dao = new UsuarioDAO();
		  return $dao->listar();
		}

		public function registrar(){
			$objUsuario = json_decode($_POST["usuario"]);

			if ( UsuarioValidate::Campos( $objUsuario ) ){
				$dao = new UsuarioDAO();
				return $dao->registrar( $objUsuario );
			}
			else 
				echo "Llenar los campos solicitados.";      
		}

		public function modificar(){
			$objUsuario = json_decode($_POST["usuario"]);

			if ( UsuarioValidate::Id( $objUsuario->Id ) ){
				$dao = new UsuarioDAO();

				if ( UsuarioValidate::Campos( $objUsuario ) )
					return $dao->modificar( $objUsuario );
				else 
				  	echo "Llenar los campos campos.";
			}
			else echo "No se encuentra el ID, para modificar los datos.";
		}

	}

