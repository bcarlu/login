<?php 

/*echo "<a href='index.php'>Inicio</a><br />";

require_once'head.php';
*/

function login(){

	require_once'conexion.php';
	
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	/*DECLARACION DE VARIABLES*/
	
	//Variables para la consulta general a la base de datos
	$selecTabla = "SELECT * FROM t_usuarios WHERE usuario = '$usuario'";
	$querySelecTabla = mysqli_query($conexion,$selecTabla);
	$arraySelecTabla = mysqli_fetch_array($querySelecTabla);

	//Variables para escribir en la base de datos
	$inserTabla = "INSERT INTO t_usuarios (usuario,clave) VALUES ('$usuario','$clave')";




	/*FUNCIONES*/

	//Consulta de usuario registrado
	if ($usuario == $arraySelecTabla['usuario'] & $clave == $arraySelecTabla['clave']) {
		echo "Hola $usuario su ID de usuario es: ". $arraySelecTabla['id'];
	}
	else{
		echo "No está registrado";
	}
	//Registro de nuevo usuario
	/*elseif($usuario != $arraySelecTabla['usuario']) {
		mysqli_query($conexion,$inserTabla);
		//Variables para consultar usuario especifico
		$selectUsuario = "SELECT * FROM t_usuarios WHERE usuario = '$usuario'";
		$querySelectUsuario = mysqli_query($conexion,$selectUsuario);
		$arraySelectUsuario = mysqli_fetch_array($querySelectUsuario);
		echo "Bienvenido! usuario registrado con exito. Su ID es el: " . $arraySelectUsuario['id'];
	}
	*/
}
