<?php

include_once('cabeceratarea.php');
include_once('Collector.php');

class CabeceratareaCollector extends Collector
{
  
  function showCabeceratareas() {
    $rows = self::$db->getRows("SELECT * FROM cabeceratarea ");        
    $arrayCabeceratarea= array();        
    foreach ($rows as $c){
      $aux = new Cabeceratarea($c{'idCabeceratarea'},$c{'idPeriodo'},$c{'idCultivolote'},$c{'idEmpleado'},$c{'fecha'},$c{'estado'});
      array_push($arrayCabeceratarea, $aux);
    }
    return $arrayCabeceratarea;        
  }

}
?>

