<!DOCTYPE html>
<?php
session_start();
?>
<?php
 	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';
	echo "&nbsp;";
	echo "&nbsp;"; 

	echo "<a href = 'createCultivo.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readCultivo.php' >Menu</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'logout.php' >Salir</a>"; 
?>

<html lang ="en">
	<head>
		<title>MenuPrincipal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" >

	</head>

	<body>


<form method= "POST" class="form-horizontal" action= "newCultivo.php" id="cultivo" title="cultivo" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
             <input name = "Nombre" type="text" id= "Nombre" class="form-control" placeholder="Nombre">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEstado" class="control-label col-xs-2">Estado:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Estado">
         </div>
     </div>
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>

	
	</script>
        <script src="js/jquery.bootgrid.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src= "js/jquery.js" ></script>
	<script src= "js/bootstrap.min.js" ></script>


	</body>
</html>


