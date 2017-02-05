<?php
session_start();
?>

<?php
 	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';
	echo "&nbsp;";
	echo "&nbsp;"; 

	echo "<a href = 'createCultivo.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readCultivo.php' >Volver</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'menu.php' >Menu</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'logout.php' >Salir</a>"; 

$n = $_POST['Nombre'];
$a = $_POST['Estado'];

include_once("CultivoCollector.php");
$CultivoCollectorObj = new CultivoCollector();
$CultivoCollectorObj->insertCultivos($n,$a);
echo "&nbsp;";  
echo "Registro Ingresado : ".$n .$a;

?>
