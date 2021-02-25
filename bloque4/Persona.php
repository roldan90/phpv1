<?php 
	
	class Persona {
		public function eliminarPersona($idPersona) {
			$Conexion = new Conexion();
			$conectar = $Conexion->conectar();

			$sql = "DELETE FROM t_personas WHERE id_persona = '$idPersona'";
			$respuesta = mysqli_query($conectar, $sql);
			return $respuesta;
		}
	}

 ?>