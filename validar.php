<?php
require 'database/conexion.php';
if(isset($_POST['btnlogin'])){
    $usuario= $_POST["usuario"];
    $password= $_POST["password"];
    $sqlUser = "SELECT usuarios.nombre_usuario, usuarios.password, rol.rol FROM usuarios INNER JOIN rol ON rol.id_rol = usuarios.id_rol";
    $query = mysqli_query($conexion, $sqlUser);
    if(!empty($query)){
        while ($datos = mysqli_fetch_array($query)) {
            if(($datos['nombre_usuario']==$usuario) && ($datos['password']==$password)){
                session_start();
                $_SESSION["user"] = $usuario;
                if($datos['rol']=='administrador'){
                    header('Location:admin/desarrolladores.php');
                }elseif($datos['rol']=="usuario"){
                     header("Location:portafolio.php");
                }
            }else{
                $menError = "Lo sentimos usuario o contraseña incorrecto";
            }
        }
    }
}
?>