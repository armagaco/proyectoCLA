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


        echo "<table style='width:81%'>";
           echo "<tr>";
              echo "<td><a href='readCultivo.php'>Cultivos</a></td>";
              echo "<td><a href='readCargo.php'>Cargos</a></td>";
              echo "<td><a href='readCultivo.php'>Lotes</a></td>";
              echo "<td><a href='readCultivo.php'>Cultivos por Lotes</a></td>";
           echo "</tr>";
           echo "<tr>";
              echo "<td><a href='readMedida.php'>Medidas</a></td>";
              echo "<td><a href='readCultivo.php'>Areas</a></td>";
              echo "<td><a href='readCultivo.php'>Periodos</a></td>";
              echo "<td><a href='readCultivo.php'>Empleados</a></td>";
           echo "</tr>";
           echo "<tr>";
              echo "<td><a href='readGrupoLabor.php'>Grupos de Labores</a></td>";
              echo "<td><a href='readCultivo.php'>Labores</a></td>";
              echo "<td><a href='readCultivo.php'>SupervisiónDRON</a></td>";
              echo "<td><a href='readCultivo.php'>Ingreso de Tareas</a></td>";
           echo "</tr>";
           echo "<tr>";
              echo "<td><a href='readDepartamento.php'>Departamentos</a></td>";
              echo "<td><a href='readCultivo.php'>Tarifario</a></td>";
              
           echo "</tr>";
        echo "</table>";


?>
</body>
</html>
