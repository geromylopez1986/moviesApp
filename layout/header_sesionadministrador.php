<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>The Pelicula / <?php echo $_SESSION['usuario']['tipo_usuario']?></title>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/imagehover.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>


	<!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
 <!--Import materialize.css-->
 <script type="text/javascript" src="https://cdn.rawgit.com/pinzon1992/materialize_table_pagination/f9a8478f/js/pagination.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="icon" href="../img/logo/icon.png" type="image/png" />
</head>
<body class="black">
<br>
<div class="sidenav-trigger">
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view user-tipe">
      <div class="background"></div>
      <a class="user-picture" href="#user"><img class="circle center" src="<?php echo SERVERURL; ?>img/user/<?php echo $_SESSION['usuario']['img_user']?>"></a>
			<a href="#tipe"><span class="white-text name">PRIVILEGIO: <?php echo $_SESSION['usuario']['tipo_usuario']?></span></a>
      <a href="#name"><span class="white-text name"><?php echo $_SESSION['usuario']['correo']?></span></a>
      <a href="#email"><span class="white-text email">BIENVENIDO: <?php echo $_SESSION['usuario']['nombre']?></span></a>
    </div></li>
    <li><a href="../administrador/peliculas_session"><i class="fas fa-video"></i> Películas ( <?= $_SESSION['usuario']['tipo_usuario'] ?> )</a></li>
    <!--<li><a href="../contacto.php"><i class="far fa-address-card"></i> Contacto</a></li>-->
    <li><div class="divider"></div></li>
    <li><a class="subheader">Opciones</a></li>
    <li><a class="waves-effect" href="<?php echo SERVERURL; ?>conexion/cerrar_sesion.php">Cerrar Sesion</a></li>
  </ul>
  <a id="menu" href="#" data-target="slide-out" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
</div>


<script>
    $(document).ready(function(){
    $('.modal').modal();
  });
</script>
