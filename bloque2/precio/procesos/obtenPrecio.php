<?php 
	session_start();
	include "../clases/Precios.php";
	$Precios = new Precios();
	$tipoMaquina = $_POST['tipoMaquina'];
	$Precios->obtenPrecio($tipoMaquina);
	//funcion para regresar o ir a una ruta de mi proyecto

	header("location:../index.php");
 ?>