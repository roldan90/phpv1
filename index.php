<?php
	# Con echo mostramos mensajes en pantalla  
	//echo 'Hola mundo';

	//Uso de variables en php
	//para declarar una variable en php se requiere el signo de pesos
	//y no es necesario poner un tipo de dato
	
	$nombreVariable = "";
	$nombreVariable2 = 2;
	$nombreVariable3 = 1.2;
	$nombreVariable4 = true; //false


	//signos de operaciones basicas 
	// + para sumar
	// - para restar
	// * para multiplicar
	// / para dividir 

	$valor1 = 5;
	$valor2 = 3;
	$resultado = $valor1 + $valor2;

	//echo $resultado;


	//concatenacion con php

	$palabra1 = "Programacion ";
	$palabra2 = "PHP";

	//echo $palabra1 . $palabra2;


	//estructura de control if 

	if (!true) {
		//echo "El if funciona";
	}

	if (false) {
		
	} else {
		//echo "El if es falso";
	}

	$color = "rojo";

	if ($color == "azul") {
		//echo "Es el color de Fer";
	} else if ($color == "negro") {
		//echo "Es el color de omar";
	} else  if ($color == "rojo") {
		//echo "Es el color del amor";
	}

	//operadores logicos

	//and = AND o &&
	//or = OR o ||
	//not = !

	$sexo = "M";
	$altura = 1.60;

	if ($sexo == 'M' OR $altura > 1.65) {
		//echo "Puede pelear en el ejercito";
	} else {
		//echo "no puedes porque yo lo digo";
	}


	//estructura de control switch

	$numeroDeCaso = 1;
	switch($numeroDeCaso) {
		case 1:
			//echo "Estas en el caso 1";
			break;
		case 2:
			//echo "Estas en el caso 2";
			break;
		default:
			//echo "No es ningun caso";
			break;
	}


	//estrucutra de control repetitiva
?>

<!--<table border="1">
	<tr>
		<th>Numeracion</th>
	</tr>
<?php  	

	for ($i=0; $i < 100; $i++) { 
		/*echo "<tr>
				<td>" . $i . "</td>
			  </tr>";*/
	}
?>

</table>-->

<?php  
	//estructura de control while
	
	$contador = 0;
	while ($contador <= 10) {
		#echo $contador ++;
		#echo "<br>";
	}
?>