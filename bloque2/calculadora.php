<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>

	<form method="POST" action="procesaCalculadora.php">
		<label>Selecciona una opcion </label>
		<select name="opcion">
			<option value="suma">Suma</option>
			<option value="resta">Resta</option>
			<option value="multiplicacion">Multiplicacion</option>
			<option value="division">Division</option>
		</select>
		<br>
		<label>Valor 1</label>
		<input type="text" name="valor1">
		<br>
		<label>Valor 2</label>
		<input type="text" name="valor2">
		<br>
		<button>Enviar</button>
	</form>

</body>
</html>