<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Detalle Supervision-Dron</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/estilo.css" rel="stylesheet" >
        <link href="../css/tablas.css" rel="stylesheet" >
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
</head>

<body>
<?php
	echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Detalle-Supervision-Dron</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='menu.php'>Menú</a></li>";
			echo "<li><a href='createDetalleSupervisionDron.php'>Nuevo</a></li>";
		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['Garcia'] . ")</a></li>";
			echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";

include_once("DetalleSupervisionDronCollector.php");
$DetalleSupervisionDronCollectorObj = new DetalleSupervisionDronCollector();

echo "<div class='container'>";
echo "<h2>Detalle Supervision-Dron</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>CabeceraSupervision-Dron</th>"; 
echo " 	   <th>DetalleSupervision-Dron</th>"; 
echo " 	   <th>Empleado</th>"; 
echo " 	   <th>Labor</th>"; 
echo "     <th>Cantidad</th>"; 
echo "     <th>Tarifa</th>"; 
echo "</tr>"; 
echo "</thead>"; 
foreach ($DetalleSupervisionDronCollectorObj->showDetalleSupervisionDron() as $c){
	echo "<tbody>"; 
	echo "<tr>"; 
	echo "<td>".$c->getIdCabeceraDron()."</td>"; 
    echo "<td>".$c->getIdDetalleDron()."</td>"; 
	echo "<td>".$c->getidEmpleado()."</td>"; 
	echo "<td>".$c->getIdLabor()."</td>"; 
	echo "<td>".$c->getCantidad()."</td>"; 
    echo "<td>".$c->getTarifa()."</td>"; 
	echo "<td><a href='updateDetalleSupervisionDron.php?idCabeceraDron=".$c->getIdCabeceraDron()."&id=".$c->getIdDetalleDron()."&idEmpleado=".$c->getidEmpleado()."&idlabor=".$c->getIdLabor()."&cantidad=".$c->getCantidad()."&tarifa=".$c->getTarifa()."'>Editar</a></td>"; 
	echo "<td><a href='deleteDetalleSupervisionDron.php?idCabeceraDron=".$c->getIdCabeceraDron()."&id=".$c->getIdDetalleDron()."&idEmpleado=".$c->getidEmpleado()."&idlabor=".$c->getIdLabor()."&cantidad=".$c->getCantidad()."&tarifa=".$c->getTarifa()."'>Eliminar</a></td>"; 
	echo "</tr>"; 
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

</body>
</html>

