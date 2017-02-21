<?php

include_once('detalleTarifario.php');
include_once('Collector.php');

class DetalleTarifarioCollector extends Collector
{
  
  function showDetallesTarifarios() {
    $rows = self::$db->getRows("SELECT idcabeceratarifario,iddetalletarifario,idlabor,idmedida,valor FROM controlAgricola.detalletarifario ");        
    $arrayDetalleTarifario= array();        
    foreach ($rows as $c){
      $aux = new DetalleTarifario($c{'idcabeceratarifario'},$c{'iddetalletarifario'},$c{'idlabor'},$c{'idmedida'},$c{'valor'});
      array_push($arrayDetalleTarifario, $aux);
    }
    return $arrayDetalleTarifario;        
  }
  function deleteDetallesTarifarios($id) {
    $rows = self::$db->deleteRow("DELETE FROM controlAgricola.detalletarifario where iddetalletarifario = $id", null);             
  }

function insertDetallesTarifarios($idcabeceratarifario, $idlabor, $idmedida, $valor) {
    $rows = self::$db->insertRow("Insert into controlAgricola.detalletarifario (idcabeceratarifario, idlabor, idmedida, valor) values ($idcabeceratarifario, $idlabor, $idmedida, $valor )" , null);             
  }

function updateDetallesTarifarios($iddetalletarifario, $id, $idlabor, $idmedida, $valor) {
    $rows = self::$db->updateRow("Update controlAgricola.detalletarifario set idcabeceratarifario= $idcabeceratarifario, idlabor = $idlabor, idmedida = $idmedida, valor = $valor where iddetalletarifario =$id", null);             
  }

}
?>

