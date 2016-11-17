<?php

	include_once("class_renta.php");
	class Renta{

		private $sucursal_entrega;
		private $sucursal_devolucion;
		private $fecha_entrega;
		private $fecha_devolucion;

		public function __construct($sucursal_entrega,
					$sucursal_devolucion,
					$fecha_entrega,
					$fecha_devolucion){
			$this->sucursal_entrega = $sucursal_entrega;
			$this->sucursal_devolucion = $sucursal_devolucion;
			$this->fecha_entrega = $fecha_entrega;
			$this->fecha_devolucion = $fecha_devolucion;
		}

		public function getSucursal_entrega(){
			return $this->sucursal_entrega;
		}
		public function setSucursal_entrega($sucursal_entrega){
			$this->sucursal_entrega = $sucursal_entrega;
		}
		public function getSucursal_devolucion(){
			return $this->sucursal_devolucion;
		}
		public function setSucursal_devolucion($sucursal_devolucion){
			$this->sucursal_devolucion = $sucursal_devolucion;
		}
		public function getFecha_entrega(){
			return $this->fecha_entrega;
		}
		public function setFecha_entrega($fecha_entrega){
			$this->fecha_entrega = $fecha_entrega;
		}
		public function getFecha_devolucion(){
			return $this->fecha_devolucion;
		}
		public function setFecha_devolucion($fecha_devolucion){
			$this->fecha_devolucion = $fecha_devolucion;
		}
		public function toString(){
			return "Sucursal_entrega: " . $this->sucursal_entrega . 
				" Sucursal_devolucion: " . $this->sucursal_devolucion . 
				" Fecha_entrega: " . $this->fecha_entrega . 
				" Fecha_devolucion: " . $this->fecha_devolucion;
		}
	}
?>