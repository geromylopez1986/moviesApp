<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql =" SELECT * FROM descargas WHERE id_descarga =" .$id;

$descargalink = Conexion::consultar($sql);

foreach ($descargalink as $descargas) {
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
	<h2 class="white-text center">Modificar Link Descarga</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_modificar_link_descarga.php?id=<?=$descargas['id_descarga'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l3">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre_original_add" type="text" class="validate" value="<?php echo $descargas['nombre_original']; ?>" required="">
          <label for="nombre_add">Titulo Original:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="original_add" name="link1_add" type="text" class="validate" value="<?php echo $descargas['link1']; ?>">
          <label for="original_add">Link 1:</label>
        </div>
        <div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="genero_add" name="link2_add" type="text" class="validate" value="<?php echo $descargas['link2'];?>">
          <label for="genero_add">Link 2:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="duracion_add" name="link3_add" type="text" class="validate" value="<?php echo $descargas['link3'];?>">
          <label for="duracion_add">Link 3:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="link4_add" name="link4_add" type="text" class="validate" value="<?php echo $descargas['link4']; ?>">
          <label for="link4_add">Link 4:</label>
        </div>
        <div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="link5_add" name="link5_add" type="text" class="validate" value="<?php echo $descargas['link5'];?>">
          <label for="link5_add">Link 5:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="link6_add" name="link6_add" type="text" class="validate" value="<?php echo $descargas['link6'];?>">
          <label for="link6_add">Link 6:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="link7_add" name="link7_add" type="text" class="validate" value="<?php echo $descargas['link7']; ?>">
          <label for="link7_add">Link 7:</label>
        </div>
        <div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="link8_add" name="link8_add" type="text" class="validate" value="<?php echo $descargas['link8'];?>">
          <label for="link8_add">Link 8:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">link</i>
          <input id="link9_add" name="link9_add" type="text" class="validate" value="<?php echo $descargas['link9'];?>">
          <label for="link9_add">Link 9:</label>
        </div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="original_add" name="serv1_add" type="text" class="validate" value="<?php echo $descargas['serv1']; ?>">
					<label for="original_add">Servidor 1:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="genero_add" name="serv2_add" type="text" class="validate" value="<?php echo $descargas['serv2'];?>">
					<label for="genero_add">Servidor 2:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="duracion_add" name="serv3_add" type="text" class="validate" value="<?php echo $descargas['serv3'];?>">
					<label for="genero_add">Servidor 3:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="serv4_add" name="serv4_add" type="text" class="validate" value="<?php echo $descargas['serv4']; ?>">
					<label for="serv4_add">Servidor 4:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="serv5_add" name="serv5_add" type="text" class="validate" value="<?php echo $descargas['serv5'];?>">
					<label for="serv5_add">Servidor 5:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="serv6_add" name="serv6_add" type="text" class="validate" value="<?php echo $descargas['serv6'];?>">
					<label for="serv6_add">Servidor 6:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="serv7_add" name="serv7_add" type="text" class="validate" value="<?php echo $descargas['serv7']; ?>">
					<label for="serv7_add">Servidor 7:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="serv8_add" name="serv8_add" type="text" class="validate" value="<?php echo $descargas['serv8'];?>">
					<label for="serv8_add">Servidor 8:</label>
				</div>
				<div class="input-field col s12 l3">
					<i class="material-icons prefix">language</i>
					<input id="serv9_add" name="serv9_add" type="text" class="validate" value="<?php echo $descargas['serv9'];?>">
					<label for="serv9_add">Servidor 9:</label>
				</div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="publicada_add" name="icon1_name_add" type="text" class="validate" value="<?php echo $descargas['icon1_name'];?>">
          <label for="publicada_add">Nombre Icono 1:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="year_add" name="icon2_name_add" type="text" class="validate" value="<?php echo $descargas['icon2_name'];?>">
          <label for="year_add">Nombre Icono 2:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="director_add" name="icon3_name_add" type="text" class="validate" value="<?php echo $descargas['icon3_name'];?>">
          <label for="director_add">Nombre Icono 3:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="icon4_name_add" name="icon4_name_add" type="text" class="validate" value="<?php echo $descargas['icon4_name'];?>">
          <label for="icon4_name_add">Nombre Icono 4:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="icon5_name_add" name="icon5_name_add" type="text" class="validate" value="<?php echo $descargas['icon5_name'];?>">
          <label for="icon5_name_add">Nombre Icono 5:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="icon6_name_add" name="icon6_name_add" type="text" class="validate" value="<?php echo $descargas['icon6_name'];?>">
          <label for="icon6_name_add">Nombre Icono 6:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="icon7_name_add" name="icon7_name_add" type="text" class="validate" value="<?php echo $descargas['icon7_name'];?>">
          <label for="icon7_name_add">Nombre Icono 7:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="icon8_name_add" name="icon8_name_add" type="text" class="validate" value="<?php echo $descargas['icon8_name'];?>">
          <label for="icon8_name_add">Nombre Icono 8:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="icon9_name_add" name="icon9_name_add" type="text" class="validate" value="<?php echo $descargas['icon9_name'];?>">
          <label for="icon9_name_add">Nombre Icono 9:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto1_add" name="tuto1_add" type="text" class="validate" value="<?php echo $descargas['tutorial1'];?>">
          <label for="tuto1_add">Tutorial 1:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto2_add" name="tuto2_add" type="text" class="validate" value="<?php echo $descargas['tutorial2'];?>">
          <label for="tuto2_add">Tutorial 2:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto3_add" name="tuto3_add" type="text" class="validate" value="<?php echo $descargas['tutorial3'];?>">
          <label for="tuto3_add">Tutorial 3:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto4_add" name="tuto4_add" type="text" class="validate" value="<?php echo $descargas['tutorial4'];?>">
          <label for="tuto4_add">Tutorial 4:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto5_add" name="tuto5_add" type="text" class="validate" value="<?php echo $descargas['tutorial5'];?>">
          <label for="tuto5_add">Tutorial 5:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto6_add" name="tuto6_add" type="text" class="validate" value="<?php echo $descargas['tutorial6'];?>">
          <label for="tuto6_add">Tutorial 6:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto7_add" name="tuto7_add" type="text" class="validate" value="<?php echo $descargas['tutorial7'];?>">
          <label for="tuto7_add">Tutorial 7:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto8_add" name="tuto8_add" type="text" class="validate" value="<?php echo $descargas['tutorial8'];?>">
          <label for="tuto8_add">Tutorial 8:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">sentiment_very_satisfied</i>
          <input id="tuto9_add" name="tuto9_add" type="text" class="validate" value="<?php echo $descargas['tutorial9'];?>">
          <label for="tuto9_add">Tutorial 9:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">speaker</i>
          <input id="actores_add" name="idioma1_add" type="text" class="validate" value="<?php echo $descargas['idioma1'];?>">
          <label for="actores_add">Idioma 1:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">speaker</i>
          <input id="calificacion_add" name="idioma2_add" type="text" class="validate" value="<?php echo $descargas['idioma2'];?>">
          <label for="calificacion_add">Idioma 2:</label>
        </div>
		<div class="input-field col s12 l3">
          <i class="material-icons prefix">desktop_windows</i>
          <input id="descripcion_add" name="calidad1_add" type="text" class="validate" value="<?php echo $descargas['calidad1'];?>"></input>
          <label for="descripcion_add">Calidad:</label>
        </div>
        <div class="input-field col s12 l3">
          <i class="material-icons prefix">desktop_windows</i>
          <input id="trailer_add" name="calidad2_add" type="text" class="validate" value="<?php echo $descargas['calidad2'];?>"></input>
          <label for="trailer_add">Calidad:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">desktop_windows</i>
          <input id="trailer_add" name="calidad3_add" type="text" class="validate" value="<?php echo $descargas['calidad3'];?>"></input>
          <label for="trailer_add">Calidad:</label>
        </div>
				<div class="input-field col s12 l3">
          <i class="material-icons prefix">movie</i>
          <input id="trailer_add" name="peso_add" type="text" class="validate" value="<?php echo $descargas['peso1'];?>"></input>
          <label for="trailer_add">Peso:</label>
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
