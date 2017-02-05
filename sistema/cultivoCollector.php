<?php

include_once('cultivo.php');
include_once('Collector.php');

$tabla= "cultivo" ;
$campo1= "idCultivo" ;
$campo2= "nombre" ;
$campo3= "estado" ;

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT $campo1, $campo2, $campo3  FROM  $tabla ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{$campo1},$c{$campo2},$c{$campo3} );
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

  function deleteDemos($id) {
    $rows = self::$db->deleteRow("DELETE FROM $tabla where $campo1 = $id", null);             
  }

  function insertDemos($nombre, $apellido) {
    $rows = self::$db->insertRow("Insert into $tabla ($campo2, $campo3) values ('$nombre' , '$apellido' )" , null);             
  }

  function updateDemos($id,$nombre, $apellido) {
    $rows = self::$db->updateRow("Update $tabla set $campo2 = '$nombre', $campo3 = '$apellido' where $campo1 =$id", null);             
  }

}
?>

