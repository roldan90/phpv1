
<?php  
	//nos sirve para le uso de sesiones
	session_start();
	//vamos a validar que la sesion este definidia
	$valorObtenido = 0;
	if (isset($_SESSION['resultadoPrecio'])) {
		$valorObtenido = $_SESSION['resultadoPrecio'];
		//retiramos el valor de la sesion para que quede indefinida 
		unset($_SESSION['resultadoPrecio']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Obten precio</title>
</head>
<body>
	<form method="POST" action="procesos/obtenPrecio.php">
		<label>Tipo de PC</label>
		<select name="tipoMaquina">
			<option value="pc">Escritorio</option>
			<option value="laptop">Laptop</option>
			<option value="tablet">Tablet</option>
		</select>
		<br>
		<button>Obtener precio</button>
	</form>

	<hr>

	<p>
		<?php
			if ($valorObtenido > 0) {
				echo $valorObtenido;  	
			}  
		?>
	</p>
</body>
</html>