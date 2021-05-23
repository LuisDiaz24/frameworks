
<div class="panel panel-primary col-md-8 col-md-offset-2">
	<div class="panel-heading">
		Eliminar Usuario
	</div>
	<div class="panel-body">
		
		<form action="index.php?controller=UsuarioController&action=eliminar" method="POST" class="form-horizontal">
		<label class="control-label">Escriba el nombre del usuario que desea borrar</label>
		<hr>
		<label class="control-label">Nombre</label>
		<input class="form-control" type="text" name="txNombre">
		
		<hr>
		<button class="btn btn-danger" type="submit"> Eliminar </button>
		</form>

		
	</div>
</div>