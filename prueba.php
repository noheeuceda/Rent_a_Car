<!DOCTYPE html>
<html>
<head>
	<title>Ventana modal</title>
	<meta charset="UTF8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Titulo de la ventana modal</h4>
	      </div>
	      <div class="modal-body">
	        <body>
<?php echo "llega";
	?>	
				<div class="form">

				<ul class="tab-group">
				<li class="tab active"><a href="#signup">Sign Up</a></li>
				<li class="tab"><a href="#login">Log In</a></li>
				</ul>

				<div class="tab-content">
				<div id="signup">   
				  <h1>Registrate de forma Gratuita</h1>
				  
				  <form action="/" method="post">
				  
				  <div class="top-row">
				    <div class="field-wrap">
				      <label>
				        Primer Nombre<span class="req">*</span>
				      </label>
				      <input type="text" required autocomplete="off" />
				    </div>

				    <div class="field-wrap">
				      <label>
				        Apellido<span class="req">*</span>
				      </label>
				      <input type="text"required autocomplete="off"/>
				    </div>
				  </div>

				  <div class="field-wrap">
				    <label>
				      Correo Electronico<span class="req">*</span>
				    </label>
				    <input type="email"required autocomplete="off"/>
				  </div>
				  
				  <div class="field-wrap">
				    <label>
				      Crea una contraseña<span class="req">*</span>
				    </label>
				    <input type="password"required autocomplete="off"/>
				  </div>
				  
				  <button type="submit" class="button button-block"/>Enviar</button>
				  
				  </form>

				</div>

				<div id="login">   
				  <h1>Bienvenido de Nuevo!</h1>
				  
				  <form action="/" method="post">
				  
				    <div class="field-wrap">
				    <label>
				      Correo Electronico<span class="req">*</span>
				    </label>
				    <input type="email"required autocomplete="off"/>
				  </div>
				  
				  <div class="field-wrap">
				    <label>
				      Contraseña<span class="req">*</span>
				    </label>
				    <input type="password"required autocomplete="off"/>
				  </div>
				  
				  <p class="forgot"><a href="#">Olvidaste tu Contraseña?</a></p>
				  
				  <button class="button button-block"/>Log In</button>
				  
				  </form>

				</div>

				</div><!-- tab-content -->

				</div> <!-- /form -->
				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

				<script src="js/index.js"></script>



				</body>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary">Guardar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>