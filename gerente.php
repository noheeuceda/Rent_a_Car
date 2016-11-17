<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8">
	<title>EasyCar::Gerente</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
	table {
				    font-family: arial, sans-serif;
				    border-collapse: collapse;
				    width: 100%;
				}

				td, th {
				    border: 1px solid #dddddd;
				    text-align: left;
				    padding: 8px;text-align: left;
				}
				tr:nth-child(odd) {
				    background-color: #dddddd;

				
				}
			</style>
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
	        <li class="active"><a href="#flota">Flota <span class="sr-only">(current)</span></a></li>
	        <li><a id="a-oficinas" href="oficinas.php">Oficinas</a></li>
	        <li class="dropdown">
	          <a href="clientes.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a id="btn-accion" href="#"></a></li>
	            <li><a href="reservaciones.php">Reservaciones</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Estadisticas</a></li>

	          </ul>
	        </li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="admin_empleados.php">Administrar Empleados</a></li>
	            <li><a href="#admin_modificar.php">Administrar Cuenta</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="index.php">Cerrar Cesión</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>



	<div class="container-fluid">
		<div class="row">
			<div class="alert alert-success col-lg-12" role="alert" id= "resultado">
			</div><br>
			<div class="col-lg-6">
				
				<div >
					<table id="div-flota">
					</table>

				</div>	
				 <button type="button"  class="btn btn-warning"  data-dismiss="modal" href="#" data-toggle="modal" data-target="#agregar">Agregar Auto</button>

				<div id="agregar" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Agregar Carro</h4>
				      </div>
				      <div class="modal-body">
				        <table class = "table table-striped table-hover">
					<tr>
						<td>Marca:</td>
						<td>
							<input type="text" name="marca" id="txt-marca-auto" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Modelo:</td>
						<td>
							<input type="text" name="" id="txt-modelo" class="form-control">
							<input type="hidden" name="" id="txt-codigo-auto" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Año Modelo:</td>
						<td>
							<input type="text" name="" id="txt-anio-modelo" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Tipo Auto:</td>
						<td>
							<select name="" id="slc-tipo-auto" class="form-control">
									
							</select>
						</td>
					</tr>
					<tr>
						<td>Capacidad Auto:</td>
						<td>
							<select name="" id="slc-capacidad-auto" class="form-control">
									
							</select>
						</td>
					</tr>
					<tr>
						<td>Estilo Auto:</td>
						<td>
							<select name="" id="slc-estilo-auto" class="form-control">
									
							</select>
						</td>
					</tr>
					<tr>
						<td>Tipo transmision:</td>
						<td>
							<select name="" id="slc-tipo-trans" class="form-control">
									
							</select>
						</td>
					</tr>
					<tr>
						<td>Placa:</td>
						<td>
							<input type="text" name="" id="txt-placa" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Kilometraje:</td>
						<td>
							<input type="text" name="" id="txt-kilometraje" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Estado del vehiculo:</td>
						<td>
							<input type="text" name="" id="txt-estado-vehiculo" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Cantidad combustuble:</td>
						<td>
							<input type="text" name="" id="txt-combustible" class="form-control">
						</td>
					</tr>
					
				</table>

				<!--- FIN DEL FORMULARIO -->
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button id="btn-guardar" type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<br>
				
			</div>
			
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/gerente.js"></script>
    <script type="text/javascript">
    	$("#btn-guardar").click(function(evento){
    		//En caso de que el boton sea un anchor <a>
    		evento.preventDefault();
    	});

    </script>
</body>
</html>