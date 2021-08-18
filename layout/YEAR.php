<?php if (!empty($_GET['YEAR'])): ?>
  <?php
 $categorias = $_GET['YEAR'];
 $sql ="SELECT * FROM peliculas WHERE year_pelicula = '{$categorias}' ORDER BY id DESC ";
 $datosY = Conexion::consultar($sql);
  ?>
  <section class="ultimas-agregadas">
    <div class="box-card">
    <?php if (isset($_GET['YEAR'])) {
               foreach($datosY as $items){ ?>
                 <div class="card middle1">
                           <div class="front">
                             <img loading="lazy" src="<?php echo SERVERURL; ?>img/peliculas/<?=$items['imagen']?>"   alt="">
                           </div>
                           <div class="back">
                             <div class="back-content middle">
                               <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $items['nombre']?></h2>

                               <div class="sm">
                                 <a id="icon-ver" href="<?php echo SERVERURL; ?><?=$items['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                                   <p id="ver-p1"><?= $items['nombre_original']?></p>
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
               <?php } }else{ ?>
             <?php } ?>
  </div><!-- FIN BOX CARD -->
  </section>

  <div class="paginacion-ultimas">
    <nav>
      <ul>
        <a href="<?php echo SERVERURL; ?>page/<?php echo $_GET['categoria_ultimas']-1; ?>" class="<?php echo $_GET['categoria_ultimas'] <= 1 ? 'ocultar' : '' ?>"><li>Anterior</li></a>
        <?php for ($i=0; $i < $paginasN; $i++): ?>
        <a href="<?php echo SERVERURL; ?>page/<?=$i+1 ?>"><li class="<?php echo $_GET['categoria_ultimas']==$i+1 ? 'activo' : '' ?>" ><?php echo $i+1; ?></li></a>
      <?php endfor; ?>
        <a href="<?php echo SERVERURL; ?>page/<?php echo $_GET['categoria_ultimas']+1; ?>" class="<?php echo $_GET['categoria_ultimas'] >= $paginasN ? 'ocultar' : '' ?>"><li>Siguiente</li></a>
      </ul>
    </nav>
  </div>

<?php endif; ?>
