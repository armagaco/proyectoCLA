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
                 <link href="../css/login.css" rel="stylesheet" >

	</head>

	<body>


<?php
        echo "<div id='panel'>";
        echo "<div id='welcome'>";
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';
        echo "</div>";

	echo "<div id='salir'>"; 	
	echo "<a href = 'logout.php' >Salir</a>"; 
        echo "</div>";
        echo "</div>";
	echo "<br>";
	echo "<br>";
        echo "<div id='menubar'>";
	echo "MENÚ DE TABLAS";
        echo "</div>";
	echo "<br>";

        
        echo "<table style='width:50%'>";
	echo "<tr>";
        echo "<th rowspan='2'>";	
	echo "<a href = 'readCultivo.php' >tablaCultivo</a>"; 
        echo "</th>";
        echo "<th>";
        echo "<a href = 'readDemo.php' >Código</a>";
        echo "</th>";
        echo "<th>";
	echo "<a href = 'readDemo.php' >Nombre</a>";
        echo "</th>";
        echo "<th>";
	echo "<a href = 'readDemo.php' >Estado</a>";
        echo "</th>";
      

        echo "<table style='width: 60%'>";
        
         echo "<tr>";
           echo "<th rowspan='2' colspan='2'>";
           echo "Tabla Cultivo";
           echo "</th>";
           echo "<th rowspan='1'>";
           echo "Código";
           echo "</th>";
           echo "<th rowspan='1'>";
           echo "Nombre";
           echo "</th>";
           echo "<th rowspan='1'>";
           echo "Estado";
           echo "</th>";
           
         echo "</tr>";
         echo "<tr>";
           echo "<td>";
           echo "1";
           echo "</td>";
           echo "<td>";
           echo "Johana";
           echo "</td>";
           echo "<td>";
           echo "Activo";
           echo "</td>";
         echo "</tr>";
        echo "<table>";
		
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
