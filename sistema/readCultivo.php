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
        <link href="../css/tablas.css" rel="stylesheet" >
</head>
	<body>
          

<?php
        echo "<div id='panel'>";
        	echo "<div id='welcome'>Hola Usuario : ";
		echo '(' . $_SESSION ['Garcia'] . ')';
	        echo "</div>";	
		echo "<div id='Salir'><a href = 'logout.php' >Salir</a></div>";
        echo "</div>";

        echo "<div id='content_green'>";
        	echo "<div id='content_green_container_box'><a href = 'createCultivo.php' >Nuevo</a></div>";
        	echo "<div id='content_green_container_box'><a href = 'menu.php'> Menú </a></div>";
        echo "</div>"; 

	echo "<br>";
        echo "<div id='menubar'>ADMINISTRACIÓN</div>";	
        echo "<br>";

include_once("CultivoCollector.php");
$CultivoCollectorObj = new CultivoCollector();
        echo"<div id='tabla'>";
            echo "<div id='contenedor'>";
                echo "<div id='contenidos'>";
			echo "<div id='columna1'>Código</div>";
			echo "<div id='columna2'>Nombre</div>";
			echo "<div id='columna3'>Estado</div>";
                	echo "</div>";

foreach ($CultivoCollectorObj->showCultivos() as $c){
  		echo "<div id='contenidos'>";
	  		echo "<div id='columna1'>".$c->getIdCultivo()."</div>";
	  		echo "<div id='columna2'>".$c->getNombre()."</div>";
	  		echo "<div id='columna3'>".$c->getEstado()."</div>";
	  		echo "<div id='columna4'><a href = 'updateCultivo.php?id=".$c->getIdCultivo()."&nombre=".$c->getNombre()."&estado=".$c->getEstado()."' > Editar</a></div>";
	  		echo "<div id='columna5'><a href = 'deleteCultivo.php?id=".$c->getIdCultivo()."' > Eliminar</a></div>";
    
  		echo "</div>"; 
}
  	    echo "</div>";
       echo "</div>";
?>
</body>
</html>
