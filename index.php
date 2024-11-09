<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tienda</title>
</head>
<body>
	<header>
		<h1>EL OFERTON</h1>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="#">Contacto</a></li>
				<li><a href="#">Acerca de</a></li>								
			</ul>
		</nav>
		<a href="login.php"><img src="img/login.png" alt="Ingresar" style="width: 100px; height: 100px;" align="width"></a>
	</header>
	<div class="container">
		<?php
		include('conexion.php');

		$con = conexion();

		$sql = "SELECT * FROM producto";
		$resultados = mysqli_query($con,$sql);
		?>
		<?php
		while ($mostrar=mysqli_fetch_array($resultados)):		
			?>
			<div>
				<p><img src="img/<?php echo $mostrar['imagen'];?>"></p>
				<h2><?php echo $mostrar['nompro'];?></h2>
				<p><?php echo $mostrar['catepro'];?></p>
				<p><?php echo $mostrar['precipro'];?></p>
			</div>
			<?php
		endwhile;		
		?>
	</div>
</body>

<style type="text/css">
	body{
		font-family: sans-serif;
		margin: 0;
		background-color: #C5EAFF;
	}
	

	header{
		display: flex;
		justify-content: space-between;
		align-items: center;
		background-color:#2AC1CD;
		color: #000;
		padding: 10px;
		text-align: center;
	}
	nav{
		display: flex;
		justify-content: center;

	}
	nav ul {
		list-style: none;
		margin: 0;
		padding: 0;
	}
	nav ul li {
		margin: 0 1rem;
		display: inline-block;
		margin-right: 20px;
	}

	nav ul li a{
		font-weight: bold;
		color: #000;
		text-decoration: none;
	}
	
	div{
		padding: 10px;
		float: left;
		padding-right: 50px;
	}
	img{
		width: 150px;
		height: 150px;
	}

</style>

</html>