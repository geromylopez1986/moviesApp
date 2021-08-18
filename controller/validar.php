<?php if (!empty($_GET['g'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Agregando Capitulo</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['g'])){
          if ($_GET['g'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../administrador/add_cap_descargas'
            }, 8500);
                  </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los tu email.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Public Capitulo...</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>



<?php endif; ?>
<?php if (!empty($_GET['c'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Soporte Tecnico</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['c'])){
          if ($_GET['c'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../peliculas'
            }, 8500);
                  </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los Datos Requeridos.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Enviando Consulta</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>

<?php endif; ?>
<?php if (!empty($_GET['d'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Agregando Links</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['d'])){
          if ($_GET['d'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../administrador/peliculas_session'
            }, 8500);
                  </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los Datos.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Publicando Link...</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>

<?php endif; ?>
<?php if (!empty($_GET['p'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Agregando Pelicula</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['p'])){
          if ($_GET['p'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../administrador/add_verOnline'
            }, 8500);
              </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los Datos.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Publicando Pelicula..</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>
<?php endif; ?>
<?php if (!empty($_GET['t'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Reporte Link</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['t'])){
          if ($_GET['t'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../peliculas'
            }, 8500);
                  </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los tu email.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Enviando Reporte</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>
<?php endif; ?>
<?php if (!empty($_GET['m'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Agregando Serie</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['m'])){
          if ($_GET['m'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../administrador/add_capitulos'
            }, 8500);
                  </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los tu email.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Publicando Serie...</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>
<?php endif; ?>
<?php if (!empty($_GET['v'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Ver Online</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['v'])){
          if ($_GET['v'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../administrador/add_links_descarga'
            }, 8500);
                  </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los Datos.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Publicando Online...</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>
<?php endif; ?>
<?php if (!empty($_GET['s'])): ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>The Pelicula / Links Capitulo</title>
      <link href="probando.css" rel="stylesheet">

      <style media="screen">
      body {
      margin: 0;
      overflow-Y: hidden; /*quitar el scroll*/
      }

      .container {
      position: absolute;
      top: 0;
      background: #222;
      background-image: url(../img/inicio/red.jpg);
      background-size: cover;
      background-position: center;
      color: #fff;
      width: 100%;
      min-height: 100vh;
      display: flex;
      }

      .preloader {
      margin: auto;
      width: 450px;
      height: 35px;
      background: rgba(255,255,255,0.1);
      border: 1px solid white;
      position: relative;
      }

      .preloader:before {
      content: "";
      position: absolute;
      background: #dd1818;
      width: 0;
      height: 35px;

      animation: preloader 10s infinite;
      }

      .logo {
      }

      .logo img {
        position: absolute;
        left: 0;
        right: 0;
        margin: 15px;
        background:#dd1818;
        padding:.5rem;
      }

      .preloader p {
      margin: 0;
      line-height: 30px;
      font-size: 25px;
      font-weight: bold;

      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      }

      .cerrar {
      transform: translateY(-100%);
      transition: all 0.5s;
      }

      @keyframes preloader {
      90% {
        width: 100%;
        opacity: 1;
      }
      100% {
        width: 100%;
        opacity: 0;
      }
      }
      </style>
      <script type="text/javascript">
      var container = document.getElementById('container');
      setTimeout(function() {
      container.classList.add('cerrar');
      document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
      }, 20000);
      </script>

      <?php
        if(isset($_GET['s'])){
          if ($_GET['s'] == "true") {
            echo "<script>
            setTimeout(function () {
              window.location.href='../administrador/peliculas_session'
            }, 8500);
                  </script>";
          }else{
          echo "<script>alert('Error al enviar tu mensaje verifica los Datos.')</script>";
          }
        }
        ?>


  </head>

  <body class="capaOscura">
          <div class="container" id="container">
            <div class="logo">
              <img src="../img/logo/logo.png" alt="">
            </div>
                  <div class="preloader">
                      <p>Publicando Links...</p>
                  </div>
              </div>

      <script src="probando.js"></script>
  </body>

  </html>
<?php endif; ?>
