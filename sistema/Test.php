<?php
include_once('empleado.php');
include_once('Collector.php');

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$rows = self::$db->getRows("SELECT * FROM controlAgricola.empleado ");
		$arrayEmpleado= array();
		$this->assertNotNull($arrayEmpleado);
    		foreach ($rows as $c){
		      $aux = new Empleado($c{'idempleado'},$c{'nombre'},$c{'apellido'},$c{'departamento'},$c{'cargo'});
		      array_push($arrayEmpleado, $aux);
		    }
		    return $arrayEmpleado;
  	}
}
?>
