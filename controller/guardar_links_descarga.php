<?php

include("../conexion/conexion.php");

$original_add = @$_POST['original_add'];
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
$icon1_name = @$_POST['icon1_name'];
$icon2_name = @$_POST['icon2_name'];
$icon3_name = @$_POST['icon3_name'];
$icon4_name = @$_POST['icon4_name'];
$icon5_name = @$_POST['icon5_name'];
$icon6_name = @$_POST['icon6_name'];
$icon7_name = @$_POST['icon7_name'];
$icon8_name = @$_POST['icon8_name'];
$icon9_name = @$_POST['icon9_name'];
$tuto1_name = @$_POST['tuto1_name'];
$tuto2_name = @$_POST['tuto2_name'];
$tuto3_name = @$_POST['tuto3_name'];
$tuto4_name = @$_POST['tuto4_name'];
$tuto5_name = @$_POST['tuto5_name'];
$tuto6_name = @$_POST['tuto6_name'];
$tuto7_name = @$_POST['tuto7_name'];
$tuto8_name = @$_POST['tuto8_name'];
$tuto9_name = @$_POST['tuto9_name'];
$icon1 = @$_FILES['icon1_add']['name'];
$icon2 = @$_FILES['icon2_add']['name'];
$icon3 = @$_FILES['icon3_add']['name'];
$fileicon1 = @$_FILES['icon1_add']['tmp_name'];
$fileicon2 = @$_FILES['icon2_add']['tmp_name'];
$fileicon3 = @$_FILES['icon3_add']['tmp_name'];
$idioma1_add = @$_POST['idioma1_add'];
$idioma2_add = @$_POST['idioma2_add'];
$idioma3_add = @$_POST['idioma3_add'];
$idioma4_add = @$_POST['idioma4_add'];
$calidad1_add = @$_POST['calidad1_add'];
$calidad2_add = @$_POST['calidad2_add'];
$calidad3_add = @$_POST['calidad3_add'];
$calidad4_add = @$_POST['calidad4_add'];
$calidad5_add = @$_POST['calidad5_add'];
$calidad6_add = @$_POST['calidad6_add'];
$calidad7_add = @$_POST['calidad7_add'];
$calidad8_add = @$_POST['calidad8_add'];
$calidad9_add = @$_POST['calidad9_add'];
$peso1_add = @$_POST['peso1_add'];
$peso2_add = @$_POST['peso2_add'];
$peso3_add = @$_POST['peso3_add'];
$peso4_add = @$_POST['peso4_add'];
$peso5_add = @$_POST['peso5_add'];
$peso6_add = @$_POST['peso6_add'];
$peso7_add = @$_POST['peso7_add'];
$peso8_add = @$_POST['peso8_add'];
$peso9_add = @$_POST['peso9_add'];

$ruta = "../img/iconos";
$ruta = $ruta."/".$icon1;
move_uploaded_file($fileicon1, $ruta);

$ruta = "../img/iconos";
$ruta = $ruta."/".$icon2;
move_uploaded_file($fileicon2, $ruta);

$ruta = "../img/iconos";
$ruta = $ruta."/".$icon3;
move_uploaded_file($fileicon3, $ruta);


$sql = "INSERT INTO descargas (nombre_original, link1, link2, link3, link4, link5, link6, link7, link8, link9, serv1, serv2, serv3, serv4, serv5, serv6, serv7, serv8, serv9,
	icon1_name, icon2_name, icon3_name, icon4_name, icon5_name, icon6_name, icon7_name, icon8_name, icon9_name, tutorial1, tutorial2, tutorial3, tutorial4, tutorial5,
	tutorial6, tutorial7, tutorial8, tutorial9, idioma1, idioma2, idioma3, idioma4,
	 calidad1, calidad2, calidad3, calidad4, calidad5, calidad6, calidad7, calidad8, calidad9, peso1, peso2, peso3, peso4, peso5, peso6, peso7, peso8, peso9) VALUES ('".$original_add."',
		'".$link1_add."', '".$link2_add."', '".$link3_add."', '".$link4_add."', '".$link5_add."', '".$link6_add."', '".$link7_add."', '".$link8_add."',
		'".$link9_add."', '".$serv1_add."', '".$serv2_add."', '".$serv3_add."', '".$serv4_add."', '".$serv5_add."', '".$serv6_add."', '".$serv7_add."',
		'".$serv8_add."', '".$serv9_add."', '".$icon1_name."', '".$icon2_name."', '".$icon3_name."', '".$icon4_name."', '".$icon5_name."', '".$icon6_name."',
		'".$icon7_name."', '".$icon8_name."', '".$icon9_name."', '".$tuto1_name."', '".$tuto2_name."', '".$tuto3_name."', '".$tuto4_name."', '".$tuto5_name."', '".$tuto6_name."',
		'".$tuto7_name."', '".$tuto8_name."', '".$tuto9_name."', '".$idioma1_add."', '".$idioma2_add."', '".$idioma3_add."', '".$idioma4_add."',
		'".$calidad1_add."','".$calidad2_add."', '".$calidad3_add."', '".$calidad4_add."','".$calidad5_add."', '".$calidad6_add."', '".$calidad7_add."',
		'".$calidad8_add."', '".$calidad9_add."', '".$peso1_add."', '".$peso2_add."', '".$peso3_add."', '".$peso4_add."', '".$peso5_add."', '".$peso6_add."',
		'".$peso7_add."', '".$peso8_add."', '".$peso9_add."')";

$valid = Conexion::ejecutar($sql);

/* echo var_dump($sql).exit; */


if ($valid) {
	// echo "good";
	header("Location: validar.php?d=true");
}else{
	// echo "bad";
	header("Location: ../administrador/add_links_descarga.php?m=false");
}

?>
