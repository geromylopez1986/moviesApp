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
<a href="<?php echo SERVERURL; ?>administrador/<?=$items['nombre_original']?>"></a>
</figure>
<?php }?>

<div class="paginacion-admin">
  <a href="<?php echo SERVERURL; ?>administrador/categoria_session.php" class="waves-effect waves-light btn-large">Ver Mas</a>
</div>
