<?php
$sql = " SELECT * FROM comentarios WHERE serie_id = '".$_GET['serie']."' ";
$query = mysqli_query($mysqli, $sql);
$count = mysqli_num_rows($query);

$sql = " SELECT * FROM comentariosnotuser WHERE NotUserS_id = '".$_GET['serie']."' ";
$query = mysqli_query($mysqli, $sql);
$countS = mysqli_num_rows($query);

$countT = $count + $countS;
?>

<h5 class="orange-text">Comentarios <span><?php echo $countT; ?></span></h5>
<div class="divider orange"></div>
<?php include("../model/model_s_agregar_comentario.php");
echo "<div class='grey lighten-5'>";
 ?>
 <?php if (!empty($_GET['serie'])): ?>
 <?php foreach($datos_s as $serie) { ?>
<ul class="collection">
  <li class="collection-item avatar">
    <img src="<?php echo SERVERURL; ?>img/user/<?=$serie['img']?>" alt="" class="circle">
    <span class="title blue-text"><?=$serie['nombre'];?> - <i class="black-text" style="font-size: 13px;">Publicado el: <?=$serie['fecha'];?></i></span>
    <p>- <?=$serie['comentario'];?></p>
  </li>
</ul>
<?php } ?>

<?php foreach($datos_no_user as $serieN) { ?>
<ul class="collection">
 <li class="collection-item avatar">
   <img src="<?php echo SERVERURL; ?>img/user/<?=$serieN['imgNoUser']?>" alt="" class="circle">
   <span class="title blue-text"><?=$serieN['nombre'];?> - <i class="black-text" style="font-size: 13px;">Publicado el: <?=$serieN['fechaNoUser'];?></i></span>
   <p>- <?=$serieN['mensaje'];?></p>
 </li>
</ul>
<?php } ?>
<?php else: ?>
<?php echo "<h2 class='white-text'>No hay comentarios</h2>"; ?>
<?php endif; ?>
<form action="<?php echo SERVERURL; ?>controller/guardar_S_comentario" method="post" style="background-color: #333!important;">
  <div class="form-group">
    <input type="hidden" name="serie_id" value="<?=$_GET['serie'];?>">
     <div class="input-field col s12">
        <textarea id="textarea1" placeholder="Agregar comentario" name="comentario" class="materialize-textarea white-text" required=""></textarea>
      </div>
  </div>
  <br>
  <center>
  <input type="submit" class="btn green darken-4 darken-4" name="" value="Agregar Comentario">
  <br>
  <br>
  </center>
</form>
