<?php

include_once('cabeceratarea.php');
include_once('Collector.php');

class CabeceraTareaCollector extends Collector
{
  
  function showTareas() {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.cabeceratarea ");        
    $arrayTarea= array();        
    foreach ($rows as $c){
      $aux = new Tarea($c{'idcabeceratarea'},$c{'periodo'},$c{'fecha'},$c{'supervisor'},$c{'idcultivolote'},$c{'estado'});
      array_push($arrayTarea, $aux);
    }
    return $arrayTarea;        
  }

}
?>

