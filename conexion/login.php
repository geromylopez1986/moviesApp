<?php

require 'conexion.php';

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

 	sleep(1);
 	session_start();

    $mysqli->set_charset('utf8');

 	$usuario = $mysqli->real_escape_string($_POST['correo_iniciar_sesion']);
 	$pas = $mysqli->real_escape_string($_POST['contrasena_iniciar_sesion']);

 if ($consulta = $mysqli->prepare("SELECT * FROM login WHERE correo = ? AND contrasena = ?")){

 	$consulta->bind_param('ss',$usuario,$pas);

 	$consulta->execute();

 	$resultado =  $consulta->get_result();

	if($resultado->num_rows == 1) {
  		$datos = $resultado->fetch_assoc();
  		$_SESSION['usuario'] = $datos;
  		echo json_encode(array('error'=> false,'tipo'=> $datos['tipo_usuario']));
 	}else{
  		echo json_encode(array('error'=> true));
 	}
 	$consulta ->close();
	}
}

$mysqli->close();

?>
