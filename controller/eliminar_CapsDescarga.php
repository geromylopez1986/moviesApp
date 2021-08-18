<?php

if (isset($_GET['temp1_id'])) {
  require_once("../conexion/conexion.php");

  $teporada1 = $_GET["temp1_id"];

  $teporada1 = (int)$teporada1;

  $sql = "DELETE FROM temporada1_descarga WHERE id=". $teporada1;

  $valid = Conexion::ejecutar($sql);

  header("location: ../administrador/administrar");
}

if (isset($_GET['temp2_id'])) {
  require_once("../conexion/conexion.php");

  $teporada1 = $_GET["temp2_id"];

  $teporada1 = (int)$teporada1;

  $sql = "DELETE FROM temporada2_descarga WHERE id=". $teporada1;

  $valid = Conexion::ejecutar($sql);

  header("location: ../administrador/administrar");
}

if (isset($_GET['temp3_id'])) {
  require_once("../conexion/conexion.php");

  $teporada1 = $_GET["temp3_id"];

  $teporada1 = (int)$teporada1;

  $sql = "DELETE FROM temporada3_descarga WHERE id=". $teporada1;

  $valid = Conexion::ejecutar($sql);

  header("location: ../administrador/administrar");
}

?>
