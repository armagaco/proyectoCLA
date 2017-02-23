<?php

include_once('cultivoLote.php');
include_once('Collector.php');

class CultivoLoteCollector extends Collector
{
  
  function showCultivoLotes() {
    $rows = self::$db->getRows("SELECT * FROM controlAgricola.cultivolote ");        
    $arrayCultivoLote= array();        
    foreach ($rows as $c){
      $aux = new CultivoLote($c{'idCultivoLote'},$c{'idPeriodo'},$c{'idLote'},$c{'idCultivo'},$c{'fecha'},$c{'estado'});
      array_push($arrayCultivoLote, $aux);
    }
    return $arrayCultivoLote;        
  }

}
?>

