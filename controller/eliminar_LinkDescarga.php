<?php

require_once("../conexion/conexion.php");

$id_descarga = $_GET["id"];

$id_descarga = (int)$id_descarga;

$sql = "DELETE FROM descargas WHERE id_descarga=". $id_descarga;

$valid = Conexion::ejecutar($sql);

header("location: ../administrador/administrar.php");

?>
