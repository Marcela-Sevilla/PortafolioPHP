<?php
require '../database/conexion.php';
if(isset($_POST['agregarUsuario'])){
    $nombre = $_POST['nombreUsuario'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    $id_desarrollador =$_POST['idDesarrollador'];
    $consulta = "SELECT * FROM `usuarios` WHERE id_desarrollador = '$id_desarrollador'";
    $query = mysqli_query($conexion, $consulta);
    $num_row = mysqli_num_rows($query);
    if($num_row == 0){
        $insert = "INSERT INTO usuarios(`nombre_usuario`, `password`, `id_desarrollador`, `id_rol`) VALUES ('$nombre', '$password', '$id_desarrollador', '$rol')";
        $query = mysqli_query($conexion, $insert);
            
        echo "<script> alert('Usuario Creado Exitosamente!!');
            location.href = '../admin/usuarios.php';</script>";
    
    }else{
       echo "<script> alert('Este Usuario ya Existe!!');
         location.href = '../admin/usuarios.php';</script>";
    }
}
if(isset($_POST['crearDesarrollador'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $numIdentificacion = $_POST['numIdentificacion'];
    $edad =$_POST['edad'];
    $pais = $_POST['pais'];
    $perfil = $_POST['perfil'];
    $consulta = "SELECT * FROM `desarrolladores` WHERE numero_identificación = '$numIdentificacion'";
    $query = mysqli_query($conexion, $consulta);
    $num_row = mysqli_num_rows($query);
    if($num_row == 0){
        $insert = "INSERT INTO `desarrolladores`(`nombre`, `apellidos`, `numero_identificación`, `edad`, `carrera`, `pais`) VALUES ('$nombre','$apellidos','$numIdentificacion','$edad','$perfil','$pais')";
        $query = mysqli_query($conexion, $insert);
            
        echo "<script> alert('Se ha creado un nuevo desarrollador exitosamente!!');
            location.href = '../admin/desarrolladores.php';</script>";
    
    }else{
       echo "<script> alert('Este desarrollador ya existe!!');
         location.href = '../admin/desarrolladores.php';</script>";
    }
}
?>