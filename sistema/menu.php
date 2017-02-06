<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>Menú</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    
                <link href="css/estilo.css" rel="stylesheet" >
                 <link href="css/login.css" rel="stylesheet" >

	</head>

	<body>


<?php
        echo "<div id='panel'>";
        echo "<div id='welcome'>";
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';
        echo "</div>";

	echo "&nbsp;"; 	
	echo "<a href = 'logout.php' >Salir</a>"; 
        echo "</div>";
	echo "<br>";
	echo "<br>";
        echo "<div id='menubar'>";
	echo "MENU DE TABLAS";
        echo "</div>";
	echo "<br>";

        echo "<table style='width:50%'>";
	echo "<tr>";
        echo "<th>";	
	echo "<a href = 'readCultivo.php' >tablaCultivo</a>"; 
        echo "</th>";
        echo "<th>";
        echo "<a href = 'readDemo.php?usuario=$usuario' >Código</a>";
        echo "</th>";
        echo "<th>";
	echo "<a href = 'readDemo.php?usuario=$usuario' >Nombre</a>";
        echo "</th>";
        echo "<th>";
	echo "<a href = 'readDemo.php?usuario=$usuario' >Estado</a>";
        echo "</th>";

        

		
	echo "<a href = 'readMedida.php' >tablaMedida</a>"; 
	echo "<br>"; 	
	echo "<a href = 'readGrupoLabor.php' >tablaLabores</a>"; 
	echo "<br>"; 	
	echo "<a href = 'readDepartamento.php' >tablaDepartamento</a>"; 
	echo "<br>"; 	
	echo "<a href = 'readCargo.php' >tablaCargo</a>"; 
        echo "</table>";

?>
</body>
</html>
