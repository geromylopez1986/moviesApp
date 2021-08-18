<?php

$sql ="SELECT * FROM peliculas";
$datos = Conexion::consultar($sql);

$sql ="SELECT * FROM login";
$datos2 = Conexion::consultar($sql);

$sql ="SELECT * FROM comentarios";
$datos3 = Conexion::consultar($sql);

$sql ="SELECT * FROM comentariosnotuser";
$datos13 = Conexion::consultar($sql);

$sql ="SELECT * FROM series";
$datos4 = conexion::consultar($sql);

$sql ="SELECT * FROM temponline1";
$datos00S1 = conexion::consultar($sql);

$sql ="SELECT * FROM temponline2";
$datos00S2 = conexion::consultar($sql);

$sql ="SELECT * FROM temponline3";
$datos00S3 = conexion::consultar($sql);

$sql ="SELECT * FROM contacto";
$datos6 = conexion::consultar($sql);

$sql ="SELECT * FROM descargas";
$datos7 = conexion::consultar($sql);

$sql ="SELECT * FROM servidores_online";
$datos8 = conexion::consultar($sql);

$sql ="SELECT * FROM reportar_link";
$datos9 = conexion::consultar($sql);

$sql ="SELECT * FROM temporada1_descarga";
$datos10 = conexion::consultar($sql);
$sql ="SELECT * FROM temporada2_descarga";
$datos11 = conexion::consultar($sql);
$sql ="SELECT * FROM temporada3_descarga";
$datos12 = conexion::consultar($sql);

?>
