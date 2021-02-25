<?php 
	include "Conexion.php";
	include "Persona.php";

	$idPersona = $_POST['idPersonaActualizar'];
	$Persona = new Persona();
	$datosPersona = $Persona->obtenerDatosPersona($idPersona);
	$id_persona = $datosPersona['id_persona'];
	$paterno = $datosPersona['paterno'];
	$materno = $datosPersona['materno'];
	$nombre = $datosPersona['nombre'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Actualizar persona</title>
 </head>
 <body>
 	<form method="POST" action="actualizar.php">
 		<input type="text" hidden="" name="idPersona" value="<?php echo $id_persona; ?>"> 
 		<label>Apellido paterno</label>
		<input type="text" name="paterno" value="<?php echo $paterno; ?>">
		<br>
		<label>Apellido materno</label>
		<input type="text" name="materno" value="<?php echo $materno; ?>">
		<br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		<br>
		<button>Actualizar</button>
 	</form>
 </body>
 </html>