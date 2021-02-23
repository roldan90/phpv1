
<html>
	<head>
		<title>Formularios</title>


		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- CDN - un CDN funciona solo con conexion a internet -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3>Formulario con get</h3>
					<form method="GET" action="recibeGet.php" >
						<label>Valor 1</label>
						<input type="text" name="valor1" class="form-control">
						<br>
						<button class="btn btn-primary">Enviar</button>
					</form>
				</div>
				<div class="col-sm-4">
					<h3>Formulario con post</h3>
					<form method="POST" action="recibePost.php">
						<label>Valor 1</label>
						<input type="text" name="valor1" class="form-control">
						<br>
						<button class="btn btn-primary">Enviar</button>
					</form>
				</div>
				<div class="col-sm-4">
					<h3>Formulario con post y archivos</h3>
					<form method="POST" action="recibeFiles.php" enctype='multipart/form-data'>
						<input type="file" name="miArchivo" class="form-control">
						<br>
						<button class="btn btn-primary">Enviar</button>
					</form>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<h3 class="text-center">Calculadora basica</h3>
					<form method="POST" action="calcular.php">
						<label>Tipo de operacion</label>
						<select name="tipoOperacion" class="form-control" required="">
							<option value="">Selecciona una opcion</option>
							<option value="sumar">Sumar</option>
							<option value="restar">Restar</option>
							<option value="dividir">Dividir</option>
							<option value="multiplicar">Multiplicar</option>
						</select>
						<label>Valor 1</label>
						<input 
							type="number" 
							name="valor1" 
							class="form-control" 
							required="">
						<label>Valor 2</label>
						<input type="number" name="valor2" class="form-control" required="">
						<br>
						<button class="btn btn-primary">Calcular</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

		

<!--
	Metodos de envio de datos 
	POST: Se envia al servidor
	GET: se envia al cliente 
-->