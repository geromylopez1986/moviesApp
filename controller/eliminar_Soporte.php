<?php

require_once("../conexion/conexion.php");

$id_Soporte = $_GET["id"];

$id_Soporte = (int)$id_Soporte;

$sql = "DELETE FROM contacto WHERE id=". $id_Soporte;

$valid = Conexion::ejecutar($sql);

header("location: ../administrador/administrar.php");

?>
