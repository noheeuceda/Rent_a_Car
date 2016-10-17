<?php

	class Cajero{

		private $numeroEmpleado;

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