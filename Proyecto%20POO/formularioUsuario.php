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

  <form class="well form-horizontal" action=" " method="post" id="contact_form">
    <fieldset>

    <!-- Form Name -->
    <legend>Haz tu reservación Online!</legend>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">Primer Nombre</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="first_name" placeholder="Primer Nombre" class="form-control" type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">Appellido</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="last_name" placeholder="Appellido" class="form-control" type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->
           <div class="form-group">
      <label class="col-md-4 control-label">E-Mail</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
        </div>
      </div>
    </div>


    <!-- Text input-->
           
    <div class="form-group">
      <label class="col-md-4 control-label"># Telefónico</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input name="phone" placeholder="(504)9999-1212" class="form-control" type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->
          
    <div class="form-group">
      <label class="col-md-4 control-label">Dirección</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="address" placeholder="Dirección" class="form-control" type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->
     
    <div class="form-group">
      <label class="col-md-4 control-label">Ciudad</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input name="city" placeholder="Ciudad" class="form-control" type="text">
        </div>
      </div>
    </div>

    <!-- Select Basic -->
       
    <div class="form-group"> 
      <label class="col-md-4 control-label">Estado</label>
        <div class="col-md-4 selectContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="state" class="form-control selectpicker">
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
      <input name="zip" placeholder="Zip Code" class="form-control" type="text">
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
              <textarea class="form-control" name="comment" placeholder="Dejanos saber tus necesidades y comentarios"></textarea>
      </div>
      </div>
    </div>

    <!-- Success message -->
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por preferirnos.</div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4">
        <button type="submit" class="btn btn-warning">Enviar <span class="glyphicon glyphicon-send"></span></button>
      </div>
    </div>

    </fieldset>
    </form>
    </div>
        
        <!-- /.container -->

        <script type="text/javascript">

            $(document).ready(function() {
                $('#contact_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                    stringLength: {
                                    min: 2,
                                },
                                    notEmpty: {
                                    message: 'Por favor introduzca su primer nombre'
                                }
                            }
                        },
                         last_name: {
                            validators: {
                                 stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Por favor introduzca su apellido'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Por favor introduzca su E-Mail'
                                },
                                emailAddress: {
                                    message: 'Por favor introduzca una dirección valida'
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: 'Por favor introduzca su número telefónico'
                                },
                                phone: {
                                    country: 'Hn',
                                    message: 'Por favor introduzca un número valido con su código de Area'
                                }
                            }
                        },
                        address: {
                            validators: {
                                 stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Por favor introduzca su direccion'
                                }
                            }
                        },
                        city: {
                            validators: {
                                 stringLength: {
                                    min: 4,
                                },
                                notEmpty: {
                                    message: 'Por favor introduzca su ciudad'
                                }
                            }
                        },
                        state: {
                            validators: {
                                notEmpty: {
                                    message: 'Por favor seleccione un estado/región'
                                }
                            }
                        },
                        zip: {
                            validators: {
                                notEmpty: {
                                    message: 'Por favor introduzca el código zip'
                                },
                                zipCode: {
                                    country: 'Hn',
                                    message: 'Por favor introduzca un código zip valido'
                                }
                            }
                        },
                        comment: {
                            validators: {
                                  stringLength: {
                                    min: 10,
                                    max: 200,
                                    message:'Por favor introduzca al menos 10 caracteresy no más de 200'
                                },
                                notEmpty: {
                                    message: 'Por favor introduzca una descripción'
                                }
                                }
                            }
                        }
                    })
                    .on('success.form.bv', function(e) {
                        $('#success_message').slideDown({ opacity: "show" }, "slow")
                            $('#contact_form').data('bootstrapValidator').resetForm();

              
                        e.preventDefault();

                        var $form = $(e.target);


                        var bv = $form.data('bootstrapValidator');


                        $.post($form.attr('action'), $form.serialize(), function(result) {
                            console.log(result);
                        }, 'json');
                    });
            });
        </script>

  

</body></html>