<?php
session_start();
?>
<?php
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readCultivo.php' >Menú</a>";
	echo "&nbsp;"; 
	echo "&nbsp;";
	echo "<a href = 'readCultivo.php' >Volver</a>";
	echo "&nbsp;"; 
	echo "&nbsp;";
	echo "<a href = 'logout.php' >Salir</a>"; 

$id =$_POST['Codigo'];
$n =$_POST['Nombre'];
$a =$_POST['Estado'];


?>
<?php
include_once("CultivoCollector.php");
$CultivoCollectorObj = new CultivoCollector();
$CultivoCollectorObj->updateCultivos($id,$n,$a);
echo "&nbsp;";  
echo "Registro Actualizado Exitosamente : ".$n;
 
?>
