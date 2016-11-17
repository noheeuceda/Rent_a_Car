<?php

	class Tipo{

		private $capacidad;
		private $estilo;

		public function __construct($capacidad,
					$estilo){
			$this->capacidad = $capacidad;
			$this->estilo = $estilo;
		}
		public function getCapacidad(){
			return $this->capacidad;
		}
		public function setCapacidad($capacidad){
			$this->capacidad = $capacidad;
		}
		public function getEstilo(){
			return $this->estilo;
		}
		public function setEstilo($estilo){
			$this->estilo = $estilo;
		}
		public function toString(){
			return "Capacidad: " . $this->capacidad . 
				" Estilo: " . $this->estilo;
		}
	}
?>