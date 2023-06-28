<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombres']) >= 1 
	&& strlen($_POST['usuario']) >= 1 
	&& strlen($_POST['apellidos']) >= 1 
	&& strlen($_POST['clave']) >= 1 
     ) {
	    $nombres = trim($_POST['nombres']);
	    $apellidos = trim($_POST['apellidos']);
		$usuario = trim($_POST['usuario']);
	    
		$clave = trim($_POST['clave']);
		
		
		$consulta = "INSERT INTO usuario( nombres, apellidos, usuario, clave) VALUES ('$nombres','$apellidos','$usuario','$clave')";
	  
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has Registrado Correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>