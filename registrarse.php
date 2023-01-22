<?php
    require 'registrar.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body class="login">
  <div class="card shadow border-0 mx-5" style="max-width: 1000px;">
    <div class="row g-0">
      <div class="col-md-6">
        <img src="img/fondologin.jpg" class="img-fluid rounded-start h-100" alt="...">
      </div>
      <div class="col-md-6">
        <div class="card-body mx-3">
          <div class="card-title d-flex justify-content-center mt-3">
            <img src="img/logo.png" alt="logo" width="45px" height="45px">
            <h1>Login</h1>
          </div>
        <form method="post">
            <div class="mb-3">
                <label for="idDesarrollador" class="form-label fs-5">Número de Identificación:</label>
                <input type="text" class="form-control rounded-pill" name="numIdentificacion" placeholder="Número de Identificación">
            </div>
            <div class="mb-3">
                <label for="nombreUsuario" class="form-label fs-5">Nombre Usuario:</label>
                <input type="text" class="form-control rounded-pill" name="nombreUsuario" placeholder="nombre de usuario">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fs-5">Contraseña:</label>
                <input type="password" class="form-control rounded-pill" name="password" placeholder="contraseña">
            </div>
            <div class="d-grid gap-2 my-4">
                <button class="rounded-pill fs-4 shadow-sm" type="submit" name="registrarse">Registrarse</button>
            </div>
        </form>
         <?php if(isset($mensaje)){
            echo '<div class="alert alert-primary" role="alert">'.$mensaje.'</div>';
          }?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>