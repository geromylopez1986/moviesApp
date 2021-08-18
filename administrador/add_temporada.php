<?php include("../conexion/conexion.php"); ?>
<?php include("../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesionadministrador.php"); ?>

<br>
<div class="contenedor bg-dark">
	<h2 class="white-text center">Paso 2 Agregar Temporada</h2>
	<br>
  <div class="row">
		<form method="post">
				<table class="table bg-info"  id="tabla">
					<tr class="fila-fija">
						<td><input required name="NameTemporada[]" placeholder="Temporada:"/></td>
						<td><input required name="nombre_serie[]" placeholder="Nombre Serie:"/></td>
						<td><input required name="capitulo[]" placeholder="Capitulo:"/></td>
						<td class="eliminar btn waves-effect waves-light red darken-4 btn-large"><input type="button"   value="Menos -"/></td>
					</tr>
				</table>

				<div class="btn-der">
					<input type="submit" name="insertar" value="Agregar" class="btn waves-effect waves-light green darken-4 btn-large"/>
					<button id="adicional" name="adicional" type="button" class="btn waves-effect waves-light blue darken-4 btn-large"> Más + </button>

				</div>
			</form>
  </div>

	<?php

					//////////////////////// PRESIONAR EL BOTÓN //////////////////////////
					if(isset($_POST['insertar']))

					{


					$numeroCapitulo = ($_POST['NameTemporada']);
					$nombreSerie = ($_POST['nombre_serie']);
					$Capitulos = ($_POST['capitulo']);

					///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
					while(true) {

					    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
					    $numero = current($numeroCapitulo);
					    $nombreS = current($nombreSerie);
					    $capitulo = current($Capitulos);

					    ////// ASIGNARLOS A VARIABLES ///////////////////
					    $num=(( $numero !== false) ? $numero : ", &nbsp;");
					    $nom=(( $nombreS !== false) ? $nombreS : ", &nbsp;");
					    $cap=(( $capitulo !== false) ? $capitulo : ", &nbsp;");

					    //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
					    $valores='("'.$num.'","'.$nom.'","'.$cap.'"),';

					    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
					    $valoresQ= substr($valores, 0, -1);

					    ///////// QUERY DE INSERCIÓN ////////////////////////////
					    $sql = "INSERT INTO temporadas (temporada, titulo_original, capitulo)
						VALUES $valoresQ";


						$sqlRes=$mysqli->query($sql) or mysql_error();


					    // Up! Next Value
					    $numero = next( $numeroCapitulo );
					    $nombreS = next( $nombreSerie );
					    $capitulo = next( $Capitulos );

					    // Check terminator
					    if($numero === false && $nombreS === false && $capitulo === false) break;

					}

					if (isset($sqlRes)) {
						if ($sqlRes == "true") {
				      echo "<script>alert('Links Guardado Correctamente')</script>";
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
