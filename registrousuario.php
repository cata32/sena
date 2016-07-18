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
                        <li><a class="text-center" href="#">Mi cuenta</a></li>
                        <li><a class="text-center" href="#">Mi progreso</a></li>
                        <li><a class="text-center" href="http://localhost/sena/salir.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </ul>
            <hr>
    </div>
    </nav>
    
    <div class="row">
            <div class="col-md-12">
                <h2><p class="text-center">Bienvenido Usuario</p></h2>
            </div>
    </div>
    <br>
     <form action="guardar.php" method="get" accept-charset="utf-8" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-4">Email:</label>
        <div class="col-xs-4">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Password:</label>
        <div class="col-xs-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Confirmar Password:</label>
        <div class="col-xs-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Confirmar Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Nombre:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Apellido:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">N° Identificación:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" id="document" name="document" placeholder="Identificacion">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Colegio:</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" id="colegio" name="colegio" placeholder="Colegio">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Tipo de Usuario:</label>
        <div class="col-xs-4">
            <select class="form-control" id="tipo" name="tipo">
                <option>Estudiante</option>
                 <option>Profesor</option>
                  <option>Padre de Familia</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4" >Telefono:</label>
        <div class="col-xs-4">
            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-4">Genero:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genero" value="male"> Maculino
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genero" value="female"> Femenino
            </label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-4 col-xs-4">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Limpiar">
        </div>
    </div>
    </form>
    </body>
</html>

