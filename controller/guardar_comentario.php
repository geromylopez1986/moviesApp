<?php

include("../conexion/conexion.php");
include("usuario_session.php");
include("administrador_session.php");

$pelicula_id = @$_POST['pelicula_id'];
$comentario = @$_POST['comentario'];
$nombre = $_SESSION['usuario']['nombre'];
$NotUserid = $_POST['NotUser_id'];
$NotUserSid = $_POST['NotUserS_id'];
$NoUser = $_POST['notUserName'];
$imgNoUser = "usuario_red.png";
$NoUserComent = $_POST['notUserComent'];
$correo = $_SESSION['usuario']['correo'];
$img_user = $_SESSION['usuario']['img_user'];

$fechaNoUser = date("Y-m-d\TH:i:sP");
$fecha = date("Y-m-d\TH:i:sP");

if ($_SESSION['usuario']['tipo_usuario'] == "admin"){
	$Location = "Location: ../administrador/ver_pelicula_session?pelicula={$pelicula_id}";
	$img = "foto2x2.jpg";
}elseif ($_SESSION['usuario']['tipo_usuario'] == "user") {
		$Location = "Location: ../usuario/ver_pelicula_session?pelicula={$pelicula_id}";
		$img = "desconocido.jpg";
}elseif ($NotUserid) {
	$Location = "Location: ../ver_peliculas?pelicula={$NotUserid}";
}else{
	$Location = "Location: http://localhost/administrador/serieComent/{$NotUserSid}";
}

if($comentario){

$sql = "INSERT INTO comentarios(pelicula_id,comentario,fecha,nombre,correo,img) VALUES
('".$pelicula_id."','".$comentario."','".$fecha."','".$nombre."','".$correo."','".$img_user."')";
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

if ($NoUserComent) {
		$sql = "INSERT INTO comentariosnotuser(NotUser_id, NotUserS_id, nombre, mensaje, imgNoUser, fechaNoUser) VALUES ('".$NotUserid."','".$NotUserSid."','".$NoUser."','".$NoUserComent."','".$imgNoUser."', '".$fechaNoUser."')";
		$validNoUser =Conexion::consultar($sql);

		if ($validNoUser) {
			// echo "good";
			header($Location);
		}else {
			// echo "bad";
			echo "<script>alert('Hubo un errro al guardar el mensaje')</script>";
			header($Location);
		}

}else{
	header($Location);
}

?>
