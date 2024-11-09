<?php
if (!empty($_POST["btningresar"])) {
	if (empty($_POST["usuadmin"]) and empty($_POST["conadmin"])) {
		echo "Campos vacios";
	}else{
		$usuario=$_POST["usuadmin"];
		$clave=$_POST["conadmin"];


		$sql=conexion()->query("SELECT * FROM adminis WHERE usuadmin='$usuario' and conadmin='$clave'");

		if ($verifica=$sql->fetch_object()) {
			Header("Location: productos.php");
		}else{
			echo '<div class=alert style="color:white;background-color:#FF0000;font-size: 20px;padding:5px">Usuario o contraseña incorrectos</div>';
		}
	}
}
?>
