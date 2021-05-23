<!DOCTYPE html>
<html>
<head>
	<title>Pagina con MVC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

	<link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap\js\bootstrap.min.js">
	<link rel="stylesheet" href="bootstrap\js\bootstrap.js">
</head>
<body>

	<h1>Sitio web con MVC de Luis Enrique Diaz</h1>
	<div class="container">

		<ul class="nav nav-tabs">
			<li class="active"><a href="index.php?controller=UsuarioController&action=mostrarTodos">Home</a></li>
			<li><a href="index.php?controller=UsuarioController&action=crear">Guardar</a></li>
			<li><a href="index.php?controller=UsuarioController&action=vistaEliminar">Eliminar</a></li>
			<li><a href="index.php?controller=UsuarioController&action=vistaModificar">Modificar</a></li>
		</ul>

	</div>

<?php

	require_once 'controllers/UsuarioController.php';

	if(isset($_GET['controller'])) {
		$nombreControlador = $_GET['controller'];
		$controlador = new $nombreControlador();
		if (isset($_GET['action'])) {
			$action = $_GET['action'];
			$controlador->$action();
		}
	}

?>
</body>
</html>
