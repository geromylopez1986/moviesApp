<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$direcion = $_POST['direcion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


$sql = "UPDATE contacto SET nombre='$nombre', correo='$correo', telefono='$telefono', direcion='$direcion', mensaje='$mensaje' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../administrador/administrar.php");
}

?>
