<?php
session_start();
?>

<html>
	<head>
		<title>Ingresar</title>
		<meta name= "viewport" content= "width = device-width, initial-escale=1.0">
		<meta http-equiv= "Content-Type" content= "text/html; charset=UTF-8" />
		<link rel= "stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel= "stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
<?php
	if (isset($_SESSION['Garcia'])){
	 echo "<p> Hola Usuario: (" . $_SESSION['Garcia']. ")  [<a href = 'logout.php' >Cerrar Sesión</a>]";
}
else {
			
?>
			<form method="POST" name = "flogin" id = "flogin" action= "login.php" >
				<label>Nombre de Usuario:</label>
				<input type="text" name="Nombre" id = "Nombre" class="form-control">
				<label>Contraseña:</label>
				<input type="text" name="Apellido" id="Apellido" class="form-control">
				<input type="submit" class="btn btn-success" value="Conectarse">
			</form>
<?php
	}

?>

	</body>
</html>
