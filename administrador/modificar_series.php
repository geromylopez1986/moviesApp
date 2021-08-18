<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql =" SELECT * FROM series WHERE id =" .$id;

$serie = Conexion::consultar($sql);

foreach ($serie as $serie) {
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
	<h2 class="white-text center">Modificar Serie</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_modificar_series.php?id=<?=$serie['id'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre_add" type="text" class="validate" value="<?php echo $serie['nombre']; ?>" required="">
          <label for="nombre_add">Titulo:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="original_add" name="original_add" type="text" class="validate" value="<?php echo $serie['nombre_original']; ?>" required="">
          <label for="original_add">Original:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="genero_add" name="genero_add" type="text" class="validate" value="<?php echo $serie['genero'];?>" required="">
          <label for="genero_add">Genero:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="duracion_add" name="duracion_add" type="text" class="validate" value="<?php echo $serie['duracion'];?>" required="">
          <label for="duracion_add">Duración:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="publicada_add" name="publicada_add" type="text" class="validate" value="<?php echo $serie['fecha'];?>" required="">
          <label for="publicada_add">Publicada:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="year_add" type="text" class="validate" value="<?php echo $serie['year'];?>" required="">
          <label for="year_add">Año:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="director_add" name="director_add" type="text" class="validate" value="<?php echo $serie['director'];?>" required="">
          <label for="director_add">Director:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="actores_add" name="actores_add" type="text" class="validate" value="<?php echo $serie['actores'];?>" required="">
          <label for="actores_add">Reparto:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="calificacion_add" type="text" class="validate" value="<?php echo $serie['calificacion'];?>" required="">
          <label for="calificacion_add">Calificación:</label>
        </div>
		<div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <input id="descripcion_add" name="descripcion_add" type="text" class="validate" value="<?php echo $serie['descripcion'];?>" required=""></input>
          <label for="descripcion_add">Descripcion:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">insert_link</i>
          <input id="trailer_add" name="trailer_add" type="text" class="validate" value="<?php echo $serie['trailer'];?>" required=""></input>
          <label for="trailer_add">Trailer:</label>
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
