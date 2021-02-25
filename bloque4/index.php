<!DOCTYPE html>
<html>
<head>
	<title>CRUD con PHP y MySQL</title>
</head>
<body>

	<?php  
		include "Conexion.php";
		$Conexion = new Conexion();
		$conectar = $Conexion->conectar();

		//esto es solo una cadena de texto 
		$sql = "SELECT id_persona, 
					   paterno, 
					   materno, 
					   nombre 
				FROM t_personas 
				ORDER BY paterno";
		//en esta linea de codigo es donde si es un query valido
		$respuesta = mysqli_query($conectar, $sql);


	?>

	<form method="POST" action="insertar.php">
		<label>Apellido paterno</label>
		<input type="text" name="paterno">
		<br>
		<label>Apellido materno</label>
		<input type="text" name="materno">
		<br>
		<label>Nombre</label>
		<input type="text" name="nombre">
		<br>
		<button>Insertar</button>
	</form>

	<hr>

	<table>
		<caption>
			Tabla de personas de el curso de desarrollo de aplicaciones con php
		</caption>
		<thead>
			<tr>
				<th>id persona</th>
				<th>Apellido paterno</th>
				<th>Apellido materno</th>
				<th>Nombre</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
		<?php
			while($mostrar = mysqli_fetch_array($respuesta)) {
			$idPersona = $mostrar['id_persona']; 
		?>
			<tr>
				<td><?php echo $mostrar['id_persona']; ?></td>
				<td><?php echo $mostrar['paterno']; ?></td>
				<td><?php echo $mostrar['materno']; ?></td>
				<td><?php echo $mostrar['nombre']; ?></td>
				<td>
					<form method="POST" action="obtenerDatosActualizar.php">
						<input type="text" 
								name="idPersonaActualizar" 
								value="<?php echo $idPersona; ?>"
								hidden>
						<button>Actualizar</button>
					</form>
				</td>
				<td>
					<form method="POST" action="eliminar.php">
						<input type="text" 
								name="idPersonaEliminar" 
								value="<?php echo $idPersona; ?>"
								hidden>
						<button>Eliminar</button>
					</form>
				</td>
			</tr>
		<?php
			}  
		?>
		</tbody>
	</table>
</body>
</html>