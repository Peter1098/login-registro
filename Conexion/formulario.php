<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Registro!</h1>
    	<input type="text" name="nombres" placeholder="Nombre completo">
    	<input type="text" name="apellidos" placeholder="Apellidos">
		<input type="text" name="usuario" placeholder="usuario">
		<input type="password" name="clave" placeholder="Contraseña">
    	
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>