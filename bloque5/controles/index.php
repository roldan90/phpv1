<!DOCTYPE html>
<html>
<head>
	<title>Controles html y js ajax</title>
	<script src="jquery-3.5.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<h2>Controles de formulario con jquery</h2>
	<form id="frmValores">
		<label>Selecciona operacion</label>
		<select id="opcion" name="opcion">
			<option value="1">Suma</option>
			<option value="2">Resta</option>
			<option value="3">Multiplicacion</option>
			<option value="4">Division</option>
		</select>
		<br>
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
				/*let valor1 = $('#valor1').val();
				valor1 = parseInt(valor1);
				let valor2 = parseInt($('#valor2').val());
				console.log(valor1 + valor2);
				return false;*/

				let opcion = $('#opcion').val();
				let valor1 = parseInt($('#valor1').val());
				let valor2 = parseInt($('#valor2').val());
				let resultado = 0;
				switch(opcion) {
					case "1":
						resultado = valor1 + valor2;
						break;
					case "2":
						resultado = valor1 - valor2;
						break;
					case "3":
						resultado = valor1 * valor2;
						break;
					case "4":
						resultado = valor1 / valor2;
						break;
				}

				//swal("El resultado es " + resultado);
				swal(":D","El resultado es " + resultado,"success");

				return false;
			});
		});
	</script>
</body>
</html>