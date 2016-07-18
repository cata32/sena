<?php include ("inicio.php");?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIGüI</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>

    <nav class="navbar navbar">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" class="thumbnail">
            <img src="logopagina.png" alt="imagen"></a>
        </div>
            <ul class="nav navbar-nav navbar-right">
            <br>    
            <div class="btn-group">
            <button type="button" class=" btn-info btn-lg">Hola <?php echo $nombre; ?></button>
            <button type="button" class="btn-menu btn-info btn-lg dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="text-center" href="http://localhost/sena/principal.php">Mi cuenta</a></li>
                    <li><a class="text-center" href="http://localhost/sena/progreso_materia.php">Mi progreso</a></li>
                    <li><a class="text-center" href="http://localhost/sena/salir.php">Cerrar sesión</a></li>
                </ul>
            </div>
            </ul>
            <hr>
        </div>
    </nav>

    <div class="row">
            <div class="col-md-12">
                <h2><p class="text-center">Bienvenido <?php echo $nombre; ?> </p></h2>
            </div>
    </div>

    <div class="conteiner">
        <div class="row">
        <br>
        <br>
        <div class="col-md-8 col-md-offset-2">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>

  <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="materias.jpg" alt="areas">
            </div>

            <div class="item">
                <img src="matematicas.jpg" alt="matematicas">
            </div>

            <div class="item">
                <img src="niños.jpg" alt="Niños">
            </div>

            <div class="item">
                <img src="tablero.jpg" alt="Tablero">
            </div>
            <div class="item">
                <img src="ciencias.jpg" alt="Ciencias">
            </div>
            <div class="item">
                <img src="sociales.jpg" alt="Sociales">
            </div>
        </div>

  <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        </div>
        </div>
        </div>
        <br>
        <hr>
    <div class="conteiner">
    <div class="row">
    <br>
    <div class="col-md-12 col-md-offset-3">

    <div class="btn-group">
        <a href= "contenidoM.php" class="btn-area btn-lg" role="button">Matemáticas</a>
        <a href= "contenidoC.php" class="btn-area btn-lg" role="button">Ciencias</a>
        <a href= "contenidoE.php" class="btn-area btn-lg" role="button">Español</a>
        <a href= "contenidoS.php" class="btn-area btn-lg" role="button">Sociales</a>
        <a href= "contenidoI.php" class="btn-area btn-lg" role="button">Inglés</a>
    </div>

    </div>
    </div>
    </div>





     
    </body>
</html>
