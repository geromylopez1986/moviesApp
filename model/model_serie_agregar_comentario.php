<?php
$serie = $_GET['serie'];
$sql ="SELECT * FROM comentarios WHERE serie_id = '{$serie}'";
$datos7 = Conexion::consultar($sql);

$serie = $_GET['serie'];
$sql ="SELECT * FROM comentariosnotuser WHERE NotUserS_id = '{$serie}'";
$datosS = Conexion::consultar($sql);

?>
