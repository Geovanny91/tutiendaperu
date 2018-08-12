<?php 

	/*include 'modals/modificar.php';
	include 'modals/eliminar.php';*/

	$script = "/js/usuario.js";

	$content = '	
		<div class="col-xs-12">
	        <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Lista de Usuarios</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
					<table id="Dt_Usuario" class="table table-striped">
						<thead>
							<th></th>
							<th>Id</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Estado</th>							
						</thead>
					</table>
				</div>
			</div>
		</div>';//.$modalModificar.$modalEliminar;

	$path = ["content"=>$content, "script"=>$script];
	echo json_encode( $path );



/*$modulo = 'usuario';

echo "<div id='dibujar'></div>
      <script id='hola' type='text/x-handlebars-template'>
        {{#each data}}
          <div>Usuario: {{USUARIO}}</div>
          <div>Contraseña: {{CONTRASENA}}</div>
          <hr>
        {{/each}}
      </script>";
echo "<div id='url' ></div>";
echo "<script src='../app/view/$modulo/js/$modulo.js'></script>";*/

?>