<?php 
	switch ($_GET["accion"]) {
		case '1':
			?>
			 <tr>
			    <th>Nombre Sucursal:</th>
			    <th>Direccion:</th>
			    <th>Numero Telefonico:</th>
			    <th>Administrador:</th>			    		    	    
			  </tr>
			  <tr>
		    		<td>
		    			<?php
		    			 echo $fila["nombre_sucursal"];
		    			?>
		    		</td>
		    		<td>
	    			<?php
	    			 echo $fila["direccion"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["año_telefono"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["administradpr"];
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