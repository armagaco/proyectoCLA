<?php

class Detalletarea{

	private $idDetalletarea;
	private $idCabeceratarea;
	private $idEmpleado;
	private $idArea;
	private $cantidad;
	private $tarifa;

	function __construct($idDetalletarea, $idCabeceratarea, $idEmpleado, $idArea, $cantidad, $tarifa){
		$this->idDetalletarea = $idDetalletarea;
		$this->idCabeceratarea = $idCabeceratarea;
		$this->idEmpleado = $idEmpleado;
		$this->idArea = $idArea;
		$this->cantidad = $cantidad;
		$this->tarifa = $tarifa;
	}

	function setIdDetalletarea($idDetalletarea){
		$this->idDetalletarea = $idDetalletarea;
	}

	function getIdDetalletarea(){
		return $this->idDetalletarea;
	}

	function setIdCabeceratarea($idCabeceratarea){
                $this->idCabeceratarea = $idCabeceratarea;
        }

        function getIdCabeceratarea(){
                return $this->idCabeceratarea;
        }

	function setIdEmpleado($idEmpleado){
                $this->idEmpleado = $idEmpleado;
        }

        function getIdEmpleado(){
                return $this->idEmpleado;
        }

	function setIdArea($idArea){
                $this->idArea = $idArea;
        }

        function getIdArea(){
                return $this->idArea;
        }

	function setCantidad($cantidad){
                $this->cantidad = $cantidad;
        }

        function getCantidad(){
                return $this->cantidad;
        }

	function setTarifa($tarifa){
                $this->tarifa = $tarifa;
        }

        function getTarifa(){
                return $this->tarifa;
        }

}

?>
