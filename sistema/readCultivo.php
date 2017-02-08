<?php
session_start();
?>
<?php
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';


	echo "&nbsp;";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'createCultivo.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'menu.php'> Menú </a>";  
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'logout.php' >Salir</a>"; 
	
	echo "<br>";
	echo "<br>";
	echo "ADMINISTRACION";
	echo "<br>";
	echo "<br>";

include_once("CultivoCollector.php");
$CultivoCollectorObj = new CultivoCollector();

				echo "<tr>";
					echo "<td>Código</td>";
					echo "<td>Nombre</td>";
					echo "<td>Estado</td>";
				echo "</tr>";


foreach ($CultivoCollectorObj->showCultivos() as $c){
  echo "<div>";
     echo "<tr>";
 	echo "<td>";

  echo $c->getIdCultivo() . "  - " .$c->getNombre() . "  - " .$c->getEstado() ;  
  echo "&nbsp;";
  echo "<a href = 'updateCultivo.php?id=".$c->getIdCultivo()."&nombre=".$c->getNombre()."&estado=".$c->getEstado()."' > Editar</a>"; 
  echo "&nbsp;";
  echo "<a href = 'deleteCultivo.php?id=".$c->getIdCultivo()."' > Eliminar</a>";    
echo "</td>";  
echo "</tr>";                
  echo "</div>"; 
}





?>
