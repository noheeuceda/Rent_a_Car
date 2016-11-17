
<?php 

	switch ($_GET["accion"]) {
		case '1':
		//imprimir carros de la bd

		include_once("../class/class_conexion.php");
		$conexion = new Conexion();
		

		$empresa = $conexion->ejecutarInstruccion(
		'SELECT  nombre_marca, nombre_modelo, año_modelo , tipo_transmision , capacidad , estilo,  
		kilometraje, numero_placa, estado,  cantidad_combustiblel 
			FROM  autos'
		);
		



if($empresa){
	echo "wuju";
}else{
	echo 'basura';
}

		while ($fila = $conexion->obtenerFila($empresa)){
		?>


			  <tr>
			    <th>Marca:</th>
			    <th>Modelo:</th>
			    <th>Año Modelo:</th>
			    <th>Tipo:</th>
			    <th>Capacidad:</th>
			    <th>Estilo:</th>
			    <th>Tipo Transmision:</th>
			    <th>Kilometraje:</th>
			    <th>Placa:</th>    
			    <th>Estado Vehiculo:</th>
			    <th>Cantidad Combustible:</th>
			    		    	    
			  </tr>
			  <tr>
		    		<td>
		    			<?php
		    			 echo $fila["nombre_marca"];
		    			?>
		    		</td>
		    		<td>
	    			<?php
	    			 echo $fila["nombre_modelo"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["año_modelo"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["nombre_tipo"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["capacidad"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["estilo"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["tipo_transmision"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["kilometraje"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["numero_placa"];
	    			?>
	    		</td><td>
	    			<?php
	    			 echo $fila["estado"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["cantidad_combustible"];
	    			?>
	    		</td>
	    		<td>
	    			<a href="#" class="btn btn-info btn-xs" onclick="editarCarro(<?php echo $fila["codigo_auto"]; ?>)">
			          	<span class="glyphicon glyphicon-pencil"></span> Modificar
			        </a>
	    		</td>
	    		<td>
	    			<a href="#" class="btn btn-info btn-xs" onclick="eliminarCarro(<?php echo $fila["codigo_auto"]; ?>)">
			          	<span class="glyphicon glyphicon-trash"></span> Eliminar
			        </a>
	    		</td>
	    		<hr>

	  	<?php
	  		}
	  		$conexion->cerrarConexion();	
			
			break;
					

		case '2':
			//guardar en la bd
			
			

			break;


		case '3':
			//actualizar en la bd
			

			break;

		case '4':
			//modificar en la carro
			

			break;
		case '5':
			//eliminar en la carro
			

			break;				
		

		default:
			echo "Accion invalida";
			break;	
	

		}
?>