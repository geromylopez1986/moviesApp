<?php include("conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php $pagina = 'serie'; include("layout/header.php"); ?>
<?php include("model/model_series_consulta.php"); ?>
<?php include("layout/navegador.php"); ?>
<?php include("model/model_episodeo_consulta.php"); ?>
<title>The Pelicula / Ver Serie</title>

<?php
  $sql = " SELECT * FROM comentarios WHERE serie_id = '".$_GET['serie']."' ";
  $query = mysqli_query($mysqli, $sql);
  $count = mysqli_num_rows($query);

  $sql = " SELECT * FROM comentariosnotuser WHERE NotUserS_id = '".$_GET['serie']."' ";
  $query = mysqli_query($mysqli, $sql);
  $countS = mysqli_num_rows($query);

  $countT = $count + $countS;
 ?>

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
   .contenedor-comentario {
     width: 100%!important;
   }
   .contenedor {
     max-width: 1200px;
     width: 100%!important;
   }
   .coment-basio {
     text-align: center;
     color: #dd1818;
   }
 </style>

<?php if (isset($_GET['serie'])) { ?>

<?php  foreach ($datos7 as $serie) { ?>
  <body class="capa_pelicula animated fadeIn slow" style="height: 513px; background-image: url(<?php echo SERVERURL; ?>img/series_bg/<?=$serie['imagen_bg']?>);">
  <section class="contenedor-popular">
  <div class="contenedor-tituloH contenedor_titulos">
    <h1><?= $serie['genero_cover']?>: <?=$serie['sub_nombre']?> <span>(<?= $serie['year']?>)</span></h1>
  </div>
</section>

<main class="contenedor-informacion">


  <div class="contenedor-cover">
      <img src="<?php echo SERVERURL; ?>img/series/<?= $serie['imagen']?>" alt="<?=$serie['nombre'];?>">
  </div>


  <div class="contenedor-descripcion">
      <h2><?=$serie['nombre'];?></h2>
      <span>PUBLICADO : <?= $serie['fecha']?></span>
      <span>DURACIÓN : <a><?= $serie['duracion']?></a></span>
      <span>GÉNERO : <?= $serie['genero']?></span>
      <span>PAIS : <?= $serie['pais']?></span>
      <span>AÑO : (<?= $serie['year']?>)</span>
      <span>IDIOMA : <?= $serie['idioma']?> <i class="fas fa-volume-up"></i></span>
      <span>CALIDAD : <a><?= $serie['calidad']?></a></span>
      <span>DIRECTOR : <?= $serie['director']?></span>
      <span>CALIFICACIÓN : <a class="imdb">IMDb</a></i> <?= $serie['calificacion']?> <i class="color-yellow fas fa-star"></i></span>
  </div>

  <div class="contenedor-trailer">
      <h2>Trailer Oficial</h2>
      <div class="video-box">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $serie['trailer']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </div>


  <div class="contenedor-compartir">
      <div class="box-sinopsis">
      <h2>SINOPSIS</h2>
      <p><?= $serie['descripcion']; ?></p>
      </div>
      <div class="box-reparto">
      <h2>REPARTO</h2>
      <p><?= $serie['actores']?></p>
      </div>
      <div class="comartir">
      </div>
  </div>
<?php } ?><!--FIN DE LA PRIMERA SECTION DE INFORMACION-->

<section class="contenedor-peliculaVer">
  <?php include("episodeo/layout/lista-temporada.php"); ?>
</section><!--FIN DE LA SECION DE VER ONLINE-->

<?php if (isset($_GET['serie'])) { ?>

<div class="contenedor">
  <?php include("episodeo/layout/descargas.php"); ?>
</div><!--FIN DE EL CONTENEDOR DE DESCARGA-->

<?php include("model/model_serie_agregar_comentario.php"); ?>
<?php }else {
  echo "No Ay Links De descarga Para esta Seción";
} ?>

<section class="No-User container">
  <?php include("episodeo/layout/comentarios.php") ?>
</section><!--AGREGAR COMENTARIOS COMO NO USER-->

<section class="container">
<?php echo "<div class='grey lighten-5'>"; ?>
  <?php if (!empty($datos7) || !empty($datosS)) { ?>
<?php foreach($datos7 as $serie){ ?>
  <ul class="collection">
    <li class="collection-item avatar">
      <img src="<?php echo SERVERURL; ?>img/user/<?=$serie['img']?>" alt=""  style="width: 50px; height: 50px;
      border: 1px solid #dd1818;margin: 5px;">
      <span class="title blue-text"><?=$serie['nombre'];?> - <i class="black-text far fa-clock" style="font-size: 18px;"></i></span>
      <span> Publicado el: <?=$serie['fecha'];?></span>
      <br>
      <span class="mensaje-comentario">-<?=$serie['comentario'];?></span>
    </li>
  </ul>
<?php } ?>

<?php foreach($datosS as $serie){ ?>
  <ul class="collection">
    <li class="collection-item avatar">
      <img src="<?php echo SERVERURL; ?>img/user/<?=$serie['imgNoUser']?>" alt=""  style="width: 50px; height: 50px;
      border: 1px solid #dd1818;margin: 5px;">
      <span class="title blue-text"><?=$serie['nombre'];?> - <i class="black-text far fa-clock" style="font-size: 18px;"></i></span>
      <span> Publicado el: <?=$serie['fechaNoUser'];?></span>
      <br>
      <span class="mensaje-comentario">-<?=$serie['mensaje'];?></span>
    </li>
  </ul>
<?php } ?>

<?php }else {
  echo "<div class='coment-basio'>";
  echo "<h1>No hay Comentarios</h1>";
  echo "</div>";
} ?>
</div>
</section>

  <!-- PopAds.net Popunder Code for thepeliculas.com | 2020-03-25,3936761,0,2 -->
  <script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
/* Privet darkv. Each domain is 2h fox dead */
 (function(){ var j=window;j["\x5f\u0070o\x70"]=[["\u0073\x69te\u0049\u0064",3936761],["\x6di\u006e\x42\u0069\x64",0],["\u0070opun\u0064e\x72\x73\u0050\u0065r\x49\u0050",2],["\u0064\u0065\u006c\u0061\u0079\u0042et\x77\u0065\x65\u006e",0],["d\u0065\x66\u0061\u0075\u006ct",false],["\x64e\u0066a\x75\u006c\x74\u0050\x65r\x44\x61y",0],["\x74opm\u006f\x73t\x4c\x61\x79\x65r",!0]];var d=["\x2f\u002f\u00631\u002e\x70opa\x64\x73\u002en\u0065\x74\x2f\x70\u006fp\u002e\x6a\x73","\x2f\u002f\u00632.\x70opa\u0064\x73\u002e\x6e\u0065t/\x70\u006f\u0070\u002e\u006as","\u002f\x2fw\u0077w\x2eq\u006eeo\x77z\u0075y\u0066z\x79\u0066\u0073.\u0063\x6fm\u002ft\u002e\x6a\u0073","/\u002f\x77\x77w.\x6af\u0069\u0071s\x66s\u0068\x2ec\u006f\x6d\x2f\x79\x6fj\x2ej\u0073",""],i=0,l,s=function(){if(""==d[i])return;l=j["\u0064\u006f\x63\x75m\u0065n\u0074"]["c\u0072\u0065a\x74\u0065\x45lem\u0065\u006e\u0074"]("\x73\u0063\x72i\x70\u0074");l["\x74y\u0070\u0065"]="\x74\x65\x78t\u002f\x6a\x61v\x61\u0073c\u0072i\x70t";l["\u0061\u0073y\x6e\x63"]=!0;var v=j["docume\u006et"]["\x67\x65\u0074\u0045\x6c\x65\x6de\x6e\x74sB\u0079\u0054\x61\u0067\u004eam\u0065"]("s\u0063\u0072ipt")[0];l["\x73\x72\x63"]=d[i];if(i<2){l["\u0063\u0072o\u0073s\u004fr\x69\x67\u0069\u006e"]="a\x6e\u006fn\u0079m\x6f\x75s";};l["on\u0065r\u0072o\u0072"]=function(){i++;s()};v["\x70\u0061\x72\x65\u006e\u0074\x4eo\x64e"]["i\x6es\u0065\x72\x74Be\u0066\u006f\x72\u0065"](l,v)};s()})();
/*]]>/* */
</script>

</main>
  </body>

<?php } ?><!--FIN DE EL CONTENEDOR PRINCIPAL-->

<?php include("layout/footer.php"); ?>
