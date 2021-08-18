<div class="contenedor-comentario">

    <div class="header-comentarios">
      <div class="title-comentarios">
      <h5 class="orange-text">Comentarios <span><?php echo $countT; ?></span></h5>
      </div>
      <div class="login-comentarios">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Not User <i class="fas fa-user-slash"></i></button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="aviso-coment">
            <span><b>Aviso importante!</b> los comentarios que realizes como <br> (No User) se van a publicar en la parte inferior de los comentarios, y no tiene relacion con no ser <b>usuario</b>
              ya que el sistema asi esta diseñado Admin <a href="#">thepelicuas.com</a>
            </span>
            </div>
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Agregar Comentario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo SERVERURL; ?>controller/guardar_comentario" method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="notUserName" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" name="notUserComent" id="message-text"></textarea>
                </div>

            <div class="modal-footer">
              <input type="hidden" name="NotUserS_id" value="<?=$_GET['serie'];?>">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Enviar Comentario</button>
            </div>
          </form>
        </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  		<div class="divider orange"></div>