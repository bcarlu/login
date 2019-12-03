<?php 

$servidor = "localhost";
$user = "brian";
$passwd = "brian";
$datab = "login";

$conexion = mysqli_connect($servidor,$user,$passwd,$datab) or die ("Ups falló la conexión a la base de datos");

if ($conexion) {
    echo "Conexion OK";
}