<div class="slider-gm">
  <div class="bd-example" id="slider-gm">
    <div id="carouselExampleCaptions" class="carousel slide_1" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="img/inicio/portada.jpg" class="d-block w-100" id="img-slider"
            alt="...">
          <div class="carousel-caption container-text1 d-none d-md-block">
            <h2 class="h-001 animated fadeInDown slower">Bienvenidos a <span>ThePeliculas.Com</span></h5>
            <p class="p-001 animated fadeInRight slow ">
              Disfruta de todo el contenido variado que tenemos para ti. en un amplio catalogo de peliculas, series Juegos
              y mucho mas.. si tienes algun problema por favor no dudes en ponerte en contacto con nosotros en el link de soporte tecnico,
              siempre estamos mejorando la plataforma para brindarte un mejor servicio y que disfrutes de todo el contenido fluido y sin pausas...
            </p>
            <a href="contacto">
              <button class="b-001 animated fadeInLeft slower" type="submit">SOPORTE TECNICO</button>
            </a>

          </div>
        </div>
        <?php

        $sql = "SELECT * FROM peliculas WHERE calificacion_pelicula >= '8.6' ORDER BY year_pelicula DESC ";
        $datos6 = Conexion::consultar($sql);
        $i = 0;
        foreach($datos6 as $estrenos): if($i++ >=4) break; ?>
        <div class="carousel-item">
          <img loading="lazy" src="img/slider/<?= $estrenos['slide_bar']?>" class="animated fadeIn slower d-block w-100" id="img-slider" alt="...">
          <div class="carousel-caption container-text2 d-none d-md-block">
            <h4 style="text-transform: uppercase;" class="h-002 animated fadeInLeft slower"><?= $estrenos['nombre']?></h5>
            <p class="p-002 animated fadeInUp slow" ><?= $estrenos['genero']?></p>
            <p class="p-002 animated fadeInDown slow" ><?= $estrenos['year_pelicula']?></p>
            <p class="p-002 animated fadeInLeft  slow" ><?= $estrenos['duracion_pelicula']?></p>
            <p class="p-002 animated fadeInRight  slow" ><?= $estrenos['idioma_pelicula']?></p>
            <a href="<?=$estrenos['nombre_original']?>">
              <button class="b-002 animated fadeInRight slower" type="submit">VER PELICULA</button>
            </a>

          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
