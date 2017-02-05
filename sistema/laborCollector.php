<?php

include_once('labor.php');
include_once('Collector.php');

class LaborCollector extends Collector
{
  
  function showLabores() {
    $rows = self::$db->getRows("SELECT * FROM labor ");        
    $arrayLabor= array();        
    foreach ($rows as $c){
      $aux = new Labor($c{'idLabor'},$c{'idGrupoLabor'},$c{'nombre'},$c{'estado'});
      array_push($arrayLabor, $aux);
    }
    return $arrayLabor;        
  }

}
?>


