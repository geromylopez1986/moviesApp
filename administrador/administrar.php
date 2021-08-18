<?php
include("../controller/administrador_session.php");
include("../conexion/conexion.php");
include("../model/model_administrar.php");
include("../layout/header_sesion.php");
?>

<br>
<h3 class="titulo-admin white-text right">cPanel (Peliculas) </h3>
<div class="logo-admin">
<img src="../img/logo/cs.png" alt="logo" class="center">
</div>
<div class="row">
    <div class="col s12" style="padding: 0;">
      <ul class="tabs">
        <li class="tab col s1"><a class="active" href="#test1">Peliculas</a></li>
        <li class="tab col s2"><a href="#test2">Ver Online</a></li>
        <li class="tab col s1"><a href="#test3">Login</a></li>
        <li class="tab col s2"><a href="#test4">Comentarios</a></li>
        <li class="tab col s1"><a href="#test13">No User</a></li>
        <li class="tab col s2"><a href="#test7">Soporte</a></li>
        <li class="tab col s1"><a href="#test8">Reportar</a></li>
        <li class="tab col s2"><a href="#test9">Descargas</a></li>
      </ul>
    </div>

    <div id="test1" class="col s12" style="padding: 0;">
      <div class="row">
    <div class="tabla-admin col s12 m12 l12">
    <!--<input type="text" id="search" placeholder="Type to search..." />-->
      <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable">
        <thead>
          <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Subnombre</th>
          <th>Original</th>
          <th>Genero</th>
          <th>Duración</th>
          <th>Publicada</th>
          <th>Año</th>
          <th>Idioma</th>
          <th>Calificación</th>
          <th>Trailer</th>
          <th>Genero Cover</th>
          <th>Estreno</th>
          <th>Opciones 🛠️</th>
          </tr>
        </thead>
        <?php foreach($datos as $items){ ?>

            <tbody class="tbody-admin">
              <tr>
                <td><?=$items['id'];?></td>
                <td><?=$items['nombre'];?></td>
                <td><?=$items['sub_nombre']?></td>
                <td><?=$items['nombre_original']?></td>
                <td><?=$items['genero'];?></td>
                <td><?=$items['duracion_pelicula']?></td>
                <td><?=$items['fecha']?></td>
                <td><?=$items['year_pelicula']?></td>
                <td><?=$items['idioma_pelicula']?></td>
                <td><?=$items['calificacion_pelicula']?></td>
                <td><?=$items['trailer'];?></td>
                <td><?=$items['genero_cover'];?></td>
                <td><?=$items['estreno'];?></td>
                <td class="center" id="gero">
                <a href="<?php echo SERVERURL; ?>administrador/modificar?id=<?=$items['id']?>" class=" material-icons darken-3 blue-text">edit</a>
                <a href="<?php echo SERVERURL; ?>controller/eliminar_PeliculaDatos.php?id=<?=$items['id'];?>" onclick="return eliminar(<?=$items['id'];?>);" class=" darken-3 material-icons red-text">delete</a>
                </td>
              </tr>
            </tbody>
      <?php } ?>
      <div class="col-md-12 center text-center">
      <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="myPager"></ul>
      </div>
        </table>

    </div>
    </div>
    </div>

    <div id="test2" class="col s12" style="padding: 0;">
      <div class="row">
    <div class="tabla-admin col s12 m12 l12">
    <!--<input type="text" id="search" placeholder="Type to search..." />-->
      <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable2">
        <thead>
          <tr>
			        <th>ID</th>
              <th>Nombre Original</th>
			        <th>Nombre Serv 1</th>
              <th>Nombre Serv 2</th>
              <th>Nombre Serv 3</th>
              <th>Servidor 4</th>
              <th>Ver link1</th>
              <th>Ver link2</th>
				      <th>Ver link3</th>
              <th>Ver link4</th>
			        <th>Opciones 🛠️</th>
       			</tr>
        </thead>
        <?php foreach($datos8 as $items){ ?>

            <tbody class="tbody-admin">
              <tr>
                <td><?=$items['id'];?></td>
                <td><?=$items['nombre_original']?></td>
		            <td><?=$items['nombre_serv1'];?></td>
                <td><?=$items['nombre_serv2']?></td>
                <td><?=$items['nombre_serv3']?></td>
                <td><?=$items['nombre_serv4']?></td>
                <td><?=$items['serv_link1']?></td>
                <td><?=$items['serv_link2']?></td>
		            <td><?=$items['serv_link3'];?></td>
                <td><?=$items['serv_link4'];?></td>
                <td class="center" id="gero">
                <a href="<?php echo SERVERURL; ?>administrador/modificar_verOnline.php?id=<?=$items['id']?>" class=" material-icons darken-3 blue-text">edit</a>
                <a href="<?php echo SERVERURL; ?>controller/eliminar_VerOnlineP.php?id=<?=$items['id'];?>"  onclick="return eliminar(<?=$items['id'];?>);" class=" darken-3 material-icons red-text">delete</a>
                </td>
              </tr>
            </tbody>
      <?php } ?>
      <div class="col-md-12 center text-center">
      <span class="left" id="total_reg"></span>
        <ul class="pagination pager" id="myPager2"></ul>
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

