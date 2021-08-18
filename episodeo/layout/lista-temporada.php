<?php foreach ($tempOnline1 as $temp1): ?><?php endforeach; ?>
<?php foreach ($tempOnline2 as $temp2): ?><?php endforeach; ?>
<?php foreach ($tempOnline3 as $temp3): ?><?php endforeach; ?>

<section class="container contenedor-serie-online">
    <?php if (!empty($temp1['temporada'])): ?>
    <header class="desplegar-menu">
        <div class="nombre-temp">
            <a id="list-open">Temporada: 1</a>
        </div>
        <div class="icono-action">
            <a id="list-openI"><i class="fas fa-list-ul"></i></a>
            <a id="list-close"><i class="far fa-window-close"></i></a>
        </div>
    </header>
    <div class="menu-caps">
        <div class="tabla-listado" id="list-tabla">
            <table class="cap_table">
                <?php foreach ($tempOnline1 as $episodeo) { ?>
                <tbody class="body_cap">
                    <tr>
                        <td><?=$episodeo['nombre_cap']; ?></td>
                        <td><img class="preview" src="<?php echo SERVERURL; ?>img/preview/<?=$episodeo['preview']; ?>"
                                alt="<?=$episodeo['episodeo']; ?>"></td>
                        <td><a
                                href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><?=$episodeo['episodeo']; ?></a><br>
                            <span><?=$episodeo['year']; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="cap-play"><a
                                href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><i
                                    class="far fa-play-circle"></i></a></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

    </div>
    <?php endif; ?>
    <br>
    <?php if (!empty($temp2['temporada'])): ?>
    <div class="menu-caps">
        <header class="desplegar-menu">
            <div class="nombre-temp">
                <a id="list-open2">Temporada: 2</a>
            </div>
            <div class="icono-action">
                <a id="list-openI2"><i class="fas fa-list-ul"></i></a>
                <a id="list-close2"><i class="far fa-window-close"></i></a>
            </div>
        </header>
        <div class="tabla-listado" id="list-tabla2">
            <table class="cap_table">
                <?php foreach ($tempOnline2 as $episodeo) { ?>
                <tbody class="body_cap">
                    <tr>
                        <td><?=$episodeo['nombre_cap']; ?></td>
                        <td><img class="preview" src="<?php echo SERVERURL; ?>img/preview/<?=$episodeo['preview']; ?>"
                                alt="<?=$episodeo['episodeo']; ?>"></td>
                        <td><a
                                href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><?=$episodeo['episodeo']; ?></a><br>
                            <span><?=$episodeo['year']; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="cap-play"><a
                                href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><i
                                    class="far fa-play-circle"></i></a></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

    </div>
    <?php endif; ?>
    <br>
    <?php if (!empty($temp3['temporada'])): ?>
    <div class="menu-caps">
        <header class="desplegar-menu">
            <div class="nombre-temp">
                <a id="list-open3">Temporada: 3</a>
            </div>
            <div class="icono-action">
                <a id="list-openI3"><i class="fas fa-list-ul"></i></a>
                <a id="list-close3"><i class="far fa-window-close"></i></a>
            </div>
        </header>
        <div class="tabla-listado" id="list-tabla3">
            <table class="cap_table">
                <?php foreach ($tempOnline3 as $episodeo) { ?>
                <tbody class="body_cap">
                    <tr>
                        <td><?=$episodeo['nombre_cap']; ?></td>
                        <td><img class="preview" src="<?php echo SERVERURL; ?>img/preview/<?=$episodeo['preview']; ?>"
                                alt="<?=$episodeo['episodeo']; ?>"></td>
                        <td><a
                                href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><?=$episodeo['episodeo']; ?></a><br>
                            <span><?=$episodeo['year']; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="cap-play"><a
                                href="<?php echo SERVERURL; ?>episodeo/<?=$episodeo['titulo_original']; ?>/<?=$episodeo['nombre_cap']; ?>"><i
                                    class="far fa-play-circle"></i></a></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

    </div>
    <?php endif; ?>
</section>