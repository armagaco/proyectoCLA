<?php
session_start();
?>

<?php
 	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';
	echo "&nbsp;";
	echo "&nbsp;"; 

	echo "<a href = 'createMedida.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readMedida.php' >Volver</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'menu.php' >Menu</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'logout.php' >Salir</a>"; 

$n = $_POST['Nombre'];
$a = $_POST['Estado'];

include_once("MedidaCollector.php");
$MedidaCollectorObj = new MedidaCollector();
$MedidaCollectorObj->insertMedidas($n,$a);
echo "&nbsp;";  
echo "Registro Ingresado : ".$n .$a;

?>
