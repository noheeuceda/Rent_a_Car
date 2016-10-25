<?php

	class TarjetaCredito{

		private $numeroTarjeta;
		private $compañia;
		private $nombreCliente;
		private $fechaExpiracion;
		private $codigo;

		public function __construct($numeroTarjeta,
					$compañia,
					$nombreCliente,
					$fechaExpiracion,
					$codigo){
			$this->numeroTarjeta = $numeroTarjeta;
			$this->compañia = $compañia;
			$this->nombreCliente = $nombreCliente;
			$this->fechaExpiracion = $fechaExpiracion;
			$this->codigo = $codigo;
		}
		public function getNumeroTarjeta(){
			return $this->numeroTarjeta;
		}
		public function setNumeroTarjeta($numeroTarjeta){
			$this->numeroTarjeta = $numeroTarjeta;
		}
		public function getCompañia(){
			return $this->compañia;
		}
		public function setCompañia($compañia){
			$this->compañia = $compañia;
		}
		public function getNombreCliente(){
			return $this->nombreCliente;
		}
		public function setNombreCliente($nombreCliente){
			$this->nombreCliente = $nombreCliente;
		}
		public function getFechaExpiracion(){
			return $this->fechaExpiracion;
		}
		public function setFechaExpiracion($fechaExpiracion){
			$this->fechaExpiracion = $fechaExpiracion;
		}
		public function getCodigo(){
			return $this->codigo;
		}
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		public function toString(){
			return "NumeroTarjeta: " . $this->numeroTarjeta . 
				" Compañia: " . $this->compañia . 
				" NombreCliente: " . $this->nombreCliente . 
				" FechaExpiracion: " . $this->fechaExpiracion . 
				" Codigo: " . $this->codigo;
		}
	}
?>