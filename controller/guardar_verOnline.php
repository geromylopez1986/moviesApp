<?php

require_once("../conexion/conexion.php");

$original = $_POST['original_add'];
$nombreVer1 = $_POST['nombreVer1_add'];
$nombreVer2 = $_POST['nombreVer2_add'];
$nombreVer3 = $_POST['nombreVer3_add'];
$nombreVer4 = $_POST['nombreVer4_add'];
$linkPelis1 = $_POST['linkPelis1_add'];
$linkPelis2 = $_POST['linkPelis2_add'];
$linkPelis3 = $_POST['linkPelis3_add'];
$linkPelis4 = $_POST['linkPelis4_add'];

$sql = "INSERT INTO servidores_online(nombre_original, nombre_serv1, nombre_serv2, nombre_serv3, nombre_serv4, serv_link1, serv_link2, serv_link3, serv_link4)
VALUES('".$original."', '".$nombreVer1."', '".$nombreVer2."', '".$nombreVer3."', '".$nombreVer4."', '".$linkPelis1."', '".$linkPelis2."', '".$linkPelis3."', '".$linkPelis4."') ";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("Location: validar.php?v=true");
}else{
	//echo "BAD";
	echo "<script>alert('Hubo un errro en los datos de Insercion')</script>";
	header("location: ../administrador/add_capitulos.php");
}

?>
