<?php
include('conexion.php');

$con = conexion();

$id = null;
$nombre = $_POST['nompro']; 
$categoria = $_POST['catepro']; 
$precio = $_POST['precipro'];
$imagen = $_FILES['imagen']['name'];

move_uploaded_file($_FILES["imagen"]["tmp_name"], "img/" . $imagen);

$sql = "INSERT INTO producto VALUES ('$id','$nombre','$categoria','$precio','$imagen')";
$resultados = mysqli_query($con,$sql);

if ($resultados) {
	Header("Location: productos.php");
}
?>