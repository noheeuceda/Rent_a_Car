<?php
	
	include_once("class_administrador.php");

	class Administrador extends Persona{

		private $numeroEmpleado;
		private $contraseña;

		public function __construct($nombre,
					$apellido,
					$numero_identidad,
					$tratamiento,
					$edad,
					$nacionalidad,
					$correo,
					$telefono,
					$contraseña,
					$numero_empleado){
			parent::__construct($nombre,
					$apellido,
					$numero_identidad,
					$tratamiento,
					$edad,
					$nacionalidad,
					$correo,
					$telefono);
			$this->contraseña = $contraseña;
			$this->numero_empleado = $numero_empleado;
		}

		public function getNumeroEmpleado(){
			return $this->numeroEmpleado;
		}
		public function setNumeroEmpleado($numeroEmpleado){
			$this->numeroEmpleado = $numeroEmpleado;
		}
		public function getContraseña(){
			return $this->contraseña;
		}
		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}
		public function toString(){
			return parent::toString() . ", NumeroEmpleado: " . $this->numeroEmpleado . 
				" Contraseña: " . $this->contraseña;
		}
	}
?>