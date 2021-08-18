<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM servidores_online WHERE id =" .$id;

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
	<h2 class="white-text center">Modificar Ver Online</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_modificar_verOnline.php?id=<?=$items['id'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="original_add" name="original_add" type="text" class="validate" value="<?php echo $items['nombre_original']; ?>" required="">
          <label for="original_add">Titulo Original:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="genero_add" name="nombreVer1_add" type="text" class="validate" value="<?php echo $items['nombre_serv1'];?>" >
          <label for="genero_add">Nombre Serv 1:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="genero_add" name="nombreVer2_add" type="text" class="validate" value="<?php echo $items['nombre_serv2'];?>" >
          <label for="genero_add">Nombre Serv 2:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="genero_add" name="nombreVer3_add" type="text" class="validate" value="<?php echo $items['nombre_serv3'];?>" >
          <label for="genero_add">Nombre Serv 3:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="genero_add" name="nombreVer4_add" type="text" class="validate" value="<?php echo $items['nombre_serv4'];?>" >
          <label for="genero_add">Nombre Serv 4:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="linkPelis1_add" type="text" class="validate" value="<?php echo $items['serv_link1'];?>" >
          <label for="year_add">Ver link1:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="linkPelis2_add" type="text" class="validate" value="<?php echo $items['serv_link2'];?>" >
          <label for="year_add">Ver link2:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="linkPelis3_add" type="text" class="validate" value="<?php echo $items['serv_link3'];?>" >
          <label for="year_add">Ver link3:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="year_add" name="linkPelis4_add" type="text" class="validate" value="<?php echo $items['serv_link4'];?>" >
          <label for="year_add">Ver link4:</label>
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
