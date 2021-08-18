<div class="contenedorMD">

    <div class="series-fles">
        <div class="contenedor-titulo">
            <h2>Series</h2>
        </div>
        <div class="box-series">
            <div class="mostrar-todas">
                <?php
    $sql = " SELECT * FROM series";
    $consult = mysqli_query($mysqli, $sql);
    $count_s = mysqli_num_rows($consult);
   ?>
                <a href="<?php echo SERVERURL; ?>series/<?=1 ?>">Ver Todas</a>
            </div>
        </div>

    </div>

</div>

<div class="series-box">
    <?php foreach ($datos7 as $serie): ?>

    <div class="card middle1">
        <div class="front">
            <img loading="lazy" src="<?php echo SERVERURL; ?>img/series/<?=$serie['imagen']?>" alt="">
        </div>
        <div class="back">
            <div class="back-content middle">
                <h2 class="titulo-pelicula" style="border: 1px solid #000;"><?= $serie['nombre']?></h2>

                <div class="sm">
                    <a id="icon-ver" href="<?php echo SERVERURL; ?>serie/<?=$serie['nombre_original']?>"
                        style="text-decoration: none;"><i class="fas fa-play"></i>
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
</div>