<div id="test9" class="col s12" style="padding: 0;">
  <div class="row">
<div class="tabla-admin col s12 m12 l12">
<!--<input type="text" id="search" placeholder="Type to search..." />-->
  <table cellpadding="1" cellspacing="1" class="table table-hover" id="myTable9">
    <thead>
      <tr>
          <th>ID</th>
          <th>Original</th>
          <th>Link1</th>
          <th>Servidor1</th>
          <th>Servidor2</th>
          <th>Servidor3</th>
          <th>Tutorial</th>
          <th>Tutoria2</th>
          <th>Tutoria3</th>
          <th>Icono1</th>
          <th>Icono2</th>
          <th>Icono3</th>
          <th>Idioma1</th>
          <th>Idioma2</th>
          <th>Calidad1</th>
          <th>Calidad2</th>
          <th>Calidad3</th>
          <th>Peso</th>
          <th>Opciones 🛠️</th>
      </tr>
    </thead>
    <?php foreach($datos7 as $descargas){ ?>

        <tbody class="tbody-admin">
          <tr>
            <td><?=$descargas ['id_descarga'];?></td>
            <td><?=$descargas ['nombre_original'];?></td>
            <td><?=$descargas ['link1']?></td>
            <td><?=$descargas ['serv1']?></td>
            <td><?=$descargas ['serv2']?></td>
            <td><?=$descargas ['serv3']?></td>
            <td><?=$descargas ['tutorial1']?></td>
            <td><?=$descargas ['tutorial2']?></td>
            <td><?=$descargas ['tutorial3']?></td>
            <td><?=$descargas ['icon1_name'];?></td>
            <td><?=$descargas ['icon2_name'];?></td>
            <td><?=$descargas ['icon3_name'];?></td>
            <td><?=$descargas ['idioma1'];?></td>
            <td><?=$descargas ['idioma2'];?></td>
            <td><?=$descargas ['calidad1']?></td>
            <td><?=$descargas ['calidad2']?></td>
            <td><?=$descargas ['calidad3']?></td>
            <td><?=$descargas ['peso1']?></td>
            <td class="center" id="gero">
            <a href="<?php echo SERVERURL; ?>administrador/modificar_descargas.php?id=<?=$descargas['id_descarga']?>"  class="material-icons darken-3 blue-text">edit</a>
            <a href="<?php echo SERVERURL; ?>controller/eliminar_LinkDescarga.php?id=<?=$descargas['id_descarga'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="material-icons darken-3 red-text">delete</a>
            </td>
          </tr>
        </tbody>
  <?php } ?>
  <div class="col-md-12 center text-center">
  <span class="left" id="total_reg"></span>
    <ul class="pagination pager" id="myPager9"></ul>
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
