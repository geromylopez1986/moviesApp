<?php

require_once("../conexion/conexion.php");

$id_reporte = $_GET["id"];

$id_reporte = (int)$id_reporte;

$sql = "DELETE FROM reportar_link WHERE id=". $id_reporte;

$valid = Conexion::ejecutar($sql);

header("location: ../administrador/administrar.php");

?>
