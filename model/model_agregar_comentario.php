<?php


$pelicula = $_GET['pelicula'];
$sql ="SELECT * FROM comentarios WHERE pelicula_id = '{$pelicula}'";
$datos = Conexion::consultar($sql);

$pelicula = $_GET['pelicula'];
$sql ="SELECT * FROM comentariosnotuser WHERE NotUser_id = '{$pelicula}'";
$datosNoUser = Conexion::consultar($sql);

?>
