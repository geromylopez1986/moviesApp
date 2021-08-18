<?php

include("../conexion/conexion.php");

$id_report = @$_POST['add_reporte'];
$nombre_pelicula = @$_POST['nombre_pelicula'];
$servidor = @$_POST['servidor_descarga'];
$mensaje = @$_POST['mensaje'];

$sql = "INSERT INTO reportar_link (id, nombre_pelicula, servidor_descarga, mensaje) VALUES
('".$id_report."', '".$nombre_pelicula."', '".$servidor."', '".$mensaje."')";


$valid = Conexion::ejecutar($sql);


if ($valid) {
	// echo "good";
	header("Location: validar?t=true");
}else{
	// echo "bad";
	header("Location: contacto?f=false");
}

?>
