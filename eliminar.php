<?php
include('conexion.php');
$con = conexion();

$id=$_GET['idpro'];

$sql = "DELETE FROM producto WHERE idpro='$id'";
$resultados = mysqli_query($con,$sql);

if($resultados){
	Header("Location: productos.php");
}
?>