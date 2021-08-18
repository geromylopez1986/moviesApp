<div class="box-link">
    <a href="#" class="btn-primary-lg-no-effect">VER SERIE</a>
    <a href="#" class="btn-primary-lg-no-effect">DESCARGAR</a>
  </div>


<div class="box-veronline">
  <?php if (isset($_GET['serie'])): ?>
    <?php foreach ($datos5 as $capitulo) { ?>
    <?php } ?>
    <div class="box-capC">
      <div class="box-capT">
        <h2>Serie Online</h2>
      </div>

    </div>
  <div class="reproductor-cont">
    <?php if (isset($capitulo['temporada1'])): ?>
    <div class="video-container">
    <?php if (isset($capitulo['capitulo1'])): ?>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video1" style="width='100%'; height='100%' "  src="<?= $capitulo['capitulo1']?>" frameborder="0" allowfullscreen></iframe><?php endif; ?>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video2" style="display:none; width='100%'; height='100%' " src="<?= $capitulo['capitulo2']?>" frameborder="0" allowfullscreen></iframe>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video3" style="display:none; width='100%'; height='100%' " src="<?= $capitulo['capitulo3']?>" frameborder="0" allowfullscreen></iframe>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video4" style="display:none; width='100%'; height='100%' " src="<?= $capitulo['capitulo4']?>" frameborder="0" allowfullscreen></iframe>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video5" style="display:none; width='100%'; height='100%' " src="<?= $capitulo['capitulo5']?>" frameborder="0" allowfullscreen></iframe>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video6" style="display:none; width='100%'; height='100%' " src="<?= $capitulo['capitulo6']?>" frameborder="0" allowfullscreen></iframe>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video7" style="display:none; width='100%'; height='100%' " src="<?= $capitulo['capitulo7']?>" frameborder="0" allowfullscreen></iframe>
    <iframe width="853" height="480" scrolling="no" frameborder="0"  id="video8" style="display:none; width='100%'; height='100%' " src="<?= $capitulo['capitulo8']?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="box-capL">
      <div class="box-navegador">
        <navegadorSerie class="lista-cap">
        <ul>
          <li id="tem1"><a><?=$capitulo['temporada1']?> <span><i class="fas fa-list-ul"></i></span></a>
              <ul id="tem1_menu">
                <li class="cap1" id="cap_1"><a>Capitulo: 1</a></li>
                <li class="cap2" id="cap_2"><a>Capitulo: 2</a></li>
                <li class="cap3" id="cap_3"><a>Capitulo: 3</a></li>
                <li class="cap4" id="cap_4"><a>Capitulo: 4</a></li>
                <li class="cap5" id="cap_5"><a>Capitulo: 5</a></li>
                <li class="cap6" id="cap_6"><a>Capitulo: 6</a></li>
                <li class="cap7" id="cap_7"><a>Capitulo: 7</a></li>
                <li class="cap8" id="cap_8"><a>Capitulo: 8</a></li>
              </ul>
            </li>
          </ul>
          <div class="cap_titulos">
                <h5 class="cap_title1">Capitulo: 1</h5>
                <h5 class="cap_title2">Capitulo: 2</h5>
                <h5 class="cap_title3">Capitulo: 3</h5>
                <h5 class="cap_title4">Capitulo: 4</h5>
                <h5 class="cap_title5">Capitulo: 5</h5>
                <h5 class="cap_title6">Capitulo: 6</h5>
                <h5 class="cap_title7">Capitulo: 7</h5>
                <h5 class="cap_title8">Capitulo: 8</h5>
        </div>
        </navegadorSerie>

      </div>
    </div>
  <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
