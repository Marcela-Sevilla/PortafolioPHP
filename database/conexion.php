<?php
define("host", "localhost");
define("name", "root");
define("pw", "");
define("database", "portafolio_marcela");
$conexion = mysqli_connect(host,name,pw,database);

if(!$conexion){
	die('Error de conexion'.mysqli_error());
}
?>