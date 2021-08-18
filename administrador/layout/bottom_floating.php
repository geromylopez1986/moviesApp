  <div class="fixed-action-btn">
  <a class="btn-floating btn-large red darken-2 pulse">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a href="<?php echo SERVERURL; ?>administrador/administrar" class="btn-floating green"><i class="material-icons">power_settings_new</i></a></li>
    <li><a href="<?php echo SERVERURL; ?>administrador/administrarS" class="btn-floating red"><i class="material-icons">power_settings_new</i></a></li>
    <li><a href="<?php echo SERVERURL; ?>administrador/add_capitulos" class="btn-floating orange"><i class="material-icons">play_arrow</i></a></li>
    <li><a href="<?php echo SERVERURL; ?>administrador/add_verOnline" class="btn-floating blue"><i class="material-icons">play_arrow</i></a></li>
    <li><a href="<?php echo SERVERURL; ?>administrador/add_cap_descargas" class="btn-floating grey"><i class="material-icons">cloud_download</i></a></li>
    <li><a href="<?php echo SERVERURL; ?>administrador/add_links_descarga" class="btn-floating purple"><i class="material-icons">cloud_download</i></a></li>
    <li><a href="<?php echo SERVERURL; ?>administrador/add_pelicula" class="btn-floating blue"><i class="material-icons">create_new_folder</i></a></li>
    <li><a href="<?php echo SERVERURL; ?>administrador/add_serie" class="btn-floating red"><i class="material-icons">create_new_folder</i></a></li>
  </ul>
</div>

<!--BOTOM FLOTANTE JS-->
<script type="text/javascript">
$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

//options select
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
