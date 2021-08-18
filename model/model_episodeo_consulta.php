<?php

$episodeo = $_GET['serie'];
$temporadaOnline = "SELECT * FROM temponline1 WHERE titulo_original = '{$episodeo}' ";
$tempOnline1 = Conexion::consultar($temporadaOnline);

$episodeo = $_GET['serie'];
$temporadaOnline = "SELECT * FROM temponline2 WHERE titulo_original = '{$episodeo}' ";
$tempOnline2 = Conexion::consultar($temporadaOnline);

$episodeo = $_GET['serie'];
$temporadaOnline = "SELECT * FROM temponline3 WHERE titulo_original = '{$episodeo}' ";
$tempOnline3 = Conexion::consultar($temporadaOnline);


?>
