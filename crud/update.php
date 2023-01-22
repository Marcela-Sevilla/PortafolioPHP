<?php
require '../database/conexion.php';
if(isset($_POST['editarUsuario'])){
    $id_usuario = $_POST['usuario'];
    $rol = $_POST['rol'];
    $update = "UPDATE `usuarios` SET `id_rol`='$rol' WHERE id_usuario = '$id_usuario'";
    $query = mysqli_query($conexion, $update);
    if($query){
        echo "<script> alert('Rol de usuario actualizado.');
            location.href = '../admin/usuarios.php';</script>";
    }
}

// EDITAR DESARROLLADOR
if(isset($_POST['optiondesarrollador'])){
    $optiondesarrollador = $_POST['optiondesarrollador'];
    $consulta = "SELECT nombre, apellidos, edad, numero_identificación, pais, carrera FROM `desarrolladores` WHERE id_desarrollador = '$optiondesarrollador'";
    $query = mysqli_query($conexion, $consulta);
    while($row = mysqli_fetch_assoc($query)){
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $edad = $row['edad'];
        $numIdentificacion = $row['numero_identificación'];
        $pais = $row['pais'];
        $carrera = $row['carrera'];
        
    }
    echo '<div class="mb-3">
    <label for="nombre" class="form-label fs-5">Nombre:</label>
    <input type="text" class="form-control rounded-pill border-2" name="nombre" value="'.$nombre.'">
  </div>
  <div class="mb-3">
    <label for="apellidos" class="form-label fs-5">Apellidos:</label>
    <input type="text" class="form-control rounded-pill border-2" name="apellidos" value="'.$apellidos.'">
  </div>
  <div class="mb-3">
    <label for="edad" class="form-label fs-5">Edad:</label>
    <input type="text" class="form-control rounded-pill border-2" name="edad" value="'.$edad.'">
  </div>
  <div class="mb-3">
    <label for="numIdentificacon" class="form-label fs-5">Numero Identificación:</label>
    <input type="text" class="form-control rounded-pill border-2" name="numIdentificacon" value="'.$numIdentificacion.'">
  </div>
  <div class="mb-3">
    <label for="pais" class="form-label fs-5">Nacionalidad:</label>
    <input type="text" class="form-control rounded-pill border-2" name="pais" value="'.$pais.'">
  </div>
  <div class="mb-3">
    <label for="carrera" class="form-label fs-5">Perfil de Desarrollador:</label>
    <input type="text" class="form-control rounded-pill border-2" name="carrera" value="'.$carrera.'">
  </div>';
}

if(isset($_POST['editarDesarrollador'])){
    $idDesarrollador = $_POST['idDesarrollador'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $numIdentificacon = $_POST['numIdentificacon'];
    $pais = $_POST['pais'];
    $carrera = $_POST['carrera'];
    $update = "UPDATE `desarrolladores` SET `nombre`='$nombre',`apellidos`='$apellidos',`numero_identificación`='$numIdentificacon',`edad`='$edad',`carrera`='$carrera',`pais`='$pais' WHERE id_desarrollador = '$idDesarrollador'";
    $query = mysqli_query($conexion, $update);
    if($query){
        echo "<script> alert('Perfil de Desarrollador actualizado.');
            location.href = '../admin/desarrolladores.php';</script>";
    }
}
?>