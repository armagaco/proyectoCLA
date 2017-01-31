<?php

include_once('cultivolote.php');
include_once('Collector.php');

class CultivoloteCollector extends Collector
{
  
  function showCultivolotes() {
    $rows = self::$db->getRows("SELECT * FROM cultivolote ");        
    $arrayCultivolote= array();        
    foreach ($rows as $c){
      $aux = new Cultivolote($c{'idCultivolote'},$c{'idPeriodo'},$c{'idLote'},$c{'idCultivo'},$c{'fecha'},$c{'estado'});
      array_push($arrayCultivolote, $aux);
    }
    return $arrayCultivolote;        
  }

}
?>

