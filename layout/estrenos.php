<section class="sliderbar-destacadas">

    <div class="contenedor-titulo">
        <h2>Estrenos</h2>

        <div class="mostrar-todas">
          <?php
          $sql = "SELECT * FROM peliculas WHERE estreno = 1 ";
          $restult = mysqli_query($mysqli, $sql);
           $count_destacados = mysqli_num_rows($restult); ?>
            <a href="todo_los_estrenos/<?=$count_destacados ?>">Ver Todas</a>
        </div><!-- FIN MOSTRAR TODO -->
    </div><!-- contenedor-titulo -->

    <div class="box-destacados">
      <div class="slide hi-slide">
        <div class="hi-prev "></div>
        <div class="hi-next "></div>
        <ul>
<?php

$sql = "SELECT * FROM peliculas WHERE estreno = 1 ORDER BY id DESC ";
$datos5 = Conexion::consultar($sql);

foreach($datos5 as $destacados): ?>
    <li><a href="<?=$destacados['nombre_original']?>"><img loading="lazy" src="img/peliculas/<?= $destacados['imagen']?>"
       alt="<?= $destacados['nombre_original']?>" /></a></li>

<?php endforeach; ?>
</ul>
</div>
    </div><!-- box-destacados -->
    </section><!-- sliderbar-destacadas -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  		<script type="text/javascript" src="<?php echo SERVERURL; ?>js/jquery.hislide.min.js" ></script>
  		<script>
  			$('.slide').hiSlide();
  		</script>
