<?php
session_start(); //Iniciamos o Continuamos la sesion
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unibox</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
   
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index1.php">Inicio</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="ingreso.php">Iniciar sesi&oacuten</a>
                        </li>
                       



                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
               
                <h2 class="page-header">Registro</h2> 
                  <form role="form" class="form form-horizontal">
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre:</label>
                            <input id="nombre" type="text" class="form-control" name="nombre">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Apellido:</label>
                            <input id="apellido"type="text" class="form-control" name="apellido">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Código:</label>
                            <input id="codigo"type="text" class="form-control" name="codigo">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Usuario:</label>
                            <input id="usuario"type="text" class="form-control" name="usuario">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>contraseña:</label>
                            <input id="contrasena"type="password" class="form-control" name="contrasena">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Departamento:</label>
                            <input id="dpto"type="text" class="form-control" name="dpto">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Oficina:</label>
                            <input id="oficina"type="text" class="form-control" name="oficina">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefono:</label>
                            <input id="telefono" type="text" class="form-control" name="telefono">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input id="email"type="text" class="form-control" name="email">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Página Web</label>
                            <input id="pagweb"type="text" class="form-control" name="pagweb">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                        <button type="submit" id="registro" class="btn btn-primary">Registrase</button>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>

 <!-- Service List -->
 <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
 <div class="row">
<!-- /.row -->




<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Unibox</p>
        </div>
    </div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
 <script src="js/register.js"></script>
</body>

</html>
