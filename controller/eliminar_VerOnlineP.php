<?php

require_once("../conexion/conexion.php");

$id_verOnline = $_GET["id"];

$id_verOnline = (int)$id_verOnline;

$sql = "DELETE FROM servidores_online WHERE id=". $id_verOnline;

$valid = Conexion::ejecutar($sql);

header("location: ../administrador/administrar.php");

?>
