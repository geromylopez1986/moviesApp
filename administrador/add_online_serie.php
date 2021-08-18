<?php include("../controller/administrador_session.php"); ?>
<?php include("../conexion/conexion.php"); ?>
<?php include("../layout/header_sesionadministrador.php"); ?>

<br>
<div class="contenedor bg-dark">
    <h2 class="white-text center">Agregar Temporada Online 1</h2>
    <br>
    <div class="row">
        <form method="post">
            <table class="table bg-info" id="tabla">
                <tr class="fila-fija">
                    <td><input required name="temporada[]" placeholder="Temporada:" /></td>
                    <td><input required name="original[]" placeholder="Nombre Serie:" /></td>
                    <td><input required name="capitulo[]" placeholder="Capitulo:" /></td>
                    <td><input required name="year[]" placeholder="Año:" /></td>
                    <td><input required name="preview[]" placeholder="Preview:" /></td>
                    <td><input required name="nombrecapitulo[]" placeholder="Nombre Capitulo:" /></td>
                    <td><input required name="episodeo[]" placeholder="Episodeo:" /></td>
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
					$original = ($_POST['original']);
					$capitulo = ($_POST['capitulo']);
					$year = ($_POST['year']);
					$preview = ($_POST['preview']);
          $nombrecapitulo = ($_POST['nombrecapitulo']);
					$episodeo = ($_POST['episodeo']);

					///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
					while(true) {

					    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
							$temp = current($temporada);
					    $origi = current($original);
							$cap = current($capitulo);
					    $yea = current($year);
							$prev = current($preview);
              $nombre = current($nombrecapitulo);
					    $episo = current($episodeo);

					    ////// ASIGNARLOS A VARIABLES ///////////////////
							$tem=(( $temp !== false) ? $temp : ", &nbsp;");
					    $ori=(( $origi !== false) ? $origi : ", &nbsp;");
							$cap=(( $cap !== false) ? $cap : ", &nbsp;");
					    $ye=(( $yea !== false) ? $yea : ", &nbsp;");
					    $view=(( $prev !== false) ? $prev : ", &nbsp;");
              $nomcap=(( $nombre !== false) ? $nombre : ", &nbsp;");
					    $epis=(( $episo !== false) ? $episo : ", &nbsp;");

					    //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
					    $valores='("'.$tem.'","'.$ori.'","'.$cap.'","'.$ye.'","'.$view.'","'.$epis.'","'.$nomcap.'"),';

					    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
					    $valoresQ= substr($valores, 0, -1);

					    ///////// QUERY DE INSERCIÓN ////////////////////////////
					  if ($tem == "Temporada: 1") {
								$sql = "INSERT INTO temponline1 (temporada, titulo_original, capitulo, year, preview, nombre_cap, episodeo)
							VALUES $valoresQ";
						}elseif ($temp == "Temporada: 2") {
							$sql = "INSERT INTO temponline2 (temporada, titulo_original, capitulo, year, preview, nombre_cap, episodeo)
						VALUES $valoresQ";
          }elseif ($temp == "Temporada: 3") {
							$sql = "INSERT INTO temponline3 (temporada, titulo_original, capitulo, year, preview, nombre_cap, episodeo)
						VALUES $valoresQ";
					}else {
						echo "<script>alert('datos SQL no encontrado')</script>";
						break;
					}


						$sqlRes=$mysqli->query($sql) or mysql_error();


					    // Up! Next Value
							$temp = next( $temporada );
					    $origi = next( $original );
							$cap = next( $capitulo );
					    $yea = next( $year );
					    $view = next( $preview );
              $nom = next( $nombrecapitulo );
					    $epis = next( $episodeo );

					    // Check terminator
					    if($temp === false && $origi === false && $cap === false && $yea === false && $view === false && $nom === false && $epis === false) break;

					}

					if (isset($sqlRes)) {
						if ($sqlRes == "true") {
				      echo "<script>alert('Links Guardado Correctamente')</script>";
							header("Location: ../controller/validar?s=true");
				    }else{
				    echo "<script>alert('Error ALL guardar, esto puede ser debido a su conexion.')</script>";
				    }
					}

					}

				?>

</div>


<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>