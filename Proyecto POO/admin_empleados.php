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
	        <li class="active"><a href="gerente.php">Flota <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Oficinas</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a id="btn-accion" href="#"></a></li>
	            <li><a href="reservaciones.php">Reservaciones</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Estadisticas</a></li>
	           
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



	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				 <button type="button" class="btn btn-default" data-dismiss="modal" href="#" data-toggle="modal" data-target="#agregar">Agregar Empleado</button>
				  <button type="button" class="btn btn-default" data-dismiss="modal" href="#" data-toggle="modal" data-target="#eliminar">Eliminar Empleado</button>
				 <button type="button" class="btn btn-default" data-dismiss="modal" href="#" data-toggle="modal" data-target="#myModal">Estadisticas</button>

				<div id="agregar" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Agregar Empleado</h4>
				       
				      </div>
				      <div class="modal-body">
				        <table class = "table table-striped table-hover">
					<tr>
						<td>Nombre Empleado:</td>
						<td>
							<input type="text" name="marca" id="txt-nombre-empleado" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Jefe:</td>
						<td>
							<input type="text" name="" id="txt-jefe" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Sueldo Neto:</td>
						<td>
							<input type="text" name="" id="txt-sueldo" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Numero Identidad:</td>
						<td>
							<input type="text" name="" id="txt-identidad" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Cargo</td>
						<td>
							<select name="" id="slc-cargo" class="form-control">
									
							</select>
						</td>
					</tr>
					<div class="row" id="div-comprobacion-empleados">
					
				</table>
				<!--- FIN DEL FORMULARIO -->
				     
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button id="btn-guardar" type="button" class="btn btn-primary">Guardar</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<br>


				
				<div id="eliminar" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        

				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Eliminar empleado</h4>
				      </div>
				      <div class="modal-body">
				        <table class = "table table-striped table-hover">
					<tr>
						<td>Numero Identidad:</td>
						<td>
							<input type="text" name="marca" id="identidad" class="form-control">
						</td>
					</tr>
					</table>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button id="btn-eliminar" type="button" class="btn btn-primary">Eliminar</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->				
			
				<h2></h2>
				

				
			
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/acciones_empleados.js"></script>
    <script type="text/javascript">
    	$("#btn-guardar").click(function(evento){
    		//En caso de que el boton sea un anchor <a>
    		evento.preventDefault();
    	});

    </script>
</body>
</html>