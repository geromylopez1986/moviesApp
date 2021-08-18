<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql =" SELECT * FROM reportar_link WHERE id =" .$id;

$reportes = Conexion::consultar($sql);

foreach ($reportes as $reporte) {
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
	<h2 class="white-text center">Modificar Reporte</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_modificar_report?id=<?=$reporte['id'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input id="nombre_add" name="nombre" type="text" class="validate" value="<?php echo $reporte['nombre_pelicula']; ?>" required="">
          <label for="nombre_add">Nombre Pelicula:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">dns</i>
          <input id="original_add" name="servidor" type="text" class="validate" value="<?php echo $reporte['servidor_descarga']; ?>" required="">
          <label for="original_add">Servidor Descarga:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <input id="genero_add" name="mensaje" type="text" class="validate" value="<?php echo $reporte['mensaje'];?>" required="">
          <label for="genero_add">Mensaje:</label>
        </div>
		<br><br>
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
