<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre_add'];
$original = $_POST['original_add'];
$genero = $_POST['genero_add'];
$duracion = $_POST['duracion_add'];
$publicada = $_POST['publicada_add'];
$year = $_POST['year_add'];
$director = $_POST['director_add'];
$reparto = $_POST['actores_add'];
$calificacion = $_POST['calificacion_add'];
$descripcion = $_POST['descripcion_add'];
$trailer = $_POST['trailer_add'];


$sql = "UPDATE series SET nombre='$nombre', nombre_original='$original', genero='$genero', duracion='$duracion', Fecha='$publicada', year='$year', director='$director', actores='$reparto', calificacion='$calificacion',	 descripcion='$descripcion', trailer='$trailer' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../administrador/administrar.php");
}

?>
