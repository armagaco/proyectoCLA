<?php

class Empleado{

	private $idEmpleado;
	private $nombre;
	private $apellido;
	private $idDepartamento;
	private $idCargo;

	function __construct($idEmpleado, $nombre, $apellido, $idDepartamento, $idCargo){
		$this->idEmpleado = $idEmpleado;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->idDepartamento = $idDepartamento;
		$this->idCargo = $idCargo;
	}

	function setIdEmpleado($idEmpleado){
		$this->idEmpleado = $idEmpleado;
	}

	function getIdEmpleado(){
		return $this->idEmpleado;
	}

	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setApellido($apellido){
		$this->apellido = $apellido;
	}

	function getApellido(){
		return $this->apellido;
	}

	function setIdDepartamento($idDepartamento){
		$this->idDepartamento = $idDepartamento;
	}

	function getIdDepartamento(){
		return $this->idDepartamento;
	}

	function setIdCargo($idCargo){
		$this->idCargo = $idCargo;
	}

	function getIdCargo(){
		return $this->idCargo;
	}


}
?>
