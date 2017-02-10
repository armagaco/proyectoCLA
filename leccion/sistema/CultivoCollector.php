<?php

include_once('cultivo.php');
include_once('Collector.php');


class CultivoCollector extends Collector
{
private $tabla = 'Calificaciones.notas' ;
private $campo1 = "idnota" ;
private $campo2 = "nombre" ;
private $campo3 = "parcial" ;
private $campo4 = "final" ;
private $campo5 = "mejoramiento" ;
private $campo6 = "aprueba" ;

 
  function showCultivos() {
    $rows = self::$db->getRows("SELECT $this->campo1,$this->campo2,$this->campo3,$this->campo4,$this->campo5,$this->campo6 FROM $this->tabla ");        
    $arrayCultivo= array();        
    foreach ($rows as $c){
      $aux = new Cultivo($c{$this->campo1},$c{"$this->campo2"},$c{"$this->campo3"},$c{"$this->campo4"},$c{"$this->campo5"},$c{"$this->campo6"}  );
      array_push($arrayCultivo, $aux);
    }
    return $arrayCultivo;        
  }

  function deleteCultivos($id) {
    $rows = self::$db->deleteRow("DELETE FROM $this->tabla where $this->campo1 = $id", null);             
  }

  function insertCultivos($nombre, $parcial,$final, $mejoramiento,$aprueba) {
    $rows = self::$db->insertRow("Insert into $this->tabla ($this->campo2, $this->campo3,$this->campo4, $this->campo5, $this->campo6) values ('$nombre' , $parcial , $final , $mejoramiento , $aprueba)" , null);             
  }

  function updateCultivos($id,$nombre, $parcial,$final, $mejoramiento,$aprueba) {
    $rows = self::$db->updateRow("Update $this->tabla set $this->campo2 = '$nombre', $this->campo3 = $parcial, $this->campo4 = $final, $this->campo5 = $mejoramiento, $this->campo6 = $aprueba where $this->campo1 =$id", null);             
  }

}
?>

