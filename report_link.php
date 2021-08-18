<?php $page = 'contacto'; include("layout/header.php"); ?>
<?php include("conexion/conexion.php") ?>

<div class="imagen_contacto" style="padding: 10px;">
<div class="container">
<center> <a href="<?php echo SERVERURL; ?>peliculas"><img style="margin: 15px; background:#dd1818; padding:.5rem; " src="<?php echo SERVERURL; ?>img/logo/logo.png" alt=""></a></center>
<div class="contacto-box container black lighten-1" style="padding: 10px;">
  <center>
<h3 class="gm_txt1 white-text">Reportar Link!</h3>
</center>
		 <div class="row gm_bg1">
    <form class="col l6 s12" method="post" action="<?php echo SERVERURL; ?>controller/guardar_report_link" enctype="multipart/form-data" id="add_reporte">
      <div class="row">
        <div class="input-field col s11">
          <i class="fas fa-film prefix iconWhite"></i>
          <input id="icon_prefix user_add" name="nombre_pelicula" type="text" class="validate" required="">
          <label for="icon_prefix user_add">Nombre Pelicula *</label>
        </div>
        <div class="input-field col s11">
          <i class="fas fa-server prefix iconWhite"></i>
          <input id="email email_add" name="servidor_descarga" type="text" class="validate" required="">
          <label for="email email_add">Servidor *</label>
        </div>
        <div class="input-field col s11">
          <i class="fas fa-file prefix iconWhite"></i>
          <textarea id="textarea1 mensaje_add" name="mensaje" class="materialize-textarea"></textarea>
          <label for="textarea1">Mensaje</label>
        </div>
      </div>
      <br>
      <br>
    <center>
      <p><button  id="ver" class="btn modal-trigger green darken-4" type="submit" name="action"><i class="material-icons right">send</i>Enviar</button></p>

    </center>
    </form>
    <br><br>
      <div class="col l6 s12">
        <img src="<?php echo SERVERURL; ?>img/report/link_roto.jpg" width="100%" alt="">
      </div>

  </div>

</div>
</div>
<br>
</div>


<?php include("layout/footer.php") ?>
