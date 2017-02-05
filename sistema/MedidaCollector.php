<?php

include_once('Medida.php');
include_once('Collector.php');


class MedidaCollector extends Collector
{
private $tabla = 'controlAgricola.medida' ;
private $campo1 = "idmedida" ;
private $campo2 = "nombre" ;
private $campo3 = "estado" ;
 
  function showMedidas() {
    $rows = self::$db->getRows("SELECT $this->campo1,$this->campo2,$this->campo3 FROM $this->tabla ");        
    $arrayMedida= array();        
    foreach ($rows as $c){
      $aux = new Medida($c{$this->campo1},$c{"$this->campo2"},$c{"$this->campo3"} );
      array_push($arrayMedida, $aux);
    }
    return $arrayMedida;        
  }

  function deleteMedidas($id) {
    $rows = self::$db->deleteRow("DELETE FROM $this->tabla where $this->campo1 = $id", null);             
  }

  function insertMedidas($nombre, $estado) {
    $rows = self::$db->insertRow("Insert into $this->tabla ($this->campo2, $this->campo3) values ('$nombre' , $estado )" , null);             
  }

  function updateMedidas($id,$nombre, $estado) {
    $rows = self::$db->updateRow("Update $this->tabla set $this->campo2 = '$nombre', $this->campo3 = $estado where $this->campo1 =$id", null);             
  }

}
?>

