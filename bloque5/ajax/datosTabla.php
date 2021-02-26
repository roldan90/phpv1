<?php 
	$conexion = mysqli_connect('localhost','root','','phpv1');

	$sql = "SELECT id_animal, nombre FROM t_animales";
	$respuesta = mysqli_query($conexion, $sql);

	$cadena = "<table>
					<tr>
						<th>Id animal</th>
						<th>Nombre animal</th>
					<tr>";

	while ($mostrar = mysqli_fetch_array($respuesta)) {
		$cadena = $cadena . '<tr>'.
								'<td>' . $mostrar['id_animal'] . '</td>'.
								'<td>' . $mostrar['nombre'] . '</td>'.
							'</tr>'; 
	}

	echo $cadena . '</table>';

 ?>