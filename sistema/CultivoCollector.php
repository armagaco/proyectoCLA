<?php

include_once('cultivo.php');
include_once('Collector.php');


class CultivoCollector extends Collector
{
private $tabla = 'controlAgricola.cultivo' ;
private $campo1 = "idcultivo" ;
private $campo2 = "nombre" ;
private $campo3 = "estado" ;
 
  function showCultivos() {
    $rows = self::$db->getRows("SELECT $this->campo1,$this->campo2,$this->campo3 FROM $this->tabla ");        
    $arrayCultivo= array();        
    foreach ($rows as $c){
      $aux = new Cultivo($c{$this->campo1},$c{"$this->campo2"},$c{"$this->campo3"} );
      array_push($arrayCultivo, $aux);
    }
    return $arrayCultivo;        
  }

  function deleteCultivos($id) {
    $rows = self::$db->deleteRow("DELETE FROM $this->tabla where $this->campo1 = $id", null);             
  }

  function insertCultivos($nombre, $estado) {
    $rows = self::$db->insertRow("Insert into $this->tabla ($this->campo2, $this->campo3) values ('$nombre' , $estado )" , null);             
  }

  function updateCultivos($id,$nombre, $estado) {
    $rows = self::$db->updateRow("Update $this->tabla set $this->campo2 = '$nombre', $this->campo3 = $estado where $this->campo1 =$id", null);             
  }

}
?>

