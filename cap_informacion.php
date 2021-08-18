<?php include("conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
  $datos8 = Conexion::consultar($sql);

 ?>

<?php if (isset($_GET['episodeo'])) { ?>

<?php  foreach ($datos7 as $serie) { ?>
  <body class="capa_pelicula animated fadeIn slow" style="height: 513px; background-image: url(<?php echo SERVERURL; ?>img/series_bg/<?=$serie['imagen_bg']?>);">
  <section class="contenedor-popular">
  <div class="contenedor-tituloH contenedor_titulos">
    <h1><?= $_GET['episodeo']?>: <?=$_GET['cap']?> <span>(<?= $serie['year']?>)</span></h1>
  </div>
  </section>

<main class="contenedor-informacion">

  <?php } ?><!--FIN DE LA PRIMERA SECTION DE INFORMACION-->

  <?php if (isset($_GET['cap'])) { ?>

    <?php foreach ($datos8 as $epis) { ?>
      <?php } ?>
  <section class="ver-serie container">
    <div class="video-serie">
      <iframe src="<?=$epis['capitulo']; ?>" width="950" height="600"></iframe>
    </div>
    <div class="public-serie">
      <!-- Start of adf.ly banner code --><a href="https://join-adf.ly/23044469"><img border="0" src="https://cdn.adf.ly/images/banners/adfly.160x600.4.gif" width="160" height="600" title="AdF.ly - acorta links y gana dinero!" /></a>
<!-- End of adf.ly banner code -->
    </div>
  </section>
  <section class="lista-preview container">
    <?php include("episodeo/layout/carrucel-prev.php") ?>
  </section>

      <?php } ?>


<section class="container fixed">

</section>

</main>
  </body>

<?php } ?><!--FIN DE EL CONTENEDOR PRINCIPAL-->


<script src="<?php echo SERVERURL; ?>js/Woo.js"></script>
<?php include("layout/footer.php"); ?>
