<?php 

	class Calculadora {
		public function operacionesBasicas($opcion, $valor1, $valor2) {
			$resultado = 0;
			switch ($opcion) {
				case 'sumar':
					$resultado = $valor1 + $valor2;
					break;
				case 'restar':
					$resultado = $valor1 - $valor2;
					break;
				case 'dividir':
					$resultado = $valor1 / $valor2;
					break;
				case 'multiplicar':
					$resultado = $valor1 * $valor2;
					break;
			}
			return $resultado;
		}
	}


	//*********************************************

	$opcion = $_POST['opcion'];
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];

	$Calculadora = new Calculadora();

	echo $Calculadora->operacionesBasicas($opcion, $valor1, $valor2);
 ?>