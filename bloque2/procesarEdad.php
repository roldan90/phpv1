<?php 

	class Calculos {
		public function calculaEdad($fechaInicio, $fechaFin) { 
			$datetime1 = date_create('1990-04-01');
			$datetime2 = date_create('2021-02-24');
			$interval = date_diff($datetime1, $datetime2);
			
			//tratamos interval como un arreglo de objetos y obtenemos a
			//los años a partir de la flecha 

			return $interval->y;
		}
	}

	$Calculos = new Calculos();
	$fechaInicio = $_POST['fechaInicio'];
	$fechaFin = $_POST['fechaFin'];
	$edad = $Calculos->calculaEdad($fechaInicio, $fechaFin);
	echo $edad;

 ?>