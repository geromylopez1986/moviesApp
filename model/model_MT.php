<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$temporada_add = @$_POST['temporada_add'];
$servodor_add = @$_POST['servodor_add'];
$idioma_add = @$_POST['idioma_add'];
$calidad_add = @$_POST['calidad_add'];
$numeroCapitulo_add = @$_POST['numeroCapitulo_add'];
$nombre_serie_add = @$_POST['nombre_serie_add'];
$Dcapitulo_add = @$_POST['Dcapitulo_add'];
$icono_add= @$_POST['icono_add'];

if ($temporada_add == 'Temporada 1') {
	$sql = "UPDATE temporada1_descarga SET temporada='$temporada_add', servidor='$servodor_add', idioma='$idioma_add', calidad='$calidad_add',
	numeroCapitulo='$numeroCapitulo_add', nombre_serie='$nombre_serie_add', capitulo='$Dcapitulo_add', icono='$icono_add' WHERE id = '$id'";
}elseif ($temporada_add == 'Temporada 2') {
	$sql = "UPDATE temporada2_descarga SET temporada='$temporada_add', servidor='$servodor_add', idioma='$idioma_add', calidad='$calidad_add',
	numeroCapitulo='$numeroCapitulo_add', nombre_serie='$nombre_serie_add', capitulo='$Dcapitulo_add', icono='$icono_add' WHERE id = '$id'";
}elseif ($temporada_add == 'Temporada 3') {
	$sql = "UPDATE temporada3_descarga SET temporada='$temporada_add', servidor='$servodor_add', idioma='$idioma_add', calidad='$calidad_add',
	numeroCapitulo='$numeroCapitulo_add', nombre_serie='$nombre_serie_add', capitulo='$Dcapitulo_add', icono='$icono_add' WHERE id = '$id'";
}else {
	echo "<script>alert('Lo siento no ay Datos Con esa Temporada...')</script>";
}

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../administrador/administrar.php");
}

?>
