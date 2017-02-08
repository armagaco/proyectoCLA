<?php
session_start();
?>

 <!DOCTYPE html>
<html lang ="en">
	<head>
		<title>MenuPrincipal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	       
                <link href="../css/login.css" rel="stylesheet" >

	</head>

	<body>
<?php
 echo "<div id='panel'>";
$usuario = $_POST['Nombre']  .$_POST['Apellido'];

	$_SESSION['Garcia'] = $usuario;
	if (isset($_SESSION['Garcia'])){
          echo "<div id='welcome'>";
		echo "Hola Usuario :";
          echo "</div>";	
	}
	echo '(' . $_SESSION ['Garcia'] . ')';	
	 	
	echo "<div id='salir'><a href = 'logout.php' >Salir</a></div>"; 
 echo"</div>";

echo "<div class='opcion'>";
echo "<p><a href = 'index.php' >Volver</a></p>"; 
echo "</div>";
	
	//echo "<a href = 'menu.php?usuario=$usuario'> Menú </a>"; 
        echo "<div class='opcion'>";
	echo "<p><a href = 'menu.php?usuario'> Menú </a></p>";
        echo "</div>"; 
?>
</body>
</html>
