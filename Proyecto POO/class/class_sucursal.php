<?php
	include_once("class_sucursal.php");
class Sucursal{

	private $nombre;
	private $codigoSucursal;
	private $direccion;
	//telefono

	public function __construct($nombre,
			$codigoSucursal,
			$direccion){
				$this->nombre = $nombre;
				$this->codigoSucursal = $codigoSucursal;
				$this->direccion = $direccion;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getCodigoSucursal(){
		return $this->codigoSucursal;
	}
	public function setCodigoSucursal($codigoSucursal){
		$this->codigoSucursal = $codigoSucursal;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	public function toString(){
		return "Nombre: " . $this->nombre .
		" CodigoSucursal: " . $this->codigoSucursal .
		" Direccion: " . $this->direccion;
	}
}
?>