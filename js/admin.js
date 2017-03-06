function admin(nombre,clave)
 {
	nombre = document.getElementById("nombre");
	clave = document.getElementById("clave");


	if (nombre== ""||clave== "") {
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(nombre.length>30){
		alert("El nombre tiene demasiados caracteres");
		return false;
		
	}
	else if(!expresion.test(correo)){
		alert("EL correo no es valido");
		return false;
		
	}
	else if(clave.length>20){
		alert("La clave tiene demasiados caracteres");
		return false;
		
	}

}
