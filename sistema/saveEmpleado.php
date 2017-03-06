<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Menú</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
	<script src= "../js/jquery.js" ></script>
	<script src="../js/jquery.bootgrid.min.js"></script>
	<script src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Empleados</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createEmpleado.php'>Nuevo</a></li>";
			echo "<li><a href='readEmpleado.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

$id =$_POST['Codigo'];
$n =$_POST['Nombre'];
$a =$_POST['Apellido'];
$d =$_POST['Departamento'];
$c =$_POST['Cargo'];

class Test extends PHPUnit_Framework_TestCase
{
	public function testNotEquals() {
		$this->assertNotEquals($n,$a);
  	}
}



include_once("empleadoCollector.php");
$EmpleadoCollectorObj = new EmpleadoCollector();
$EmpleadoCollectorObj->updateEmpleado($id,$n,$a,$d,$c);

echo "<br>";

echo "<div class='container'>";
echo "  <h2>Empleados</h2>";
echo "  <div class='panel panel-default'>";
echo "    <div class='panel-heading'>Registro Actualizado Correctamente</div>";
echo "    <div class='panel-body'>$id</div>";
echo "  </div>";
echo "</div>";
 
?>

</body>
</html>
