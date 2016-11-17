<?php session_start(); 
  if(!isset($_SESSION['codigo_usuario']))
    header("Location: login_usuario.php");
?>
<html><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EasyCar Rent a Car</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <style type="text/css">

      #success_message{ display: none;}

    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <body>

<div class="container">

    <form class="well form-horizontal" action="#" method="post" name="contact_form" id="contact_form" onsubmit="return comprobar()">
        <fieldset>

        <!-- Form Name -->
        <legend>Haz tu reservación Online!</legend>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Primer Nombre</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="first_name" id="first_name" placeholder="Primer Nombre" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Appellido</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" id="last_name" placeholder="Appellido" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->
               <div class="form-group">
          <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" id="email" placeholder="E-Mail Address" class="form-control" type="text">
            </div>
          </div>
        </div>


        <!-- Text input-->
               
        <div class="form-group">
          <label class="col-md-4 control-label"># Telefónico</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="phone" id="phone" placeholder="(504)9999-1212" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->
              
        <div class="form-group">
          <label class="col-md-4 control-label">Dirección</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="address" id="adress" placeholder="Dirección" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->
         


<div class="form-group">
          <label class="col-md-4 control-label">Fecha Recogida</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          <input name="city" id="city" placeholder="DD/MM/YY" class="form-control" type="text">
            </div>
          </div>
        </div><div class="form-group">
          <label class="col-md-4 control-label">Ciudad</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="city" id="city" placeholder="Ciudad" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Select Basic -->
           
        <div class="form-group"> 
          <label class="col-md-4 control-label">Estado</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" id="state" class="form-control selectpicker">
              <option value=" ">Selecciona tu estado</option>
              <option>Francisco Morazan</option>
              <option>Tegucigalpa</option>
            </select>
          </div>
        </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Zip Code</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="zip" id="zip" placeholder="Zip Code" class="form-control" type="text">
            </div>
        </div>
        </div>

        <!-- Text input-->
        

        <!-- radio checks -->
         

        <!-- Text area -->
          
        <div class="form-group">
          <label class="col-md-4 control-label">Comentarios Adicionales </label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control" name="comment" id="comment" placeholder="Dejanos saber tus necesidades y comentarios"></textarea>
          </div>
          </div>
        </div>

        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por preferirnos.</div>



        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" id="submit" class="btn btn-warning">Enviar <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>



        </fieldset>
      
</div>
          
          <!-- /.container -->

 </form>
          <script type="text/javascript" src="js/jquery.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
          <script>

          function comprobar()
                {
                   var nombre = document.contact_form.first_name.value;
                   var nombre2 = document.contact_form.last_name.value;
                   var email = document.contact_form.email.value;
                   var phone = document.contact_form.phone.value;
                   var address = document.contact_form.address.value;
                   var city = document.contact_form.city.value;
                   var state = document.contact_form.state.value;
                   var zip = document.contact_form.zip.value;
                   var comment = document.contact_form.comment.value;

                   if (nombre.length > 30)
                   {
                      alert("Tu nombre es demasiado grande. Redúcelo.");
                      return false;
                   }

                   if (nombre.length <= 0)
                   {
                      alert("Debes escribir tu Nombre");
                      return false;
                   }
                   
                   if (nombre2.length <=0)
                   {
                      alert("Debes escribir tu Appellido");
                      return false;
                   }

                   if (email.length <=0)
                   {
                      alert("Debes escribir tu Dirección E-Mail");
                      return false;
                   }

                   if (phone.length <=0)
                   {
                      alert("Debes escribir tu número Telefónico");
                      return false;
                   }

                   if (address.length <=0)
                   {
                      alert("Debes escribir tu Dirección");
                      return false;
                   }

                   if (city.length <=0)
                   {
                      alert("Debes escribir tu Ciudad");
                      return false;
                   }

                   if (state.length <=0)
                   {
                      alert("Debes Seleccionar un Estado");
                      return false;
                   }

                   if (zip.length <=0)
                   {
                      alert("Debes escribir el código zip");
                      return false;
                   }

                   if (comment.length >=200)
                   {
                      alert("Tu comentario debe tener máximo 200 caracteres");
                      return false;
                   }
                   
                   return true;
                }
          </script>
  </body>
</html>