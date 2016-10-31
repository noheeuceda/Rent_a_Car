<?php 
	switch ($_GET["accion"]) {
		case '1':
			echo "Comprobación de factura: <br>";
				
				if (isset($_POST["txt-nombre-empleado"]))
					echo "Empleado: ". $_POST["txt-nombre-empleado"]."<br>";
				else 
					echo "No hay Empleado<br>";
				if (isset($_POST["txt-jefe"]))
					echo "Jefe: ". $_POST["txt-jefe"]."<br>";
				else 
					echo "No hay jefe<br>";
				if (isset($_POST["txt-sueldo"]))
					echo "Tipo de Sueldo: ". $_POST["slc-sueldo"]."<br>";
				else 
					echo "No hay Sueldo<br>";
				if (isset($_POST["txt-identidad"]))
					echo "Identidad: ". $_POST["txt-identidad"]."<br>";
				else 
					echo "No hay identidad<br>";
				if (isset($_POST["slc-cargo"]))
					echo "Cargo: ". $_POST["slc-cargo"]."<br>";
				else 
					echo "No hay dia cargo<br>";
							
			break;
					

		case '2':
			echo "Se imprime reserva";
			break;
		default:
			echo "Accion invalida";
			break;	
	

		}
?>