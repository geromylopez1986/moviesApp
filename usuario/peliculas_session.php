<?php
include("../controller/usuario_session.php");
include("../conexion/conexion.php");
include("../layout/header_sesion.php");
?>

<div class="contenedor" style="background: #333;">

  <div class="row container">
  	<form class="col s12" action="<?php echo SERVERURL; ?>controller/buscar" method="post">
  		<div class="row">
  			<div class="input-field col s12 l6 center" style="background: #dd1818; padding: .5rem; margin-bottom: 2rem;">
          <a><img src="<?php echo SERVERURL; ?>img/logo/logo.png" alt=""></a>
  			</div>
  			<div class="input-field buscador_u col s12 l4 right">
  				<button><i class="material-icons prefix">search</i></button>
  				<input id="icon_prefix right" class="validate" type="search" name="buscar" placeholder="buscar..." required="">
  			</div>
  			<!--- <center><button class="btn waves-effect orange darken-4 " type="submit">Buscar</button></center>  -->
  		</div>
  	</form>
  </div>

  <br>

  <?php include("../model/model_peliculas.php"); ?>

  <div class="row" style="padding: 0px; margin: auto; text-align: center;">

<section>
  <div class="barra">
    <h5>Ultimas Peliculas Agregadas</h5>
  </div>

  <?php foreach($datos as $items){ ?>

  <figure class="imghvr-shutter-in-out-vert" style="margin: 5px;">
  <img class="responsive-img" src="<?php echo SERVERURL; ?>img/peliculas/<?=$items['imagen']?>" style="height: 310px; width: 220px;" alt="example-image">
  <figcaption style="background: rgba(0,0,0,0);">
    <h6 class="ih-fade-down ih-delay-sm"><?= $items['nombre']?></h6>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Género: <i><?= substr($items['genero_cover'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Estreno: <i><?= substr($items['year_pelicula'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Duración: <i><?= substr($items['duracion_pelicula'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Calificación: <i><?= substr($items['calificacion_pelicula'],0,150)?></i></p>
  </figcaption>
  <a href="<?php echo SERVERURL; ?>usuario/<?=$items['nombre_original']?>"></a>
  </figure>
  <?php }?>

  <div class="paginacion-admin">
    <a href="<?php echo SERVERURL; ?>usuario/page/<?=1 ?>" class="waves-effect waves-light btn-large">Ver Mas</a>
  </div>
</section>

<section>
  <div class="barra">
  	<h5>Ultimas Series Agregadas</h5>
  </div>

  <?php foreach($datos7 as $serie){ ?>

  <figure class="imghvr-shutter-in-out-vert" style="margin: 5px;">
    <img class="responsive-img" src="../img/series/<?=$serie['imagen']?>" style="height: 310px; width: 220px;" alt="example-image">
    <figcaption style="background: rgba(0,0,0,0);">
      <h6 class="ih-fade-down ih-delay-sm"><?= $serie['nombre']?></h6>
      <div class="divider" style="margin: 10px 0px;"></div>
  		<p class="ih-zoom-in ih-delay-md">Género: <i><?= substr($serie['genero_cover'],0,150)?></i></p>
  		<div class="divider" style="margin: 10px 0px;"></div>
      <p class="ih-zoom-in ih-delay-md">Estreno: <i><?= substr($serie['year'],0,150)?></i></p>
  		<div class="divider" style="margin: 10px 0px;"></div>
  		<p class="ih-zoom-in ih-delay-md">Duración: <i><?= substr($serie['duracion'],0,150)?></i></p>
  		<div class="divider" style="margin: 10px 0px;"></div>
  		<p class="ih-zoom-in ih-delay-md">Calificación: <i><?= substr($serie['calificacion'],0,150)?></i></p>
    </figcaption>
    <a href="<?php echo SERVERURL; ?>usuario/serie/<?=$serie['nombre_original']?>"></a>
  </figure>

<?php } ?>
<div class="paginacion-admin">
	<a href="<?php echo SERVERURL; ?>usuario/seriePage/<?=1 ?>" class="waves-effect waves-light btn-large">Ver Mas</a>
</div>
</section>

</div>

</did>

<?php include("../layout/footer_sesion.php"); ?>
