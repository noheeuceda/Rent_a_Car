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
	        <li><a href="gerente.php">Flota </a></li>
	        <li class="active"><a href="#">Oficinas<span class="sr-only">(current)</span></a></li>
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
	            <li><a href="admin_empleados.php">Administrar Empleados</a></li>
	            <li><a href="#">Administrar Cuenta</a></li>
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
				<table id="div-sucursales">
					</table>
				 <button type="button" class="btn btn-warning" data-dismiss="modal" href="#" data-toggle="modal" data-target="#agregar">Agregar Oficina</button>
				<div id="agregar" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Agregar Oficina</h4>
				       
				      </div>
				      <div class="modal-body">
				        <table class = "table table-striped table-hover">
					<tr>
						<td>Nombre Sucursal:</td>
						<td>
							<input type="text" name="marca" id="txt-nombre-sucursal" class="form-control">
							<input type="hidden" name="" id="txt-codigo-sucursal" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Direccion Sucursal:</td>
						<td>
							<input type="text" name="" id="txt-direccion" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Telefono:</td>
						<td>
							<input type="text" name="" id="txt-telefono" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Administrador</td>
						<td>
							<select name="" id="slc-admin" class="form-control">
									
							</select>
						</td>
					</tr>
					
				</table>
				<!--- FIN DEL FORMULARIO -->
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <button id="btn-guardar" type="button" class="btn btn-primary">Guardar</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<br>				
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/accion_oficinas.js"></script>
    <script type="text/javascript">
    	$("#btn-guardar").click(function(evento){
    		//En caso de que el boton sea un anchor <a>
    		evento.preventDefault();
    	});

    </script>
</body>
</html>