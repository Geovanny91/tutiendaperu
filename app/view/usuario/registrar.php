<?php 
		$modulo = "usuario";
		$accion = "Registrar";
		$controlador = $modulo.'/UsuarioController';

		$script = '/js/usuario.js';

		$content = '
		<div class="col-md-6">
		  <!-- general form elements -->
		  <div class="box box-primary">
		    <div class="box-header with-border">
		      <h3 class="box-title">Registrar Usuario</h3>
		    </div>
		    <!-- /.box-header -->
		    <!-- form start -->
		    <form id="frmGrabar'.ucwords($modulo).'" action="'.$controlador.'" role="form">
		    	<input type="hidden" id="id'.ucwords($modulo).'" name="id'.ucwords($modulo).'" value="">
				<input type="hidden" id="accion" name="accion" value="'. $accion.'">
		      <div class="box-body">
				
				<div class="form-group">
		            <label for="idEmpresa">Empresa</label>            
		            <input type="text" id="idEmpresa" name="idEmpresa" class="form-control" placeholder="Empresa">
		        </div>

		        <div class="form-group">
		            <label for="usuario">Usuario</label>            
		            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
		        </div>

		        <div class="form-group">
		          <label for="contrasena">Contraseña</label>
		          <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña">
		        </div>
		      </div>
		      <!-- /.box-body -->
		      <div class="box-footer">
		        <button type="submit" id="grabar'.ucwords($modulo).'" class="btn btn-primary">Guardar</button>
		      </div>
		      <div class="row">
		        <br>
		       	<div class="col-sm-12 mensaje ocultar">
		       			        		
		       	</div>
		      </div>
		    </form>
		  </div>
		  <!-- /.box -->
		  </div>';

		$path = ["content"=>$content, "script"=>$script];
		echo json_encode( $path );
?>
	