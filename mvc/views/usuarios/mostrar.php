<div class="panel panel-primary col-md-8 col-md-offset-2">
	<div class="panel-heading">
			<label class="control-label">Lista de usuarios en la base de datos</label>
	</div>
		<hr>

	<table class="table table-hover">
		<tr>
			
			<td><strong>NOMBRE</strong></td>
			<td><strong>APELLIDO</strong></td>
			<td><strong>CORREO</strong></td>
		
		</tr>

		<?php

		while ($user = $resultUser->fetch_object()): ?> 
			<tr>
				
				<td> <?=$user->nombre?></td>
				<td> <?=$user->apellido?> </td>
				<td> <?=$user->email?> </td>
			</tr>
			<?php endwhile;	?>
	</table>
	
</div>