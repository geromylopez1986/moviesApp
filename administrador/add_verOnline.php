<?php include("../conexion/conexion.php"); ?>
<?php include("../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesionadministrador.php"); ?>

<br>
<div class="contenedor bg-dark">
	<h2 class="white-text center">Paso 2 Agregar Pelicula Online</h2>
	<br>
  <div class="row">
    <br>
    <form class="col s12" method="post" action="../controller/guardar_verOnline" enctype="multipart/form-data" id="add_pelicula">
    <div class="row">
    <div class="input-field col s12 l12">
        <i class="material-icons prefix">title</i>
        <input id="original_add" name="original_add" type="text" class="validate" required="">
        <label for="original_add">Titulo Original:</label>
      </div>
      <div class="input-field col s12 l3">
        <i class="material-icons prefix">title</i>
        <input id="capitulo1_add" name="nombreVer1_add" type="text" class="validate" >
        <label for="capitulo1_add">Nombre Serv 1:</label>
      </div>
			<div class="input-field col s12 l3">
        <i class="material-icons prefix">title</i>
        <input id="capitulo2_add" name="nombreVer2_add" type="text" class="validate" >
        <label for="genero_add">Nombre Serv 2:</label>
      </div>
			<div class="input-field col s12 l3">
        <i class="material-icons prefix">title</i>
        <input id="capitulo3_add" name="nombreVer3_add" type="text" class="validate" >
        <label for="genero_add">Nombre Serv 3:</label>
      </div>
			<div class="input-field col s12 l3">
        <i class="material-icons prefix">title</i>
        <input id="capitulo4_add" name="nombreVer4_add" type="text" class="validate" >
        <label for="genero_add">Nombre Serv 4:</label>
      </div>
			<div class="input-field col s12 l3">
        <i class="material-icons prefix">local_movies</i>
        <input id="capitulo5_add" name="linkPelis1_add" type="text" class="validate" >
        <label for="year_add">Ver link1:</label>
      </div>
			<div class="input-field col s12 l3">
        <i class="material-icons prefix">local_movies</i>
        <input id="capitulo6_add" name="linkPelis2_add" type="text" class="validate" >
        <label for="year_add">Ver link2:</label>
      </div>
			<div class="input-field col s12 l3">
        <i class="material-icons prefix">local_movies</i>
        <input id="capitulo7_add" name="linkPelis3_add" type="text" class="validate" >
        <label for="year_add">Ver link3:</label>
      </div>
			<div class="input-field col s12 l3">
        <i class="material-icons prefix">local_movies</i>
        <input id="capitulo8_add" name="linkPelis4_add" type="text" class="validate" >
        <label for="year_add">Ver link4:</label>
      </div>

      </div><!-- FIN -->
      <br>
      <br>
      <br>
      <br>
       	<center><button class="btn waves-effect waves-light blue darken-4 btn-large" type="submit" name="action">Agregar
    		<i class="material-icons right">send</i>
  		</button></center>
		<br><br>
    </form>
  </div>

</div>

<?php
  if(isset($_GET['v'])){
    if ($_GET['v'] == "true") {
      echo "<script>alert('Links Guardado Correctamente')</script>";
    }else{
    echo "<script>alert('Error al guardar, esto puede ser debido a alguna imagen.')</script>";
    }
  }
  ?>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>
