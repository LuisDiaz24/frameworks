<?php
/**
 *  Crear el modelo del Usuario
 */
require 'ModeloBase.php';
class Usuario extends ModeloBase
{
	public $nombre,$apellido,$email,$newNombre;
	
	public function __construct()
	{
		parent::__construct();
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($apellido){
		$this->apellido=$apellido;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setEmail($email){
		$this->email=$email;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setNewNombre($newNombre){
		$this->newNombre=$newNombre;
	}

	public function getNewNombre(){
		return $this->newNombre;
	}

	public function Create(){
		$sql = "INSERT INTO usuarios(nombre,apellido,email) VALUES
			('{$this->nombre}','{$this->apellido}','{$this->email}')";

		$guardado = $this->db->query($sql);

		return $guardado;
	}

	public function Delete(){
		
			$sql = "DELETE FROM usuarios WHERE nombre ='{$this->nombre}' ";
			$eliminado = $this->db->query($sql);
			return $eliminado;
	}

	public function Modificar(){
		
			$sql = "UPDATE usuarios SET nombre = '{$this->newNombre}',apellido='{$this->apellido}',email='{$this->email}' WHERE nombre ='{$this->nombre}' ";
			$modificado = $this->db->query($sql);
			return $modificado;
	}
}
?>