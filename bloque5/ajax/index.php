<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
	<script src="jquery-3.5.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<form id="frmAnimal">
		<label>Nombre</label>
		<input type="text" id="nombre" name="nombre">
		<br>
		<button id="btnAgregarAnimal">Agregar</button>
	</form>

	<hr>

	<div id="cargaTabla"></div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnAgregarAnimal').click(function(){
				$.ajax({
					type: "POST",
					data: $('#frmAnimal').serialize(),
					url: "php.php",
					success:function(respuesta) {
						//fetch javascript ajax 
						respuesta = respuesta.trim();
						if (respuesta == 1) {
							$('#nombreAnimal').text($('#nombre').val());
							swal(":D", "Agregado con exito!", "success");
						} else {
							swal(":(", "No se pudo agregar! " + respuesta, "error");
						}
					}
				});

				return false;
			});
		});


		function cargarTablaAnimales() {
			$.ajax({
					url: "datosTabla.php",
					success:function(respuesta) {
						$('#cargaTabla').html(respuesta);
					}
			});
		}
	</script>

</body>
</html>