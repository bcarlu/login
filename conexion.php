<?php 

$servidor = "localhost";
$user = "root";
$passwd = "";
$datab = "test";

$conexion = mysqli_connect($servidor,$user,$passwd,$datab) or die("Ups falló la conexión a la base de datos");

