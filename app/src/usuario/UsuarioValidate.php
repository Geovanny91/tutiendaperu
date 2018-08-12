<?php 

	class UsuarioValidate{

		public static function Campos($usuario){
			//var_dump($usuario->Usuario);
			if( !empty( $usuario->Usuario )
				&& !empty( $usuario->Password )
				&& !empty( $usuario->EmpresaId) ){
				return true;
			}
			return false;
		}

		public static function Id($usuarioId){
			if( !empty($usuarioId) 
				&& $usuarioId > 0 )
				return true;
		}

	}

 ?>