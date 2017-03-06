function admin("Nombre","password") {
	Nombre = document.getElementById("Nombre").value;
	password = document.getElementById("password").value;




	if (Nombre== ""||password== "") {
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(Nombre.length>30){
		alert("El nombre tiene demasiados caracteres");
		return false;
		
	}
	else if(password.length>20){
		alert("La clave tiene demasiados caracteres");
		return false;
		
	}

}
