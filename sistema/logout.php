<?php
session_start();


if (isset($_SESSION['Garcia'])){
	session_destroy();
	 echo "se ha destruido la sesion exitosamente";
	echo "<a href= 'index.php'>Volver</a>";
}
?>
