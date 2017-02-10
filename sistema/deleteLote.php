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
	echo "<a href = 'readLote.php' >Volver</a>"; 
	echo "&nbsp;";
	echo "&nbsp;";
	echo "<a href = 'logout.php' >Salir</a>"; 

	$id =$_GET['id'];

	include_once("LoteCollector.php");
	$CultivoCollectorObj = new LoteCollector();
	$CultivoCollectorObj->deleteLote($id);
	echo "&nbsp;";  
	echo "Registro Eliminado : ".$id;
	 
?>