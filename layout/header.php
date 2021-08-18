<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo SERVERURL; ?>css/normalize.css">
	<link rel="icon" href="<?php echo SERVERURL; ?>img/logo/icon.png" type="image/png" />

  <!-- FUENTES DE GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700,900|Inconsolata:400,700&display=swap" rel="stylesheet">

  <!-- ICONOS DE FONT AWESOME -->
  <script src="https://kit.fontawesome.com/e64d2546b6.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?php echo SERVERURL; ?>css/menu-RP.css">
  <link rel="stylesheet" href="<?php echo SERVERURL; ?>css/card-pelis.css">
  <link rel="stylesheet" href="<?php echo SERVERURL; ?>css/slider.css">
  <!--  ANIMATIONGITHU -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <?php
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
    if ($pagina == 'peliculas' || $pagina == 'series' || $pagina == 'ver_peliculas' || $pagina == 'ver_serie' || $pagina == 'categoria' || $pagina == 'cap' || $pagina == 'carrucel-prev')  {
      /* CARRUCEL AUTOMATICO */
      echo '<link rel="stylesheet" href="http://localhost/administrador/css/style_carrucel.css">';
      /* ESTILOS CSS PERSONAL */
      echo '<link rel="stylesheet" href="http://localhost/administrador/css/main.css">';
      echo '<link rel="stylesheet" href="http://localhost/administrador/css/owl.carousel.min.css">';
      echo '<link rel="stylesheet" href="http://localhost/administrador/css/owl.theme.default.min.css">';
      echo '<link rel="stylesheet" href="../css/main-serie_cap.css">';
    }else if ($pagina == 'contacto' || $pagina == 'iniciar_sesion' || $pagina == 'registrate' || $pagina == 'peliculas_session' || $pagina == 'registrar_avatar' || $pagina == 'report_link') {
      echo '<link type="text/css" rel="stylesheet" href="http://localhost/administrador/css/materialize.min.css"  media="screen,projection"/>';
      echo '<link rel="stylesheet" href="http://localhost/administrador/css/imagehover.min.css">';
      echo '<link rel="stylesheet" type="text/css" href="http://localhost/administrador/css/estilos.css">';
      echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
    }
  ?>




  <meta name="theme-color" content="#fafafa">
</head>
<body>
