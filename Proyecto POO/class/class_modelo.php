<?php
	include_once("class_modelo.php");
	class Modelo{

		private $nombreModelo;
		private $marca;

		public function __construct($nombreModelo,
					$marca){
			$this->nombreModelo = $nombreModelo;
			$this->marca = $marca;
		}
		public function getNombreModelo(){
			return $this->nombreModelo;
		}
		public function setNombreModelo($nombreModelo){
			$this->nombreModelo = $nombreModelo;
		}
		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($marca){
			$this->marca = $marca;
		}
		public function toString(){
			return "NombreModelo: " . $this->nombreModelo . 
				" Marca: " . $this->marca->toString();
		}
	}
?>