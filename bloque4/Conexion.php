
<?php 

	class Conexion {
		public function conectar() {
			$servidor = "localhost"; 
			$usuario = "root";
			$password = "";
			$baseDeDatos = "phpv1";

			$conexion = mysqli_connect($servidor,
									    $usuario,
										$password,
										$baseDeDatos);
			return $conexion;
		}
	}


	/*$Conexion = new Conexion();
	$conectar = $Conexion->conectar();

	if ($conectar) {
		echo "conectado";
	} else {
		echo "no conectado";
	}*/

 ?>