<?php include("conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php $page = 'peliculas'; include("layout/header.php"); ?>
<?php include("layout/navegador.php"); ?>
<?php include("model/model_peliculas.php"); ?>
  <title>The Pelicula / Catalogo</title>

<br>


            <div class="contenedor">
                <section class="secion contenedor" id="section-movil primero">
                      <?php include("layout/carrucer_gm.php"); ?>
                </section>
            </div>

<br>

<div class="contenedor-site contenedor">

<header class="site-header">
    <div class="logotipo"><a href="index"><img loading="lazy" src="img/logo/logo.png" alt="logotipo"></a></div>
    <div class="buscador">
        <form action="controller/buscar" method="post">
        <div class="box-buscar">
        <input type="search" name="buscar" class="validate" id="icon_prefix" placeholder="Buscar" required="">
        <button type="submit"><i class="fas fa-search"></i></button>
        </div>
		</form>
    </div>
</header>
<main>
    <?php include("layout/estrenos.php"); ?>
</main>

<section class="ultimas-agregadas">
  <?php include("layout/ultimas.php"); ?>
</section>

<section class="series">
    <?php include("layout/series.php"); ?>
</section>

</div>


<?php include("layout/footer.php"); ?>
