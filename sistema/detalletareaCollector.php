<?php

include_once('detalletarea.php');
include_once('Collector.php');

class DetalletareaCollector extends Collector
{
  
  function showDetalletareas() {
    $rows = self::$db->getRows("SELECT * FROM detalletarea ");        
    $arrayDetalletarea= array();        
    foreach ($rows as $c){
      $aux = new Detalletarea($c{'idDetalletarea'},$c{'idTarea'},$c{'idEmpleado'},$c{'idArea'},$c{'cantidad'},$c{'tarifa'});
      array_push($arrayDetalletarea, $aux);
    }
    return $arrayDetalletarea;        
  }

}
?>

