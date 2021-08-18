

<?php
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
    if ($pagina == 'peliculas' || $pagina == 'ver_peliculas' || $pagina == 'ver_serie' || $pagina == 'categoria' ||  $pagina == 'cap' || $pagina == 'carrucel-prev') {
       echo '<footer class="pie-pagina"> <div class="box-footer contenedorMD">

    <div class="copyright">
        <p>2019-2020 &copy; thepeliculas.com - Todos Los <a href="#">Derechos</a> Reservados</p>
    </div>

    </div>

    <nav class="navegacion-footer">
        <a href="http://localhost/administrador/iniciar_sesion">Login</a>
    </nav>
</footer>
</div>
       ';
    }else if ($pagina == 'contacto' || $pagina == 'iniciar_sesion' || $pagina == 'registrate' || $pagina == 'peliculas_session' || $pagina == 'categoria_session' || $pagina == 'registrar_avatar' || $pagina == 'report_link') {
      echo '
      <footer id="footer" class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">The Peliculas</h5>
                <p class="grey-text text-lighten-4">Puedes seguirnos en nuestras redes sociales para que estes al tanto de nuestras peliculas.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Siguenos!</h5>
                <ul>
                  <li><i class="fab fa-facebook-square"></i><a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/"> Facebook</a></li>
                  <li><i class="fab fa-instagram"></i><a target="_blank" class="grey-text text-lighten-3" href="https://www.instagram.com/"> Instagram</a></li>
                  <li><i class="fab fa-whatsapp"></i><a target="_blank" class="grey-text text-lighten-3" href="https://web.whatsapp.com/"> Whatsapp</a></li>
                  <li><i class="fab fa-twitter-square"></i><a target="_blank" class="grey-text text-lighten-3" href="https://twitter.com/?lang=es"> Twitter</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container grey darken-4">
            2019 © Copyright The Peliculas
            <p class="grey-text text-lighten-4 right">Todos los derechos reservados <a href="#">Terminos y condiciones</a></p>
            </div>
          </div>
        </footer>
      ';
    }
  ?>


    <!--SWEETALERT 2-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="<?php echo SERVERURL; ?>js/sweetalert.js" charset="utf-8"></script>

    <!-- FONTAWESOME ICON  -->
    <script src="https://kit.fontawesome.com/e64d2546b6.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>

    <!-- PARAMETROS DE CAPITULOS SERIES  -->
    <script src="<?php echo SERVERURL; ?>js/series.js" charset="utf-8"></script>


    <?php
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
    if ($pagina == 'peliculas' || $pagina == 'ver_peliculas' || $pagina == 'ver_serie' || $pagina == 'categoria' || $pagina == 'cap' || $pagina == 'carrucel-prev') {
      echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>';
      /* Swiper JS */
      echo '<script src="http://localhost/administrador/js/swiper.min.js"></script>';
      echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>';

      echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>';
      echo '<script type="text/javascript" src="js/sweetalert.js" charset="utf-8"></script>';
      echo '<script src="../js/lista-temporada.js"></script>';
      echo '<script type="text/javascript" src="http://localhost/administrador/js/owl.carousel.min.js"></script>';
      echo '<script src="http://localhost/administrador/js/plugin_carrucel.js"></script>';
      echo '<script src="http://localhost/administrador/js/plugins.js"></script>';
      echo '<script src="http://localhost/administrador/js/main.js"></script>';

    }else if ($pagina == 'contacto' || $pagina == 'iniciar_sesion' || $pagina == 'categoria_session' || $pagina == 'registrate' || $pagina == 'peliculas_session' || $pagina == 'registrar_avatar' || $pagina == 'report_link') {
      echo '<script type="text/javascript" src="http://localhost/administrador/js/js.js"></script>';
      echo '<script type="text/javascript" src="http://localhost/administrador/js/archivo.js"></script>';
      echo '<script type="text/javascript" src="http://localhost/administrador/js/materialize.min.js"></script>';
      echo '<script src="js/vendor/modernizr-3.7.1.min.js"></script>';
      /* PARAMETROS DE ADMINISTRADOR */
      echo '<script type="text/javascript" src="http://localhost/administrador/js/js.js"></script>';
      echo '<script type="text/javascript" src="http://localhost/administrador/js/archivo.js"></script>';
      echo '<script type="text/javascript" src="http://localhost/administrador/js/materialize.min.js"></script>';
    } ?>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>

  <script src="https://www.google-analytics.com/analytics.js" async></script>

  <script src="<?php SERVERURL; ?>js/jquery-3.4.1.js"></script>
  <script src="<?php SERVERURL; ?>js/jquery.scrollUp.js"></script>

  <style media="screen">
  .sidenav-trigger {
    margin: 0 0 0 1em;
  }

    .sidenav li a {
      color: #fff;
    }

    #menu i:before, .sidenav li a i {
      color: #dd1818;
    }

    .sidenav {
      background: #333;
    }

    .background {
      background: #333;
    }

  .user-tipe {
    display: block;
    text-align: center;
    padding: 0 4px 0 4px!important;
  }

  .sidenav .user-view .circle {
    width: 100px;
    height: 100px;
  }

  .user-picture {
    margin-top: 1rem;
    display: inline-block;
  }

  .sidenav .user-view .name {
  	margin-top: 0!important;
  }

  .sidenav li>a>i {
        margin: 0!important;
  }

  .user-tipe img {
    width: 100%;
  }
  </style>

</body>
</html>
