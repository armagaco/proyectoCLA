<?php
session_start();
?>
<?php
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';

	echo "&nbsp;"; 	
	echo "<a href = 'logout.php' >Salir</a>"; 
	echo "<br>";
	echo "<br>";
	echo "MENU DE TABLAS";
	echo "<br>";


	echo "<br>"; 	
	echo "<a href = 'readCultivo.php' >tablaCultivo</a>"; 
	echo "<br>"; 	
	echo "<a href = 'readMedida.php' >tablaMedida</a>"; 
	echo "<br>"; 	
	echo "<a href = 'readGrupoLabor.php' >tablaLabores</a>"; 
	echo "<br>"; 	
	echo "<a href = 'readDepartamento.php' >tablaDepartamento</a>"; 
	echo "<br>"; 	
	echo "<a href = 'readCargo.php' >tablaCargo</a>"; 

?>
