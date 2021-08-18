<?php

require_once("../conexion/conexion.php");

$id_PeliculaDatos = $_GET["id"];

$id_PeliculaDatos = (int)$id_PeliculaDatos;

$sql = "DELETE FROM peliculas WHERE id=". $id_PeliculaDatos;

$valid = Conexion::ejecutar($sql);

header("location: ../administrador/administrar.php");

?>
