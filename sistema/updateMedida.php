<!DOCTYPE html>
<?php
session_start();
?>
<?php
	echo "Hola Usuario : ";
	echo '(' . $_SESSION ['Garcia'] . ')';
	echo "&nbsp;";
	echo "&nbsp;"; 

	echo "<a href = 'createMedida.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readMedida.php' >Volver</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'logout.php' >Salir</a>"; 

	$id =$_GET['id'];
	$n =$_GET['nombre'];
	$a =$_GET['estado'];

?>

<html lang ="en">
	<head>
		<title>MenuPrincipal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" >

	</head>

	<body>


<form method= "POST" class="form-horizontal" action= "saveMedida.php?usuario="<?php $usuario;?>  >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código:</label>
         <div class="col-xs-10">
             <input name = "Codigo" type="text" id= "Codigo" class="form-control"
 placeholder="Codigo" value="<?php echo $id;?>" readonly>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
             <input name = "Nombre" type="text" id= "Nombre" class="form-control" placeholder="Nombre" value="<?php echo $n;?>">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="control-label col-xs-2">Estado:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Estado" value="<?php echo $a;?>">
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


