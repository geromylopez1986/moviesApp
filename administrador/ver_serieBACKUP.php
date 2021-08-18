<?php include("../conexion/conexion.php"); ?>
<?php include("../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesion.php"); ?>

<?php

if (isset($_GET['pelicula']) ) {

   	include("../model/model_pelicula_consulta.php");

foreach($datos as $items){ ?>

	    <div id="imagen_bg" class="parallax-container">
	    	<div class="texto">
	    		<h3 class="nombre-pelis white-text truncate"><?=$items['nombre']?></h3>

	    		<p class="white-text"><?= "<b>PUBLICADO: </b>" .$items['fecha']?></p>
          <p class="white-text"><?= "<b>GÉNERO: </b>" .$items['genero']; ?></p>
          <p class="white-text"><?= "<b>DURACIÓN: </b>" .$items['duracion_pelicula']?></p>
          <p class="white-text"><?= "<b>PAIS: </b>" .$items['pais_pelicula']; ?></p>
          <p class="white-text"><?= "<b>AÑO: </b>" .$items['year_pelicula']?></p>
          <p class="white-text"><?= "<b>IDIOMA: </b>" .$items['idioma_pelicula']; ?></p>
          <p class="white-text"><?= "<b>CALIDAD: </b>" .$items['calidad_pelicula']?></p>
    			<br>
	    	</div>
	    	<div class="parallax"><img src="<?php echo SERVERURL; ?>img/imagen_bg/<?=$items['imagen_bg']?>" alt=""></div>
      </div>

      <div class="info-pelis row">
        <div class="bg-cover col s12 l4 center">
        	<br>
        	<img width="250" class="responsive-img" src="<?php echo SERVERURL; ?>img/peliculas/<?=$items['imagen']?>" alt="<?= $items['nombre']?>">
		    </div>

        <h4 class="white-text">Sipnosis</h4>
        <p class="white-text"><?= $items['descripcion']; ?></p>

       <div class="trailer_video col s12 l12 center">
       <h5 class="white-text">Trailer</h5>
      			<iframe width="650" height="330" src="https://www.youtube.com/embed/<?= $items['trailer']?>" frameborder="0" allowfullscreen></iframe>
       </div>

      </div>

      <?php $sql = " SELECT * FROM servidores_online WHERE nombre_original = '".$_GET['pelicula']."' ";
        $servidores = Conexion::consultar($sql); ?>

        <div class="row" style="padding: 10px;"></div>
        <div class="col s12 l12">
        <div class="box-veronline" style="margin: 0 auto;">
        <div class="box-onlineC">
          <div class="box-onlineT">
            <h2 class="white-text">Ver Online</h2>
          </div>
          <div class="box-onlineL">
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
        </div>
      	<div class="video-container"  id="box-verpelicula">
          <?php if (!empty($serv['serv_link1'])) { ?>
            <div class="video_pelis">
            <iframe id="video_online1" src="<?=$serv['serv_link1']?>" scrolling="no" frameborder="0" width="700" height="500" allowfullscreen="true" webkitallowfullscreen="true"></iframe>
            <?php } ?>
            <?php if (!empty($serv['serv_link2'])) { ?>
            <iframe id="video_online2" style="display:none;" src="<?=$serv['serv_link2']?>" scrolling="no" frameborder="0" width="700" height="500" allowfullscreen="true" webkitallowfullscreen="true"></iframe><?php } ?>
            <?php if (!empty($serv['serv_link3'])) { ?>
            <iframe id="video_online3" style="display:none;" src="<?=$serv['serv_link3']?>" scrolling="no" frameborder="0" width="700" height="500" allowfullscreen="true" webkitallowfullscreen="true"></iframe><?php } ?>
            <?php if (!empty($serv['serv_link4'])) { ?>
            <iframe id="video_online4" style="display:none;" src="<?=$serv['serv_link4']?>" scrolling="no" frameborder="0" width="700" height="500" allowfullscreen="true" webkitallowfullscreen="true"></iframe><?php } ?>
            </div>
        </div>
        </div>
        </div>
      </div><!--FIN DE EL CONTENIDO DE VER ONLINE-->

    <?php if (isset($_GET['pelicula'])) {
      <section class="contenedor-descargas col s12 l12" style="margin-top: 1em;">
           foreach($datos4 as $descargas) { ?>
             <h2 class="serie-descarga">Servidores de descargas</h2>
            <div class="box-opciones ">

            <table class="table-descargas table-hover">
            <thead>
            <tr>
                <th width="20%">Opciones de descarga</th>

                <th width="15%">Servidor</th>

                <th width="15%">Idioma</th>

                <th width="15%">Calidad</th>

                <th width="15%">Peso</th>
                <th width="10%">Tutorial</th>
                <th width="10%">Link</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($descargas['link1'])) { ?>
            <tr>
                <td>
                <a href="<?= $descargas['link1']?>" class="btn btn-xs blue darken-4" rel="nofollow" target="_blank" style="min-width: 86px;">
                    <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Op 1 Descargar
                </a>
                </td>
                <td>
                    <img src="<?php echo SERVERURL; ?>img/iconos/<?= $descargas['icon1_name']?>.png" title="<?= $descargas['serv1']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
                    <span><?= $descargas['serv1']?></span>
                </td>
                <td>
                <?= $descargas['idioma1']?> <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2'];} ?>
                </td>
                <td>
                    <span class="quality-red">
                    <?= $descargas['calidad1']?>
                </td>
                <td><?=$descargas['peso1']?></td>
                <td>
                  <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA?view_as=subscriber" class="btn btn-xs green darken-4 open-video-inst" rel="nofollow" target="_blank">Tutorial</a>
                </td>
                <td>
                  <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv1']?>" class="btn btn-xs red darken-4 open-video-inst" rel="nofollow" target="_blank">Reportar</a>
                </td>
            </tr>
            <?php }else{ ?>
            <?php } ?>
            <?php if (!empty($descargas['link2'])) { ?>
                <tr>
                <td>
                <a href="<?= $descargas['link2']?>" class="btn btn-xs blue darken-4" rel="nofollow" target="_blank" style="min-width: 86px;">
                    <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Op 2 Descargar
                </a>
                </td>
                <td>
                    <img src="<?php echo SERVERURL; ?>img/iconos/<?= $descargas['icon2_name']?>.png" title="<?= $descargas['serv2']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
                    <span><?= $descargas['serv2']?></span>
                </td>
                <td>
                <?= $descargas['idioma1']?> <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2'];} ?>
                </td>
                <td>
                    <span class="quality-red">
                    <?= $descargas['calidad2']?>
                </td>
                <td><?=$descargas['peso2']?></td>
                <td>
                  <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA?view_as=subscriber" class="btn btn-xs green darken-4 open-video-inst" rel="nofollow" target="_blank">Tutorial</a>
                </td>
                <td>
                  <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv2']?>" class="btn btn-xs red darken-4 open-video-inst" rel="nofollow" target="_blank">Reportar</a>
                </td>
                </tr>
                <?php }else{ ?>
            <?php } ?>
            <?php if (!empty($descargas['link3'])) { ?>
            <tr>
                <td>
                <a href="<?= $descargas['link3']?>" class="btn btn-xs blue darken-4" rel="nofollow" target="_blank" style="min-width: 86px;">
                    <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Op 3 Descargar
                </a>
                </td>
                <td>
                    <img src="<?php echo SERVERURL; ?>img/iconos/<?= $descargas['icon3_name']?>.png" title="<?= $descargas['serv3']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
                    <span><?= $descargas['serv3']?></span>
                </td>
                <td>
                <?= $descargas['idioma1']?> <?php if (isset($descargas['idioma2'])) { echo $descargas['idioma2'];} ?>
                </td>
                <td>
                    <span class="quality-red">
                    <?= $descargas['calidad3']?>
                </td>
                <td><?=$descargas['peso3']?></td>
                <td>
                  <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA?view_as=subscriber" class="btn btn-xs green darken-4 open-video-inst" rel="nofollow" target="_blank">Tutorial</a>
                </td>
                <td>
                  <a href="<?php echo SERVERURL; ?>servidor/<?=$descargas['serv3']?>" class="btn btn-xs red darken-4 open-video-inst" rel="nofollow" target="_blank">Reportar</a>
                </td>
            </tr>
            <?php }else{ ?>
            <?php } ?>
        </tbody>
    </table>

</div>

</section>

<?php } }else{ ?>

    <?php } ?>

    <section class="comentario-box col s12 l12">
    <?php include("../model/model_consulta_contar_comentarios.php"); ?>
    <div >
    <h5 class="orange-text">Comentarios <span><?php echo $countT; ?></span></h5>
		<div class="divider orange"></div>
    <?php
      if (isset($_GET['pelicula'])) {
		include("../model/model_agregar_comentario.php");
      echo "<div class='grey lighten-5'>";
      foreach($datos as $items2): ?>
<div class="result-comentarios">
      <ul class="collection">
        <li class="collection-item avatar">
          <img src="<?php echo SERVERURL; ?>img/user/<?=$items2['img']?>" alt="" class="circle">
          <span class="title blue-text"><?=$items2['nombre'];?> - <i class="black-text" style="font-size: 13px;">Publicado el: <?=$items2['fecha'];?></i></span>
          <p>- <?=$items2['comentario'];?></p>
        </li>
      </ul>
  </div>
  <?php endforeach; ?>
      <?php foreach ($datosNoUser as $NoUser): ?>
        <div class="result-comentarios">
              <ul class="collection">
                <li class="collection-item avatar">
                  <img src="<?php echo SERVERURL; ?>img/user/<?=$NoUser['imgNoUser']?>" alt="" class="circle">
                  <span class="title blue-text"><?=$NoUser['nombre'];?> - <i class="black-text" style="font-size: 13px;">Publicado el: <?=$NoUser['fechaNoUser'];?></i></span>
                  <p>- <?=$NoUser['mensaje'];?></p>
                </li>
              </ul>
          </div>
      <?php endforeach; ?>
      <?php echo "</div>"; } else{echo "<h2 class='white-text'>No hay comentarios</h2>";}?>

  <form action="../controller/guardar_comentario" method="post">
    <div class="form-group">
      <input type="hidden" name="pelicula_id" value="<?=$_GET['pelicula'];?>">
       <div class="input-field col s12">
          <textarea id="textarea1" placeholder="Agregar comentario" name="comentario" class="materialize-textarea white-text" required=""></textarea>
        </div>
    </div>
    <br>
    <center>
    <input type="submit" class="btn blue darken-4" name="" value="Agregar Comentario">
    </center>
    <br>
  </form>
</div>
</section>
  <br>
</div><!--FIN COLUNA DE 12-->
		<br>
  </div><!--FIN CONTENEDOR PRINCIPAL-->

<?php } }else{ ?>
	<br>
  <h1 class="white-text center">No hay nada :(</h1>
<?php } ?>



<script type="text/javascript">
//parallax
$(document).ready(function(){
    $('.parallax').parallax();
  });
</script>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>
