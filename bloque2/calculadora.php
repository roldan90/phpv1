<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>

	<form method="POST" action="procesaCalculadora.php">
		<label>Selecciona una opcion </label>
		<select name="opcion">
			<option value="sumar">Suma</option>
			<option value="restar">Resta</option>
			<option value="multiplicar">Multiplicacion</option>
			<option value="dividir">Division</option>
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