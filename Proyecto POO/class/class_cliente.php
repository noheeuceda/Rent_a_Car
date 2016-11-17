<?php

	include_once("class_cliente.php");

	class Cliente extends Persona{

		private $tarjeta_credito;
		private $licencia;

		public function __construct($nombre,
					$apellido,
					$numero_identidad,
					$tratamiento,
					$edad,
					$nacionalidad,
					$correo,
					$telefono,
					$tarjeta_credito,
					$licencia){
			parent::__construct($nombre,
					$apellido,
					$numero_identidad,
					$tratamiento,
					$edad,
					$nacionalidad,
					$correo,
					$telefono)
			$this->tarjeta_credito = $tarjeta_credito;
			$this->licencia = $licencia;
		}

		public function getTarjeta_credito(){
			return $this->tarjeta_credito;
		}
		public function setTarjeta_credito($tarjeta_credito){
			$this->tarjeta_credito = $tarjeta_credito;
		}
		public function getLicencia(){
			return $this->licencia;
		}
		public function setLicencia($licencia){
			$this->licencia = $licencia;
		}
		public function toString(){
			return parent::toString() .", Tarjeta_credito: " . $this->tarjeta_credito . 
				" Licencia: " . $this->licencia;
		}
	}
?>