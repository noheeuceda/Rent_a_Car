<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8">
	<title>EasyCar::Caja</title>
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
	      <a class="navbar-brand" href="#">EasyCar::Caja</a>
	    </div>

	    
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Settings</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Verificar Flote</a></li>
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
				<!--- INICIO DEL FORMULARIO seria: fecha, codigo factura,
				 email, nombre sucursal, direccion sucursal, telefono sucursal, cajero, cliente, dias de reserva, tipo de carro, extras, total-->
			
				<table class = "table table-striped table-hover">
					<tr>
						<td>Sucursal:</td>
						<td>
							<select name="" id="slc-sucursal" class="form-control">
								
							</select>
						</td>
					</tr>
					<tr>
						<td>Cajero:</td>
						<td>
							<select name="" id="slc-cajero" class="form-control">
								
							</select>
						</td>
					</tr>
					
						<td>Cliente:</td>
						<td>
							<input type="text" name="" id="txt-cliente" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Tipo de Carro:</td>
						<td>
							<select name="" id="slc-auto" class="form-control">
								
							</select>
						</td>
					</tr>
					<tr>
						<td>Tiempo de reserva:</td>
						<td>
							<input type="text" name="" id="txt-tiempo-reserva" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Dia Reserva:</td>
						<td>
							<input type="text" name="" id="txt-dia-reserva" class="form-control">
						</td>

					</tr>
					<tr>
						<td>Dia Entrega:</td>
						<td>
							<input type="text" name="" id="txt-dia-entrega" class="form-control">
						</td>

					</tr>
					<tr>
						<td>Extras:</td>
						<td>
							<input type="text" name="" id="txt-extras" class="form-control">
						</td>

					</tr>
					<tr>
						<td>Total:</td>
						<td>
							<input type="text" name="" id="txt-total" class="form-control">
						</td>

					</tr>
					
						<td colspan="2">
							<button id="btn-guardar" class="btn btn-primary">
								Guardar
							</button>
							<button id="btn-limpiar" class="btn btn-warning">
								Imprimir
							</button>
						</td>
					</tr>
				</table>
				<!--- FIN DEL FORMULARIO -->
			</div>
			<div class="col-lg-6">
				<div class="row" id="div-comprobacion-factura">
					
				</div>
			</div>
			
		</div>
	</div>
	<br><br>
	<hr>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/accion_cajero.js"></script>
    <script type="text/javascript">
    	$("#btn-guardar").click(function(evento){
    		evento.preventDefault();
    	});

    </script>
</body>
</html>