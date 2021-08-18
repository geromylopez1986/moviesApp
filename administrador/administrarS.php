<?php
include("../controller/administrador_session.php");
include("../conexion/conexion.php");
include("../model/model_administrar.php");
include("../layout/header_sesion.php");
?>


<br>
<h3 class="titulo-admin white-text right">cPanel (Series)</h3>
<div class="logo-admin">
<img src="../img/logo/cs.png" alt="logo" class="center">
</div>
<div class="row">
    <div class="col s12" style="padding: 0;">
      <ul class="tabs">
        <li class="tab col s1"><a href="#test5">Series</a></li>
        <li class="tab col s1"><a href="#test00S1">Temp 1 Onlie</a></li>
        <li class="tab col s1"><a href="#test00S2">Temp 2 Onlie</a></li>
        <li class="tab col s1"><a href="#test00S3">Temp 3 Onlie</a></li>
        <li class="tab col s1"><a href="#test10">D-TP1</a></li>
        <li class="tab col s1"><a href="#test11">D-TP2</a></li>
        <li class="tab col s1"><a href="#test12">D-TP3</a></li>
        <li class="tab col s1"><a href="#test3">Login</a></li>
        <li class="tab col s1"><a href="#test4">Comentarios</a></li>
        <li class="tab col s1"><a href="#test13">No User</a></li>
        <li class="tab col s1"><a href="#test7">Soporte</a></li>
        <li class="tab col s1"><a href="#test8">Reportar</a></li>
      </ul>
    </div>

    <div id="test00S1" class="col s12" style="padding: 0;">
      <div class="row">
    <div class="tabla-admin col s12 m12 l12">
    <!--<input type="text" id="search" placeholder="Type to search..." />-->
      <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable00S1">
        <thead>
          <tr>
              <th>ID</th>
              <th>Temporada</th>
              <th>Original</th>
              <th>Capitulo</th>
              <th>Año</th>
              <th>Nombre Capitulo</th>
              <th>Episodeo</th>
              <th>Opciones 🛠️</th>
          </tr>
        </thead>
        <?php foreach($datos00S1 as $capitulos){ ?>

            <tbody class="tbody-admin">
              <tr>
                <td><?=$capitulos['id'];?></td>
                <td><span><?=$capitulos['temporada'];?></span></td>
                <td><span><?=$capitulos['titulo_original'];?></span></td>
                <td><span><?=$capitulos['capitulo'];?></span></td>
                <td><span><?=$capitulos['year'];?></span></td>
                <td><span><?=$capitulos['nombre_cap'];?></span></td>
                <td><span><?=$capitulos['episodeo'];?></span></td>
                <td class="center" id="gero">
                <a href="<?php echo SERVERURL; ?>administrador/modificar_capitulos.php?id=<?=$capitulos['id_series']?>" class="material-icons darken-3 blue-text">edit</a>
                <a href="<?php echo SERVERURL; ?>controller/eliminar_CapitulosSerie.php?id=<?=$capitulos['id_series'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="material-icons darken-3 red-text">delete</a>
                </td>
              </tr>
            </tbody>
      <?php } ?>
      <div class="col-md-12 center text-center">
      <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="myPager00S1"></ul>
      </div>
    </table>
    </div>
    </div>
    </div>

    <div id="test00S2" class="col s12" style="padding: 0;">
      <div class="row">
    <div class="tabla-admin col s12 m12 l12">
    <!--<input type="text" id="search" placeholder="Type to search..." />-->
      <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable00S2">
        <thead>
          <tr>
              <th>ID</th>
              <th>Temporada</th>
              <th>Original</th>
              <th>Capitulo</th>
              <th>Año</th>
              <th>Nombre Capitulo</th>
              <th>Episodeo</th>
              <th>Opciones 🛠️</th>
          </tr>
        </thead>
        <?php foreach($datos00S2 as $capitulos){ ?>

            <tbody class="tbody-admin">
              <tr>
                <td><?=$capitulos['id'];?></td>
                <td><span><?=$capitulos['temporada'];?></span></td>
                <td><span><?=$capitulos['titulo_original'];?></span></td>
                <td><span><?=$capitulos['capitulo'];?></span></td>
                <td><span><?=$capitulos['year'];?></span></td>
                <td><span><?=$capitulos['nombre_cap'];?></span></td>
                <td><span><?=$capitulos['episodeo'];?></span></td>
                <td class="center" id="gero">
                <a href="<?php echo SERVERURL; ?>administrador/modificar_capitulos.php?id=<?=$capitulos['id_series']?>" class="material-icons darken-3 blue-text">edit</a>
                <a href="<?php echo SERVERURL; ?>controller/eliminar_CapitulosSerie.php?id=<?=$capitulos['id_series'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="material-icons darken-3 red-text">delete</a>
                </td>
              </tr>
            </tbody>
      <?php } ?>
      <div class="col-md-12 center text-center">
      <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="myPager00S2"></ul>
      </div>
    </table>
    </div>
    </div>
    </div>

    <div id="test00S3" class="col s12" style="padding: 0;">
      <div class="row">
    <div class="tabla-admin col s12 m12 l12">
    <!--<input type="text" id="search" placeholder="Type to search..." />-->
      <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable00S3">
        <thead>
          <tr>
              <th>ID</th>
              <th>Temporada</th>
              <th>Original</th>
              <th>Capitulo</th>
              <th>Año</th>
              <th>Nombre Capitulo</th>
              <th>Episodeo</th>
              <th>Opciones 🛠️</th>
          </tr>
        </thead>
        <?php foreach($datos00S3 as $capitulos){ ?>

            <tbody class="tbody-admin">
              <tr>
                <td><?=$capitulos['id'];?></td>
                <td><span><?=$capitulos['temporada'];?></span></td>
                <td><span><?=$capitulos['titulo_original'];?></span></td>
                <td><span><?=$capitulos['capitulo'];?></span></td>
                <td><span><?=$capitulos['year'];?></span></td>
                <td><span><?=$capitulos['nombre_cap'];?></span></td>
                <td><span><?=$capitulos['episodeo'];?></span></td>
                <td class="center" id="gero">
                <a href="<?php echo SERVERURL; ?>administrador/modificar_capitulos.php?id=<?=$capitulos['id_series']?>" class="material-icons darken-3 blue-text">edit</a>
                <a href="<?php echo SERVERURL; ?>controller/eliminar_CapitulosSerie.php?id=<?=$capitulos['id_series'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="material-icons darken-3 red-text">delete</a>
                </td>
              </tr>
            </tbody>
      <?php } ?>
      <div class="col-md-12 center text-center">
      <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="myPager00S3"></ul>
      </div>
    </table>
    </div>
    </div>
    </div>

