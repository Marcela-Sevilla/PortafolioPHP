<?php
require '../database/conexion.php';
if(isset($_POST['elimanar'])){
    $id_usuario = $_POST['usuario'];
    $delete = "DELETE FROM `usuarios` WHERE id_usuario = '$id_usuario';";
    $query = mysqli_query($conexion, $delete);
    if($query){
        echo "<script> alert('EL usuario fue eliminado correctamente.');
            location.href = '../admin/usuarios.php';</script>";
    }
}
if(isset($_POST['elimanarDesarrollador'])){
    $idDesarrollador = $_POST['idDesarrollador'];
    $consultar = "SELECT id_desarrollador FROM `usuarios` WHERE id_desarrollador = '$idDesarrollador'";
    $query = mysqli_query($conexion, $consultar);
    $num_row = mysqli_num_rows($query);
    if($num_row !== 0){
        $delete = "DELETE FROM `usuarios` WHERE id_desarrollador = '$idDesarrollador'";
        $query = mysqli_query($conexion, $delete);
    }
    $delete = "DELETE FROM `desarrolladores` WHERE id_desarrollador = '$idDesarrollador'";
    $query = mysqli_query($conexion, $delete);
    if($query){
        echo "<script> alert('EL desarrollador fue eliminado correctamente.');
            location.href = '../admin/desarrolladores.php';</script>";
    }
}
?>