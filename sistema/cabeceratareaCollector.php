<?php

include_once('cabeceratarea.php');
include_once('Collector.php');

class TareaCollector extends Collector
{
  
  function showTareas() {
    $rows = self::$db->getRows("SELECT * FROM cabeceratarea ");        
    $arrayTarea= array();        
    foreach ($rows as $c){
      $aux = new Tarea($c{'idTarea'},$c{'idPeriodo'},$c{'idCultivolote'},$c{'idEmpleado'},$c{'fecha'},$c{'estado'});
      array_push($arrayTarea, $aux);
    }
    return $arrayTarea;        
  }

}
?>

