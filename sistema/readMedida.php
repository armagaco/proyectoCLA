<?php
session_start();
?>
<?php
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';


	echo "&nbsp;";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'createMedida.php' >Nuevo</a>";
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

include_once("MedidaCollector.php");

$MedidaCollectorObj = new MedidaCollector();

foreach ($MedidaCollectorObj->showMedidas() as $c){
  echo "<div>";
  echo $c->getIdMedida() . "  - " .$c->getNombre() . "  - " .$c->getEstado() ;  
  echo "&nbsp;";
  echo "<a href = 'updateMedida.php?id=".$c->getIdMedida()."&nombre=".$c->getNombre()."&estado=".$c->getEstado()."' > Editar</a>"; 

  echo "&nbsp;";
  echo "<a href = 'deleteMedida.php?id=".$c->getIdMedida()."' > Eliminar</a>";                    
  echo "</div>"; 
}





?>
