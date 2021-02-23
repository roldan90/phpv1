<?php 
	
	$operacion = $_POST['tipoOperacion'];
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];

	switch ($operacion) {
		case 'sumar':
			echo "El resultado es " . ($valor1 + $valor2);
			break;
		case 'restar':
			echo "El resultado es " . ($valor1 - $valor2);
			break;
		case 'dividir':
			echo "El resultado es " . ($valor1 / $valor2);
			break;
		case 'multiplicar':
			echo "El resultado es " . ($valor1 * $valor2);
			break;
	}
 ?>

<br>
 <a href="index.php">Regresar al inicio :D</a>