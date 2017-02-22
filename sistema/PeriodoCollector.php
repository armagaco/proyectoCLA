<?php

include_once('periodo.php');
include_once('Collector.php');

class PeriodoCollector extends Collector
{
  
  function showPeriodo() 
  {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.periodo ");        
    $arrayPeriodo= array();        
    foreach ($rows as $c){
      $aux = new Periodo($c{'idperiodo'},$c{'nombre'},$c{'fechainicio'},$c{'fechafin'},$c{'estado'});
      array_push($arrayPeriodo, $aux);
    }
    return $arrayPeriodo;        
  }

  function deletePeriodo($id) 
  {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.periodo where idperiodo = $id", null);             
  }

  function insertPeriodo($nombre, $fechainicio, $fechafin, $estado) 
  {
    $rows = self::$db->insertRow("Insert into controlAgricola.periodo (nombre, fechainicio, fechafin, estado) values ($nombre , $fechainicio , $fechafin , $estado)" , null);             
  }
 
 function updatePeriodo($id, $nombre, $fechainicio, $fechafin, $estado) 
 {
    $rows = self::$db->updateRow("Update controlAgricola.periodo set nombre = $nombre, fechainicio=$fechainicio, fechafin = $fechafin, estado = $estado where idperiodo =$id", null);             
 }
 
}
?>
