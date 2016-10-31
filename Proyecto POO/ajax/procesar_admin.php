<?php 
	switch ($_GET["accion"]) {
		case '1':
			echo "Comprobación de factura: <br>";
				
				if (isset($_POST["slc-sucursal"]))
					echo "Sucursal: ". $_POST["slc-sucursal"]."<br>";
				else 
					echo "No hay sucursal<br>";
				if (isset($_POST["txt-cliente"]))
					echo "Cliente: ". $_POST["txt-cliente"]."<br>";
				else 
					echo "No hay cliente<br>";
				if (isset($_POST["slc-auto"]))
					echo "Tipo de Carro: ". $_POST["slc-auto"]."<br>";
				else 
					echo "No hay Carro<br>";
				if (isset($_POST["txt-tiempo-reserva"]))
					echo "Tiempo reserva: ". $_POST["txt-tiempo-reserva"]."<br>";
				else 
					echo "No hay tiempo reserva<br>";
				if (isset($_POST["txt-dia-reserva"]))
					echo "Dia reserva: ". $_POST["txt-dia-reserva"]."<br>";
				else 
					echo "No hay dia reserva<br>";
				if (isset($_POST["txt-dia-entrega"]))
					echo "Dia entrega: ". $_POST["txt-dia-entrega"]."<br>";
				else 
					echo "No hay dia entrega<br>";
				if (isset($_POST["txt-extras"]))
					echo "Extras: ". $_POST["txt-extras"]."<br>";
				else 
					echo "No hay Extras<br>";			
			break;
					

		case '2':
			echo "Se imprime reserva";
			break;
		default:
			echo "Accion invalida";
			break;	
	

		}
?>