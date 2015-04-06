<?php
session_start(); //Iniciamos la Sesion o la Continuamos
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

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#cargar').on('click', function(event) {
         $.post('../Subir-Bajar Archivos/index.php', {opcion: '3',data: $('form').serialize()})
           // $.post('../Subir-Bajar Archivos/index.php', {opcion: '1'})
            .done(function(data) {
             //alert("Listado de archivos");
             //window.location = "index1.php";
                console.log(data);
            });
        });
    });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

             
            <?php 
                $valor_sesion = $_SESSION["var_sesion"]; 
                echo"Bienvenido <b>$valor_sesion</b>"; 
            ?>
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
                            <a href="perfil2.php">Perfil</a>
                        </li>
                         <li>
                        <a href="registro_curso.php">Registrar Cursos</a>
                        </li>
                        <li class="active">
                            <a href="cerrar.php">Cerrar Sesion</a>

                        </li>



                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

    
        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-8">
                <h2 class="page-header">Cargar Archivo</h2>
                  <form method="post" action="uploader.php" role="form" enctype="multipart/form-data" class="form form-horizontal">
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre:</label>
                            <input  type="text" class="form-control" name="nombre">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Asignatura:</label>
                            <input type="text" class="form-control" name="asignatura">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Descripción:</label>
                            <input type="text" class="form-control" name="descripcion">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     <div class="control-group form-group">
                        <div class="controls">
                            <label>Tipo De Archivo</label><br>
                            <input type="radio" name="tipo" value="1">Ayuda <br>
                            <input type="radio" name="tipo" value="2">Exámenes<br>
                            <input type="radio" name="tipo" value="3">Talleres<br>
                            <input type="radio" name="tipo" value="4">Otros<br>

                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="archivo">Archivo</label>
                            <input type="file" name="archivo"/><br />
                            <input type="submit" value="Subir Archivo" name="boton" id="cargar"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>

 <!-- Service List -->
 <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

    
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

</body>

</html>
