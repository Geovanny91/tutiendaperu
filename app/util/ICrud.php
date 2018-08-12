<?php 
	interface ICrud{
		public function listar();
		public function registrar($objeto);
		public function modificar($objeto);
		public function eliminar($id);
	}

?>