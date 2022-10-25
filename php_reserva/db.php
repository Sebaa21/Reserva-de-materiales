<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "php_reserva";

$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>
