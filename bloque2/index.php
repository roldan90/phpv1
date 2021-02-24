<?php 

	//crear una clase co PHP
	
	class MiClase2 {
		public function miMetodo() {
			return "Vengo desde miclase2";
		}
	}

	class MiClase extends MiClase2 {
		//retornando un string
		public $usuario = "Administrador";

		public function llenaMetodo() {
			//self se usa para llamar a un metodo dentro de otro de manera estatica
			return self::miMetodo();
		}

		public function llenadoDos() {
			$miMetodoClase1 = self::miMetodo();
			$miMetodoClase2 = parent::miMetodo();

			return $miMetodoClase1 . " " . $miMetodoClase2;
		}

		public function miMetodo() {
			return $this->usuario;
		}

		//retornando un entero
		public function metodoEntero() {
			return 1;
		}

		//retornado de flotante
		public function metodoFloat() {
			return 5.5;
		}

		//retornado de boolean
		public function metodoBool() {
			return true;
		}

		//retornado de arreglo
		public function metodoArreglo() {
			$arreglo = array(1,2);
			return $arreglo;
		}

		public function sumaDosValores($valor1, $valor2) {
			return $valor1 + $valor2;
		}

		//desarrollar un metodo que haga operaciones basicas 
		//se debe agregar la opcion de suma, resta, multiplicacion y division
		//y debe retornar el resultado correspondiente, pidiendo dos numeros 

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
//******************************************************************
	//como crear un objeto en php
	$MiClase = new MiClase();
	//como llamo al metodo en php
	//print_r($MiClase->llenadoDos());
	/*echo $MiClase->sumaDosValores(5, 8);
	echo "<hr>";
	echo $MiClase->sumaDosValores(3, 10);*/

	echo $MiClase->operacionesBasicas('sumar', 10, 50);

	//funcionaes anonimas y promesas en relacion a php
 ?>