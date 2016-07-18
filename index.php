
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIGuI</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    </head>

    <body>
     <nav class="navbar navbar">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" class="thumbnail">
        <img src="logopagina.png" alt="imagen"></a>
    </div>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><button type="button" class="btn-Inicio btn-info btn-lg">Iniciar Sesion</button></a></li>
        </ul>
        <hr>
    </div>
    </nav>

     <div class="row">
            <div class="col-md-12">
                <h2><p class="text-center">Iniciar Sesión</p></h2>
            </div>
        </div>
        <br> <br />
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
        <div class="container">
            <div>
                <form class="formulario" action="login.php" method="POST" enctype="application/x-www-form-urlencoded">
                    <label class="col-md-4 col-md-offset-4">Usuario</label>
                    <input class="col-md-4 col-md-offset-4" id="user_name" name="user_name"></input>
                    <label class="col-md-4 col-md-offset-4">Contraseña</label>
                    <input class="col-md-4 col-md-offset-4" type="password" id="password" name="password"></input><br>
                    <div class="col-md-12">
                        <a class="col-md-4 col-md-offset-5"><button type="submit" class="btn-Enviar btn-info btn-lg">Enviar</button></a>
                    </div>

                    <div class="col-md-12">
                        <label class="col-md-4 col-md-offset-4">Comunicate con el encargado para realizar el   </label>
                        <a class="col-md-4 col-md-offset-4" href="registrousuario.php" >Registro</a>
                    </div>   
                </form>
            </div>
        </div>
        </div>
    </div>
      
    </body>
</html>
