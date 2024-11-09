<?php
include('conexion.php');

$con = conexion();

$sql = "SELECT * FROM producto";
$resultados = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Productos</title>
</head>
<body>
	<h1 align="center">PRODUCTOS</h1>
	<a href="nuevo.php"><input type="submit" name="btnnue" class="btn" value="Nuevo producto"></a>
	<br>
	<br>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">PRODUCTO</th>
				<th scope="col">CATEGORIA</th>
				<th scope="col">PRECIO</th>
				<th scope="col">IMAGEN</th>
				<th scope="col">MODIFICAR</th>
				<th scope="col">ELIMINAR</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($mostrar=mysqli_fetch_array($resultados)):?>		
				<tr>
					<th scope="row"><?php echo $mostrar['idpro']?></th>
					<td><?php echo $mostrar['nompro']?></td>
					<td><?php echo $mostrar['catepro']?></td>
					<td><?php echo $mostrar['precipro']?></td>
					<td align="center"><img src="img/<?php echo $mostrar['imagen'];?>" style="width: 100px; height: 100px;"></td>

					<td><a href="modificar.php?idpro=<?php echo $mostrar['idpro']?>">Modificar</a></td>
					<td><a href="eliminar.php?idpro=<?php echo $mostrar['idpro']?>">Eliminar</a></td>	
				</tr>
				<?php endwhile;?>
		</tbody>
	</table>
	<br>
	<a href="index.php"><input type="submit" name="btnregre" class="btn" value="Regresar"></a>
	
</body>
</html>