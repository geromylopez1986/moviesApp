<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$servidor = $_POST['servidor'];
$mensaje = $_POST['mensaje'];


$sql = "UPDATE reportar_link SET nombre_pelicula='$nombre', servidor_descarga='$servidor', mensaje='$mensaje' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../administrador/administrar.php");
}

?>
