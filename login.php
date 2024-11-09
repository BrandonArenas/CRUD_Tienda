<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<br>
	<form method="post">
		<h1>Iniciar sesion</h1>
		<input type="text" name="usuadmin" placeholder="Usuario">
		<br>
		<br>
		<input type="password" name="conadmin" placeholder="Contraseña">
		<br>
		<br>
		<input type="submit" name="btningresar" class="btn" value="Ingresar">
		<br>
		<br>
		<?php
		include("conexion.php");
		include("controlador.php");
		?>
	</form>	
</body>

<style type="text/css">
	body{
		background-image: url('fondotienda.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		text-align: center;
		font-family: sans-serif;
	}
	form{
		width: 350px;
		padding: 50px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background: #FFFFFF ;
		text-align: center;	

	}
	input[type="text"],input[type="password"]{
		font-size: 20px;
		padding: 5px;
	}
	input[type="submit"]{
		font-size: 15px;
		padding: 5px;
	}
</style>
</html>