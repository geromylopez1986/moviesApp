<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombreOriginal = $_POST['original_add'];
$nombreVer1 = $_POST['nombreVer1_add'];
$nombreVer2 = $_POST['nombreVer2_add'];
$nombreVer3 = $_POST['nombreVer3_add'];
$nombreVer4 = $_POST['nombreVer4_add'];
$linkPelis1 = $_POST['linkPelis1_add'];
$linkPelis2 = $_POST['linkPelis2_add'];
$linkPelis3 = $_POST['linkPelis3_add'];
$linkPelis4 = $_POST['linkPelis4_add'];


$sql = "UPDATE servidores_online SET nombre_original='$nombreOriginal', nombre_serv1='$nombreVer1', nombre_serv2='$nombreVer2',
nombre_serv3='$nombreVer3', nombre_serv4='$nombreVer4', serv_link1='$linkPelis1', serv_link2='$linkPelis2',	 serv_link3='$linkPelis3',
serv_link4='$linkPelis4' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../administrador/administrar.php");
}

?>
