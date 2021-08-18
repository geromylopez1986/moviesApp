<?php include("conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php $pagina = 'serie'; include("layout/header.php"); ?>
<?php include("layout/navegador.php"); ?>
<title>The Pelicula / Ver Serie</title>

<?php
  $sql = " SELECT * FROM comentarios WHERE serie_id = '".$_GET['episodeo']."' ";
  $query = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($query);

  $sql = " SELECT * FROM comentariosnotuser WHERE NotUserS_id = '".$_GET['episodeo']."' ";
  $query = mysqli_query($mysqli, $sql);
  $countS = mysqli_num_rows($query);

  $countT = $count + $countS;

  $epic = $_GET['episodeo'];
  $sql = "SELECT * FROM series WHERE nombre_original = '{$epic}' ";
  $datos7 = Conexion::consultar($sql);

  $cap = $_GET['cap'];
  $sql = "SELECT * FROM temponline1 WHERE nombre_cap = '{$cap}' AND titulo_original = '{$epic}' ";
  $datos00S1 = Conexion::consultar($sql);

  $cap = $_GET['cap'];
  $sql = "SELECT * FROM temponline2 WHERE nombre_cap = '{$cap}' AND titulo_original = '{$epic}' ";
  $datos00S2 = Conexion::consultar($sql);

  $cap = $_GET['cap'];
  $sql = "SELECT * FROM temponline3 WHERE nombre_cap = '{$cap}' AND titulo_original = '{$epic}' ";
  $datos00S3 = Conexion::consultar($sql);

  $episodeo = $_GET['episodeo'];
  $temporadaOnline = "SELECT * FROM temponline1 WHERE titulo_original = '{$episodeo}' ";
  $tempOnline1 = Conexion::consultar($temporadaOnline);

  $episodeo = $_GET['episodeo'];
  $temporadaOnline = "SELECT * FROM temponline2 WHERE titulo_original = '{$episodeo}' ";
  $tempOnline2 = Conexion::consultar($temporadaOnline);

  $episodeo = $_GET['episodeo'];
  $temporadaOnline = "SELECT * FROM temponline3 WHERE titulo_original = '{$episodeo}' ";
  $tempOnline3 = Conexion::consultar($temporadaOnline);

 ?>

<?php if (isset($_GET['episodeo'])) { ?>

<?php  foreach ($datos7 as $serie) { ?>

<body class="capa_pelicula animated fadeIn slow"
    style="height: 513px; background-image: url(<?php echo SERVERURL; ?>img/series_bg/<?=$serie['imagen_bg']?>);">
    <section class="contenedor-popular box-capitulo-serie">
        <div class="contenedor-tituloH contenedor_titulos">
            <h1><?= $_GET['episodeo']?>: <?=$_GET['cap']?> <span>(<?= $serie['year']?>)</span></h1>
        </div>
    </section>

    <main class="contenedor-informacion">

        <?php } ?>
        <!--FIN DE LA PRIMERA SECTION DE INFORMACION-->

        <?php if (isset($_GET['cap'])) { ?>

        <?php foreach ($datos00S1 as $epis) { ?>
        <?php } ?>
        <?php foreach ($datos00S2 as $epis2) { ?>
        <?php } ?>
        <?php foreach ($datos00S3 as $epis3) { ?>
        <?php } ?>
        <section class="ver-serie container">
            <br>
            <?php if (!empty($epis)): ?>
            <div class="video-serie">
                <iframe src="<?=$epis['capitulo']; ?>" width="950" height="600" scrolling="no" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <?php endif; ?>
            <?php if (!empty($epis2)): ?>
            <div class="video-serie">
                <iframe src="<?=$epis2['capitulo']; ?>" width="950" height="600" scrolling="no" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <?php endif; ?>
            <?php if (!empty($epis3)): ?>
            <div class="video-serie">
                <iframe src="<?=$epis3['capitulo']; ?>" width="950" height="600" scrolling="no" frameborder="0"
                    allowfullscreen></iframe>
            </div>
            <?php endif; ?>
            <div class="public-serie">
                <!-- Start of adf.ly banner code --><a href="https://join-adf.ly/23044469"><img border="0"
                        src="https://cdn.adf.ly/images/banners/adfly.160x600.4.gif" width="160" height="600"
                        title="AdF.ly - acorta links y gana dinero!" /></a>
                <!-- End of adf.ly banner code -->
            </div>

            <section class="preview-list vertical-center slider fixed">
                <?php if (!empty($datos00S1)): ?>
                <?php foreach ($tempOnline1 as $temp1): ?>
                <div class="contenedor-prev_list">
                    <a
                        href="<?php echo SERVERURL; ?>episodeo/<?=$temp1['titulo_original']; ?>/<?=$temp1['nombre_cap']; ?>">
                        <div class="info-preview">
                            <i class="play-view fab fa-youtube"></i>
                            <h2><?=$temp1['episodeo']; ?></h2>
                            <p><span>Año:</span> <?=$temp1['year']; ?></p>
                            <p><span>Capitulo:</span> <?=$temp1['nombre_cap']; ?></p>
                        </div>
                        <img width="350" height="200"
                            src="<?php echo SERVERURL; ?>img/preview/<?=$temp1['preview']; ?>">
                    </a>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>

                <?php if (!empty($datos00S2)): ?>
                <?php foreach ($tempOnline2 as $temp2): ?>
                <div class="contenedor-prev_list">
                    <a
                        href="<?php echo SERVERURL; ?>episodeo/<?=$temp2['titulo_original']; ?>/<?=$temp2['nombre_cap']; ?>">
                        <div class="info-preview">
                            <i class="play-view fab fa-youtube"></i>
                            <h2><?=$temp2['episodeo']; ?></h2>
                            <p><span>Año:</span> <?=$temp2['year']; ?></p>
                            <p><span>Capitulo:</span> <?=$temp2['nombre_cap']; ?></p>
                        </div>
                        <img width="350" height="200"
                            src="<?php echo SERVERURL; ?>img/preview/<?=$temp2['preview']; ?>">
                    </a>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>

                <?php if (!empty($datos00S3)): ?>
                <?php foreach ($tempOnline3 as $temp3): ?>
                <div class="contenedor-prev_list">
                    <a
                        href="<?php echo SERVERURL; ?>episodeo/<?=$temp3['titulo_original']; ?>/<?=$temp3['nombre_cap']; ?>">
                        <div class="info-preview">
                            <i class="play-view fab fa-youtube"></i>
                            <h2><?=$temp3['episodeo']; ?></h2>
                            <p><span>Año:</span> <?=$temp3['year']; ?></p>
                            <p><span>Capitulo:</span> <?=$temp3['nombre_cap']; ?></p>
                        </div>
                        <img width="350" height="200"
                            src="<?php echo SERVERURL; ?>img/preview/<?=$temp3['preview']; ?>">
                    </a>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </section>

            <?php } ?>

        </section>

        <section class="container fixed">

        </section>

    </main>
</body>

<?php } ?>
<!--FIN DE EL CONTENEDOR PRINCIPAL-->



<link rel="stylesheet" type="text/css" href="../css/slick.css">
<link rel="stylesheet" type="text/css" href="../css/slick-theme.css">
<style type="text/css">
html,
body {
    margin: 0;
    padding: 0;
}

* {
    box-sizing: border-box;
}

.slider {
    width: 50%;
    margin: 100px auto;
}

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-prev:before,
.slick-next:before {
    color: black;
}


.slick-slide {
    transition: all ease-in-out .3s;
    opacity: .2;
}

.slick-active {
    opacity: .5;
}

.slick-current {
    opacity: 1;
}
</style>

<script src="<?php echo SERVERURL; ?>js/Woo.js"></script>
<?php include("layout/footer.php"); ?>
<br>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="../js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).on('ready', function() {
    $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
    });
    $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
    });
    $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
    });
    $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
    });
    $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
    });
    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});
</script>