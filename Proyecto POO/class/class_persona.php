<?php

	abstract class Persona{

		protected $nombre;
		protected $apellido;
		protected $numero_identidad;
		protected $tratamiento;
		protected $edad;
		protected $nacionalidad;
		protected $correo;
		protected $telefono;

		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getNumero_identidad(){
			return $this->numero_identidad;
		}
		public function setNumero_identidad($numero_identidad){
			$this->numero_identidad = $numero_identidad;
		}
		public function getTratamiento(){
			return $this->tratamiento;
		}
		public function setTratamiento($tratamiento){
			$this->tratamiento = $tratamiento;
		}
		public function getEdad(){
			return $this->edad;
		}
		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function getNacionalidad(){
			return $this->nacionalidad;
		}
		public function setNacionalidad($nacionalidad){
			$this->nacionalidad = $nacionalidad;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

	}
?>