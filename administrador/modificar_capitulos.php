<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql =" SELECT * FROM capitulos WHERE id_series =" .$id;

$capitulos = Conexion::consultar($sql);

foreach ($capitulos as $capitulo) {
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
	<h2 class="white-text center">Modificar Capitulos</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_modificar_capitulo?id=<?=$capitulo['id_series'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre_add" type="text" class="validate" value="<?php echo $capitulo['temporada1']; ?>">
          <label for="nombre_add">Titulo:</label>
        </div>
				<div class="input-field col s12 l6">
          <i class="material-icons prefix">title</i>
          <input id="trailer_add" name="original_add" type="text" class="validate" value="<?php echo $capitulo['nombre_original'];?>"></input>
          <label for="trailer_add">Nombre Original:</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="original_add" name="capitulo1_add" type="text" class="validate" value="<?php echo $capitulo['capitulo1']; ?>">
          <label for="original_add">capitulo 1</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="genero_add" name="capitulo2_add" type="text" class="validate" value="<?php echo $capitulo['capitulo2'];?>">
          <label for="genero_add">capitulo 2</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="duracion_add" name="capitulo3_add" type="text" class="validate" value="<?php echo $capitulo['capitulo3'];?>">
          <label for="duracion_add">capitulo 3</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="publicada_add" name="capitulo4_add" type="text" class="validate" value="<?php echo $capitulo['capitulo4'];?>">
          <label for="publicada_add">capitulo 4</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="capitulo5_add" type="text" class="validate" value="<?php echo $capitulo['capitulo5'];?>">
          <label for="year_add">capitulo 5</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="capitulo6_add" type="text" class="validate" value="<?php echo $capitulo['capitulo6'];?>">
          <label for="calificacion_add">capitulo 6</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="descripcion_add" name="capitulo7_add" type="text" class="validate" value="<?php echo $capitulo['capitulo7'];?>"></input>
          <label for="descripcion_add">capitulo 7</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="trailer_add" name="capitulo8_add" type="text" class="validate" value="<?php echo $capitulo['capitulo8'];?>"></input>
          <label for="trailer_add">capitulo 8</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="capitulo9_add" type="text" class="validate" value="<?php echo $capitulo['capitulo9'];?>" >
          <label for="year_add">capitulo 9</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="capitulo10_add" type="text" class="validate" value="<?php echo $capitulo['capitulo10'];?>" >
          <label for="calificacion_add">capitulo 10</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="descripcion_add" name="capitulo11_add" type="text" class="validate" value="<?php echo $capitulo['capitulo11'];?>" ></input>
          <label for="descripcion_add">capitulo 11</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="trailer_add" name="capitulo12_add" type="text" class="validate" value="<?php echo $capitulo['capitulo12'];?>" ></input>
          <label for="trailer_add">capitulo 12</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="capitulo13_add" type="text" class="validate" value="<?php echo $capitulo['capitulo13'];?>" >
          <label for="calificacion_add">capitulo 13</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="descripcion_add" name="capitulo14_add" type="text" class="validate" value="<?php echo $capitulo['capitulo14'];?>" ></input>
          <label for="descripcion_add">capitulo 14</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="capitulo15_add" type="text" class="validate" value="<?php echo $capitulo['capitulo15'];?>" >
          <label for="calificacion_add">capitulo 15</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="descripcion_add" name="capitulo16_add" type="text" class="validate" value="<?php echo $capitulo['capitulo16'];?>" ></input>
          <label for="descripcion_add">capitulo 16</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="trailer_add" name="capitulo17_add" type="text" class="validate" value="<?php echo $capitulo['capitulo17'];?>" ></input>
          <label for="trailer_add">capitulo 17</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="capitulo18_add" type="text" class="validate" value="<?php echo $capitulo['capitulo18'];?>" >
          <label for="calificacion_add">capitulo 18</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="descripcion_add" name="capitulo19_add" type="text" class="validate" value="<?php echo $capitulo['capitulo19'];?>" ></input>
          <label for="descripcion_add">capitulo 19</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="capitulo20_add" type="text" class="validate" value="<?php echo $capitulo['capitulo20'];?>" >
          <label for="calificacion_add">capitulo 20</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="descripcion_add" name="capitulo21_add" type="text" class="validate" value="<?php echo $capitulo['capitulo21'];?>" ></input>
          <label for="descripcion_add">capitulo 21</label>
        </div>
        <div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="trailer_add" name="capitulo22_add" type="text" class="validate" value="<?php echo $capitulo['capitulo22'];?>" ></input>
          <label for="trailer_add">capitulo 22</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="calificacion_add" name="capitulo23_add" type="text" class="validate" value="<?php echo $capitulo['capitulo23'];?>" >
          <label for="calificacion_add">capitulo 23</label>
        </div>
				<div class="input-field col s12 l4">
          <i class="material-icons prefix">live_tv</i>
          <input id="descripcion_add" name="capitulo24_add" type="text" class="validate" value="<?php echo $capitulo['capitulo24'];?>" ></input>
          <label for="descripcion_add">capitulo 24</label>
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
