<?php include("../controller/usuario_session.php"); ?>
<?php include("../conexion/conexion.php"); ?>
<?php include("../layout/header_sesion.php"); ?>
<?php include("../model/model_episodeo_consulta.php"); ?>

<style media="screen">
ul.lista-cap {
  margin-top: 1em;
  list-style: none;
  text-align: left;
  display: none;
}

ul.lista-cap a {
  color: white;
  display: inline-block;
  border: 1px solid white;
  text-decoration: none;
}

ul.lista-cap a:hover {
  background-color: #dd1818;
}

ul.lista-cap li {
  padding: 10px;
  margin: 5px;
}

ul.lista-cap li i {
  color: green;
}

.contenedor-serie-online {
    background-color: #ffffff;
    margin-top: 2rem;
    padding: 1rem;
}

div.menu-caps {
    width: 100%;
}

.activoLIst {
    transition: .4s ease-in-out;
    border-bottom: 2px solid white;
}

.nombre-temp a {
    color: #333333;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}

.nombre-temp a:hover {
    color: #dd1818;
}

.icono-action {
    position: relative;
}

.icono-action a {
    color: orange;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
    position: absolute;
    top: -15px;
    right: 0;
    font-size: 1.4rem;
}

.icono-action a:hover {
    color: #dd1818;
}

header.desplegar-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid orangered;
}

.preview {
    width: 95px;
    height: 50px;
}

.cap-play:hover {
    transition: .4s ease-in-out;
}

.cap-play:hover {
    background-color: #333333;
}

.cap-play a {
    font-size: 2rem;
    color: #dd1818!important;
}

.cap_table {
    background-color: transparent;
    width: 100%;
}

