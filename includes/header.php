<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Proyecto Agencia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/sweetalert2.js"></script>
</head>

<body>

    <header class="mb-3 shadow-sm bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="navbar-brand" href="admin.php">Proyecto Agencia</a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#">Inicio</a>
                        <a class="nav-item nav-link" href="adminRegiones.php">Regiones</a>
                        <a class="nav-item nav-link" href="adminDestinos.php">Destinos</a>
                      
                        <div class="dropdown collapse" >
                            <button class=" btn  btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a class="text-secondary" href="#"><i class="fas fa-sign-out-alt"></i></a>
                            </button>

                            <div class=" dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-light bg-dark" href="logout.php">Salir de sistema</a>
                                <a class="dropdown-item text-light bg-dark" href="formModificarPerfil.php?idUsuario=<?= $_SESSION['idUsuario'] ?>">Modificar Perfil</a>
                                <a class="dropdown-item text-light bg-dark" href="formCambiarPassword.php?idUsuario=<?= $_SESSION['idUsuario'] ?>">Cambiar contraseña</a>
                             </div>
                        </div>
                                <button class=" btn btn-dark">
                                <a class="text-secondary nav-item nav-link-1" href="formLogin.php"><i class="fas fa-sign-in-alt mr-3"></i> INGRESAR</a>
                               </button>    
                    </div>
                </div>
            </div>
        </nav>   
    </header>
