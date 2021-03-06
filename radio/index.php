
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../radio/img/favicon.ico">

    <title>Radio Facultad de Bromatología</title>

    <!-- Bootstrap core CSS -->
    <link href="../radio/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../radio/template_css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
    .ejemplo-1 img {
        transition:  all 0.2s linear;
    }

    .ejemplo-1:hover img {
        transform: scale(1.1);/*Damos un ligero zoom a la imagen*/
        transform: rotate(5deg);
    }
</style>

<body id="fondo">
<!-- MENU DE NAVEGACION -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Radio</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about"   data-toggle="modal" data-target="#_programacion">Programacion</a></li>
                <li><a href="#contact" data-toggle="modal" data-target="#_staff">Staff</a></li>
                <li><a href="#contact" data-toggle="modal" data-target="#_contacto" data-whatever="@UNER - FBRO">Contacto</a></li>
                <li>
                    <div id="actual">
                        <div id="live"></div><span id="ahora" style="color: #ac2925; font-weight: bold;" >¡En ViVo!</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- FIN MENU DE NAVEGACION -->

<!-- CONTAINER -->
<div class="container">
    <div class="starter-template">
        <!-- <h1>Facultad de Bromatología - Radio</h1>
        <p class="lead">  Facultad Nacional de Entre Ríos.  </p> -->

        <div class="contenedor-img ejemplo-1">
            <a href="http://www.fb.uner.edu.ar/" target="_blank"> <img src="../radio/img/logo_gris.png" alt="..." class="img-rounded"></a>
        </div>







        <?php include '/include/audio.php' ?>
    </div>
</div>
<!-- CONTAINER -->

<!-- INCLUDES -->
<?php include '/include/programacion.php' ?>
<?php include '/include/staff.php' ?>
<?php include '/include/contacto.php' ?>
<!-- FIN INCLUDES -->


<!-- Bootstrap core JavaScript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../radio/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../radio/include/script/contacto.js"></script>

</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        