<?php
    session_start();
        if(!isset($_SESSION["user"])){
            header("location:../index.php");
        }
    require '../database/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <title>Desarrolladores</title>
    <link rel="stylesheet" href="../CSS/style.css" type="text/css">
    <link rel="stylesheet" href="../CSS/animate.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
  <nav class="navbar navbar-expand-md sticky-top shadow-sm">
    <ul class="nav justify-content-center">
        <li class="logo me-5"><img src="../img/logo.png" alt="Logo"></li>
        <li class="nav-item">
          <a class="nav-link" href="desarrolladores.php">
            <img src="../img/audiencia.png" alt="Desarrolladores">Desarrolladores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="usuarios.php">
              <img src="../img/agregar-usuario.png" alt="Usuarios">Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../portafolio.php">
              <img src="../img/portfolio.png" alt="Portafolio">Portfolio</a>
        </li>
        <li class="nav-item">
                <div class="dropdown">
                    <a class="dropdown-toggle nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../img/usuario.png">
                        <span><?php echo $_SESSION["user"];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-center" href="../salir.php">Cerrar Sessiónn</a></li>                        
                    </ul>
                </div>
        </li>
      </ul>
  </nav>
  <div class="container">
    <h1 class="my-4 display-4">Desarrolladores</h1>
    <div class="card p-4 mx-md-5 shadow border-0 mb-3">
      <h3 class="card-title text-center">Crear Desarrollador 
        <img src="../img/agregar.png">
      </h3>
      <form method="post" action="../crud/create.php" class="row g-3" id="crearDesarrollador">
        <div class="col-md-4">
          <label for="nombre" class="form-label fs-5">Nombre:</label>
          <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="apellidos" class="form-label fs-5">Apellidos:</label>
          <input type="text" name="apellidos" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="numIdentificacion" class="form-label fs-5">Número de Identificación:</label>
          <input type="text" name="numIdentificacion" class="form-control" required>
        </div>
        <div class="col-md-2">
          <label for="edad" class="form-label fs-5">Edad:</label>
          <input type="text" name="edad" class="form-control" required>
        </div>
        <div class="col-md-4">
          <label for="pais" class="form-label fs-5">País: </label>
          <input type="text" name="pais" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label for="perfil" class="form-label fs-5">Perfil de Desarrollador:</label>
          <input type="text" name="perfil" class="form-control" required>
        </div>
        <div class="col-12">
          <button class="btn btn-lg btn-primary shadow-sm" name="crearDesarrollador" type="submit">Crear Desarrollador</button>
          <button class="btn btn-lg shadow mx-md-3" id="editar" type="button" data-bs-toggle="modal" data-bs-target="#editarDesarrolador">Editar <img src="../img/editar.png" whidth="20px" height="20px"></button>
          <button class="btn btn-lg shadow" id="eliminar" type="button" data-bs-toggle="modal" data-bs-target="#EliminarDesarrollador">Eliminar <img src="../img/basura.png" whidth="20px" height="20px"></button>
        </div>
      </form>
    </div>

    
    <div class="d-flex flex-wrap mx-5">
      <?php
        $consulta = "SELECT nombre, apellidos, edad, pais, carrera, numero_identificación FROM `desarrolladores`";
        $query = mysqli_query($conexion, $consulta);
        $cont = 0;
        while($mostrar = mysqli_fetch_array($query)){
          $cont++;
      ?>
        <div class="card m-4 border-2 shadow bd-color" style="width: 18rem;">
          <div class="card-body">
            <h4 class="card-title text-primary"><?php echo $mostrar['nombre'];?></h4>
            <h5 class="card-subtitle text-primary mb-2"><?php echo $mostrar['apellidos'];?></h5>
              <ul class="card-text">
                <li class="">Edad: <?php echo $mostrar['edad'];?></li>
                <li class=""> Nacionalidad: <?php echo $mostrar['pais'];?></li>
                <li class="">Perfil: <?php echo $mostrar['carrera'];?></li>
                <li class="">ID: <?php echo $mostrar['numero_identificación'];?></li>
              </ul>
          </div>
        </div>
      <?php 
      } ?>
    </div>
  </div>
  <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item ms-4"><a class="text-muted" href="https://api.whatsapp.com/send?phone=573002203858&text=Hola">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp text-info" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
            </a></li>
            <li class="nav-item ms-4"><a class="text-muted" href="https://www.instagram.com">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram text-info" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg>
            </a></li>
            <li class="nav-item ms-4"><a class="text-muted" href="https://www.facebook.com">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook text-info" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
            </a></li>
        </ul>
          
        <p class="text-center text-muted fs-5">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bootstrap-fill text-info" viewBox="0 0 16 16">
                <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
                <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"/>
              </svg>
        </a>&copy; 2022 Marcela Sevilla</p>
  </footer>
  <?php 
    include('../includes/editar_Desarrollador.php');
    include('../includes/eliminar_Desarrollador.php');
  ?>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="../JS/bootstrap.min.js"></script>
  <script src="../JS/script.js"></script>
  
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
        })
    </script>
</body>
</html>