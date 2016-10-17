<?php

	class administrador{

		private $numeroEmpleado;
		private $contraseña;

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
			return "NumeroEmpleado: " . $this->numeroEmpleado . 
				" Contraseña: " . $this->contraseña;
		}
	}
?>