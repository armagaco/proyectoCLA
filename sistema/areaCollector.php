<?php

include_once('area.php');
include_once('Collector.php');

class AreaCollector extends Collector
{
  
  function showAreas() {
    $rows = self::$db->getRows("SELECT * FROM area ");        
    $arrayArea= array();        
    foreach ($rows as $c){
      $aux = new Area($c{'idArea'},$c{'nombre'},$c{'tamano'},$c{'estado'});
      array_push($arrayArea, $aux);
    }
    return $arrayArea;        
  }

}
?>
