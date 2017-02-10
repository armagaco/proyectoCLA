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

<style type="text/css">
#contenedor {
    display: table;
    border: 2px solid #000;
    width: 333px;
    text-align: center;
    margin: 0 auto;
}
#contenidos {
    display: table-row;
}
#columna1, #columna2, #columna3 {
    display: table-cell;
    border: 1px solid #000;
    vertical-align: middle;
    padding: 10px;
}
</style>

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


echo"<div id='tabla'>";   
	echo "<div id='contenedor'>";
	    	echo "<div id='contenidos'>";
		echo "<div id='columna1' ><a href='readCultivo.php'>Cultivos</a></div>";
		echo "<div id='columna2'><a href='readCargo.php'>Cargos</div>";
		echo "<div id='columna3'><a href='readCultivo.php'>Lotes</div>";
		echo "<div id='columna3'><a href='readCultivo.php'>Cultivos por Lotes</div>";
		echo "</div>";
		echo "<div id='contenidos'>";
		echo "<div id='columna1'><a href='readMedida.php'>Medidas</div>";
		echo "<div id='columna2'><a href='readCultivo.php'>Areas</div>";
		echo "<div id='columna3'><a href='readCultivo.php'>Periodos</div>";
		echo "<div id='columna3'><a href='readCultivo.php'>Empleados</div>";
		echo "</div>";
		echo "<div id='contenidos'>";
		echo "<div id='columna1'><a href='readGrupoLabor.php'>Grupos de Labores</div>";
		echo "<div id='columna2'><a href='readCultivo.php'>Labores</div>";
		echo "<div id='columna3'><a href='readCultivo.php'>SupervisiónDRON</div>";
		echo "<div id='columna3'><a href='readCultivo.php'>Ingreso de Tareas</div>";
		echo "</div>";
		echo "<div id='contenidos'>";
		echo "<div id='columna1'><a href='readDepartamento.php'>Departamentos</div>";
		echo "<div id='columna2'><a href='readCultivo.php'>Tarifario</div>";
		echo "<div id='columna3'></div>";
		echo "<div id='columna3'></div>";
		echo "</div>";
	echo "</div>";
	echo "</div>";


?>
</body>
</html>
