<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8">
	<title>EasyCar::Gerente</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">EasyCar::Gerente</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Flota <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Oficinas</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a id="btn-accion" href="#"></a></li>
	            <li><a href="#">Reservaciones</a></li>
	            <li><a href="#"></a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#"></a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#"></a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Settings</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Administrar Empleados</a></li>
	            <li><a href="#">Administrar Cuenta</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Cerrar Cesión</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<div class="alert alert-success" role="alert">
		<!-- Imprimir en esta seccion las verificaciones.-->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">

				<a href="#" data-toggle="modal" data-target="#myModal">Agregar Auto</a>
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Agregar Carro</h4>
				      </div>
				      <div class="modal-body">
				        <p>Puedo escribir aqui lo que sea</p>
				        <table class = "table table-striped table-hover">
					<tr>
						<td>Marca Automovil:</td>
						<td>
							<input type="text" name="marca" id="marca-automovil" class="form-control">
						</td>
					</tr>
					<tr>
						<td>:</td>
						<td>
							<input type="text" name="" id="txt-descripcion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Fecha de publicación:</td>
						<td>
							<input type="text" name="" id="txt-fecha-publicacion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Calificación promedio:</td>
						<td>
							<input type="text" name="" id="txt-calificacion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>URL:</td>
						<td>
							<input type="text" name="" id="txt-url" class="form-control">
						</td>

					</tr>
					<tr>
						<td>Tamaño archivo:</td>
						<td>
							<input type="text" name="" id="txt-tamanio" class="form-control">
						</td>

					</tr>
					<tr>
						<td>Icono:</td>
						<td>
							<select name="" id="slc-icono" class="form-control">
									
							</select>
						</td>
					</tr>
					<tr>
					
						<td>Categorias:</td>
						<td>
							
						</td>
					</tr>
					<tr>
						<td>Version:</td>
						<td>
							<input type="text" name="" id="txt-version" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Fecha de actualización:</td>
						<td>
							<input type="text" name="" id="txt-fecha-actualizacion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Desarrollador:</td>
						<td>
							<select name="" id="slc-desarrollador" class="form-control">
								
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button id="btn-guardar" class="btn btn-primary">
								Guardar
							</button>
							<button id="btn-limpiar" class="btn btn-warning">
								Limpiar
							</button>
						</td>
					</tr>
				</table>
				<!--- FIN DEL FORMULARIO -->
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button type="button" class="btn btn-primary">Guardar</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!--- INICIO DEL FORMULARIO -->
				<h2></h2>
				
			</div>
			<!--Listado de las aplicaciones-->
			<div class="col-lg-6">
				<div class="row" id="div-lista-aplicaciones">
					
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
    <script type="text/javascript">
    	$("#btn-accion").click(function(evento){
    		//En caso de que el boton sea un anchor <a>
    		evento.preventDefault();
    		alert("Acccion");
    	});

    </script>
</body>
</html>