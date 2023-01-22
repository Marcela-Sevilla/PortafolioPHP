<?php
require 'validar.php';
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
              <label for="inputususario" class="form-label fs-4">Usuario:</label>
              <input type="text" class="form-control rounded-pill" id="inputususario" name="usuario" placeholder="User name" pattern="^[a-zA-Z0-9-_\.]{3,15}$" title="Un usuario apropiado debe comenzar con letra, contener letras, números, guiones bajos y puntos, y tener entre 3 y 15 caracteres de longitud" required>
            </div>
            <div class="mb-3">
              <label for="InputPassword" class="form-label fs-4">Password:</label>
              <input type="password" class="form-control rounded-pill" id="InputPassword" name="password" placeholder="Password" pattern="[a-zA-Z0-9+*]{6,15}" title="Una contraseña válida debe estar compuesta por letras y/o números y tener una longitud entre 6 y 15 caracteres" required>
            </div>
            <div class="d-grid gap-2 my-4">
                <button class="rounded-pill fs-4 shadow-sm" type="submit" name="btnlogin">Ingresar</button>
            </div>
         </form>
         <p class="text-center">
           <a href="registrarse.php" class="fs-5 text-decoration-none">Registrarte aquí</a>
         </p>
         <?php if(isset($menError)){
            echo '<div class="alert alert-primary" role="alert">'.$menError.'</div>';
          }?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>