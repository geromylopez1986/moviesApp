<div class="contenedor-titulo">
<h2>Ultimas Peliculas Agregadas</h2>
<div class="mostrar-todas">
  <?php
  $sql = " SELECT * FROM peliculas ";
  $consult = mysqli_query($mysqli, $sql);
    $count_todo = mysqli_num_rows($consult); ?>
    <a href="page/<?=1 ?>">Ver Todas</a>
</div><!-- FIN MOSTRAR TODO -->
</div><!-- FIN CONTENEDOR TITULO -->

<div class="box-card">

<?php foreach($datos as $items): ?>

	<div class="card middle1">
            <div class="front">
              <img loading="lazy" src="<?php echo SERVERURL; ?>img/peliculas/<?=$items['imagen']?>"   alt="">
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $items['nombre']?></h2>

                <div class="sm">

                  <a id="icon-ver" href="<?=$items['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                    <p id="ver-p1"><?=$items['sub_nombre']?></p>
                </a>
                  <a id="icon-traile" style="text-decoration: none;"><i class="fas fa-film"></i>
                    <p id="ver-p2">GENERO: <?= $items['genero_cover']?></p>
                </a>
                  <a id="icon-compartir" style="text-decoration: none;"><i class="far fa-clock"></i>
                    <p id="ver-p3">DURACIÓN: <?= $items['duracion_pelicula']?></p>
                </a>
                  <a id="icon-descarga" style="text-decoration: none;"><i class="far fa-star"></i>
                    <p id="ver-p4">CALIFICACIÓN: <?= $items['calificacion_pelicula']?></p>
                </a>
                </div>
                <span><?= $items['year_pelicula']?></span>
                <br>
                <br>
                <p><?= substr($items['idioma_pelicula'],0,150)." <br>". $items['calidad_pelicula']?></p>
              </div>
            </div><!-- find -->
          </div>

<?php endforeach; ?>

</div><!-- FIN BOX CARD -->
