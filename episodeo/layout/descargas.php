<section class="contenedor-descargas">
        <div class="box-opciones">
            <h2>Servidores de descargas</h2>

        <table class="table table-hover">
        <thead>
        <tr>
            <th width="20%">Lista Capitulos</th>

            <th width="20%">Servidor</th>

            <th width="20%">Idioma</th>

            <th width="20%">Calidad</th>
            <th width="20%">Tutorial</th>
            <th width="20%">Reportar</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($datos4 as $temp_desc1): ?>
      <?php endforeach; ?>
      <?php if (!empty($temp_desc1['temporada'])): ?>
      <tr>
            <td>
            <a id="link1_serie" class="btn btn-xs btn-success" rel="nofollow" target="_blank" style="min-width: 86px;">
                <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> <?=$temp_desc1['temporada'] ?>
            </a>
            </td>
            <td>
                <img src="<?php echo SERVERURL; ?>img/iconos/<?= $temp_desc1['icono']?>.png" title="<?= $temp_desc1['servidor']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
                <span><?= $temp_desc1['servidor']?></span>
            </td>
            <td><?= $temp_desc1['idioma']?></td>
            <td>
                <span class="quality-red">
                <?= $temp_desc1['calidad']?>
            </td>
            <td>
                <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA?view_as=subscriber" class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px;">Tutorial</a>
            </td>
            <td>
                <a href="<?php echo SERVERURL; ?>servidor/<?=$temp_desc1['servidor']?>" class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px;">Reportar</a>
            </td>
        </tr>
      <?php endif; ?><!--PRIMERA DESCARGA DE TEMPORADA 1-->

        <?php foreach ($datos6 as $temp_desc2): ?>
        <?php endforeach; ?>
        <?php if (!empty($temp_desc2['temporada'])): ?>
        <tr>
           <td>
           <a id="link2_serie" class="btn btn-xs btn-success" rel="nofollow" target="_blank" style="min-width: 86px;">
               <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> <?=$temp_desc2['temporada'] ?>
           </a>
           </td>
           <td>
               <img src="<?php echo SERVERURL; ?>img/iconos/<?= $temp_desc2['icono']?>.png" title="<?= $temp_desc2['servidor']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
               <span><?= $temp_desc2['servidor']?></span>
           </td>
           <td>
           <?= $temp_desc2['idioma']?>
           </td>
           <td>
               <span class="quality-red">
               <?= $temp_desc2['calidad']?>
           </td>
           <td>
               <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA?view_as=subscriber" class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px;">Tutorial</a>
           </td>
           <td>
               <a href="<?php echo SERVERURL; ?>servidor/<?=$temp_desc2['servidor']?>" class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px;">Reportar</a>
           </td>
           </tr>
         <?php endif; ?><!--SEGUNDA DESCARGA DE TEMPORADA 2-->

           <?php foreach ($datos8 as $temp_desc3): ?>
           <?php endforeach; ?>
           <?php if (!empty($temp_desc3['temporada'])): ?>
           <tr>
            <td>
            <a id="link3_serie" class="btn btn-xs btn-success" rel="nofollow" target="_blank" style="min-width: 86px;">
                <span style="margin-right: 2px;" class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> <?=$temp_desc3['temporada'] ?>
            </a>
            </td>
            <td>
                <img src="<?php echo SERVERURL; ?>img/iconos/<?= $temp_desc3['icono']?>.png" title="<?= $temp_desc3['servidor']?>" style="margin: 0 3px 0 0;width:16px;height:16px">
                <span><?= $temp_desc3['servidor']?></span>
            </td>
            <td>
            <?= $temp_desc3['idioma']?>
            </td>
            <td>
                <span class="quality-red">
                <?= $temp_desc3['calidad']?>
            </td>
            <td>
                <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA?view_as=subscriber" class="btn btn-xs btn-primary open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px;">Tutorial</a>
            </td>
            <td>
                <a href="<?php echo SERVERURL; ?>servidor/<?=$temp_desc3['servidor']?>" class="btn btn-xs btn-danger open-video-inst" rel="nofollow" target="_blank" style="min-width: 86px;">Reportar</a>
            </td>
        </tr>
      <?php endif; ?><!--TERCERA DESCARGA DE TEMPORADA 3-->

  </tbody>
    </table>
    <navegador class="navegador-desc_cap">
      <ul class="lista-cap 1">
        <?php foreach ($datos4 as $linkS): ?>
        <a href="<?=$linkS['capitulo']?>" target="_blank"><li>CAPITULO: <?=$linkS['numeroCapitulo']?> <img src="<?php echo SERVERURL; ?>img/iconos/<?php echo $linkS['icono']; ?>.png" style="width: 24px" alt=""> </li></a>
        <?php endforeach; ?>
      </ul>
    </navegador>
    <navegador class="navegador-desc_cap">
      <ul class="lista-cap 2">
        <?php foreach ($datos6 as $linkS): ?>
        <a href="<?=$linkS['capitulo']?>" target="_blank"><li>CAPITULO: <?=$linkS['numeroCapitulo']?> <img src="<?php echo SERVERURL; ?>img/iconos/<?php echo $linkS['icono']; ?>.png" style="width: 24px" alt=""> </li></a>
        <?php endforeach; ?>
      </ul>
    </navegador>
    <navegador class="navegador-desc_cap">
      <ul class="lista-cap 3">
        <?php foreach ($datos8 as $linkS): ?>
        <a href="<?=$linkS['capitulo']?>" target="_blank"><li>CAPITULO: <?=$linkS['numeroCapitulo']?> <img src="<?php echo SERVERURL; ?>img/iconos/<?php echo $linkS['icono']; ?>.png" style="width: 24px" alt=""> </li></a>
        <?php endforeach; ?>
      </ul>
    </navegador>
  </div>

</section>
