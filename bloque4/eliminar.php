<?php 
	include "Conexion.php";
	include "Persona.php";

	$idPersona = $_POST['idPersonaEliminar'];

	$Persona = new Persona();
	$respuesta = $Persona->eliminarPersona($idPersona);

	if ($respuesta) {
		//esta funcion sirve para redireccionar
		header("location:index.php");
	} else {
		echo $respuesta;
	}
 ?>