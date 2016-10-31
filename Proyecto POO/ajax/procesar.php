<?php 
	switch ($_GET["accion"]) {
		case 'guardar':
			sleep(10);
			echo "Esta es la informacion que se recibe de index.php: <br>";

			
			echo "Nombre de la aplicacion: " . $_POST["txt-nombre"]."<br>";
			echo "Descripcion de la aplicacion: " . $_POST["txt-descripcion"]."<br>";
			echo "Fecha de publicacion: " . $_POST["txt-fecha"]."<br>";
			echo "Calificacion: " . $_POST["txt-calificacion"]."<br>";
			echo "Url de la aplicacion: " . $_POST["txt-url"]."<br>";
			echo "Tamaño de la aplicacion: " . $_POST["txt-tamano"]."<br>";
			echo "Icono de la aplicacion: " . $_POST["slc-icono"]."<br>";
			echo "Version de la aplicacion: " . $_POST["txt-version"]."<br>";
			echo "Fecha de actualizacion: " . $_POST["txt-fechaActualizacion"]."<br>";
			echo "Desarrollador de la aplicacion: " . $_POST["slc-desarrollador"]."<br>";
			$archivo = fopen("log_apps.csv","a");
				fwrite($archivo,$_POST["txt-nombre"] . "," .$_POST["txt-descripcion"] . "," .$_POST["txt-fecha"]. "," .$_POST["txt-calificacion"]
					. "," .$_POST["txt-url"]. "," .$_POST["txt-tamano"]. "," .$_POST["slc-icono"]. "," .$_POST["txt-version"]. "," .$_POST["txt-fechaActualizacion"]. "," .$_POST["slc-desarrollador"]
					."\n") ;
			fclose($archivo);
			break;
		case 'obtener':
			$archivo = fopen("log_apps.csv","r"); //Nombre archivo, modo de apertura: r, w, a
			while($linea = fgets($archivo))
				echo $linea."<br>";

			fclose($archivo);
			break;
		default:
			echo "Accion invalida";
			break;	
	

		}
?>