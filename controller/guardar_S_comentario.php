<?php

include("../conexion/conexion.php");
include("usuario_session.php");
include("administrador_session.php");

$serie_id = @$_POST['serie_id'];
$comentario = @$_POST['comentario'];
$nombre = $_SESSION['usuario']['nombre'];
$correo = $_SESSION['usuario']['correo'];
$img_user = $_SESSION['usuario']['img_user'];
$fecha = date("Y-m-d\TH:i:sP");

if ($_SESSION['usuario']['tipo_usuario'] == "admin"){
	$Location = "Location: ../administrador/ver_serie_session.php?serie={$serie_id}";
	$img = "foto2x2.jpg";

}

if ($_SESSION['usuario']['tipo_usuario'] == "user"){
	$Location = "Location: ../usuario/ver_serie_session.php?serie={$serie_id}";
	$img = "desconocido.jpg";
}else{
	$Location = "Location: ../ver_serie.php?serie={$serie_id}";
}

if($comentario){

$sql = "INSERT INTO comentarios(serie_id,comentario,img,fecha,nombre,correo) VALUES
('".$serie_id."','".$comentario."','".$img_user."','".$fecha."','".$nombre."','".$correo."')";
$valid = Conexion::ejecutar($sql);

if ($valid) {
	// echo "good";
	header($Location);
}else{
	// echo "bad";
	header($Location);
}

}else{
	header($Location);
}

?>
