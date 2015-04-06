<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#verificar').on('click', function(event) {
            event.preventDefault();
            // $.post('../../Subir-Bajar Archivos/index.php', {opcion: '1',data: $('form').serialize(), email:'qwe', diagnostico:'Esta bien'})
            $.post('../Subir-Bajar Archivos1/index.php', {opcion: '1'})
            .done(function(data) {
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
                        <a href="ingreso.php">Ingreso</a>
                    </li>
                    <!--li>
                        <a href="cerrar.php">cerrar sesi&oacuten</a>
                    </li-->
                               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
      <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Bienvenidos a Unibox
                </h2>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h1>Listado De Cursos</h1>
                    </div>
                    <div class="panel-body">
        <!--un if parecido a del listar archivos pero con todos los cursos existentes, para eso debo crear en bd cursos-->
                        <!--?php
                        $CONSULTA =mysql_query('SELECT cod_curso FROM cursos');
                        while(){

                        }
                        ?-->
                        <div id="curso">
                        <ul></ul>
                        </div>
                        
                    </div>
                    </div>
            </div>
            </div>


        <!-- /.Lista De Archivos  ESTO SIRVE PARA LA VISUALIZACION DE LOS ARCHIVOS EN CADA PAGINA PERSONA DE CADA CURSO -->

                    <!--h1>Listado De Archivos</h1-->
<!--?php 
    $directorio = 'archivos';
    if($dir=opendir($directorio)){
        while($archivo = readdir($dir)){
            if($archivo != '.' && $archivo !='..'){
                echo "
                <a href=\"$directorio/$archivo\" TARGET=\"_blank\"><strong>$archivo</strong><br /></a>";
                //echo "<img src=\"$directorio/$archivo\"><br>";
            }
            }
            }
?-->
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script src="js/cursos.js"></script>
</body>

</html>
