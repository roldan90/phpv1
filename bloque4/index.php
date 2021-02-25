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
		?>
			<tr>
				<td><?php echo $mostrar['id_persona']; ?></td>
				<td><?php echo $mostrar['paterno']; ?></td>
				<td><?php echo $mostrar['materno']; ?></td>
				<td><?php echo $mostrar['nombre']; ?></td>
				<td></td>
				<td></td>
			</tr>
		<?php
			}  
		?>
		</tbody>
	</table>
</body>
</html>