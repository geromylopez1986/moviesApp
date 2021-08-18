<?php include("conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php $page = 'peliculas'; include("layout/header.php"); ?>
<?php include("layout/navegador.php"); ?>
<?php include("model/model_pelicula_consulta.php"); ?>
<title>The Pelicula / Ver Pelicula</title>

<style media="screen">
.linkDescargas {
    color: #EBC654;
    text-align: center;
}

.noUserMJS {
    text-align: center;
    color: #EBC654;
}

.contenedor {
    max-width: 1366px;
    width: 100%;
    margin: 0 auto;
}

.tutorialLogo {
    width: 275px;
    height: 78.1px;
}
</style>

<?php if (isset($_GET['pelicula'])) { ?>

<?php foreach($datos as $items){ ?>

<body class="capa_pelicula animated fadeIn slow"
    style="height: 513px; background-image: url(img/imagen_bg/<?=$items['imagen_bg']?>);">
    <section class="contenedor-popular">
        <div class="contenedor-tituloH contenedor_titulos">
            <h1><?= $items['genero_cover']?>: <?=$items['sub_nombre']?> <span>(<?= $items['year_pelicula']?>)</span>
            </h1>
        </div>
    </section>

    <main class="contenedor-informacion">


        <div class="contenedor-cover">
            <img src="img/peliculas/<?= $items['imagen']?>" alt="<?=$items['nombre'];?>">
        </div>

        <div class="contenedor-descripcion">
            <h2><?=$items['nombre'];?></h2>
            <span>PUBLICADO : <?= $items['fecha']?></span>
            <span>DURACIÓN : <a><?= $items['duracion_pelicula']?></a></span>
            <span>GÉNERO : <?= $items['genero']?></span>
            <span>PAIS : <?= $items['pais_pelicula']?></span>
            <span>AÑO : (<?= $items['year_pelicula']?>)</span>
            <span>IDIOMA : <?= $items['idioma_pelicula']?> <i class="fas fa-volume-up"></i></span>
            <span>CALIDAD : <a><?= $items['calidad_pelicula']?></a></span>
            <span>DIRECTOR : <?= $items['director_pelicula']?></span>
            <span>CALIFICACIÓN : <a class="imdb">IMDb</a></i> <?= $items['calificacion_pelicula']?> <i
                    class="color-yellow fas fa-star"></i></span>
        </div>

        <div class="contenedor-trailer">
            <h2>Trailer Oficial</h2>
            <div class="video-box">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $items['trailer']?>"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>


        <div class="contenedor-compartir">
            <div class="box-sinopsis">
                <h2>SINOPSIS</h2>
                <p><?= $items['descripcion']; ?></p>
            </div>
            <div class="box-reparto">
                <h2>REPARTO</h2>
                <p><?= $items['actores_pelicula']?></p>
            </div>
            <div class="comartir">
            </div>
        </div>
        <?php } ?>
        <!--FIN DE LA SECION DE LA INFORMACION-->

        <?php if (isset($_GET['pelicula'])): ?>
        <section class="contenedor-peliculaVer">

            <div class="box-link">
                <a href="#" class="btn-primary-lg-no-effect">VER PELICULA</a>
                <a href="#" class="btn-primary-lg-no-effect">DESCARGAR</a>
            </div>

            </div>

            <?php
            $sql = " SELECT * FROM servidores_online WHERE nombre_original = '".$_GET['pelicula']."' ";
            $servidores = Conexion::consultar($sql);
          ?>

            <div class="box-veronline">
                <h2>VER EN LÍNEA</h2>
                <div class="serv">
                    <nav class="navegador_servidor_online">
                        <ul>
                            <?php foreach ($servidores as $serv) { ?>
                            <?php if (!empty($serv['nombre_serv1'])) { ?>
                            <li id="link_serv1"><a><?=$serv['nombre_serv1']?></a></li><?php } ?>
                            <?php if (!empty($serv['nombre_serv2'])) { ?>
                            <li id="link_serv2"><a><?=$serv['nombre_serv2']?></a></li><?php } ?>
                            <?php if (!empty($serv['nombre_serv3'])) { ?>
                            <li id="link_serv3"><a><?=$serv['nombre_serv3']?></a></li><?php } ?>
                            <?php if (!empty($serv['nombre_serv4'])) { ?>
                            <li id="link_serv4"><a><?=$serv['nombre_serv4']?></a></li><?php } ?>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>

                <div class="box-verpelicula" id="box-verpelicula">
                    <?php if (!empty($serv['serv_link1'])) { ?>
                    <div class="video_pelis">
                        <div id="loading"></div>
                        <div id="zoliframe"><iframe id="video_online1" src="<?=$serv['serv_link1']?>" scrolling="no"
                                frameborder="0" width="700" height="500" allowfullscreen="true"
                                webkitallowfullscreen="true"></iframe></div>
                        <?php } ?>
                        <?php if (!empty($serv['serv_link2'])) { ?>
                        <iframe id="video_online2" style="display:none;" src="<?=$serv['serv_link2']?>" scrolling="no"
                            frameborder="0" width="700" height="500" allowfullscreen="true"
                            webkitallowfullscreen="true"></iframe><?php } ?>
                        <?php if (!empty($serv['serv_link3'])) { ?>
                        <iframe id="video_online3" style="display:none;" src="<?=$serv['serv_link3']?>" scrolling="no"
                            frameborder="0" width="700" height="500" allowfullscreen="true"
                            webkitallowfullscreen="true"></iframe><?php } ?>
                        <?php if (!empty($serv['serv_link4'])) { ?>
                        <iframe id="video_online4" style="display:none;" src="<?=$serv['serv_link4']?>" scrolling="no"
                            frameborder="0" width="700" height="500" allowfullscreen="true"
                            webkitallowfullscreen="true"></iframe><?php } ?>
                    </div>
                </div>

            </div>
        </section>
        <?php endif; ?>
        <!--FIN DE VER ONLINE-->

        <?php if (isset($_GET['pelicula'])) { ?>
        <section class="contenedor">
            <?php include("model/model_pelicula_consulta.php"); ?>
            <?php foreach($datos4 as $descargas) { ?>
            <section class="contenedor-descargas">
                <div class="box-opciones">
                    <h2>Servidores de descargas</h2>
                    <table class="table table-hover">
                        <thead class="thead-desc">
                            <tr>
                                <th width="20%">Opciones de descarga</th>

                                <th width="20%">Servidor</th>

                                <th width="20%">Idioma</th>

                                <th width="20%">Calidad</th>

                                <th width="10%">Peso</th>
                                <th width="10%">Tutorial</th>
                                <th width="10%">Reportar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($descargas['link1'] || $descargas['link2'] || $descargas['link3'] || $descargas['link4'] || $descargas['link5'] || $descargas['link6'] || $descargas['link7'] ||
          $descargas['link8'] || $descargas['link9'] ){ ?>
                            <?php if (!empty($descargas['link1'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link1']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 1 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="<?php echo SERVERURL; ?>img/iconos/<?= $descargas['icon1_name']?>.png"
                                        title="<?= $descargas['serv1']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv1']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad1']?>
                                </td>
                                <td><?=$descargas['peso1']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial1']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv1']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 1-->

                            <?php if (!empty($descargas['link2'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link2']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 2 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="<?php echo SERVERURL; ?>img/iconos/<?= $descargas['icon2_name']?>.png"
                                        title="<?= $descargas['serv2']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv2']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad2']?>
                                </td>
                                <td><?=$descargas['peso2']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial2']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv2']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 2-->

                            <?php if (!empty($descargas['link3'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link3']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 3 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="<?php echo SERVERURL; ?>img/iconos/<?= $descargas['icon3_name']?>.png"
                                        title="<?= $descargas['serv3']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv3']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad3']?>
                                </td>
                                <td><?=$descargas['peso3']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial3']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv3']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 3-->

                            <?php if (!empty($descargas['link4'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link4']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 4 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="img/iconos/<?= $descargas['icon4_name']?>.png"
                                        title="<?= $descargas['serv4']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv4']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad4']?>
                                </td>
                                <td><?=$descargas['peso4']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial4']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv4']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 4-->

                            <?php if (!empty($descargas['link5'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link5']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 5 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="img/iconos/<?= $descargas['icon5_name']?>.png"
                                        title="<?= $descargas['serv5']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv5']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad5']?>
                                </td>
                                <td><?=$descargas['peso5']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial5']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv5']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 5-->

                            <?php if (!empty($descargas['link6'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link6']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 6 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="img/iconos/<?= $descargas['icon6_name']?>.png"
                                        title="<?= $descargas['serv6']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv6']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad6']?>
                                </td>
                                <td><?=$descargas['peso6']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial6']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv6']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 6-->

                            <?php if (!empty($descargas['link7'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link7']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 7 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="img/iconos/<?= $descargas['icon7_name']?>.png"
                                        title="<?= $descargas['serv7']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv7']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad7']?>
                                </td>
                                <td><?=$descargas['peso7']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial7']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv7']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 7-->

                            <?php if (!empty($descargas['link8'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link8']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 8 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="img/iconos/<?= $descargas['icon8_name']?>.png"
                                        title="<?= $descargas['serv8']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv8']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad8']?>
                                </td>
                                <td><?=$descargas['peso8']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial8']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv8']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 8-->

                            <?php if (!empty($descargas['link9'])) { ?>
                            <tr>
                                <td>
                                    <a href="<?= $descargas['link9']?>" class="btn btn-xs btn-success" rel="nofollow"
                                        target="_blank" style="min-width: 86px;">
                                        <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download"
                                            aria-hidden="true"></span> Op 9 Descargar
                                    </a>
                                </td>
                                <td>
                                    <img src="img/iconos/<?= $descargas['icon9_name']?>.png"
                                        title="<?= $descargas['serv3']?>"
                                        style="margin: 0 3px 0 0;width:16px;height:16px">
                                    <span><?= $descargas['serv9']?></span>
                                </td>
                                <td>
                                    <?= $descargas['idioma1']?>
                                    <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2']; } ?>
                                </td>
                                <td>
                                    <span class="quality-red">
                                        <?= $descargas['calidad9']?>
                                </td>
                                <td><?=$descargas['peso9']?></td>
                                <td>
                                    <a id="<?php echo $descargas['tutorial9']; ?>"
                                        class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Tutorial</a>
                                </td>
                                <td>
                                    <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv9']?>"
                                        class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank"
                                        style="min-width: 86px;">Reportar</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!--FIN DE LINK 9-->
                            <?php }else {
                          echo "<div class='linkDescargas'>";
                            echo "<h3>No existen links de descargas</h3>";
                          echo "</div>";
                            } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                    <!--FIN DE EL FOREACH DE DESCARGAS-->
                </div>
                <!--FIN DE BOX-OPCIONES DESCARGAS-->
            </section>
            <?php } ?>
            <!--FIN DE LA SECION DE DESCARGA-->

            <style media="screen">
            div.header-comentarios {
                display: -webkit-flex;
                display: -ms-flex;
                display: flex;
                justify-content: space-between;
                background-color: #333333;
                align-items: center;
                padding: 5px;
            }

            .modal-backdrop {
                z-index: 0
            }

            .modal-dialog {
                top: 20%;
                bottom: 50%;
            }

            .aviso-coment {
                background-color: #333333;
                color: white;
                padding: 5px;
            }

            .aviso-coment a {
                background-color: #dd1818;
                padding: 5px 5px;
                color: white;
            }
            </style>

            <?php include("model/model_pelicula_consulta.php"); ?>
            <?php include("model/model_consulta_contar_comentarios.php"); ?>

            <div class="header-comentarios">
                <div class="title-comentarios">
                    <h5 class="orange-text">Comentarios <span><?php echo $countT; ?></span></h5>
                </div>
                <div class="login-comentarios">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@mdo">Not User <i class="fas fa-user-slash"></i></button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="aviso-coment">
                                    <span><b>Aviso importante!</b> los comentarios que realizes como <br> (No User) se
                                        van a publicar en la parte inferior de los comentarios, y no tiene relacion con
                                        no ser <b>usuario</b>
                                        ya que el sistema asi esta diseñado Admin <a href="#">thepelicuas.com</a>
                                    </span>
                                </div>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Comentario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo SERVERURL; ?>controller/guardar_comentario" method="post">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                                            <input type="text" name="notUserName" class="form-control"
                                                id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" name="notUserComent"
                                                id="message-text"></textarea>
                                        </div>

                                        <div class="modal-footer">
                                            <input type="hidden" name="NotUser_id" value="<?=$_GET['pelicula'];?>">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--AGREGAR COMENTARIOS COMO NO USER-->
            <div class="divider orange"></div>

            <style media="screen">
            .mensaje-comentario {
                font-size: 18px;
                font-weight: bold;
            }

            span.title {
                font-size: 18px;
                color: #dd1818;
                font-weight: bold;
            }
            </style>
            <?php include("model/model_agregar_comentario.php"); ?>
            <section>
                <?php echo "<div class='grey lighten-5'>"; ?>
                <?php if (!empty($datos) || !empty($datosNoUser)) { ?>

                <?php foreach($datos as $items2) { ?>
                <div class="result-comentarios">
                    <ul class="comentario-noUser collection">
                        <li class="collection-item avatar">
                            <img src="<?php echo SERVERURL; ?>img/user/<?=$items2['img']?>" alt="" style="width: 50px; height: 50px;
                  border: 1px solid #dd1818;margin: 5px;">
                            <span class="title blue-text"><?=$items2['nombre'];?> - <i class="black-text far fa-clock"
                                    style="font-size: 18px;"></i></span>
                            <span> Publicado el: <?=$items2['fecha'];?></span>
                            <br>
                            <span class="mensaje-comentario">-<?=$items2['comentario'];?></span>
                        </li>
                    </ul>
                </div>
                <?php } ?>

                <?php foreach ($datosNoUser as $NoUser) { ?>
                <div class="result-comentarios">
                    <ul class="comentario-noUser collection">
                        <li class="collection-item avatar">
                            <img src="<?php echo SERVERURL; ?>img/user/<?=$NoUser['imgNoUser']?>" alt="" style="width: 50px; height: 50px;
                    border: 1px solid #dd1818;margin: 5px;">
                            <span class="title blue-text"><?=$NoUser['nombre'];?> - <i class="black-text far fa-clock"
                                    style="font-size: 18px;"></i></span>
                            <span> Publicado el: <?=$NoUser['fechaNoUser'];?></span>
                            <br>
                            <span class="mensaje-comentario">-<?=$NoUser['mensaje'];?></span>
                        </li>
                    </ul>
                </div>
                <?php } ?>

                <?php }else {
        echo "<div class='noUserMJS'>";
          echo "<h3>No hay Comentarios</h3>";
        echo "</div>";
      } ?>
            </section>

            <section class="sugerencia cont_sug clearfix">
                <div class="contenedor-info-head">
                    <div class="titulo-seccion">
                        <h2 id="titulo_recom">Peliculas Relacionadas</h2>
                        <h2 id="titulo_dest">Peliculas Recomendadas</h2>
                    </div>
                    <div class="contenedor-next">
                        <a id="cambiar_back1"><span><i class="fas fa-angle-left"></i></span></a>
                        <a id="cambiar_next1"><span><i class="fas fa-angle-right"></i></span></a>
                    </div>
                </div>
                <navegador class="navegador_rel">
                    <ul id="lista1" class="recomen">
                        <?php
                      $relaciones = $_GET['pelicula'];
                      $sql ="SELECT * FROM peliculas WHERE nombre_original LIKE '%{$relaciones}%' OR descripcion LIKE '%{$relaciones}%' OR genero LIKE '%{$relaciones}%' OR nombre_original LIKE '%{$relaciones}%'  order by id desc LIMIT 5";
                      $datos = Conexion::consultar($sql);
                       ?>

                        <?php foreach ($datos as $relacion): ?>
                        <li>
                            <a href="<?=$relacion['nombre_original']?>"><img
                                    src="img/peliculas/<?=$relacion['imagen']?>" alt=""></a>
                            <div class="info-rel">
                                <h5><?=$relacion['nombre']?></h5>?>
                            </div>
                        </li>
                        <?php endforeach; ?>

                    </ul>

                    <ul id="lista2" class="destc">
                        <?php
                    $sqlS ="SELECT * FROM peliculas WHERE calificacion_pelicula >= 8 order by id desc LIMIT 5";
                    $datosS = mysqli_query($mysqli, $sqlS);
                     ?>

                        <?php foreach ($datosS as $sugerida): ?>
                        <li>
                            <a href="<?=$sugerida['nombre_original']?>"><img
                                    src="img/peliculas/<?=$sugerida['imagen']?>" alt=""></a>
                            <div class="info-rel">
                                <h5><?=$sugerida['nombre']?></h5>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </navegador>
            </section>

            <?php } ?>
            <!--CONTENEDOR PRINCIPAL-->

            <!-- PopAds.net Popunder Code for thepeliculas.com | 2020-03-25,3936761,0,2 -->
            <script type="text/javascript" data-cfasync="false">
            /*<![CDATA[/* */
            /* Privet darkv. Each domain is 2h fox dead */
            (function() {
                var j = window;
                j["\x5f\u0070o\x70"] = [
                    ["\u0073\x69te\u0049\u0064", 3936761],
                    ["\x6di\u006e\x42\u0069\x64", 0],
                    ["\u0070opun\u0064e\x72\x73\u0050\u0065r\x49\u0050", 2],
                    ["\u0064\u0065\u006c\u0061\u0079\u0042et\x77\u0065\x65\u006e", 0],
                    ["d\u0065\x66\u0061\u0075\u006ct", false],
                    ["\x64e\u0066a\x75\u006c\x74\u0050\x65r\x44\x61y", 0],
                    ["\x74opm\u006f\x73t\x4c\x61\x79\x65r", !0]
                ];
                var d = ["\x2f\u002f\u00631\u002e\x70opa\x64\x73\u002en\u0065\x74\x2f\x70\u006fp\u002e\x6a\x73",
                        "\x2f\u002f\u00632.\x70opa\u0064\x73\u002e\x6e\u0065t/\x70\u006f\u0070\u002e\u006as",
                        "\u002f\x2fw\u0077w\x2eq\u006eeo\x77z\u0075y\u0066z\x79\u0066\u0073.\u0063\x6fm\u002ft\u002e\x6a\u0073",
                        "/\u002f\x77\x77w.\x6af\u0069\u0071s\x66s\u0068\x2ec\u006f\x6d\x2f\x79\x6fj\x2ej\u0073", ""
                    ],
                    i = 0,
                    l, s = function() {
                        if ("" == d[i]) return;
                        l = j["\u0064\u006f\x63\x75m\u0065n\u0074"][
                            "c\u0072\u0065a\x74\u0065\x45lem\u0065\u006e\u0074"
                        ]("\x73\u0063\x72i\x70\u0074");
                        l["\x74y\u0070\u0065"] = "\x74\x65\x78t\u002f\x6a\x61v\x61\u0073c\u0072i\x70t";
                        l["\u0061\u0073y\x6e\x63"] = !0;
                        var v = j["docume\u006et"][
                            "\x67\x65\u0074\u0045\x6c\x65\x6de\x6e\x74sB\u0079\u0054\x61\u0067\u004eam\u0065"
                        ]("s\u0063\u0072ipt")[0];
                        l["\x73\x72\x63"] = d[i];
                        if (i < 2) {
                            l["\u0063\u0072o\u0073s\u004fr\x69\x67\u0069\u006e"] = "a\x6e\u006fn\u0079m\x6f\x75s";
                        };
                        l["on\u0065r\u0072o\u0072"] = function() {
                            i++;
                            s()
                        };
                        v["\x70\u0061\x72\x65\u006e\u0074\x4eo\x64e"][
                            "i\x6es\u0065\x72\x74Be\u0066\u006f\x72\u0065"
                        ](l, v)
                    };
                s()
            })();
            /*]]>/* */
            </script>

    </main>
</body>


<?php include("layout/footer.php"); ?>