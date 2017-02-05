<?php
session_start();

$usuario = $_POST['Nombre']  .$_POST['Apellido'];

	$_SESSION['Garcia'] = $usuario;
	if (isset($_SESSION['Garcia'])){
		echo "Hola Usuario :";	
	}
	echo '(' . $_SESSION ['Garcia'] . ')';
	
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "&nbsp;";	
	echo "<a href = 'index.php' >Volver</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	//echo "<a href = 'menu.php?usuario=$usuario'> Menú </a>"; 
	echo "<a href = 'menu.php?usuario'> Menú </a>"; 	
	echo "&nbsp;";
	echo "&nbsp;"; 	
	echo "<a href = 'logout.php' >Salir</a>"; 
?>
