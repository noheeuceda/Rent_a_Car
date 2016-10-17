<?php
	include_once("class_marca.php");
	class Marca{

		private $nombreMarca;
		private $año;

		public function __construct($nombreMarca,
					$año){
			$this->nombreMarca = $nombreMarca;
			$this->año = $año;
		}
		public function getNombreMarca(){
			return $this->nombreMarca;
		}
		public function setNombreMarca($nombreMarca){
			$this->nombreMarca = $nombreMarca;
		}
		public function getAño(){
			return $this->año;
		}
		public function setAño($año){
			$this->año = $año;
		}
		public function toString(){
			return "NombreMarca: " . $this->nombreMarca . 
				" Año: " . $this->año;
		}
	}
?>