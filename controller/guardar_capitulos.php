<?php

require_once("../conexion/conexion.php");

$temporada1 = $_POST['temporada1_add'];
$temporada2 = $_POST['temporada2_add'];
$temporada3 = $_POST['temporada3_add'];
$original = $_POST['original_add'];
$capitulo1 = $_POST['capitulo1_add'];
$capitulo2 = $_POST['capitulo2_add'];
$capitulo3 = $_POST['capitulo3_add'];
$capitulo4 = $_POST['capitulo4_add'];
$capitulo5 = $_POST['capitulo5_add'];
$capitulo6 = $_POST['capitulo6_add'];
$capitulo7 = $_POST['capitulo7_add'];
$capitulo8 = $_POST['capitulo8_add'];
$capitulo9 = $_POST['capitulo9_add'];
$capitulo10	= $_POST['capitulo10_add'];
$capitulo11	= $_POST['capitulo11_add'];
$capitulo12	= $_POST['capitulo12_add'];
$capitulo13	= $_POST['capitulo13_add'];
$capitulo14	= $_POST['capitulo14_add'];
$capitulo15 = $_POST['capitulo15_add'];
$capitulo16 = $_POST['capitulo16_add'];
$capitulo17 = $_POST['capitulo17_add'];
$capitulo18 = $_POST['capitulo18_add'];
$capitulo19 = $_POST['capitulo19_add'];
$capitulo20 = $_POST['capitulo20_add'];
$capitulo21 = $_POST['capitulo21_add'];
$capitulo22 = $_POST['capitulo22_add'];
$capitulo23 = $_POST['capitulo23_add'];
$capitulo24	= $_POST['capitulo24_add'];

$sql = "INSERT INTO temporada1_online(temporada1, temporada2, temporada3, nombre_original, capitulo1, capitulo2, capitulo3, capitulo4, capitulo5, capitulo6, capitulo7, capitulo8,
capitulo9, capitulo10, capitulo11, capitulo12, capitulo13, capitulo14, capitulo15, capitulo16, capitulo17, capitulo18, capitulo19, capitulo20,
capitulo21, capitulo22, capitulo23, capitulo24)
VALUES('".$temporada1."', '".$temporada2."', '".$temporada3."', '".$original."', '".$capitulo1."', '".$capitulo2."', '".$capitulo3."', '".$capitulo4."', '".$capitulo5."', '".$capitulo6."',
	'".$capitulo7."', '".$capitulo8."', '".$capitulo9."', '".$capitulo10."', '".$capitulo11."', '".$capitulo12."', '".$capitulo13."', '".$capitulo14."',
'".$capitulo15."', '".$capitulo16."', '".$capitulo17."', '".$capitulo18."', '".$capitulo19."', '".$capitulo20."', '".$capitulo21."', '".$capitulo22."',
'".$capitulo23."', '".$capitulo24."') ";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("Location: validar?g=true");
}else{
	//echo "BAD";
	header("location: ../administrador/add_capitulos.php");
}

?>
