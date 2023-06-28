
		</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Bienvenido!</h1>
    	<input type="text" name="usuario" placeholder="usuario">
    	<input type="password" name="clave" placeholder="clave">
		
		<a href="formulario.php">Registrase</a>
    	<input type="submit" name="init">
    </form>
        <?php 
        include("iniciar.php");
        ?>
</body>

		

</html>