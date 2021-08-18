<?php
include("session.php");

if(isset($_SESSION['usuario'])){
    if ($_SESSION['usuario']['tipo_usuario'] == "admin"){
    	$buscar = preg_replace("/[[:space:]]/","_",trim($_POST['buscar']));
        header("Location: ../administrador/buscar/{$buscar}");

    }else if($_SESSION['usuario']['tipo_usuario'] == "user"){
        $buscar = preg_replace("/[[:space:]]/","_",trim($_POST['buscar']));
        header("Location: ../usuario/buscar={$buscar}");

    }
}else{
  $buscar = preg_replace("/[[:space:]]/","_",trim($_POST['buscar']));
  header("Location: ../buscar/{$buscar}");
}
?>
