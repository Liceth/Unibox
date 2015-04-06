
<!DOCTYPE html>
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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

<?php if(isset($_GET['opcion']) ){?>
 <?php $opcion = $_GET['opcion'];?>
 <?php } ?>

   <?php if(isset($opcion) ){?>
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
                 
                <h1 class="page-header"><?= $opcion ?></h1>
               
                <h3>Coordinador</h3><br>
                    <li><?echo $v1." ".$v2 ;?> <br> </li>
                    <li>Oficina:<?echo $v3;?> <br></li>
                    <li>Tel&eacutefono:<?echo $v4;?> <br></li>
                    <li>Email:<?echo $v5;?> <br></li>
                    <li>P&aacutegina Web del curso:<?echo $v6;?> <br></li>
                    
                <h3>Parcelaci&oacuten</h3><br>
                     <!-- Listar si el value = 1-->

                <h2>Material Complementario</h2><br>
                <h3>Ayudas</h3><br>
                    <!-- Listar si el value = 2-->
                <h3>Ex&aacutemenes</h3><br>
                    <!-- Listar si el value = 3-->
                <h3>Talleres</h3><br>
                    <!-- Listar si el value = 4-->
                <h3>Otros</h3><br>
            </div>
        </div>

 <!-- Service List -->
 <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

    
<!-- Aqui falta: Mandar a una pagina estática del curso  y que no salga cargar documento ni registrar curso, ni cerrar sesion
        toca crear una pagina perfil2 para los visitantes :p
        esta pagina e creara apartir de querys jeejjee
-->

 <?php }else {
  header('location: index1.php');?>

  <?php } ?>

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
