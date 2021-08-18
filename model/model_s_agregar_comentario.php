<?php

$serie = $_GET['serie'];
$sql ="SELECT * FROM comentarios WHERE serie_id = '{$serie}'";
$datos_s = Conexion::consultar($sql);

$serie = $_GET['serie'];
$sql ="SELECT * FROM comentariosnotuser WHERE NotUserS_id = '{$serie}'";
$datos_no_user = Conexion::consultar($sql);


?>
