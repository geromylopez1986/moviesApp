<?php include("../conexion/conexion.php"); ?>
<?php include("../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesionadministrador.php"); ?>

<br>
<div class="contenedor bg-dark">
	<h2 class="white-text center">Paso Final Links de descargas</h2>
	<br>
  <div class="row">
    <br>
    <form class="col s12" method="post" action="../controller/guardar_links_descarga" enctype="multipart/form-data" id="add_pelicula">
    <div class="row">

    <div class="input-field col s12 l6">
        <i class="material-icons prefix">title</i>
        <input id="original_add" name="original_add" type="text" class="validate" >
        <label for="original_add">Titulo Original:</label>
      </div>
			<div class="title section col s12 l6">
				<h2>Titulo de la pelicula</h2>
			</div>
			<div class="orange col s12 l12"></div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link1_add" name="link1_add" type="text" class="validate" >
        <label for="link1_add">Link 1:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link2_add" name="link2_add" type="text" class="validate" >
        <label for="link2_add">Link 2:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link3_add" name="link3_add" type="text" class="validate" >
        <label for="link3_add">Link 3:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link1_add" name="link4_add" type="text" class="validate" >
        <label for="link1_add">Link 4:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link2_add" name="link5_add" type="text" class="validate" >
        <label for="link2_add">Link 5:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link3_add" name="link6_add" type="text" class="validate" >
        <label for="link3_add">Link 6:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link1_add" name="link7_add" type="text" class="validate" >
        <label for="link1_add">Link 7:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link2_add" name="link8_add" type="text" class="validate" >
        <label for="link2_add">Link 8:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">insert_link</i>
        <input id="link3_add" name="link9_add" type="text" class="validate" >
        <label for="link3_add">Link 9:</label>
      </div>
			<div class="title section col s12 l6">
				<h2>Links de descargas</h2>
			</div>
			<div class="orange col s12 l12"></div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv1_add" name="serv1_add" type="text" class="validate" >
        <label for="serv1_add">Servidor 1:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv2_add" name="serv2_add" type="text" class="validate" >
        <label for="serv2_add">Servidor 2:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv3_add" name="serv3_add" type="text" class="validate" >
        <label for="serv3_add">Servidor 3:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv1_add" name="serv4_add" type="text" class="validate" >
        <label for="serv1_add">Servidor 4:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv2_add" name="serv5_add" type="text" class="validate" >
        <label for="serv2_add">Servidor 5:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv3_add" name="serv6_add" type="text" class="validate" >
        <label for="serv3_add">Servidor 6:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv1_add" name="serv7_add" type="text" class="validate" >
        <label for="serv1_add">Servidor 7:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv2_add" name="serv8_add" type="text" class="validate" >
        <label for="serv2_add">Servidor 8:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="serv3_add" name="serv9_add" type="text" class="validate" >
        <label for="serv3_add">Servidor 9:</label>
      </div>
			<div class="title section col s12 l6">
				<h2>Nombre de los servidores</h2>
			</div>
			<div class="orange col s12 l12"></div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad1_add" name="calidad1_add" type="text" class="validate" >
        <label for="calidad1_add">Calidad 1:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad2_add" name="calidad2_add" type="text" class="validate" >
        <label for="calidad2_add">Calidad 2:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad3_add" name="calidad3_add" type="text" class="validate" >
        <label for="calidad3_add">Calidad 3:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad1_add" name="calidad4_add" type="text" class="validate" >
        <label for="calidad1_add">Calidad 4:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad2_add" name="calidad5_add" type="text" class="validate" >
        <label for="calidad2_add">Calidad 5:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad3_add" name="calidad6_add" type="text" class="validate" >
        <label for="calidad3_add">Calidad 6:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad1_add" name="calidad7_add" type="text" class="validate" >
        <label for="calidad1_add">Calidad 7:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad2_add" name="calidad8_add" type="text" class="validate" >
        <label for="calidad2_add">Calidad 8:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">high_quality</i>
        <input id="calidad3_add" name="calidad9_add" type="text" class="validate" >
        <label for="calidad3_add">Calidad 9:</label>
      </div>
			<div class="title section col s12 l6">
				<h2>Calidad de la pelicula</h2>
			</div>
			<div class="orange col s12 l12"></div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso1_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 1:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso2_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 2:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso3_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 3:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso4_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 4:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso5_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 5:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso6_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 6:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso7_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 7:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso8_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 8:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">dns</i>
        <input id="calidad3_add" name="peso9_add" type="text" class="validate" >
        <label for="calidad3_add">Peso Link 9:</label>
      </div>
			<div class="title section col s12 l6">
				<h2>Tamaño de descargas</h2>
			</div>
			<div
			<div class="orange col s12 l12"></div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon1_name" name="icon1_name" type="text" class="validate" >
        <label for="icon1_name">Icono Nombre 1:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon2_name" name="icon2_name" type="text" class="validate" >
        <label for="icon2_name">Icono Nombre 2:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon3_name" name="icon3_name" type="text" class="validate" >
        <label for="icon3_name">Icono Nombre 3:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon1_name" name="icon4_name" type="text" class="validate" >
        <label for="icon1_name">Icono Nombre 4:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon2_name" name="icon5_name" type="text" class="validate" >
        <label for="icon2_name">Icono Nombre 5:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon3_name" name="icon6_name" type="text" class="validate" >
        <label for="icon3_name">Icono Nombre 6:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon1_name" name="icon7_name" type="text" class="validate" >
        <label for="icon1_name">Icono Nombre 7:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon2_name" name="icon8_name" type="text" class="validate" >
        <label for="icon2_name">Icono Nombre 8:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="icon3_name" name="icon9_name" type="text" class="validate" >
        <label for="icon3_name">Icono Nombre 9:</label>
      </div>
			<div class="title section col s12 l6">
				<h2>Nombre Correcto de el icono</h2>
			</div>
			<div
			<div class="orange col s12 l12"></div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto1_name" name="tuto1_name" type="text" class="validate" >
        <label for="tuto1_name">Tutorial 1:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto2_name" name="tuto2_name" type="text" class="validate" >
        <label for="tuto2_name">Tutorial 2:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto3_name" name="tuto3_name" type="text" class="validate" >
        <label for="tuto3_name">Tutorial 3:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto1_name" name="tuto4_name" type="text" class="validate" >
        <label for="tuto1_name">Tutorial 4:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto2_name" name="tuto5_name" type="text" class="validate" >
        <label for="tuto2_name">Tutorial 5:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto3_name" name="tuto6_name" type="text" class="validate" >
        <label for="tuto3_name">Tutorial 6:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto1_name" name="tuto7_name" type="text" class="validate" >
        <label for="tuto1_name">Tutorial 7:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto2_name" name="tuto8_name" type="text" class="validate" >
        <label for="tuto2_name">Tutorial 8:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">image</i>
        <input id="tuto3_name" name="tuto9_name" type="text" class="validate" >
        <label for="tuto3_name">Tutorial 9:</label>
      </div>
			<div class="title section col s12 l6">
				<h2>Tutorial de descargas</h2>
			</div>
			<div
			<div class="orange col s12 l12"></div>
			<div class="title section col s12 l4">
				<h2>Idioma de la pelicula</h2>
			</div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">headset</i>
        <input id="idioma1_add" name="idioma1_add" type="text" class="validate" >
        <label for="idioma1_add">Idioma 1:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">headset</i>
        <input id="idioma2_add" name="idioma2_add" type="text" class="validate" >
        <label for="idioma2_add">Idioma 2:</label>
      </div>
			<div class="input-field col s12 l2">
        <i class="material-icons prefix">headset</i>
        <input id="idioma1_add" name="idioma3_add" type="text" class="validate" >
        <label for="idioma1_add">Idioma 3:</label>
      </div>
      <div class="input-field col s12 l2">
        <i class="material-icons prefix">headset</i>
        <input id="idioma2_add" name="idioma4_add" type="text" class="validate" >
        <label for="idioma2_add">Idioma 4:</label>
      </div>
			<div class="orange col s12 l12"></div>
			<div class="title section col s12 l4">
				<h2>Subir icono a el servidor</h2>
			</div>
      <div class="file-field col s12 l3 input-field">
      		<div class="btn green darken-4">
        		<span>Seleccionar Icono 1:</span>
        		<input type="file" name="icon1_add">
      		</div>
      		<div class="file-path-wrapper">
        		<input class="file-path validate" type="text">
      		</div>
    	</div>
      <div class="file-field col s12 l3 input-field">
          <div class="btn orange darken-4">
            <span>Seleccionar Icono 2:</span>
            <input type="file" name="icon2_add">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
      </div>
      <div class="file-field col s12 l2 input-field">
          <div class="btn red darken-4">
            <span>Seleccionar Icono 3:</span>
            <input type="file" name="icon3_add">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
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
  if(isset($_GET['d'])){
    if ($_GET['d'] == "true") {
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
