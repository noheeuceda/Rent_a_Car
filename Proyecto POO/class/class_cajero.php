<?php

	include_once("class_cajero");

	class Cajero{

		private $numeroEmpleado;
		public function __construct($numero_empleado){
			$this->numero_empleado = $numero_empleado;
		}

		public function getNumeroEmpleado(){
			return $this->numeroEmpleado;
		}
		public function setNumeroEmpleado($numeroEmpleado){
			$this->numeroEmpleado = $numeroEmpleado;
		}
		public function toString(){
			return "NumeroEmpleado: " . $this->numeroEmpleado;
		}
	}
?>