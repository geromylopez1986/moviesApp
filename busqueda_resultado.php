<?php include("conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php $page = 'buscar'; include("layout/header.php"); ?>
<?php include("layout/header.php"); ?>

  <title>The Pelicula / Busqueda</title>

<style media="screen">
  .contenedor {
    max-width: 1200px;
    width: 95%;
    margin: 0 auto 2rem auto;
    padding: 2rem;
  }
</style>

<body style="background: #000; color: #fff; transition: .8s ease;">

<section class="ultimas-agregadas">

<div class="contenedor-titulo">
<center>
<h2>Resultado de la Busqueda...</h2>
</center>
</div><!-- FIN CONTENEDOR TITULO -->

<br>
<br>
<br>
<center>
<a href="<?php echo SERVERURL; ?>peliculas" style="
padding: 15px 40px;
background:#f09433;
font-size: 1.4rem;
font-weight: bold;
color: #000;
text-decoration: none;
 ">Volver...</a>
</center>
<br>
<br>
<br>
<br>

<div class="box-card contenedor">

<?php include("model/model_peliculas.php"); ?>

<?php foreach($datos as $items): ?>
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

<?php endforeach; ?>

<?php foreach ($datos7 as $serie): ?>
  <div class="card middle1">
            <div class="front">
              <img loading="lazy" src="<?php echo SERVERURL; ?>img/series/<?=$serie['imagen']?>"   alt="">
            </div>
            <div class="back">
              <div class="back-content middle">
                <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $serie['nombre']?></h2>

                <div class="sm">
                  <a id="icon-ver" href="<?php echo SERVERURL; ?>serie/<?=$serie['nombre_original']?>" style="text-decoration: none;"><i class="fas fa-play"></i>
                    <p id="ver-p1"><?= $serie['sub_nombre']?></p>
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
  <?php endforeach; ?>

</div><!-- FIN BOX CARD -->

</section>




<?php include("layout/footer.php"); ?>

</body>
