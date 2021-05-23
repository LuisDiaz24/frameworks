
<?php
/**
 * Crear el controlador de UsuarioController dentro de la carpeta controllers
 */
class UsuarioController {
	public function __construct()
	{
		require_once 'models/Usuario.php';
	}

	

	public function crear()	{
		require_once 'views/usuarios/crear.php';
	}

	public function mostrarTodos(){
		//require_once 'models/Usuario.php';
		$user = new Usuario();
		$resultUser=$user->MostrarTodos('usuarios');
		require_once 'views/usuarios/mostrar.php';
	}

	public function guardar(){
		//require_once 'models/Usuario.php';
		$user= new Usuario();
		$user->setNombre($_POST['txNombre']);
		$user->setApellido($_POST['txApellido']);
		$user->setEmail($_POST['txEmail']);
		$guardar = $user->Create(); 
		$resultUser=$user->MostrarTodos('usuarios');
		require_once 'views/usuarios/mostrar.php';
		
	}

	public function vistaEliminar(){
		require_once 'views/usuarios/eliminar.php';
		$user = new Usuario();
		$resultUser=$user->MostrarTodos('usuarios');
		require_once 'views/usuarios/mostrar.php';
		
	}
	public function vistaModificar(){
		//require_once 'models/Usuario.php'
		;require_once 'views/usuarios/modificar.php';

		$mostrar= new UsuarioController;
		$cargar=$mostrar->mostrarTodos();

	}

	public function eliminar(){
		//require_once 'models/Usuario.php';
		$user = new Usuario();
		$user->setNombre($_POST['txNombre']);
		$resultUser=$user->Delete();
		$mostrar= new UsuarioController;
		$cargar=$mostrar->mostrarTodos();
		require_once 'views/Alerta.php';
	}

	public function modificar(){
		//require_once 'models/Usuario.php';
		$user = new Usuario();
		$user->setNombre($_POST['txNombre']);
		$user->setNewNombre($_POST['txNewNombre']);
		$user->setApellido($_POST['txApellido']);
		$user->setEmail($_POST['txEmail']);		
		
		$modificar=$user->Modificar();
		require_once 'views/Alerta.php';
		$mostrar= new UsuarioController;
		$cargar=$mostrar->mostrarTodos();
	}
	
}
?>