<div class="barra fixel">

    <div class="menu-principal">
    <nav class="navegacion-principal">
        <ul>
          <li class="nav-item active">
            <a class="nav-link" id="color-font" href="<?php echo SERVERURL; ?>peliculas"><i class="fas fa-home"></i><span
                class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item dropdown" id="series">
                <a class="nav-link  dropdown-toggle" id="color-font" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  PELÍCULAS
                </a>
                <div class="dropdown-menu animated fadeInUp fast" id="dropbox-series"
                  aria-labelledby="navbarDropdown">
                  <p class="series-titulo"><i class="fab fa-youtube"></i> SELECIONA UNA CATEGORIA
                    <i class="fab fa-youtube"></i></p>
                    <?php $sql =" SELECT * FROM generos ";
                    $categorias = Conexion::consultar($sql);
                     ?>
                     <?php foreach ($categorias as $categoria): ?>
                  <a class="dropdown animated fadeInLeft slow" href="<?php echo SERVERURL; ?>generoListP/<?=$categoria['nombre_link']?>"
                    id="color-font"><?=$categoria['nombre_genero']?></a>
                    <?php endforeach; ?>
                </div>
            </li>
            <li class="nav-item dropdown" id="series">
              <a class="nav-link  dropdown-toggle" id="color-font" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SERIES
              </a>
              <div class="dropdown-menu animated fadeInDown fast" id="dropbox-series"
                aria-labelledby="navbarDropdown">
                <p class="series-titulo"><i class="fas fa-film"></i> SELECIONA UNA CATEGORIA <i
                    class="fas fa-film"></i></p>
                <?php $sql =" SELECT * FROM generos ";
                  $categorias = Conexion::consultar($sql);
                ?>
                <?php foreach ($categorias as $categoria): ?>
                <a class="dropdown animated fadeInRight slow" href="<?php echo SERVERURL; ?>generoListS/<?=$categoria['nombre_link']?>" id="color-font"><?=$categoria['nombre_genero']?></a>
                <?php endforeach; ?>
              </div>
            </li>
            <li class="nav-item dropdown" id="series">
              <a class="nav-link  dropdown-toggle" id="color-font" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                AÑO
              </a>
              <div class="dropdown-menu animated fadeInUp fast" id="dropbox-series"
                aria-labelledby="navbarDropdown">
                <p class="series-titulo"><i class="fab fa-youtube"></i> SELECIONA UN AÑO
                  <i class="fab fa-youtube"></i></p>
                  <?php $sql =" SELECT * FROM year ORDER BY YEAR DESC LIMIT 9 ";
                    $YEAR = Conexion::consultar($sql);
                  ?>
                  <?php foreach ($YEAR as $year): ?>
                      <a class="dropdown animated fadeInLeft slow" href="<?php echo SERVERURL; ?>generoListY/<?=$year['YEAR']?>" id="color-font"><?=$year['YEAR']?></a>
                  <?php endforeach; ?>
              </div>
            </li>
        </ul>
    </nav>
    </div>

    <div class="media-social">
        <a href="https://twitter.com/Ger0miM" target="_blank" class="twitter"><span><i class="fab fa-twitter"></i></span></a>
        <a href="https://www.facebook.com/groups/514818359143552/" target="_blank" class="facebook"><span><i class="fab fa-facebook-square"></i></span></a>
        <a href="#" target="_blank" class="instagram"><span><i class="fab fa-instagram"></i></span></a>
        <a href="#" target="_blank" class="google-plus"><span><i class="fab fa-google-plus-g"></i></span></a>
        <a href="#" target="_blank"  class="whatsapp"><span><i class="fab fa-whatsapp"></i></span></a>
        <a href="https://www.youtube.com/channel/UCysp8sMPrG1U9QmXbOVtYwA?view_as=subscriber" target="_blank"  class="youtube" hewf="#"><span><i class="fab fa-youtube"></i></span></a>
    </div>

  </div>

  <br>
  <br>
