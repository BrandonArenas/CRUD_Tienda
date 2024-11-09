<?php
include('conexion.php');

$con = conexion();

$id=$_GET['idpro'];

$sql = "SELECT * FROM producto WHERE idpro='$id'";
$resultados = mysqli_query($con,$sql);
$mostrar = mysqli_fetch_array($resultados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<h1>MODIFICAR PRODUCTO</h1>
	<form action="modifipro.php" method="POST" enctype="multipart/form-data">
		<table>
			<input type="hidden" name="idpro" value="<?php echo $mostrar['idpro']?>">
			<tr>
				<td>PRODUCTO: </td>
				<td><input type="text" name="nompro" value="<?php echo $mostrar['nompro']?>"></td>
			</tr>
			<tr>
				<td>CATEGORIA: </td>
				<td><input type="text" name="catepro" value="<?php echo $mostrar['catepro']?>"></td>
			</tr>
			<tr>
				<td>PRECIO: </td>
				<td><input type="text" name="precipro" value="<?php echo $mostrar['precipro']?>"></td>
			</tr>
			<tr>
				<td>IMAGEN: </td>
				<td><img src="img/<?php echo $mostrar['imagen'];?>" style="width: 100px; height: 100px;"></td>
				<td><input type="file" name="imagen" value="img/<?php echo $mostrar['imagen']?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Guardar"></td>
			</tr>
		</table>
		<br>
		<a href="index.php"><input type="submit" name="btnregre" class="btn" value="Regresar"></a>
	</form>
	
</body>
<style type="text/css">
	body{
		background-color: #C5EAFF;
		font-family: sans-serif;
	}
	h1{
		background-color: #00A3FF;
		text-align: center;
	}
	form{
		font-size: 20px;
		padding: 5px;
	}
	input[type="text"]{
		font-size: 20px;
		padding: 5px;
	}
</style>
</html>