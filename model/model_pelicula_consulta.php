<?php

$pelicula = $_GET['pelicula'];
$sql ="SELECT * FROM peliculas WHERE nombre_original = '{$pelicula}' ";
$datos = Conexion::consultar($sql);

$descargar = $_GET['pelicula'];
$consult ="SELECT * FROM `descargas` WHERE nombre_original = '{$descargar}'";
$datos4 = Conexion::consultar($consult);

?>
