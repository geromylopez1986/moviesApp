<?php

include("../conexion/conexion.php");

$id_contacto = @$_POST['add_contacto'];
$user_add = @$_POST['user_add'];
$direcion_add = @$_POST['direcion_add'];
$telefono_add = @$_POST['telefono_add'];
$email_add = @$_POST['email_add'];
$mensaje_add = @$_POST['mensaje_add'];
$fecha = date("Y-m-d");

$sql = "INSERT INTO contacto (id, nombre, direcion, telefono, correo, mensaje, fecha) VALUES
('".$id_contacto."', '".$user_add."', '".$direcion_add."', '".$telefono_add."', '".$email_add."', '".$mensaje_add."', '".$fecha."')";


$valid = Conexion::ejecutar($sql);


if ($valid) {
	// echo "good";
	header("Location: validar.php?c=true");
}else{
	// echo "bad";
	header("Location: ../v//contacto.php?f=false");
}

?>
