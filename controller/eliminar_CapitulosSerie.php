<?php

require_once("../conexion/conexion.php");

$id_seriesCapitulos = $_GET["id"];

$id_seriesCapitulos = (int)$id_seriesCapitulos;

$sql = "DELETE FROM capitulos WHERE id_series=". $id_seriesCapitulos;

$valid = Conexion::ejecutar($sql);

header("location: ../administrador/administrar.php");

?>
