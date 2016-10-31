
<?php 
	switch ($_GET["accion"]) {
		case '1':
			echo "Comprobación de add: <br>";
				
				if (isset($_POST["txt-marca-auto"]))
					echo "Marca: ". $_POST["txt-marca-auto"]."<br>";
				else 
					echo "No hay sucursal<br>";
				if (isset($_POST["txt-modelo"]))
					echo "Modelo: ". $_POST["txt-modelo"]."<br>";
				else 
					echo "No hay Modelo<br>";
				if (isset($_POST["slc-tipo-auto"]))
					echo "Tipo de Carro: ". $_POST["slc-tipo-auto"]."<br>";
				else 
					echo "No hay Carro<br>";
				if (isset($_POST["slc-tipo-trans"]))
					echo "Tipo de Transmision: ". $_POST["slc-tipo-trans"]."<br>";
				else 
					echo "No hay Transmision<br>";
				if (isset($_POST["txt-placa"]))
					echo "Placa: ". $_POST["txt-placa"]."<br>";
				else 
					echo "No hay Placa<br>";		
			break;
					

		case '2':
			echo "Se imprime reserva";
			break;
		default:
			echo "Accion invalida";
			break;	
	

		}
?>