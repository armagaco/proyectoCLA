<?php

include_once('detalletarea.php');
include_once('Collector.php');

class DetalleTareaCollector extends Collector
{
  
  function showDetalleTareas() {
    $rows = self::$db->getRows("SELECT * FROM detalletarea ");        
    $arrayDetalleTarea= array();        
    foreach ($rows as $c){
      $aux = new DetalleTarea($c{'iddetalletarea'},$c{'idcabeceratarea'},$c{'idempleado'},$c{'idlabor'},$c{'cantidad'},$c{'tarifa'});
      array_push($arrayDetalletarea, $aux);
    }
    return $arrayDetalletarea;        
  }

}
?>

