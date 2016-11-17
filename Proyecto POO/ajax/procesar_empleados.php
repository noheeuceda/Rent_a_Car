
<?php 

	switch ($_GET["accion"]) {
		case '1':
		//imprimir carros de la bd

		include_once("../class/class_conexion.php");
		$conexion= new Conexion();
		$resultado = $conexion->ejecutarInstruccion(
			'SELECT a.codigo_auto, a.codigo_marca, a.codigo_modelo, a.codigo_tipo_auto, a.codigo_tipo_trans, a.kilometraje,
			 		a.numero_placa, a.estado, a.cantidad_combustible, b.codigo_marca, b.nombre_marca, c.codigo_modelo, c.nombre_modelo,
			 		c.año_modelo, d.codigo_tipo_trans, d.tipo_transmision, e.codigo_tipo_auto, e.nombre_tipo, e.capacidad, e.estilo
					FROM tbl_automovil a
					INNER JOIN tbl_marca_auto b
					INNER JOIN tbl_modelo c
					INNER JOIN tbl_tipo_transmision d
					INNER JOIN tbl_tipo_automovil e
					ON (a.codigo_marca= b.codigo_marca),
					ON (a.codigo_modelo= c.codigo_modelo),
					ON(a.codigo_tipo_trans= d.codigo_tipo_trans),
					ON(a.codigo_tipo_auto= e.codigo_tipo_auto)'
						);
		while ($fila = $conexion->obtenerFila($resultado)){
		?>


			  <tr>
			    <th>Nombre Empleado:</th>
			    <th>Apellido:</th>
			    <th>Tratamiento:</th>
			    <th>Edad:</th>
			    <th>E-mail:</th>
			    <th>Telefono:</th>
			    <th>Genero:</th>
			    <th>Jefe:</th>
			    <th>Numero Identidad:</th>    
			    <th>Nacionalidad:</th>
			    <th>Sueldo Base:</th>
			    <th>Cargo:</th>
			    		    	    
			  </tr>
			  <tr>
		    		<td>
		    			<?php
		    			 echo $fila["nombre"];
		    			?>
		    		</td>
		    		<td>
	    			<?php
	    			 echo $fila["apellido"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["tratamiento"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["edad"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["correo"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["telefono"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["genero"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["nombre"];//jefe
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["codigo_persona"];
	    			?>
	    		</td><td>
	    			<?php
	    			 echo $fila["nacionalidad"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["sueldo_base"];
	    			?>
	    		</td>
	    		<td>
	    			<?php
	    			 echo $fila["nombre_cargo"];
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