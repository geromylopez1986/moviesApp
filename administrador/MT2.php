<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql =" SELECT * FROM temporada2_descarga WHERE id =" .$id;

$temp2 = Conexion::consultar($sql);

foreach ($temp2 as $caps) {
	// code...
}

?>

<style media="screen">
	.material-icons {
		color: #ffffff;
	}
</style>

<?php
include("../controller/administrador_session.php");
include("../model/model_administrar.php");
include("../layout/header_sesion.php");
?>

<br>
<div class="container" style="background: #dd1818;">
	<h2 class="white-text center">Modificar Capitulo Descarga</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_MT?id=<?=$caps['id'];?>" enctype="multipart/form-data" id="add_pelicula">
			<div class="row">
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="temporada_add" type="text" class="validate" value="<?php echo $caps['temporada']; ?>" required="">
          <label for="nombre_add">Temporada:</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="servodor_add" type="text" class="validate" value="<?php echo $caps['servidor']; ?>" required="">
          <label for="nombre_add">Servidor:</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="idioma_add" type="text" class="validate" value="<?php echo $caps['idioma']; ?>" required="">
          <label for="nombre_add">Idioma:</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="calidad_add" type="text" class="validate" value="<?php echo $caps['calidad']; ?>" required="">
          <label for="nombre_add">Calidad</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="numeroCapitulo_add" type="text" class="validate" value="<?php echo $caps['numeroCapitulo']; ?>" required="">
          <label for="nombre_add">#Numero Capitulo:</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre_serie_add" type="text" class="validate" value="<?php echo $caps['nombre_serie']; ?>" required="">
          <label for="nombre_add">Titulo Serie:</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="Dcapitulo_add" type="text" class="validate" value="<?php echo $caps['capitulo']; ?>" required="">
          <label for="nombre_add">Link Capitulo:</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="icono_add" type="text" class="validate" value="<?php echo $caps['icono']; ?>" required="">
          <label for="nombre_add">Icono:</label>
        </div>
      </div>
      <br>
       	<center><button class="btn waves-effect waves-light green darken-1 btn-large" type="submit" name="action">Actualizar
    		<i class="material-icons right">send</i>
  		</button></center>
		<br><br>
    </form>
  </div>
</div>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>