.body_cap {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.body_cap tr td {
    background-color: transparent;
    text-align: left;
    display: inline-block;
}

.body_cap tr td a {
    color: #000000;
    transition: .3s ease-in-out;
    text-decoration: none;
    font-weight: bold;
    text-transform: capitalize;
}

.body_cap tr td a:hover {
    color: #dd1818;
}

.body_cap tr td span {
    color: #333333!important;
}

.body_cap tr:hover {
    background-color: transparent;
}

.listado-select{
    width: 100%;
    height: 500px;
    background-color: red!important;
  }

</style>

<?php

if (isset($_GET['serie']) ) { ?>
<?php include("../model/model_series_consulta.php"); ?>

<?php foreach($datos7 as $serie) { ?>

<div id="imagen_bg" class="parallax-container">
  <div class="texto">
    <h3 class="nombre-pelis white-text truncate"><?=$serie['nombre']?></h3>
    <br>
    <p class="white-text"><?= "<b>PUBLICADO: </b>" .$serie['fecha']?></p>
    <p class="white-text"><?= "<b>GÉNERO: </b>" .$serie['genero']; ?></p>
    <p class="white-text"><?= "<b>DURACIÓN: </b>" .$serie['duracion']?></p>
    <p class="white-text"><?= "<b>PAIS: </b>" .$serie['pais']; ?></p>
    <p class="white-text"><?= "<b>AÑO: </b>" .$serie['year']?></p>
    <p class="white-text"><?= "<b>IDIOMA: </b>" .$serie['idioma']; ?></p>
    <p class="white-text"><?= "<b>CALIDAD: </b>" .$serie['calidad']?></p>
    <br>
  </div>
  <div class="parallax"><img src="<?php echo SERVERURL; ?>img/series_bg/<?=$serie['imagen_bg']?>" alt=""></div>
</div>

<div class="info-pelis row">
  <div class="bg-cover col s12 l4 center">
    <br>
    <img width="250" class="responsive-img" src="<?php echo SERVERURL; ?>img/series/<?=$serie['imagen']?>" alt="<?= $serie['nombre']?>">
  </div>

  <h4 class="white-text">Sipnosis</h4>
  <p class="white-text"><?= $serie['descripcion']; ?></p>

 <div class="trailer_video col s12 l12 center">
 <h5 class="white-text">Trailer</h5>
      <iframe width="550" height="330" src="https://www.youtube.com/embed/<?= $serie['trailer']?>" frameborder="0" allowfullscreen></iframe>
 </div>

</div>

<?php } ?>
<?php } ?>

<div class="row" style="padding: 10px;">
<div class="col s12 l12">
<br>
<div class="titulo-serie">
<h5 class="white-text">Serie Online</h5>
</div>

<?php foreach ($tempOnline1 as $temp1): ?><?php endforeach; ?>
<?php foreach ($tempOnline2 as $temp2): ?><?php endforeach; ?>
<?php foreach ($tempOnline3 as $temp3): ?><?php endforeach; ?>

<section class="container contenedor-serie-online">
<?php if (!empty($temp1['temporada'])): ?>
  <header class="desplegar-menu">
      <div class="nombre-temp">
          <a id="list-open">Temporada: 1</a>
      </div>
      <div class="icono-action">
          <a id="list-openI"><i class="fas fa-list-ul"></i></a>
          <a id="list-close"><i class="far fa-window-close"></i></a>
      </div>
  </header>
    <div class="menu-caps">
        <div class="tabla-listado" id="list-tabla">
            <table class="cap_table">
            <?php foreach ($tempOnline1 as $episodeo) { ?>
                <tbody class="body_cap">
                    <tr>
                        <td><?=$episodeo['nombre_cap']; ?></td>
                        <td><img class="preview" src="<?php echo SERVERURL; ?>img/preview/<?=$episodeo['preview']; ?>" alt="<?=$episodeo['episodeo']; ?>"></td>
                        <td><a href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><?=$episodeo['episodeo']; ?></a><br>
                        <span><?=$episodeo['year']; ?></span>
                        </td>
                    </tr>
                    <tr>
                    <td class="cap-play"><a href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><i class="far fa-play-circle"></i></a></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

    </div>
<?php endif; ?>
<br>
<?php if (!empty($temp2['temporada'])): ?>
  <div class="menu-caps">
      <header class="desplegar-menu">
          <div class="nombre-temp">
              <a id="list-open2">Temporada: 2</a>
          </div>
          <div class="icono-action">
              <a id="list-openI2"><i class="fas fa-list-ul"></i></a>
              <a id="list-close2"><i class="far fa-window-close"></i></a>
          </div>
      </header>
      <div class="tabla-listado" id="list-tabla2">
          <table class="cap_table">
          <?php foreach ($tempOnline2 as $episodeo) { ?>
              <tbody class="body_cap">
                  <tr>
                      <td><?=$episodeo['nombre_cap']; ?></td>
                      <td><img class="preview" src="<?php echo SERVERURL; ?>img/preview/<?=$episodeo['preview']; ?>" alt="<?=$episodeo['episodeo']; ?>"></td>
                      <td><a href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><?=$episodeo['episodeo']; ?></a><br>
                      <span><?=$episodeo['year']; ?></span>
                      </td>
                  </tr>
                  <tr>
                  <td class="cap-play"><a href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><i class="far fa-play-circle"></i></a></td>
                  </tr>
              </tbody>
              <?php } ?>
          </table>
      </div>

  </div>
<?php endif; ?>
<br>
<?php if (!empty($temp3['temporada'])): ?>
  <div class="menu-caps">
      <header class="desplegar-menu">
          <div class="nombre-temp">
              <a id="list-open3">Temporada: 3</a>
          </div>
          <div class="icono-action">
              <a id="list-openI3"><i class="fas fa-list-ul"></i></a>
              <a id="list-close3"><i class="far fa-window-close"></i></a>
          </div>
      </header>
      <div class="tabla-listado" id="list-tabla3">
          <table class="cap_table">
          <?php foreach ($tempOnline3 as $episodeo) { ?>
              <tbody class="body_cap">
                  <tr>
                      <td><?=$episodeo['nombre_cap']; ?></td>
                      <td><img class="preview" src="<?php echo SERVERURL; ?>img/preview/<?=$episodeo['preview']; ?>" alt="<?=$episodeo['episodeo']; ?>"></td>
                      <td><a href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><?=$episodeo['episodeo']; ?></a><br>
                      <span><?=$episodeo['year']; ?></span>
                      </td>
                  </tr>
                  <tr>
                  <td class="cap-play"><a href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><i class="far fa-play-circle"></i></a></td>
                  </tr>
              </tbody>
              <?php } ?>
          </table>
      </div>

  </div>
<?php endif; ?>
</section>


<br>
<br>
<div class="container">
  <section class="contenedor-descargas col s12 l12">
    <h2 class="serie-descarga">Servidores de descargas</h2>
      <div class="box-opciones">

      <table class="admin table-hover">
      <thead class="thead-admin">
      <tr>
          <th width="15%">Lista Capitulos</th>

          <th width="15%">Servidor</th>

          <th width="15%">Idioma</th>

          <th width="15%">Calidad</th>

          <th width="10%">Descargar</th>

          <th width="10%">Link</th>
      </tr>
  </thead>
  <tbody class="tbody-admin">
    <?php foreach ($datos4 as $temp1): ?>
    <?php endforeach; ?>
<?php if (!empty($temp1['temporada'])): ?>
    <tr>
          <td>
            <a id="link1_serie" class="btn btn-xs blue darken-4" rel="nofollow" target="_blank" style="min-width: 86px;">
                <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Temporada 1
            </a>
          </td>
          <td>
              <img src="<?php echo SERVERURL; ?>img/iconos/<?= $temp1['icono']?>.png" title="<?= $temp1['servidor']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
              <span><?= $temp1['servidor']?></span>
          </td>
          <td><?= $temp1['idioma']?></td>
          <td>
              <span class="quality-red">
              <?= $temp1['calidad']?>
          </td>
          <td>
              <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA" class="btn btn-xs green darken-4 open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px; font-size: 12px">Tutorial </a>
          </td>
          <td>
              <a href="<?php echo SERVERURL; ?>servidor/<?=$temp1['servidor']?>" class="btn btn-xs red darken-4 open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px; font-size: 12px;"> Reportar  </a>
          </td>
      </tr>
      <?php endif; ?>
      <?php foreach ($datos6 as $temp2): ?>
      <?php endforeach; ?>
      <?php if (!empty($temp2['temporada'])): ?>
      <tr>
         <td>
           <a id="link2_serie" class="btn btn-xs blue darken-4" rel="nofollow" target="_blank" style="min-width: 86px;">
               <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Temporada 2
           </a>
         </td>
         <td>
             <img src="<?php echo SERVERURL; ?>img/iconos/<?= $temp2['icono']?>.png" title="<?= $temp2['servidor']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
             <span><?= $temp2['servidor']?></span>
         </td>
         <td>
         <?= $temp2['idioma']?>
         </td>
         <td>
             <span class="quality-red">
             <?= $temp2['calidad']?>
         </td>
         <td>
             <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA" class="btn btn-xs green darken-4 open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px; font-size: 12px">Tutorial </a>
         </td>
         <td>
             <a href="<?php echo SERVERURL; ?>servidor/<?=$temp2['servidor']?>" class="btn btn-xs red darken-4 open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px; font-size: 12px;"> Reportar  </a>
         </td>
         </tr>
         <?php endif; ?>
         <?php foreach ($datos8 as $temp3): ?>
         <?php endforeach; ?>
         <?php if (!empty($temp3['temporada'])): ?>
         <tr>
          <td>
          <a id="link3_serie" class="btn btn-xs btn-success darken-4" rel="nofollow" target="_blank" style="min-width: 86px;">
              <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> <?=$temp3['temporada'] ?>
          </a>
          </td>
          <td>
              <img src="<?php echo SERVERURL; ?>img/iconos/<?= $temp3['icono']?>.png" title="<?= $temp3['servidor']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
              <span><?= $temp3['servidor']?></span>
          </td>
          <td>
          <?= $temp3['idioma']?>
          </td>
          <td>
              <span class="quality-red">
              <?= $temp3['calidad']?>
          </td>
          <td>
              <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA" class="btn btn-xs green darken-4 open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px; font-size: 12px">Tutorial </a>
          </td>
          <td>
              <a href="<?php echo SERVERURL; ?>servidor/<?=$temp3['servidor']?>" class="btn btn-xs red darken-4 open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px; font-size: 12px;"> Reportar  </a>
          </td>
      </tr>
      <?php endif; ?>
</tbody>
  </table>
  <navegador class="navegador-desc_cap">
    <ul class="lista-cap 1">
      <?php foreach ($datos4 as $linkS): ?>
      <a href="<?=$linkS['capitulo']?>" target="_blank"><li>CAPITULO: <?=$linkS['numeroCapitulo']?> <img src="<?php echo SERVERURL; ?>img/iconos/<?php echo $linkS['icono']; ?>.png" style="width: 24px" alt=""> </li></a>
      <?php endforeach; ?>
    </ul>
  </navegador>
  <navegador class="navegador-desc_cap">
    <ul class="lista-cap 2">
      <?php foreach ($datos6 as $linkS): ?>
      <a href="<?=$linkS['capitulo']?>" target="_blank"><li>CAPITULO: <?=$linkS['numeroCapitulo']?> <img src="<?php echo SERVERURL; ?>img/iconos/<?php echo $linkS['icono']; ?>.png" style="width: 24px" alt=""> </li></a>
      <?php endforeach; ?>
    </ul>
  </navegador>
  <navegador class="navegador-desc_cap">
    <ul class="lista-cap 3">
      <?php foreach ($datos8 as $linkS): ?>
      <a href="<?=$linkS['capitulo']?>" target="_blank"><li>CAPITULO: <?=$linkS['numeroCapitulo']?> <img src="<?php echo SERVERURL; ?>img/iconos/<?php echo $linkS['icono']; ?>.png" style="width: 24px" alt=""> </li></a>
      <?php endforeach; ?>
    </ul>
  </navegador>
</div>

</section>
</div><!--FIN DE EL CONTENEDOR DE DESCARGA-->

<?php
$sql = " SELECT * FROM comentarios WHERE serie_id = '".$_GET['serie']."' ";
$query = mysqli_query($mysqli, $sql);
$count = mysqli_num_rows($query);

$sql = " SELECT * FROM comentariosnotuser WHERE NotUserS_id = '".$_GET['serie']."' ";
$query = mysqli_query($mysqli, $sql);
$countS = mysqli_num_rows($query);

$countT = $count + $countS;
?>

<section class="comentarios container">
  <?php require_once("../layout/comentariosS.php") ?>
</section>
<br>

<script type="text/javascript">
//parallax
$(document).ready(function(){
    $('.parallax').parallax();
  });

</script>

<?php include("../layout/footer_sesion.php"); ?>
