<?php

class Cabeceratarea{

	private $idCabeceratarea;
	private $idPeriodo;
	private $idCultivolote;
	private $idEmpleado;
	private $fecha;
	private $estado;

	function __construct($idCabeceratarea, $idPeriodo, $idCultivolote, $idEmpleado, $fecha, $estado){
		$this->idCabeceratarea = $idCabeceratarea;
		$this->idPeriodo = $idPeriodo;
		$this->idCultivolote = $idCultivolote;
		$this->idEmpleado = $idEmpleado;
		$this->fecha = $fecha;
		$this->estado = $estado;
	}

	function setIdCabeceratarea($idCabeceratarea){
		$this->idCabeceratarea = $idCabeceratarea;
	}

	function getIdCabeceratarea(){
		return $this->idCabeceratarea;
	}

	function setIdPeriodo($idPeriodo){
                $this->idPeriodo = $idPeriodo;
        }

        function getIdPeriodo(){
                return $this->idPeriodo;
        }

	function setIdCultivolote($idCultivolote){
                $this->idCultivolote = $idCultivolote;
        }

        function getIdCultivolote(){
                return $this->idCultivolote;
        }

	function setIdEmpleado($idEmpleado){
                $this->idEmpleado = $idEmpleado;
        }

        function getIdEmpleado(){
                return $this->idEmpleado;
        }

	function setFecha($fecha){
                $this->fecha = $fecha;
        }

        function getFecha(){
                return $this->fecha;
        }

	function setEstado($estado){
                $this->estado = $estado;
        }

        function getEstado(){
                return $this->estado;
        }

}

?>
