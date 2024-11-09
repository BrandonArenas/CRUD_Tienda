<?php
include('conexion.php');

$con = conexion();

$id = $_POST['idpro'];
$nombre = $_POST['nompro']; 
$categoria = $_POST['catepro']; 
$precio = $_POST['precipro'];
$imagen = $_FILES['imagen']['name'];

move_uploaded_file($_FILES["imagen"]["tmp_name"], "img/" . $imagen);

$sql = "UPDATE producto SET nompro='$nombre',catepro='$categoria',precipro='$precio',imagen='$imagen' WHERE idpro='$id'";
$resultados = mysqli_query($con,$sql);

if($resultados){
	Header("Location: productos.php");
}
?>