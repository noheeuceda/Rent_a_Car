<?php

	class Automovil{

		private $modelo;
		private $extras;
		private $kilometraje;
		private $combustible;
		private $estado;
		private $placa;
		private $tipo;

		public function __construct($modelo,
					$extras,
					$kilometraje,
					$combustible,
					$estado,
					$placa,
					$tipo){
			$this->modelo = $modelo;
			$this->extras = $extras;
			$this->kilometraje = $kilometraje;
			$this->combustible = $combustible;
			$this->estado = $estado;
			$this->placa = $placa;
			$this->tipo = $tipo;

		}
		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}
		public function getExtras(){
			return $this->extras;
		}
		public function setExtras($extras){
			$this->extras = $extras;
		}
		public function getKilometraje(){
			return $this->kilometraje;
		}
		public function setKilometraje($kilometraje){
			$this->kilometraje = $kilometraje;
		}
		public function getCombustible(){
			return $this->combustible;
		}
		public function setCombustible($combustible){
			$this->combustible = $combustible;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getPlaca(){
			return $this->placa;
		}
		public function setPlaca($placa){
			$this->placa = $placa;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function toString(){
			return "Modelo: " . $this->modelo . 
				" Extras: " . $this->extras . 
				" Kilometraje: " . $this->kilometraje . 
				" Combustible: " . $this->combustible . 
				" Estado: " . $this->estado . 
				" Placa: " . $this->placa;
				" Tipo: " . $this->tipo;
		}
	}
?>