<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre_add'];
$subnombre = $_POST['subnombre_add'];
$original = $_POST['original_add'];
$genero = $_POST['genero_add'];
$duracion = $_POST['duracion_add'];
$publicada = $_POST['publicada_add'];
$actores = $_POST['actores_add'];
$pais = $_POST['pais_add'];
$director = $_POST['director_add'];
$imagen = $_POST['imagen_add'];
$imagen_bg = $_POST['imagen_bg_add'];
$slide_bar = $_POST['slide_bar_add'];
$calidad_pelicula = $_POST['calidad_pelicula_add'];
$year = $_POST['year_add'];
$idioma_add = $_POST['idioma_add'];
$calificacion = $_POST['calificacion_add'];
$descripcion = $_POST['descripcion_add'];
$genero_cover = $_POST['generoCover_add'];
$estreno = $_POST['estreno_add'];
$trailer = $_POST['trailer_add'];


$sql = "UPDATE peliculas SET nombre='$nombre', sub_nombre='$subnombre', nombre_original='$original', genero='$genero', duracion_pelicula='$duracion',
Fecha='$publicada', year_pelicula='$year', actores_pelicula='$actores', pais_pelicula='$pais', director_pelicula='$director', imagen='$imagen', imagen_bg='$imagen_bg',
slide_bar='$slide_bar', calidad_pelicula='$calidad_pelicula', idioma_pelicula='$idioma_add', calificacion_pelicula='$calificacion',	 descripcion='$descripcion',
genero_cover='$genero_cover', estreno='$estreno', trailer='$trailer' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../administrador/administrar.php");
}

?>
