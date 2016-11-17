<?php 
include_once("../class/class_conexion.php");

switch ($_GET["accion"]) {
	case '1':

require 'subir_img_mysql/conexion.php';

	$id = $_GET['id'];
 
if ($id > 0){
    $consulta = "SELECT imagen, tipo_imagen FROM tbl_imagenes WHERE imagen_id = $id";
    $resultado= @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
 
    //otiene un valor parecido a "imagenes/nombre_imagen.jpg" de la bd
    $imagen = $datos['imagen'];
    $tipo = $datos['tipo_imagen'];

    header("Content-type: $tipo");
    $imagen;
}

	while($fila = $conexion->obtenerFila($consulta))
	{
		?>

		<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src=<?php echo "'".$imagen."'";?> alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">Kia Rio</a>
                                </h4>
                                <p>Descripción Aquí</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>


		<?php
	}
		
		break;


			default:
		# code...
		break;
}