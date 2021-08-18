<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$original_add = @$_POST['nombre_original_add'];
$link1_add = @$_POST['link1_add'];
$link2_add = @$_POST['link2_add'];
$link3_add = @$_POST['link3_add'];
$link4_add = @$_POST['link4_add'];
$link5_add = @$_POST['link5_add'];
$link6_add = @$_POST['link6_add'];
$link7_add = @$_POST['link7_add'];
$link8_add = @$_POST['link8_add'];
$link9_add = @$_POST['link9_add'];
$serv1_add = @$_POST['serv1_add'];
$serv2_add = @$_POST['serv2_add'];
$serv3_add = @$_POST['serv3_add'];
$serv4_add = @$_POST['serv4_add'];
$serv5_add = @$_POST['serv5_add'];
$serv6_add = @$_POST['serv6_add'];
$serv7_add = @$_POST['serv7_add'];
$serv8_add = @$_POST['serv8_add'];
$serv9_add = @$_POST['serv9_add'];
$icon1_name = @$_POST['icon1_name_add'];
$icon2_name = @$_POST['icon2_name_add'];
$icon3_name = @$_POST['icon3_name_add'];
$icon4_name = @$_POST['icon4_name_add'];
$icon5_name = @$_POST['icon5_name_add'];
$icon6_name = @$_POST['icon6_name_add'];
$icon7_name = @$_POST['icon7_name_add'];
$icon8_name = @$_POST['icon8_name_add'];
$icon9_name = @$_POST['icon9_name_add'];
$tuto1_add = @$_POST['tuto1_add'];
$tuto2_add = @$_POST['tuto2_add'];
$tuto3_add = @$_POST['tuto3_add'];
$tuto4_add = @$_POST['tuto4_add'];
$tuto5_add = @$_POST['tuto5_add'];
$tuto6_add = @$_POST['tuto6_add'];
$tuto7_add = @$_POST['tuto7_add'];
$tuto8_add = @$_POST['tuto8_add'];
$tuto9_add = @$_POST['tuto9_add'];
$idioma1_add = @$_POST['idioma1_add'];
$idioma2_add = @$_POST['idioma2_add'];
$calidad1_add = @$_POST['calidad1_add'];
$calidad2_add = @$_POST['calidad2_add'];
$calidad3_add = @$_POST['calidad3_add'];
$peso_add = @$_POST['peso_add'];

$sql = "UPDATE descargas SET nombre_original='$original_add',
 link1='$link1_add', link2='$link2_add', link3='$link3_add', link4='$link4_add', link5='$link5_add', link6='$link6_add', link7='$link7_add', link8='$link8_add', link9='$link9_add',
 serv1='$serv1_add', serv2='$serv2_add', serv3='$serv3_add', serv4='$serv4_add', serv5='$serv5_add', serv6='$serv6_add', serv7='$serv7_add', serv8='$serv8_add', serv9='$serv9_add',
 tutorial1='$tuto1_add', tutorial2='$tuto2_add', tutorial3='$tuto3_add', tutorial4='$tuto4_add', tutorial5='$tuto5_add', tutorial6='$tuto6_add', tutorial7='$tuto7_add', tutorial8='$tuto8_add', tutorial9='$tuto9_add',
 icon1_name='$icon1_name', icon2_name='$icon2_name', icon3_name='$icon3_name', icon4_name='$icon4_name', icon5_name='$icon5_name', icon6_name='$icon6_name', icon7_name='$icon7_name',
 icon8_name='$icon8_name', icon9_name='$icon9_name',
 idioma1='$idioma1_add', idioma2='$idioma2_add',
calidad3='$calidad3_add', calidad1='$calidad1_add', calidad2='$calidad2_add', peso1='$peso_add' WHERE id_descarga = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../administrador/administrar.php");
}

?>
