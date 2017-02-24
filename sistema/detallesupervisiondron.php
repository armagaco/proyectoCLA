<?php

class DetalleSupervisionDron{

  private $idCabeceraDron;
  private $idDetalleTarifario;
  private $idLabor;
  private $idMedida;
  private $valor;

    function __construct($idCabeceraDron, $idDetalleTarifario, $idLabor, $idMedida, $valor){
    $this->idCabeceraDron = $idCabeceraDron;
    $this->idDetalleTarifario = $idDetalleTarifario;
    $this->idLabor = $idLabor;
    $this->idMedida = $idMedida;
    $this->valor = $valor;
    }
    function setIdCabeceraDron($idCabeceraDron){
      $this->idCabeceraDron = $idCabeceraDron;
    }
    function getIdCabeceraDron(){
      return $this->idCabeceraDron;
    }
    function setIdDetalleTarifario($idDetalleTarifario){
      $this->idDetalleTarifario = $idDetalleTarifario;
    }
    function getIdDetalleTarifario(){
      return $this->idDetalleTarifario;
    }
    function setIdLabor($idLabor){
      $this->idLabor = $idLabor;
    }
    function getIdLabor(){
      return $this->idLabor;
    }
    function setIdMedida($idMedida){
      $this->idMedida = $idMedida;
    }
    function getIdMedida(){
      return $this->idMedida;
    }
    function setValor($valor){
      $this->valor = $valor;
    }
    function getValor(){
      return $this->valor;
    }
}

?>
