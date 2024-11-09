<?php
function conexion(){	
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="tienda";

	$conectar = mysqli_connect($servidor, $usuario, $password);
				mysqli_select_db($conectar, $bd);

	return $conectar;
}
?>