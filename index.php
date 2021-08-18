<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

	  <title>The Pelicula / Home</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="js/jquery-3.4.1.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link rel="icon" href="img/logo/icon.png" type="image/png" />
</head>
<body>

	<style media="screen">
		.sidenav-trigger {
			margin: 1em 0 0 1em;
		}

		.sidenav li a {
			color: #fff;
		}

		i:before {
			color: #dd1818;
		}

		.sidenav {
			background: #333;
		}

		.background {
			background: #333;
		}

	</style>

<div>
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/inicio/red.jpg">
      </div>
      <a href="#user"><img class="circle" src="img/user/usuario.png"></a>
      <a href="#name"><span class="white-text name">Desconocido</span></a>
      <a href="#email"><span class="white-text email">Bienvenido a The Peliculas</span></a>
    </div></li>
    <li class="activo"><a href="index"><i class="fas fa-home"></i> Inicio</a></li>
    <li><a href="peliculas"><i class="fas fa-video"></i> Películas</a></li>
    <!--<li><a href="contacto"><i class="far fa-address-card"></i> Contacto</a></li>-->
    <li><div class="divider"></div></li>
    <li><a class="subheader">Opciones</a></li>
    <li><a class="waves-effect" href="iniciar_sesion.php">Iniciar sesión</a></li>
    <li><a class="waves-effect" href="registrate.php">Registrarse</a></li>
  </ul>
  <a id="menu" href="#" data-target="slide-out" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
</div>

<video src="img/inicio/videobg2.mp4" autoplay loop poster="img/inicio/red.jpg"></video>

<div class="containerr">
	<center>
	<img width="275" src="img/logo/cs.png" alt="">
	<br><br>
	<h5 class="white-text">Bienvenido disfruta de todo el contenido que te ofrecemos 📺</h5>
	<br><br>
	<a class="red darken-4 waves-effect btn-large pulse" href="peliculas">Entrar</a>
	<br><br><br>
	<div class="espacio">
		<a class="btn tooltipped waves-effect fondo" data-position="left" data-tooltip="Inicia sesión! Es (Opcional)" href="iniciar_sesion">Iniciar sesión</a>
		<a class="btn tooltipped waves-effect dark-green accent-3" data-position="right" data-tooltip="Registrate, es gratis!" href="registrate" >Registrarse</a>
	</div>
	</center>

	<center>
	<p id="bottom" class="white-text">2021 © Copyright thepeliculas.com</p>
	</center>

</div>

<script type="text/javascript" src="js/js.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
