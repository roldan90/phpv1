<?php 

	class Precios {
		public function obtenPrecio($tipo) {
			$precio = 0;
			switch ($tipo) {
				case 'pc':
					$precio = 15000;
					break;
				case 'laptop':
					$precio = 12000;
					break;
				case 'tablet':
					$precio = 7000;
					break;
			}

			return $_SESSION['resultadoPrecio'] = $precio;
		}
	}
 ?>