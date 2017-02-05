<?php
session_start();
?>
<?php
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';

	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'menu.php'> Menú </a>";  
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readMedida.php' >Volver</a>"; 
	echo "&nbsp;";
	echo "&nbsp;";
	echo "<a href = 'logout.php' >Salir</a>"; 

	$id =$_GET['id'];

	include_once("MedidaCollector.php");
	$MedidaCollectorObj = new MedidaCollector();
	$MedidaCollectorObj->deleteMedidas($id);
	echo "&nbsp;";  
	echo "Registro Eliminado : ".$id;
	 
?>