<div id="test3" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable3">
    <thead>
      <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Contraseña</th>
              <th>Imagen User</th>
          <th>Tipo de Usuario</th>
          <th>Opciones ❌</th>
      </tr>
    </thead>
    <?php foreach($datos2 as $items){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$items['id'];?></td>
            <td><?=$items['nombre'];?></td>
            <td><?=$items['correo'];?></td>
            <td><?=$items['contrasena'];?></td>
              <td><?=$items['img_user']?></td>
            <td><?=$items['tipo_usuario'];?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/modificar_usuario.php?id=<?=$items['id']?>" class=" material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_usuario.php?id=<?=$items['id'];?>"  onclick="return eliminar(<?=$items['id'];?>);" class=" darken-3 material-icons red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager3"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test4" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable4">
    <thead>
      <tr>
          <th>ID</th>
          <th>Pelicula ID</th>
          <th>Serie ID</th>
          <th>Comentario</th>
          <th>Fecha</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Opciones ❌</th>
      </tr>
    </thead>
    <?php foreach($datos3 as $items){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$items['id'];?></td>
            <td><?=$items['pelicula_id'];?></td>
            <td><?=$items['serie_id'];?></td>
            <td><?=$items['comentario'];?></td>
            <td><?=$items['fecha'];?></td>
            <td><?=$items['nombre'];?></td>
            <td><?=$items['correo'];?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>controller/eliminar_comentario.php?id=<?=$items['id'];?>"  onclick="return eliminar(<?=$items['id'];?>);" class=" darken-3 material-icons red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager4"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test13" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable13">
    <thead>
      <tr>
          <th>ID</th>
          <th>Pelicula ID</th>
          <th>Serie ID</th>
          <th>Comentario</th>
          <th>Fecha</th>
          <th>Nombre</th>
          <th>Opciones ❌</th>
      </tr>
    </thead>
    <?php foreach($datos13 as $items){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$items['id'];?></td>
            <td><?=$items['NotUser_id'];?></td>
            <td><?=$items['NotUserS_id'];?></td>
            <td><?=$items['mensaje'];?></td>
            <td><?=$items['fechaNoUser'];?></td>
            <td><?=$items['nombre'];?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>controller/eliminar_comentarioNoUser.php?id=<?=$items['id'];?>"  onclick="return eliminar(<?=$items['id'];?>);" class=" darken-3 material-icons red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager13"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test5" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable5">
    <thead>
      <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Original</th>
          <th>Genero</th>
          <th>Duración</th>
          <th>Publicada</th>
          <th>Año</th>
          <th>Calificación</th>
          <th>Trailer</th>
          <th>Director</th>
          <th>Pais</th>
          <th>Opciones 🛠️</th>
        </tr>
    </thead>
    <?php foreach($datos4 as $serie){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$serie['id'];?></td>
            <td><?=$serie['nombre'];?></td>
            <td><?=$serie['nombre_original']?></td>
            <td><?=$serie['genero'];?></td>
            <td><?=$serie['duracion']?></td>
            <td><?=$serie['fecha']?></td>
            <td><?=$serie['year']?></td>
            <td><?=$serie['calificacion']?></td>
            <td><?=$serie['trailer'];?></td>
            <td><?=$serie['director'];?></td>
            <td><?=$serie['pais'];?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/modificar_series.php?id=<?=$serie['id']?>" class="material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_seriesDatos.php?id=<?=$serie['id'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="material-icons darken-3 red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager5"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test7" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable7">
    <thead>
      <tr>
          <th>ID</th>
          <th>Nombre Usuario</th>
          <th>Direción Personal</th>
          <th>Telefono</th>
          <th>Correo Electronico</th>
          <th>Mensaje</th>
          <th>Opciones 🛠️</th>
      </tr>
    </thead>
    <?php foreach($datos6 as $contacto){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$contacto['id'];?></td>
            <td><?=$contacto['nombre'];?></td>
            <td><?=$contacto['direcion']?></td>
            <td><?=$contacto['telefono'];?></td>
            <td><?=$contacto['correo']?></td>
            <td><?=$contacto['mensaje']?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/modificar_contacto.php?id=<?=$contacto['id']?>" class="material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_Soporte.php?id=<?=$contacto['id'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="material-icons darken-3 red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager7"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test8" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable8">
    <thead>
      <tr>
          <th>ID</th>
          <th>Nombre Pelicula</th>
          <th>Servidor Descarga</th>
          <th>Mensaje</th>
          <th>Opciones 🛠️</th>
      </tr>
    </thead>
    <?php foreach($datos9 as $report){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$report['id'];?></td>
            <td><?=$report['nombre_pelicula'];?></td>
            <td><?=$report['servidor_descarga']?></td>
            <td><?=$report['mensaje'];?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/modificar_report.php?id=<?=$report['id']?>"  class="material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_LinkRoto.php?id=<?=$report['id'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="material-icons darken-3 red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager8"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test10" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable10">
    <thead>
      <tr>
          <th>ID</th>
          <th>Temporada</th>
          <th>Servidor</th>
          <th>Idioma</th>
          <th>Calidad</th>
          <th># Capitulo</th>
          <th>Nombre Serie</th>
          <th>Capitulo</th>
          <th>Icono</th>
          <th>Opciones 🛠️</th>
      </tr>
    </thead>
    <?php foreach($datos10 as $teporada1){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$teporada1['id'];?></td>
            <td><?=$teporada1['temporada'] ?></td>
            <td><?=$teporada1['servidor'] ?></td>
            <td><?=$teporada1['idioma'] ?></td>
            <td><?=$teporada1['calidad'] ?></td>
            <td><?=$teporada1['numeroCapitulo'];?></td>
            <td><?=$teporada1['nombre_serie']?></td>
            <td><?=$teporada1['capitulo']?></td>
            <td><?=$teporada1['icono'] ?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/MT1?id=<?=$teporada1['id']?>"  class="material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_CapsDescarga?temp1_id=<?=$teporada1['id'];?>" onclick="return eliminar(<?=$teporada1['id'];?>);" class="material-icons darken-3 red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager10"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test11" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable10">
    <thead>
      <tr>
          <th>ID</th>
          <th>Temporada</th>
          <th>Servidor</th>
          <th>Idioma</th>
          <th>Calidad</th>
          <th># Capitulo</th>
          <th>Nombre Serie</th>
          <th>Capitulo</th>
          <th>Icono</th>
          <th>Opciones 🛠️</th>
      </tr>
    </thead>
    <?php foreach($datos11 as $teporada2){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$teporada2['id'];?></td>
            <td><?=$teporada2['temporada'] ?></td>
            <td><?=$teporada2['servidor'] ?></td>
            <td><?=$teporada2['idioma'] ?></td>
            <td><?=$teporada2['calidad'] ?></td>
            <td><?=$teporada2['numeroCapitulo'];?></td>
            <td><?=$teporada2['nombre_serie']?></td>
            <td><?=$teporada2['capitulo']?></td>
            <td><?=$teporada2['icono'] ?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/MT2?id=<?=$teporada2['id']?>"  class="material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_CapsDescarga?temp2_id=<?=$teporada2['id'];?>" onclick="return eliminar(<?=$teporada2['id'];?>);" class="material-icons darken-3 red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager10"></ul>
  </div>
</table>
</div>
</div>
</div>

<div id="test12" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable10">
    <thead>
      <tr>
          <th>ID</th>
          <th>Temporada</th>
          <th>Servidor</th>
          <th>Idioma</th>
          <th>Calidad</th>
          <th># Capitulo</th>
          <th>Nombre Serie</th>
          <th>Capitulo</th>
          <th>Icono</th>
          <th>Opciones 🛠️</th>
      </tr>
    </thead>
    <?php foreach($datos12 as $teporada3){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$teporada3['id'];?></td>
            <td><?=$teporada3['temporada'] ?></td>
            <td><?=$teporada3['servidor'] ?></td>
            <td><?=$teporada3['idioma'] ?></td>
            <td><?=$teporada3['calidad'] ?></td>
            <td><?=$teporada3['numeroCapitulo'];?></td>
            <td><?=$teporada3['nombre_serie']?></td>
            <td><?=$teporada3['capitulo']?></td>
            <td><?=$teporada3['icono'] ?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/MT3?id=<?=$teporada3['id']?>"  class="material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_CapsDescarga?temp3_id=<?=$teporada3['id'];?>" onclick="return eliminar(<?=$teporada3['id'];?>);" class="material-icons darken-3 red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager10"></ul>
  </div>
</table>
</div>
</div>
</div>

</div><!--FIN DE LA TABLA Y SUS TABLITAS JIJI-->


<script type="text/javascript">


	function eliminar(id){
		if(confirm("Seguro Que deseas eliminar?") == true){
			return true;
		}else{
			return false;
		}
	}



	$(document).ready(function(){
    $('.tabs').tabs();
  });
</script>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>
