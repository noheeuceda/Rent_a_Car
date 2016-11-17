<?php
	
	include_once("class_gerente.php");

	class Gerente extends Persona{

		private $contraseña;

		public function __construct($nombre,
					$apellido,
					$numero_identidad,
					$tratamiento,
					$edad,
					$nacionalidad,
					$correo,
					$telefono,
					$contraseña){
			parent::($nombre,
					$apellido,
					$numero_identidad,
					$tratamiento,
					$edad,
					$nacionalidad,
					$correo,
					$telefono);
			$this->contraseña = $contraseña;
		}

		public function getContraseña(){
			return $this->contraseña;
		}
		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}
		public function toString(){
			return parent::toString() . ", Contraseña: " . $this->contraseña;
		}
	}
?>