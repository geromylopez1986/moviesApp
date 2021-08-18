<?php
include("../controller/usuario_session.php");
include("../conexion/conexion.php");
include("../layout/header_sesion.php");
?>

<?php if (isset($_GET['page'])): ?>

  <div class="contenedor" style="background: #333;">

    <div class="row container">
    	<form class="col s12" action="<?php echo SERVERURL; ?>controller/buscar" method="post">
    		<div class="row">
    			<div class="input-field col s12 l6 center" style="background: #dd1818; padding: .5rem; margin-bottom: 2rem;">
            <a><img src="<?php echo SERVERURL; ?>img/logo/logo.png" alt=""></a>
    			</div>
    			<div class="input-field buscador_u col s12 l4 right">
    				<button><i class="material-icons prefix">search</i></button>
    				<input id="icon_prefix right" class="validate" type="search" name="buscar" placeholder="buscar..." required="">
    			</div>
    			<!--- <center><button class="btn waves-effect orange darken-4 " type="submit">Buscar</button></center>  -->
    		</div>
    	</form>
    </div>

    <br>

    <div class="row" style="padding: 0px; margin: auto; text-align: center;">

  <section>
    <?php
    $categorias = $_GET['page'];
    $sql ="SELECT * FROM peliculas  ORDER BY year_pelicula DESC";
    $datosU = Conexion::consultar($sql);
     ?>
<?php foreach ($datosU as $title): ?>

<?php endforeach; ?>
  <div class="barra">
    <h5>Ultimas Publicaciones: <?=$title['fecha']; ?></h5>
<?php include("../model/modal_paginacion_admin.php"); ?>
  </div>
  <?php foreach($pelis as $page){ ?>
  <figure class="imghvr-shutter-in-out-vert" style="margin: 5px;">
  <img class="responsive-img" src="<?php echo SERVERURL; ?>img/peliculas/<?=$page['imagen']?>" style="height: 310px; width: 220px;" alt="example-image">
  <figcaption style="background: rgba(0,0,0,0);">
    <h6 class="ih-fade-down ih-delay-sm"><?= $page['nombre']?></h6>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Género: <i><?= substr($page['genero_cover'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Estreno: <i><?= substr($page['year_pelicula'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Duración: <i><?= substr($page['duracion_pelicula'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Calificación: <i><?= substr($page['calificacion_pelicula'],0,150)?></i></p>
  </figcaption>
  <a href="<?php echo SERVERURL; ?>usuario/<?=$page['nombre_original']?>"></a>
  </figure>
  <?php }?>

  <style media="screen">
    .ocultar {
      display: none;
    }
  </style>

  <div class="paginacion-admin">
    <ul>
        <a href="<?php echo SERVERURL; ?>usuario/page/<?php echo $_GET['page']-1; ?>" onclick="animated" class="waves-effect waves-light btn red <?php echo $_GET['page'] <= 1 ? 'ocultar' : '' ?>"><li>Anterior</li></a>
        <?php for ($i=0; $i < $paginasN; $i++): ?>
        <a href="<?php echo SERVERURL; ?>usuario/page/<?=$i+1 ?>" class="contador <?php echo $_GET['page']==$i+1 ? 'activo' : '' ?>"><?php echo $i+1; ?></li></a>
      <?php endfor; ?>
        <a href="<?php echo SERVERURL; ?>usuario/page/<?php echo $_GET['page']+1; ?>" class="waves-effect waves-light btn red <?php echo $_GET['page'] >= $paginasN ? 'ocultar' : '' ?>"><li>Siguiente</li></a>
      </ul>
  </div>

    </section>

  </div>

  </did>
<?php endif; ?>

<?php if (isset($_GET['seriePage'])): ?>

  <div class="contenedor" style="background: #333;">

    <div class="row container">
    	<form class="col s12" action="<?php echo SERVERURL; ?>controller/buscar" method="post">
    		<div class="row">
    			<div class="input-field col s12 l6 center" style="background: #dd1818; padding: .5rem; margin-bottom: 2rem;">
            <a><img src="<?php echo SERVERURL; ?>img/logo/logo.png" alt=""></a>
    			</div>
    			<div class="input-field buscador_u col s12 l4 right">
    				<button><i class="material-icons prefix">search</i></button>
    				<input id="icon_prefix right" class="validate" type="search" name="buscar" placeholder="buscar..." required="">
    			</div>
    			<!--- <center><button class="btn waves-effect orange darken-4 " type="submit">Buscar</button></center>  -->
    		</div>
    	</form>
    </div>

    <br>

    <div class="row" style="padding: 0px; margin: auto; text-align: center;">

  <section>
    <?php
    $categorias = $_GET['seriePage'];
    $sql ="SELECT * FROM series  ORDER BY year DESC";
    $datosU = Conexion::consultar($sql);
     ?>
<?php foreach ($datosU as $title): ?>

<?php endforeach; ?>
  <div class="barra">
    <h5>Ultimas Publicaciones: <?=$title['fecha']; ?></h5>
<?php include("../model/modal_paginacion_adminS.php"); ?>
  </div>
  <?php foreach($ser as $page){ ?>
  <figure class="imghvr-shutter-in-out-vert" style="margin: 5px;">
  <img class="responsive-img" src="<?php echo SERVERURL; ?>img/series/<?=$page['imagen']?>" style="height: 310px; width: 220px;" alt="example-image">
  <figcaption style="background: rgba(0,0,0,0);">
    <h6 class="ih-fade-down ih-delay-sm"><?= $page['nombre']?></h6>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Género: <i><?= substr($page['genero_cover'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Estreno: <i><?= substr($page['year'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Duración: <i><?= substr($page['duracion'],0,150)?></i></p>
    <div class="divider" style="margin: 10px 0px;"></div>
    <p class="ih-zoom-in ih-delay-md">Calificación: <i><?= substr($page['calificacion'],0,150)?></i></p>
  </figcaption>
  <a href="<?php echo SERVERURL; ?>usuario/serie/<?=$page['nombre_original']?>"></a>
  </figure>
  <?php }?>

  <style media="screen">
    .ocultar {
      display: none;
    }
  </style>

  <div class="paginacion-admin">
    <ul>
        <a href="<?php echo SERVERURL; ?>usuario/seriePage/<?php echo $_GET['seriePage']-1; ?>" onclick="animated" class="waves-effect waves-light btn red <?php echo $_GET['seriePage'] <= 1 ? 'ocultar' : '' ?>"><li>Anterior</li></a>
        <?php for ($i=0; $i < $paginasN; $i++): ?>
        <a href="<?php echo SERVERURL; ?>usuario/seriePage/<?=$i+1 ?>" class="contador <?php echo $_GET['seriePage']==$i+1 ? 'activo' : '' ?>"><?php echo $i+1; ?></li></a>
      <?php endfor; ?>
        <a href="<?php echo SERVERURL; ?>usuario/seriePage/<?php echo $_GET['seriePage']+1; ?>" class="waves-effect waves-light btn red <?php echo $_GET['seriePage'] >= $paginasN ? 'ocultar' : '' ?>"><li>Siguiente</li></a>
      </ul>
  </div>

    </section>

  </div>

  </did>
<?php endif; ?>

<?php
include("../layout/footer.php");
?>
