
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
						<input type="text" name="valor1">
						<button>Enviar</button>
					</form>
				</div>
				<div class="col-sm-4">
					<h3>Formulario con post</h3>
					<form method="POST" action="recibePost.php">
						<label>Valor 1</label>
						<input type="text" name="valor1">
						<button>Enviar</button>
					</form>
				</div>
				<div class="col-sm-4">
					<h3>Formulario con post y archivos</h3>
					<form method="POST" action="recibeFiles.php" enctype='multipart/form-data'>
						<input type="file" name="miArchivo">
						<button>Enviar</button>
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