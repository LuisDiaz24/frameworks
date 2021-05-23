<div class="panel panel-primary col-md-8 col-md-offset-2">
	<div class="panel-heading">
		Crear Usuario
	</div>
	<div class="panel-body">
		
		<form action="index.php?controller=UsuarioController&action=guardar" method="POST" class="form-horizontal">
		<label class="control-label">Nombre</label>
		<input class="form-control" type="text" name="txNombre">
		<label class="control-label">Apellido</label>
		<input class="form-control" type="text" name="txApellido">
		<label class="control-label">Email</label>
		<input class="form-control" type="text" name="txEmail">
		<hr>

		<button class="btn btn-success" type="submit" name="btn-guardar" value="index.php?controller=UsuarioController&action=guardar"> Guardar </button>
		</form>
		<hr>
		<div class="panel-body">
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
		<form action="index.php?controller=UsuarioController&action=vistaModificar" method="POST" >
		<button class="btn btn-warning" type="submit" name="btnModificar"value="index.php?controller=UsuarioController&action=vistaModificar"> Modificar </button>
		</form>
		<form action="index.php?controller=UsuarioController&action=vistaEliminar" method="POST" >
		<button class="btn btn-danger" type="submit" name="btnEliminar" value="index.php?controller=UsuarioController&action=vistaEliminar"> Eliminar </button></form>
</div></div>

	</div>
</div>

