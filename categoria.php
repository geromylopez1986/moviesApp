<?php include("conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php $page = 'peliculas'; include("layout/header.php"); ?>
<?php include("layout/navegador.php"); ?>
<?php include("model/model_peliculas.php"); ?>
  <title>The Pelicula / Peliculas</title>

<br>

<br>

<div class="contenedor-site contenedor animated bounceinDown slow">

<header class="site-header">
    <div class="logotipo"><a href="<?php echo SERVERURL; ?>peliculas"><img loading="lazy" src="<?php echo SERVERURL; ?>img/logo/logo.png" alt="logotipo"></a></div>
    <div class="buscador">
        <form action="<?php echo SERVERURL; ?>controller/buscar" method="post">
        <div class="box-buscar">
        <input type="search" name="buscar" class="validate" id="icon_prefix" placeholder="Buscar" required="">
        <button type="submit"><i class="fas fa-search"></i></button>
        </div>
		</form>
    </div>
</header>

<?php if (!empty($_GET['categoria_peliculas'])): ?>
  <?php
  $categorias = $_GET['categoria_peliculas'];
  $sql ="SELECT * FROM peliculas WHERE genero_cover = '{$categorias}' ORDER BY year_pelicula DESC LIMIT 32";
  $datos = Conexion::consultar($sql);
  ?>
  <?php foreach ($datos as $titulo): ?>
  <?php endforeach; ?>
  <div class="titulo-categoria">
    <h2>Genero: <?php echo $titulo['genero_cover']; ?></h2>
  </div>
  <section class="ultimas-agregadas">
    <div class="box-card">
    <?php if (isset($_GET['categoria_peliculas'])) {
               foreach($datos as $items){ ?>
                 <div class="card middle1">
                           <div class="front">
                             <img loading="lazy" src="<?php echo SERVERURL; ?>img/peliculas/<?=$items['imagen']?>"   alt="">
                           </div>
                           <div class="back">
                             <div class="back-content middle">
                               <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $items['nombre']?></h2>

                               <div class="sm">
                                 <a id="icon-ver" href="<?php echo SERVERURL; ?><?=$items['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                                   <p id="ver-p1"><?= $items['sub_nombre']?></p>
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
<?php endif; ?>

<?php if (!empty($_GET['categoria_series'])): ?>
  <?php
  $categorias = $_GET['categoria_series'];
  $sql ="SELECT * FROM series WHERE genero_cover = '{$categorias}' ORDER BY id DESC ";
  $datosS = Conexion::consultar($sql);
   ?>
   <?php foreach ($datosS as $contar): ?>
   <?php endforeach; ?>
   <div class="titulo-categoria">
     <h2>Ultimas Series de: <?php echo $contar['genero_cover']; ?></h2>
   </div>
  <section class="ultimas-agregadas">
    <div class="box-card">
    <?php if (isset($_GET['categoria_series'])) {
               foreach($datosS as $serie){ ?>
                 <div class="card middle1">
                           <div class="front">
                             <img loading="lazy" src="<?php echo SERVERURL; ?>img/series/<?=$serie['imagen']?>"   alt="">
                           </div>
                           <div class="back">
                             <div class="back-content middle">
                               <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $serie['nombre']?></h2>

                               <div class="sm">
                                 <a id="icon-ver" href="<?php echo SERVERURL; ?>serie/<?=$serie['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                                   <p id="ver-p1"><?= $serie['nombre_original']?></p>
                               </a>
                                 <a id="icon-traile" style="text-decoration: none;"><i class="fas fa-film"></i>
                                   <p id="ver-p2">GENERO: <?= $serie['genero_cover']?></p>
                               </a>
                                 <a id="icon-compartir" style="text-decoration: none;"><i class="far fa-clock"></i>
                                   <p id="ver-p3">DURACIÓN: <?= $serie['duracion']?></p>
                               </a>
                                 <a id="icon-descarga" style="text-decoration: none;"><i class="far fa-star"></i>
                                   <p id="ver-p4">CALIFICACIÓN: <?= $serie['calificacion']?></p>
                               </a>
                               </div>
                               <span><?= $serie['year']?></span>
                               <br>
                               <br>
                               <p><?= substr($serie['idioma'],0,150)." <br>". $serie['calidad']?></p>
                             </div>
                           </div><!-- find -->
                         </div>
               <?php } }else{ ?>
             <?php } ?>
  </div><!-- FIN BOX CARD -->
  </section>
<?php endif; ?>

<?php if (!empty($_GET['categoria_seriesS'])): ?>
  <?php
  $categorias = $_GET['categoria_seriesS'];
  $sql ="SELECT * FROM series ORDER BY id DESC LIMIT 24 ";
  $sqlFecha ="SELECT * FROM series ORDER BY id DESC LIMIT 1 ";
  $datosS = Conexion::consultar($sql);
  $datos111 = Conexion::consultar($sqlFecha);
   ?>
   <?php require 'model/modal_paginacion_series.php'; ?>
   <?php foreach ($datos111 as $public): ?>
   <?php endforeach; ?>
   <?php foreach ($datosS as $contar): ?>
   <?php endforeach; ?>
   <div class="titulo-categoria">
     <h2>Ultimas Publicaciones: <?php echo $public['fecha']; ?></h2>
   </div>
  <section class="ultimas-agregadas">
    <div class="box-card">
    <?php if (isset($_GET['categoria_seriesS'])) {
               foreach($datosS as $serie){ ?>
                 <div class="card middle1">
                           <div class="front">
                             <img loading="lazy" src="<?php echo SERVERURL; ?>img/series/<?=$serie['imagen']?>"   alt="">
                           </div>
                           <div class="back">
                             <div class="back-content middle">
                               <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $serie['nombre']?></h2>

                               <div class="sm">
                                 <a id="icon-ver" href="<?php echo SERVERURL; ?>serie/<?=$serie['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                                   <p id="ver-p1"><?= $serie['nombre_original']?></p>
                               </a>
                                 <a id="icon-traile" style="text-decoration: none;"><i class="fas fa-film"></i>
                                   <p id="ver-p2">GENERO: <?= $serie['genero_cover']?></p>
                               </a>
                                 <a id="icon-compartir" style="text-decoration: none;"><i class="far fa-clock"></i>
                                   <p id="ver-p3">DURACIÓN: <?= $serie['duracion']?></p>
                               </a>
                                 <a id="icon-descarga" style="text-decoration: none;"><i class="far fa-star"></i>
                                   <p id="ver-p4">CALIFICACIÓN: <?= $serie['calificacion']?></p>
                               </a>
                               </div>
                               <span><?= $serie['year']?></span>
                               <br>
                               <br>
                               <p><?= substr($serie['idioma'],0,150)." <br>". $serie['calidad']?></p>
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
        <a href="series=<?php echo $_GET['categoria_seriesS']-1; ?>" class="<?php echo $_GET['categoria_seriesS'] <= 1 ? 'ocultar' : '' ?>"><li>Anterior</li></a>
        <?php for ($i=0; $i < $paginasN; $i++): ?>
        <a href="series=<?=$i+1 ?>"><li class="<?php echo $_GET['categoria_seriesS']==$i+1 ? 'activo' : '' ?>" ><?php echo $i+1; ?></li></a>
      <?php endfor; ?>
        <a href="series=<?php echo $_GET['categoria_seriesS']+1; ?>" class="<?php echo $_GET['categoria_seriesS'] >= $paginasN ? 'ocultar' : '' ?>"><li>Siguiente</li></a>
      </ul>
    </nav>
  </div>
<?php endif; ?>

<?php if (!empty($_GET['categoria_estrenos'])): ?>
  <?php
  $categorias = $_GET['categoria_estrenos'];
  $sql ="SELECT * FROM peliculas WHERE estreno = 1 ORDER BY year_pelicula DESC LIMIT 16 ";
  $datosD = Conexion::consultar($sql);
   ?>
  <section class="ultimas-agregadas">
    <div class="box-card">
    <?php if (isset($_GET['categoria_estrenos'])) {
               foreach($datosD as $estrenos){ ?>
                 <div class="card middle1">
                           <div class="front">
                             <img loading="lazy" src="<?php echo SERVERURL; ?>img/peliculas/<?=$estrenos['imagen']?>"   alt="">
                           </div>
                           <div class="back">
                             <div class="back-content middle">
                               <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $estrenos['nombre']?></h2>

                               <div class="sm">
                                 <a id="icon-ver" href="<?php echo SERVERURL; ?><?=$estrenos['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                                   <p id="ver-p1"><?= $estrenos['sub_nombre']?></p>
                               </a>
                                 <a id="icon-traile" style="text-decoration: none;"><i class="fas fa-film"></i>
                                   <p id="ver-p2">GENERO: <?= $estrenos['genero_cover']?></p>
                               </a>
                                 <a id="icon-compartir" style="text-decoration: none;"><i class="far fa-clock"></i>
                                   <p id="ver-p3">DURACIÓN: <?= $estrenos['duracion_pelicula']?></p>
                               </a>
                                 <a id="icon-descarga" style="text-decoration: none;"><i class="far fa-star"></i>
                                   <p id="ver-p4">CALIFICACIÓN: <?= $estrenos['calificacion_pelicula']?></p>
                               </a>
                               </div>
                               <span><?= $estrenos['year_pelicula']?></span>
                               <br>
                               <br>
                               <p><?= substr($estrenos['idioma_pelicula'],0,150)." <br>". $estrenos['calidad_pelicula']?></p>
                             </div>
                           </div><!-- find -->
                         </div>
               <?php } }else{ ?>
             <?php } ?>
  </div><!-- FIN BOX CARD -->
  </section>
<?php endif; ?>

<?php if (!empty($_GET['categoria_ultimas'])): ?>
  <?php
  $categorias = $_GET['categoria_ultimas'];
  $sql ="SELECT * FROM peliculas  ORDER BY year_pelicula DESC";
  $sqlpublic ="SELECT * FROM peliculas  ORDER BY year_pelicula DESC LIMIT 1";
  $datosU = Conexion::consultar($sql);
  $datospublic112 = Conexion::consultar($sqlpublic);
   ?>
  <?php require 'model/modal_paginacion_ultimas.php'; ?>
  <?php foreach ($datospublic112 as $publicPelicula): ?>
  <?php endforeach; ?>
  <?php foreach ($datosU as $contar): ?>
  <?php endforeach; ?>
   <div class="titulo-categoria">
     <h2>Ultimas Publicaciones: <?php echo $publicPelicula['fecha']; ?></h2>
   </div>
  <section class="ultimas-agregadas">
    <div class="box-card">
    <?php if (isset($_GET['categoria_ultimas'])) {
               foreach($pelis as $ultimos){ ?>
                 <div class="card middle1">
                           <div class="front">
                             <img loading="lazy" src="<?php echo SERVERURL; ?>img/peliculas/<?=$ultimos['imagen']?>"   alt="">
                           </div>
                           <div class="back">
                             <div class="back-content middle">
                               <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $ultimos['nombre']?></h2>

                               <div class="sm">
                                 <a id="icon-ver" href="<?php echo SERVERURL; ?><?=$ultimos['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                                   <p id="ver-p1"><?= $ultimos['nombre_original']?></p>
                               </a>
                                 <a id="icon-traile" style="text-decoration: none;"><i class="fas fa-film"></i>
                                   <p id="ver-p2">GENERO: <?= $ultimos['genero_cover']?></p>
                               </a>
                                 <a id="icon-compartir" style="text-decoration: none;"><i class="far fa-clock"></i>
                                   <p id="ver-p3">DURACIÓN: <?= $ultimos['duracion_pelicula']?></p>
                               </a>
                                 <a id="icon-descarga" style="text-decoration: none;"><i class="far fa-star"></i>
                                   <p id="ver-p4">CALIFICACIÓN: <?= $ultimos['calificacion_pelicula']?></p>
                               </a>
                               </div>
                               <span><?= $ultimos['year_pelicula']?></span>
                               <br>
                               <br>
                               <p><?= substr($ultimos['idioma_pelicula'],0,150)." <br>". $ultimos['calidad_pelicula']?></p>
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

<?php endif; ?>



<?php if (!empty($_GET['YEAR'])): ?>
  <?php
 $categorias = $_GET['YEAR'];
 $sql ="SELECT * FROM series WHERE year = '{$categorias}' ORDER BY id DESC LIMIT 24";
 $datosYS = Conexion::consultar($sql);
  ?>
  <section class="ultimas-agregadas">
    <div class="box-card">
    <?php if (isset($_GET['YEAR'])) {
               foreach($datosYS as $items){ ?>
                 <div class="card middle1">
                           <div class="front">
                             <img loading="lazy" src="<?php echo SERVERURL; ?>img/series/<?=$items['imagen']?>"   alt="">
                           </div>
                           <div class="back">
                             <div class="back-content middle">
                               <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $items['nombre']?></h2>

                               <div class="sm">
                                 <a id="icon-ver" href="<?php echo SERVERURL; ?>serie/<?=$items['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                                   <p id="ver-p1"><?= $items['sub_nombre']?></p>
                               </a>
                                 <a id="icon-traile" style="text-decoration: none;"><i class="fas fa-film"></i>
                                   <p id="ver-p2">GENERO: <?= $items['genero_cover']?></p>
                               </a>
                                 <a id="icon-compartir" style="text-decoration: none;"><i class="far fa-clock"></i>
                                   <p id="ver-p3">DURACIÓN: <?= $items['duracion']?></p>
                               </a>
                                 <a id="icon-descarga" style="text-decoration: none;"><i class="far fa-star"></i>
                                   <p id="ver-p4">CALIFICACIÓN: <?= $items['calificacion']?></p>
                               </a>
                               </div>
                               <span><?= $items['year']?></span>
                               <br>
                               <br>
                               <p><?= substr($items['idioma'],0,150)." <br>". $items['calidad']?></p>
                             </div>
                           </div><!-- find -->
                         </div>
               <?php } }else{ ?>
             <?php } ?>
  </div><!-- FIN BOX CARD -->
  </section>
<?php endif; ?>

<?php include("layout/footer.php"); ?>
