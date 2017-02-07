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

$CultivoCollectorObj = new LoteCollector();

foreach ($CultivoCollectorObj->showLote() as $c){
  echo "<div>";
  echo $c->getIdCultivo() . "  - " .$c->getNombre() . "  - " .$c->getEstado() ;  
  echo "&nbsp;";
  echo "<a href = 'updateCultivo.php?id=".$c->getIdLote()."&nombre=".$c->getNombre()."&estado=".$c->getEstado()."' > Editar</a>"; 

  echo "&nbsp;";
  echo "<a href = 'deleteCultivo.php?id=".$c->getIdLote()."' > Eliminar</a>";                    
  echo "</div>"; 
}
