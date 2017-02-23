<?php

class CabeceraSupervisiondron{

  private $idIdCabeceraDron;
  private $idPeriodo;
  private $fecha;
  private $supervisor;
  private $idCultivoLote;
  private $estado;
  

    function __construct($idIdCabeceraDron, $idPeriodo, $fecha, $supervisor, $idCultivoLote, $estado){
    $this->idIdCabeceraDron = $idIdCabeceraDron;
    $this->idPeriodo = $idPeriodo;
    $this->fecha = $fecha;
	$this->supervisor = $supervisor;
	$this->idCultivoLote = $idCultivoLote;
    $this->estado = $estado;
    }
    function setIdIdCabeceraDron($idIdCabeceraDron){
      $this->idIdCabeceraDron = $idIdCabeceraDron;
    }
    function getIdCabeceraDron(){
      return $this->idCabeceraDron;
    }
    function setIdPeriodo($idperiodo){
      $this->idPeriodo = $idPeriodo;
    }
    function getIdPeriodo(){
      return $this->idPeriodo;
    }
    function setidCultivoLote($idCultivoLote){
      $this->idCultivoLote = $idCultivoLote;
    }
    function getidCultivoLote(){
      return $this->idCultivoLote;
    }
    function setFecha($fecha){
      $this->fecha = $fecha;
    }
    function getFecha(){
      return $this->fecha;
    }
	function setSupervisor($supervisor){
      $this->supervisor = $supervisor;
    }
    function getSupervisor(){
      return $this->supervisor;
    }
    function setEstado($estado){
      $this->estado = $estado;
    }
    function getEstado(){
      return $this->estado;
    }
}

?>
