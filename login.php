<?php 

/*echo "<a href='index.php'>Inicio</a><br />";

require_once'head.php';
*/

function login(){

	require_once'conexion.php';
	
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$email = $_POST['email'];

	/*DECLARACION DE VARIABLES*/
	
	//Variables para la consulta general a la base de datos
	$selecTabla = "SELECT * FROM t_usuarios WHERE usuario = '$usuario'";
	$querySelecTabla = mysqli_query($conexion,$selecTabla);
	$arraySelecTabla = mysqli_fetch_array($querySelecTabla);

	/*FUNCIONES*/

	//Consulta de usuario registrado
	if ($usuario == $arraySelecTabla['usuario'] or $usuario == $arraySelecTabla['email'] & $clave == $arraySelecTabla['clave']) {
		echo "Hola $usuario su ID de usuario es: ". $arraySelecTabla['id'] . " y su correo es : ". $arraySelecTabla['email'];
	}
	else{
		echo "<span class='msg-noreg'>No está registrado</span>";
	}
	
}


function registro(){

	require_once'conexion.php';
	
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$clave = $_POST['clave'];
	
	//Variables para la consulta general a la base de datos
	$selecTabla = "SELECT * FROM t_usuarios WHERE usuario = '$usuario'";
	$querySelecTabla = mysqli_query($conexion,$selecTabla);
	$arraySelecTabla = mysqli_fetch_array($querySelecTabla);

	//Variables para escribir en la base de datos
	$inserTabla = "INSERT INTO t_usuarios (usuario,email,clave) VALUES ('$usuario','$email','$clave')";

	//Registro de nuevo usuario
	if($usuario != $arraySelecTabla['usuario']) {
		mysqli_query($conexion,$inserTabla);
		//Variables para consultar usuario especifico
		$selectUsuario = "SELECT * FROM t_usuarios WHERE usuario = '$usuario'";
		$querySelectUsuario = mysqli_query($conexion,$selectUsuario);
		$arraySelectUsuario = mysqli_fetch_array($querySelectUsuario);
		echo "Bienvenido! usuario registrado con exito. Ahora puedes <a href='index.php'>Ingresar</a>";
	}
	elseif ($email == $arraySelecTabla['email']){
		echo "Ya estas registrado. Puedes <a href='index.php'>Ingresar</a>";
	}

}