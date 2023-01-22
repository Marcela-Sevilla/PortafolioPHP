<?php
require 'database/conexion.php';
if(isset($_POST['registrarse'])){
    $numIdentificacion = $_POST['numIdentificacion'];
    $consulta = "SELECT id_desarrollador FROM desarrolladores WHERE numero_identificación = '$numIdentificacion'";
    $query = mysqli_query($conexion, $consulta);
    $num_row = mysqli_num_rows($query);
    if($num_row !== 0){
        $nombre = $_POST['nombreUsuario'];
        $password = $_POST['password'];
        while($row = mysqli_fetch_assoc($query)){
            $id_desarrollador = $row['id_desarrollador'];
        }
        $insert = "INSERT INTO usuarios(`nombre_usuario`, `password`, `id_desarrollador`, `id_rol`) VALUES ('$nombre', '$password', '$id_desarrollador', '2')";
        $query = mysqli_query($conexion, $insert);

        $mensaje = 'Usuario Creado exitosamente!! <a href="index.php">Ir al Login</a>';
    }else{
        $mensaje = "Error el número de identificación no es valido.";
    }
}
?>