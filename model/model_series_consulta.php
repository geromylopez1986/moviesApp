<?php

$Q= $_GET['serie'];
$sql ="SELECT * FROM series WHERE nombre_original = '{$Q}'  ";
$datos7 = Conexion::consultar($sql);

$descargar_cap = $_GET['serie'];
$Dcapitulos = " SELECT * FROM temporada1_descarga WHERE nombre_serie = '$descargar_cap' ORDER BY id ASC ";
$datos4 = Conexion::consultar($Dcapitulos);
$descargar_cap = $_GET['serie'];
$Dcapitulos = " SELECT * FROM temporada2_descarga WHERE nombre_serie = '$descargar_cap' ORDER BY id ASC ";
$datos6 = Conexion::consultar($Dcapitulos);
$descargar_cap = $_GET['serie'];
$Dcapitulos = " SELECT * FROM temporada3_descarga WHERE nombre_serie = '$descargar_cap' ORDER BY id ASC ";
$datos8 = Conexion::consultar($Dcapitulos);

?>