<?php

include_once('empleado.php');
include_once('Collector.php');

class EmpleadoCollector extends Collector
{
  
  function showEmpleados() {
    $rows = self::$db->getRows("SELECT * FROM empleado ");        
    $arrayEmpleado= array();        
    foreach ($rows as $c){
      $aux = new Empleado($c{'idEmpleado'},$c{'nombre'},$c{'apellido'},$c{'idDepartamento'},${'idCargo'});
      array_push($arrayEmpleado, $aux);
    }
    return $arrayEmpleado;        
  }

}
?>

