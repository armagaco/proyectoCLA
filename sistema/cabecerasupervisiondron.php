<?php

class CabeceraSupervisiondron{

  private $idCabeceraSupervisiondron;
  private $idPeriodo;
  private $idCultivo;
  private $fecha;
  private $estado;

    function __construct($idCabeceraSupervisiondron, $idPeriodo, $idCultivo, $fecha, $estado){
    $this->idCabeceraSupervisiondron = $idCabeceraSupervisiondron;
    $this->idPeriodo = $idPeriodo;
    $this->idCultivo = $idCultivo;
    $this->fecha = $fecha;
    $this->estado = $estado;
    }
    function setIdCabeceraSupervisiondron($idCabeceraSupervisiondron){
      $this->idCabeceraSupervisiondron = $idCabeceraSupervisiondron;
    }
    function getIdCabeceraSupervisiondron(){
      return $this->idCabeceraSupervisiondron;
    }
    function setIdPeriodo($idperiodo){
      $this->idPeriodo = $idPeriodo;
    }
    function getIdPeriodo(){
      return $this->idPeriodo;
    }
    function setIdCultivo($idCultivo){
      $this->idCultivo = $idCultivo;
    }
    function getIdCultivo(){
      return $this->idCultivo;
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
