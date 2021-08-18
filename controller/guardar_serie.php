<?php

include("../conexion/conexion.php");

$nombre_add = @$_POST['nombre_add'];
$subnombre_add = @$_POST['subnombre_add'];
$original_add = @$_POST['original_add'];
$genero_add = @$_POST['genero_add'];
$year_add = @$_POST['year_add'];
$calificacion_add = @$_POST['calificacion_add'];
$pais_add = @$_POST['pais_add'];
$duracion_add = @$_POST['duracion_add'];
$idioma_add = @$_POST['idioma_add'];
$actores_add = @$_POST['actores_add'];
$director_add = @$_POST['director_add'];
$genero_cover = @$_POST['genero_cover'];
$calidad_add = @$_POST['calidad_add'];
$descripcion_add = @$_POST['descripcion_add'];
$link_add = @$_POST['link_add'];
$trailer_add = @$_POST['trailer_add'];
$imagen = @$_FILES['imagen']['name'];
$fileImage = @$_FILES['imagen']['tmp_name'];
$imagen_bg = @$_FILES['imagen_bg']['name'];
$fileImage_bg = @$_FILES['imagen_bg']['tmp_name'];
$fecha = date("Y-m-d");

$ruta = "../img/series";
$ruta = $ruta."/".$imagen;
move_uploaded_file($fileImage, $ruta);

$ruta2 = "../img/series_bg";
$ruta2 = $ruta2."/".$imagen_bg;
move_uploaded_file($fileImage_bg, $ruta2);

$sql = "INSERT INTO series (nombre, sub_nombre, nombre_original, descripcion, year, fecha, calificacion, duracion, pais, idioma, actores, director, trailer, imagen, imagen_bg, genero, genero_cover, calidad) VALUES
('".$nombre_add."', '".$subnombre_add."', '".$original_add."', '".$descripcion_add."', '".$year_add."', '".$fecha."', '".$calificacion_add."', '".$duracion_add."', '".$pais_add."', '".$idioma_add."', '".$actores_add."', '".$director_add."', '".$trailer_add."', '".$imagen."','".$imagen_bg."', '".$genero_add."', '".$genero_cover."', '".$calidad_add."')";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	// echo "good";
	header("Location: validar.php?m=true");
}else{
	// echo "bad";
	header("Location: ../administrador/add_serie.php?m=false");
}

?>
