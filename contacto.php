<?php $page = 'contacto'; include("layout/header.php"); ?>

<div class="imagen_contacto" style="padding: 10px;">
<div class="container">
<center> <a href="index"><img style="margin: 15px; background:#dd1818; padding:.5rem; " src="img/logo/logo.png" alt=""></a></center>
<div class="contacto-box container black lighten-1" style="padding: 10px;">
  <center>
<h3 class="gm_txt1 white-text">¡Contactenos!</h3>
</center>
		 <div class="row gm_bg1">
    <form class="col l6 s12" method="post" action="controller/guardar_contacto.php" enctype="multipart/form-data" id="add_contacto">
      <div class="row">
        <div class="input-field col s11">
          <i class="fas fa-user prefix iconWhite"></i>
          <input id="icon_prefix user_add" name="user_add" type="text" class="validate" required="">
          <label for="icon_prefix user_add">Nombre *</label>
        </div>
        <div class="input-field col s11">
          <i class="fas fa-map-marker-alt prefix iconWhite"></i>
          <input id="icon_prefi direcion_add" name="direcion_add" type="text" class="validate">
          <label for="icon_prefi direcion_add">Direccion (Opcional)</label>
        </div>
        <div class="input-field col s11">
          <i class="fas fa-phone prefix iconWhite"></i>
          <input id="icon_telephone telefono_add" name="telefono_add" type="tel" class="validate">
          <label for="icon_telephone telefono_add">Telefono (Opcional)</label>
        </div>
        <div class="input-field col s11">
          <i class="fas fa-inbox prefix iconWhite"></i>
          <input id="email email_add" name="email_add" type="email" class="validate" required="">
          <label for="email email_add">Email *</label>
        </div>
        <div class="input-field col s11">
          <i class="fas fa-file prefix iconWhite"></i>
          <textarea id="textarea1 mensaje_add" name="mensaje_add" class="materialize-textarea"></textarea>
          <label for="textarea1">Mensaje</label>
        </div>
      </div>
    <center>
      <p><button  id="ver" class="btn modal-trigger green darken-4" type="submit" name="action"><i class="material-icons right">send</i>Enviar</button></p>

    </center>
    </form>
    <br><br>
      <div class="col l6 s12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.5424747638887!2d-98.18847687533713!3d19.00474278538434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbfaf4f9d2d4f%3A0xa7998fe27c27b09b!2sLa%20Margarita%20Puebla!5e0!3m2!1ses-419!2smx!4v1578075598157!5m2!1ses-419!2smx" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

  </div>

</div>
</div>
<br>
</div>


<?php include("layout/footer.php") ?>
