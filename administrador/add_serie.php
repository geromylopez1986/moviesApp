<?php include("../conexion/conexion.php"); ?>
<?php include("../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesionadministrador.php"); ?>

<br>
<div class="contenedor bg-dark">
    <h2 class="white-text center">Paso 1 add serie infromación</h2>
    <br>
    <div class="row">
        <br>
        <form class="col s12" method="post" action="../controller/guardar_serie" enctype="multipart/form-data"
            id="add_pelicula">
            <div class="row">
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">title</i>
                    <input id="nombre_add" name="nombre_add" type="text" class="validate" required="">
                    <label for="nombre_add">Titulo:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">title</i>
                    <input id="nombre_add" name="subnombre_add" type="text" class="validate" required="">
                    <label for="nombre_add">Sub Titulo:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">title</i>
                    <input id="nombre_add" name="original_add" type="text" class="validate" required="">
                    <label for="original_add">Titulo Original:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">local_movies</i>
                    <input id="genero_add" name="genero_add" type="text" class="validate" required="">
                    <label for="genero_add">Genero:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">today</i>
                    <input id="year_add" name="year_add" type="text" class="validate" required="">
                    <label for="year_add">Año:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">star</i>
                    <input id="calificacion_add" name="calificacion_add" type="text" class="validate" required="">
                    <label for="calificacion_add">Calificación:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">language</i>
                    <input id="pais_add" name="pais_add" type="text" class="validate" required="">
                    <label for="pais_add">Pais:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">query_builder</i>
                    <input id="duracion_add" name="duracion_add" type="text" class="validate" required="">
                    <label for="duracion_add">Duración:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">record_voice_over</i>
                    <input id="idioma_add" name="idioma_add" type="text" class="validate" required="">
                    <label for="idioma_add">Idioma:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">person</i>
                    <input id="director_add" name="director_add" type="text" class="validate" required="">
                    <label for="director_add">Director:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">live_tv</i>
                    <input id="genero_cover" name="genero_cover" type="text" class="validate" required="">
                    <label for="genero_cover">Genero Cover:</label>
                </div>
                <div class="input-field col s12 l3">
                    <i class="material-icons prefix">panorama</i>
                    <input id="calidad_add" name="calidad_add" type="text" class="validate" required="">
                    <label for="calidad_add">Calidad:</label>
                </div>
                <div class="input-field col s12 l12">
                    <i class="material-icons prefix">insert_comment</i>
                    <textarea id="descripcion_add" name="descripcion_add" class="materialize-textarea"></textarea>
                    <label for="descripcion_add">Descripcion:</label>
                </div>
                <div class="input-field col s12 l12">
                    <i class="material-icons prefix">people</i>
                    <textarea id="actores_add" name="actores_add" class="materialize-textarea"></textarea>
                    <label for="actores_add">Actores:</label>
                </div>
                <div class="input-field col s12 l12">
                    <i class="material-icons prefix">insert_link</i>
                    <textarea id="trailer_add" name="trailer_add" class="materialize-textarea"></textarea>
                    <label for="trailer_add">Trailer:</label>
                </div>
                <div class="file-field col s12 l6 input-field">
                    <div class="btn green darken-4">
                        <span>Seleccionar Poster:</span>
                        <input type="file" name="imagen">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="file-field col s12 l6 input-field">
                    <div class="btn orange darken-4">
                        <span>Seleccionar Portada:</span>
                        <input type="file" name="imagen_bg">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <br>
            <center><button class="btn waves-effect waves-light blue darken-4 btn-large" type="submit"
                    name="action">Agregar
                    <i class="material-icons right">send</i>
                </button></center>
            <br><br>
        </form>
    </div>
</div>

<?php
  if(isset($_GET['m'])){
    if ($_GET['m'] == "true") {
      echo "<script>alert('Guardado Correctamente')</script>";
    }else{
    echo "<script>alert('Error al guardar, esto puede ser debido a alguna imagen.')</script>";
    }
  }
  ?>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>