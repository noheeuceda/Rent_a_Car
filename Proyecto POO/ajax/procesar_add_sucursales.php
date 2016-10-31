<?php 
	switch ($_GET["accion"]) {
		case '1':
			echo "Comprobación de add: <br>";
				
				if (isset($_POST["txt-nombre-sucursal"]))
					echo "Sucursal: ". $_POST["txt-nombre-sucursal"]."<br>";
				else 
					echo "No hay sucursal<br>";
				if (isset($_POST["txt-direccion"]))
					echo "Direccion: ". $_POST["txt-direccion"]."<br>";
				else 
					echo "No hay Direccion<br>";
				if (isset($_POST["slc-tipo-auto"]))
					echo "Telefono: ". $_POST["txt-telefono"]."<br>";
				else 
					echo "No hay Telefono<br>";
				if (isset($_POST["slc-admin"]))
					echo "Administrador: ". $_POST["slc-admin"]."<br>";
				else 
					echo "No hay administrador<br>";		
			break;
					

		case '2':
			echo "Se imprime reserva";
			break;
		default:
			echo "Accion invalida";
			break;	
	

		}
?>