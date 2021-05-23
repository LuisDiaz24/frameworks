
<div class="panel panel-primary col-md-8 col-md-offset-2">
	<div class="panel-heading">
		Modificar Usuario
	</div>
	<div class="panel-body">
		
		<form action="index.php?controller=UsuarioController&action=modificar" method="POST" class="form-horizontal">
		<!--<label class="control-label">Seleccione el boton del usuario a modifica</label>-->
		
		<label class="control-label">Nombre del usuario a modificar</label>
		<input class="form-control" type="text" name="txNombre">
		<hr>
		<label class="control-label">Nuevo Nombre</label>
		<input class="form-control" type="text" name="txNewNombre">
		<label class="control-label">Nuevo Apellido</label>
		<input class="form-control" type="text" name="txApellido">
		<label class="control-label">Nuevo Email</label>
		<input class="form-control" type="text" name="txEmail">
		
		<hr>
		<button class="btn btn-warning" type="submit"> Modificar </button>
		</form>
	
        
        
   
	</div>
</div>


