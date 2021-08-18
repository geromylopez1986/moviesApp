<?php

require_once("../conexion/conexion.php");

$id = $_GET["id"];

$sql =" SELECT * FROM contacto WHERE id =" .$id;

$soporte = Conexion::consultar($sql);

foreach ($soporte as $contact) {
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
	<h2 class="white-text center">Modificar Contacto</h2>
	<br>
  <div class="row" style="border: 1px solid white; background: #333;">
    <br>
    <form class="col s12" method="post" action="../model/model_modificar_contacto.php?id=<?=$contact['id'];?>" enctype="multipart/form-data" id="add_pelicula">
      <div class="row">
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">account_box</i>
          <input id="nombre_add" name="nombre" type="text" class="validate" value="<?php echo $contact['nombre']; ?>" required="">
          <label for="nombre_add">Nombre:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">gps_fixed</i>
          <input id="original_add" name="direcion" type="text" class="validate" value="<?php echo $contact['direcion']; ?>" required="">
          <label for="original_add">Direción:</label>
        </div>
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">phone</i>
          <input id="genero_add" name="telefono" type="text" class="validate" value="<?php echo $contact['telefono'];?>" required="">
          <label for="genero_add">Telefono:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">email</i>
          <input id="duracion_add" name="correo" type="email" class="validate" value="<?php echo $contact['correo'];?>" required="">
          <label for="duracion_add">Correo:</label>
        </div>
				<div class="input-field col s12 l12">
          <i class="material-icons prefix">question_answer</i>
          <input id="publicada_add" name="mensaje" type="text" class="validate" value="<?php echo $contact['mensaje'];?>" required="">
          <label for="publicada_add">Mensaje:</label>
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
