<!DOCTYPE html>
<html>
<head>
	<title>CRUD con PHP y MySQL</title>
	<?php include "dependencias.php"; ?>
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

	<div class="container">
		<h2>Tabla de personas de el curso de desarrollo de aplicaciones con php</h2>
		<div class="row">
			<div class="col-sm-4">
				<form method="POST" action="insertar.php">
					<label>Apellido paterno</label>
					<input type="text" name="paterno" class="form-control">
					
					<label>Apellido materno</label>
					<input type="text" name="materno" class="form-control">
					
					<label>Nombre</label>
					<input type="text" name="nombre" class="form-control">
					<br>
					<button class="btn btn-primary">Insertar</button>
				</form>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="table-responsive">
					<table>
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
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>