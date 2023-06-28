<?php 

include("con_db.php");

if (isset($_POST['init'])) {
    if (strlen($_POST['usuario']) >= 1 
	&& strlen($_POST['clave']) >= 1 ) {
	    $usuario = trim($_POST['usuario']);
	    $clave = trim($_POST['clave']);
		
		
		$consulta = "SELECT * FROM usuario WHERE usuario='usuario' AND clave='$clave'";
	  
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<?php
	    	header("Location: https://www.youtube.com/watch?v=OiC1rgCPmUQ&ab_channel=DuaLipa");
?>
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