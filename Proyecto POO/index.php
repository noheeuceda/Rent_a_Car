<?php
	include_once("class/class_producto.php");
	include_once("class/class_aplicacion.php");
	include_once("class/class_icono.php");
	include_once("class/class_usuario.php");
	include_once("class/class_desarrollador.php");
	include_once("class/class_comentario.php");

	$iconos[]=new Icono("http://localhost/playstore_solucion/img/icono1.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore_solucion/img/icono2.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore_solucion/img/icono3.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore_solucion/img/icono4.png",100,100);
	$iconos[]=new Icono("http://localhost/playstore_solucion/img/icono5.png",100,100);


	$comentarios[] = new Comentario("Comentario 1",new Usuario("Usuario1","usuario1@gmail.com"),"DEscripcion comentario 1","12-12-2012");
	$comentarios[] = new Comentario("Comentario 2",new Usuario("Usuario2","usuario2@gmail.com"),"DEscripcion comentario 2","12-12-2012");
	$comentarios[] = new Comentario("Comentario 3",new Usuario("Usuario3","usuario3@gmail.com"),"DEscripcion comentario 3","12-12-2012");
	$comentarios[] = new Comentario("Comentario 4",new Usuario("Usuario4","usuario4@gmail.com"),"DEscripcion comentario 4","12-12-2012");
	$comentarios[] = new Comentario("Comentario 5",new Usuario("Usuario5","usuario5@gmail.com"),"DEscripcion comentario 5","12-12-2012");


	$desarrolladores[] = new Desarrollador("Desarrollador 1", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 2", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 3", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 4", "desarrollador1@gmail.com","http://desarrollador.com");
	$desarrolladores[] = new Desarrollador("Desarrollador 5", "desarrollador1@gmail.com","http://desarrollador.com");
	
	$categorias[] = "Categoria 1";
	$categorias[] = "Categoria 2";
	$categorias[] = "Categoria 3";
	$categorias[] = "Categoria 4";
	$categorias[] = "Categoria 5";
	
	$estatus[] = "Estatus 1";
	$estatus[] = "Estatus 2";
	$estatus[] = "Estatus 3";
	$estatus[] = "Estatus 4";
	$estatus[] = "Estatus 5";

	$aplicaciones[] = new Aplicacion("Aplicacion 1",
					"Descripcion aplicacion 1",
					"12-12-2012" ,
					4,
					$comentarios,
					"C:\wamp\www\unidad 1\playstore_solucion\imgaplicacion1.apk",
					2342,
					$iconos[0],
					$categorias[0],
					$estatus[0],
					"1.0",
					"12-12-2012",
					$desarrolladores[0]);

	$aplicaciones[] = new Aplicacion("Aplicacion 2",
					"Descripcion aplicacion 2",
					"12-12-2012" ,
					4,
					$comentarios,
					"http://localhost/playstore_solucion/apks/aplicacion2.apk",
					2342,
					$iconos[1],
					$categorias[1],
					$estatus[1],
					"1.0",
					"12-12-2012",
					$desarrolladores[1]);

	$aplicaciones[] = new Aplicacion("Aplicacion 3",
					"Descripcion aplicacion 3",
					"12-12-2012" ,
					5,
					$comentarios,
					"http://localhost/playstore_solucion/apks/aplicacion3.apk",
					2342,
					$iconos[2],
					$categorias[2],
					$estatus[2],
					"1.0",
					"12-12-2012",
					$desarrolladores[2]);

	$aplicaciones[] = new Aplicacion("Aplicacion 4",
					"Descripcion aplicacion 4",
					"12-12-2012" ,
					3,
					$comentarios,
					"http://localhost/playstore_solucion/apks/aplicacion4.apk",
					2342,
					$iconos[3],
					$categorias[3],
					$estatus[3],
					"1.0",
					"12-12-2012",
					$desarrolladores[3]);

	$aplicaciones[] = new Aplicacion("Aplicacion 5",
					"Descripcion aplicacion 5",
					"12-12-2012" ,
					2,
					$comentarios,
					"http://localhost/playstore_solucion/apks/aplicacion5.apk",
					2342,
					$iconos[4],
					$categorias[4],
					$estatus[4],
					"1.0",
					"12-12-2012",
					$desarrolladores[4]);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oh no, Examen práctico</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

</head>
<body>
	<div class="alert alert-success" role="alert">
		<!-- Imprimir en esta seccion las verificaciones.-->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<!--- INICIO DEL FORMULARIO -->
				<form action="index.php" method="GET">
					<table class = "table table-striped table-hover">
						<tr>
							<td>Nombre aplicación:</td>
							<td>
								<input type="text" name="txt-nombre" id="txt-nombre" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Descripción:</td>
							<td>
								<input type="text" name="txt-descripcion" id="txt-descripcion" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de publicación:</td>
							<td>
								<input type="text" name="txt-fecha" id="txt-fecha" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Calificación promedio:</td>
							<td>
								<input type="text" name="txt-calificacion" id="txt-calificacion" class="form-control">
							</td>
						</tr>
						<tr>
							<td>URL:</td>
							<td>
								<input type="text" name="txt-url" id="txt-url" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Tamaño archivo:</td>
							<td>
								<input type="text" name="txt-tamano" id="txt-tamano" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Icono:</td>
							<td>
								<select name="slc-icono" id="slc-icono" class="form-control">
									<?php 
									for ($i=0;$i<count($iconos);$i++)
										echo '<option value="'.$iconos[$i]->getURLImagen().'">'.$iconos[$i]->getURLImagen().'</option>';
									?>		
								</select>
							</td>
						</tr>
						<tr>
							<td>Categorias:</td>
							<td>
								<?php
									for($i=0;$i<count($categorias);$i++)
										echo '<label><input type="checkbox" name="chk-categorias[]" id="categorias[]" 
										value="'.$categorias[$i].'">'.$categorias[$i].'</label><br>';
								
								?>
							</td>
						</tr>
						<tr>
							<td>Version:</td>
							<td>
								<input type="text" name="txt-version" id="txt-version" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de actualización:</td>
							<td>
								<input type="text" name="txt-fechaActualizacion" id="txt-fechaActualizacion" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Desarrollador:</td>
							<td>
								<select name="slc-desarrollador" id="slc-desarrollador" class="form-control">
									<?php 
										for ($i=0;$i<count($desarrolladores);$i++)
											echo '<option value="'.$desarrolladores[$i]->getNombreUsuario().'">'.$desarrolladores[$i]->getNombreUsuario().'</option>';
									?>	
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button  id="btn-guardar" 
								class="btn btn-primary"  data-loading-text="Guardando..." autocomplete="off">Guardar</button>
								<button id="btn-obtener-informacion" class="btn btn-danger"  
								data-loading-text="Obteniendo informacion..." autocomplete="off">Obtener informacion</button>
								<img id="img-loading" src="img/loading.gif" style="display:none;">
							</td>
						</tr>
					</table>
				</form>
				<!--- FIN DEL FORMULARIO -->
			</div>
			<!--Listado de las aplicaciones-->
			
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div id="div-respuesta" class="well"></div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){

			$("#btn-guardar").click(function(){
				
				$("#btn-guardar").button("loading");
				$("#img-loading").fadeIn(200);
				var parametros = "txt-nombre= "+$("#txt-nombre").val()+"&"+"txt-descripcion="+$("#txt-descripcion").val()+"&"+"txt-fecha="+$("#txt-fecha").val()+"&"+
				"txt-calificacion="+$("#txt-calificacion").val()+"&"+"txt-url="+$("#txt-url").val()+"&"+"txt-tamano="+$("#txt-tamano").val()+"&"+
				"slc-icono="+$("#slc-icono").val()+"&"+"txt-version="+$("#txt-version").val()+"&"+"txt-fechaActualizacion="+$("#txt-fechaActualizacion").val()+"&"+
				"slc-desarrollador="+$("#slc-desarrollador").val(); 
				//URL?parametro1=valor1&parametro2=valor2&.....parametroN=valorN
				alert("Informacion que se enviara: " + parametros);
				$.ajax({
					url:"ajax/procesar.php?accion=guardar",
					method:"POST",
					data: parametros,
					success:function(respuesta){
						
						$("#img-loading").fadeOut(200);
						$("#btn-guardar").button("reset");
						$("#div-respuesta").html(respuesta);

					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			});
			$("#btn-obtener-informacion").click(function(){
				$("#btn-obtener-informacion").button("loading");
				$("#img-loading").fadeIn(200);
				$.ajax({
					url:"ajax/procesar.php?accion=obtener",
					method:"POST",
					success:function(respuesta){
						$("#img-loading").fadeOut(200);
						$("#btn-obtener-informacion").button("reset");
						$("#div-respuesta").html(respuesta);
					},
					error:function(){
						alert("Ocurrio un error.");
					}
				});	
			});			
		});
	</script>
</body>
</html>