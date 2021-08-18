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
$trailer_add = @$_POST['trailer_add'];
$slide_bar = @$_FILES['slide_bar']['name'];
$fileBar = @$_FILES['slide_bar']['tmp_name'];
$imagen = @$_FILES['imagen']['name'];
$fileImage = @$_FILES['imagen']['tmp_name'];
$imagen_bg = @$_FILES['imagen_bg']['name'];
$fileImage_bg = @$_FILES['imagen_bg']['tmp_name'];
$fecha = date("Y-m-d");

$ruta = "../img/peliculas";
$ruta = $ruta."/".$imagen;
move_uploaded_file($fileImage, $ruta);

$ruta2 = "../img/imagen_bg";
$ruta2 = $ruta2."/".$imagen_bg;
move_uploaded_file($fileImage_bg, $ruta2);

$ruta3 = "../img/slider";
$ruta3 = $ruta3."/".$slide_bar;
move_uploaded_file($fileBar, $ruta3);

$sql = "INSERT INTO peliculas (nombre, sub_nombre, nombre_original, descripcion, year_pelicula, fecha, calificacion_pelicula,
	duracion_pelicula, pais_pelicula, idioma_pelicula, actores_pelicula, director_pelicula, trailer, imagen, imagen_bg, slide_bar,
	genero, genero_cover, calidad_pelicula) VALUES ('".$nombre_add."', '".$subnombre_add."', '".$original_add."', '".$descripcion_add."', '".$year_add."', '".$fecha."', '".$calificacion_add."', '".$duracion_add."', '".$pais_add."', '".$idioma_add."', '".$actores_add."', '".$director_add."', '".$trailer_add."', '".$imagen."','".$imagen_bg."', '".$slide_bar."', '".$genero_add."', '".$genero_cover."', '".$calidad_add."')";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	// echo "good";
	header("Location: validar.php?p=true");
}else{
	// echo "bad";
	header("Location: ../administrador/add_pelicula.php?m=false");
	if (isset($_GET['m'])) {
		echo "<script>alert('Error al guardar, esto puede ser debido a algunos datos.')</script>";
	}
}

?>
