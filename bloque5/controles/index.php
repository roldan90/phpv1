<!DOCTYPE html>
<html>
<head>
	<title>Controles html y js ajax</title>
	<script src="jquery-3.5.1.min.js"></script>
</head>
<body>
	<h2>Controles de formulario con jquery</h2>
	<form id="frmValores">
		<label>Valor1</label>
		<input type="text" name="valor1" id="valor1">
		<br>
		<label>Valor2</label>
		<input type="text" name="valor2" id="valor2">
		<br>
		<button id="btnEnviar">Calcular</button>
	</form>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnEnviar').click(function(){
				let valor1 = parseInt($('#valor1').val());
				let valor2 = parseInt($('#valor2').val());

				console.log(valor1 + valor2);
				return false;
			});
		});
	</script>
</body>
</html>