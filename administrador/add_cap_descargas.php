<?php include("../controller/administrador_session.php"); ?>
<?php include("../conexion/conexion.php"); ?>
<?php include("../layout/header_sesionadministrador.php"); ?>

<br>
<div class="contenedor bg-dark">
    <h2 class="white-text center">Paso Final Agregar Descargas de Capitulos</h2>
    <br>
    <div class="row formulario-linksS">
        <form method="post">
            <table class="table bg-info" id="tabla">
                <tr class="fila-fija">
                    <td><input required name="temporada[]" placeholder="Temporada:" /></td>
                    <td><input required name="servidor[]" placeholder="Servidor:" /></td>
                    <td><input required name="idioma[]" placeholder="Idioma:" /></td>
                    <td><input required name="calidad[]" placeholder="Calidad:" /></td>
                    <td><input required name="numeroCapitulo[]" placeholder="Numero Capitulo:" /></td>
                    <td><input required name="nombre_serie[]" placeholder="Nombre Serie:" /></td>
                    <td><input required name="capitulo[]" placeholder="Capitulo:" /></td>
                    <td><input required name="icono[]" placeholder="Icono Servidor:" /></td>
                    <td class="eliminar btn waves-effect waves-light red darken-4 btn-large"><input type="button"
                            value="Menos -" /></td>
                </tr>
            </table>

            <div class="btn-der">
                <input type="submit" name="insertar" value="Agregar"
                    class="btn waves-effect waves-light green darken-4 btn-large" />
                <button id="adicional" name="adicional" type="button"
                    class="btn waves-effect waves-light blue darken-4 btn-large"> Más + </button>

            </div>
        </form>
    </div>

    <?php

					//////////////////////// PRESIONAR EL BOTÓN //////////////////////////
					if(isset($_POST['insertar']))

					{

					$temporada = ($_POST['temporada']);
					$servidor = ($_POST['servidor']);
					$idioma = ($_POST['idioma']);
					$calidad = ($_POST['calidad']);
					$numeroCapitulo = ($_POST['numeroCapitulo']);
					$nombreSerie = ($_POST['nombre_serie']);
					$Capitulos = ($_POST['capitulo']);
					$iconos = ($_POST['icono']);

					///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
					while(true) {

					    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
							$temp = current($temporada);
					    $serv = current($servidor);
							$leng = current($idioma);
					    $calid = current($calidad);
							$numero = current($numeroCapitulo);
					    $nombreS = current($nombreSerie);
					    $capitulo = current($Capitulos);
							$icono = current($iconos);

					    ////// ASIGNARLOS A VARIABLES ///////////////////
							$tem=(( $temp !== false) ? $temp : ", &nbsp;");
					    $ser=(( $serv !== false) ? $serv : ", &nbsp;");
							$len=(( $leng !== false) ? $leng : ", &nbsp;");
					    $cal=(( $calid !== false) ? $calid : ", &nbsp;");
					    $num=(( $numero !== false) ? $numero : ", &nbsp;");
					    $nom=(( $nombreS !== false) ? $nombreS : ", &nbsp;");
					    $cap=(( $capitulo !== false) ? $capitulo : ", &nbsp;");
							$icon=(( $icono !== false) ? $icono : ", &nbsp;");

					    //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
					    $valores='("'.$tem.'","'.$ser.'","'.$len.'","'.$cal.'","'.$num.'","'.$nom.'","'.$cap.'","'.$icon.'"),';

					    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
						$valoresQ= substr($valores, 0, -1);

					    ///////// QUERY DE INSERCIÓN ////////////////////////////
					  if ($tem == "Temporada 1") {
								$sql = "INSERT INTO temporada1_descarga (temporada, servidor, idioma, calidad, numeroCapitulo, nombre_serie, capitulo, icono)
							VALUES $valoresQ";
						}elseif ($temp == "Temporada 2") {
							$sql = "INSERT INTO temporada2_descarga (temporada, servidor, idioma, calidad, numeroCapitulo, nombre_serie, capitulo, icono)
						VALUES $valoresQ";
						}elseif ($temp == "Temporada 3") {
							$sql = "INSERT INTO temporada3_descarga (temporada, servidor, idioma, calidad, numeroCapitulo, nombre_serie, capitulo, icono)
						VALUES $valoresQ";
					}else {
						echo "<script>alert('datos SQL no encontrado')</script>";
						break;
					}


						$sqlRes=$mysqli->query($sql) or mysql_error();


					    // Up! Next Value
							$temp = next( $temporada );
					    $serv = next( $servidor );
							$leng = next( $idioma );
					    $calid = next( $calidad );
					    $numero = next( $numeroCapitulo );
					    $nombreS = next( $nombreSerie );
					    $capitulo = next( $Capitulos );
							$icono = next( $iconos );

					    // Check terminator
					    if($temp === false && $serv === false && $leng === false && $calid === false && $numero === false && $nombreS === false && $capitulo === false && $icono === false) break;

					}

					if (isset($sqlRes)) {
						if ($sqlRes == "true") {
				      /* echo "<script>alert('Links Guardado Correctamente')</script>"; */
							header("Location: ../controller/validar?s=true");
				    }else{
				    echo "<script>alert('Error al guardar, esto puede ser debido a su conexion.')</script>";
				    }
					}

					}

				?>

</div>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>
