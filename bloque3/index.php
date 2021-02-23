
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h3>Formulario con get</h3>
		<form method="GET" action="recibeGet.php" >
			<label>Valor 1</label>
			<input type="text" name="valor1">
			<button>Enviar</button>
		</form>
		<hr>

		<h3>Formulario con post</h3>
		<form method="POST" action="recibePost.php">
			<label>Valor 1</label>
			<input type="text" name="valor1">
			<button>Enviar</button>
		</form>

		<hr>
		<h3>Formulario con post y archivos</h3>
		<form method="POST" action="recibeFiles.php" enctype='multipart/form-data'>
			
			<input type="file" name="miArchivo">
			<button>Enviar</button>
		</form>
	</body>
</html>

<!--
	Metodos de envio de datos 
	POST: Se envia al servidor
	GET: se envia al cliente 
-->