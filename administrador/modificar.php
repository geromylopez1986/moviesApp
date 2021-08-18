<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM peliculas WHERE id =" .$id;

$datos = Conexion::consultar($sql);

foreach ($datos as $items) {
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
	<h2 class="white-text center">Modificar Pelicula</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_modificar.php?id=<?=$items['id'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre_add" type="text" class="validate" value="<?php echo $items['nombre']; ?>" required="">
          <label for="nombre_add">Titulo:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="subnombre_add" type="text" class="validate" value="<?php echo $items['sub_nombre']; ?>" required="">
          <label for="nombre_add">Subnombre:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="original_add" name="original_add" type="text" class="validate" value="<?php echo $items['nombre_original']; ?>" required="">
          <label for="original_add">Original:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="genero_add" name="genero_add" type="text" class="validate" value="<?php echo $items['genero'];?>" required="">
          <label for="genero_add">Genero:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="duracion_add" name="duracion_add" type="text" class="validate" value="<?php echo $items['duracion_pelicula'];?>" required="">
          <label for="duracion_add">Duración:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="publicada_add" name="publicada_add" type="text" class="validate" value="<?php echo $items['fecha'];?>" required="">
          <label for="publicada_add">Publicada:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="year_add" type="text" class="validate" value="<?php echo $items['year_pelicula'];?>" required="">
          <label for="year_add">Año:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="idioma_add" type="text" class="validate" value="<?php echo $items['idioma_pelicula'];?>" required="">
          <label for="year_add">Idioma:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="calificacion_add" type="text" class="validate" value="<?php echo $items['calificacion_pelicula'];?>" required="">
          <label for="calificacion_add">Calificación:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <input id="descripcion_add" name="descripcion_add" type="text" class="validate" value="<?php echo $items['descripcion'];?>" required=""></input>
          <label for="descripcion_add">Descripcion:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="actores_add" name="actores_add" type="text" class="validate" value="<?php echo $items['actores_pelicula'];?>" required=""></input>
          <label for="actores_add">Actores:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">language</i>
          <input id="pais_add" name="pais_add" type="text" class="validate" value="<?php echo $items['pais_pelicula'];?>" required="">
          <label for="pais_add">Pais:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">person_pin</i>
          <input id="director_add" name="director_add" type="text" class="validate" value="<?php echo $items['director_pelicula'];?>" required="">
          <label for="director_add">Director:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">image</i>
          <input id="imagen_add" name="imagen_add" type="text" class="validate" value="<?php echo $items['imagen'];?>" required="">
          <label for="imagen_add">Imagen:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">image</i>
          <input id="imagen_bgn_add" name="imagen_bg_add" type="text" class="validate" value="<?php echo $items['imagen_bg'];?>" required="">
          <label for="imagen_bg_add">Imagen Bg:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">image</i>
          <input id="slide_bar_add" name="slide_bar_add" type="text" class="validate" value="<?php echo $items['slide_bar'];?>" required="">
          <label for="slide_bar_add">Slide Bar:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">hd</i>
          <input id="calidad_pelicula_add" name="calidad_pelicula_add" type="text" class="validate" value="<?php echo $items['calidad_pelicula'];?>" required=""></input>
          <label for="calidad_pelicula_add">Calidad:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">insert_link</i>
          <input id="trailer_add" name="trailer_add" type="text" class="validate" value="<?php echo $items['trailer'];?>" required=""></input>
          <label for="trailer_add">Trailer:</label>
        </div>
         <div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="link_add" name="generoCover_add" type="text" class="validate" value="<?php echo $items['genero_cover'];?>" required=""></input>
          <label for="link_add">Genero Cover:</label>
        </div>
				<div class="input-field col s12 l12">
				 <i class="material-icons prefix">live_tv</i>
				 <input id="link_add" name="estreno_add" type="text" class="validate" value="<?php echo $items['estreno'];?>" required=""></input>
				 <label for="link_add">Estrenos:</label>
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
