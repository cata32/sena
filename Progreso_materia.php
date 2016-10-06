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
            <button type="button" class=" btn-info btn-lg">Hola Usuario</button>
            <button type="button" class="btn-menu btn-info btn-lg dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="text-center" href="http://localhost:8088/sena/principal.php">Mi cuenta</a></li>
                    <li><a class="text-center" href="#">Mi progreso</a></li>
                    <li><a class="text-center" href="http://localhost:8088/sena/salir.php">Cerrar sesión</a></li>
                </ul>
            </div>
            </ul>
            <hr>
        </div>
    </nav>

    <div class="row">
            <div class="col-md-12">
                <h2><p class="text-area text-center">Mi progreso</p></h2>
            </div>
    </div>
    <br>
    <div class="conteiner">
        <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="btn-group">
            <button type="button" class="btn-tema">Tema 1</button>
            <button type="button" class="btn-tema">Tema 2</button>
            <button type="button" class="btn-tema">Tema 3</button>
            <button type="button" class="btn-tema">Tema 4</button>
            <button type="button" class="btn-tema">Tema 5</button>
            <button type="button" class="btn-tema">Tema 6</button>
            <button type="button" class="btn-tema">Tema 7</button>
            </div>
        </div>
        </div>
    </div>
    <br>
    <div class="conteiner">
        <div class="row">
    <div class="btn-group-vertical">
        <div class="col-md-2 col-md">

            <button type="button" class="btn-barra  btn-lg">Matemáticas</button>
            <button type="button" class="btn-barra  btn-lg">Ciencias</button>
            <button type="button" class="btn-barra  btn-lg">Español</button>
            <button type="button" class="btn-barra  btn-lg">Sociales</button>
            <button type="button" class="btn-barra  btn-lg">Inglés</button>
            <button type="button" class="btn-barra  btn-lg">Calificación</button>
        </div>
    </div>
        </div>
    </div>
    </body>
</html>