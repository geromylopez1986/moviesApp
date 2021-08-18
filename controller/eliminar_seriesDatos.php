<?php

require_once("../conexion/conexion.php");

$id_seriesDatos = $_GET["id"];

$id_seriesDatos = (int)$id_seriesDatos;

$sql = "DELETE FROM series WHERE id=". $id_seriesDatos;

$valid = Conexion::ejecutar($sql);

header("location: ../administrador/administrar.php");

?>
