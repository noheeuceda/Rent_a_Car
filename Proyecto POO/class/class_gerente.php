<?php

	class Gerente{

		private $contraseña;

		public function getContraseña(){
			return $this->contraseña;
		}
		public function setContraseña($contraseña){
			$this->contraseña = $contraseña;
		}
		public function toString(){
			return "Contraseña: " . $this->contraseña;
		}
	}
?>