<?php

	class Cliente extends Persona{

		private $tarjeta_credito;
		private $licencia;

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
			return "Tarjeta_credito: " . $this->tarjeta_credito . 
				" Licencia: " . $this->licencia;
		}
	}
?>