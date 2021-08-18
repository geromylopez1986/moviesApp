<?php

//Limite por página
$LIMITE_PAGINA = 1;

//determinar la página a mostrar y el inicio
$pagina = $_GET["pagina"];
if (!$pagina) {
   	$inicio = 0;
   	$pagina=1;
}
else {
   	$inicio = ($pagina - 1) * $LIMITE_PAGINA;
}

//calculamos el total de registros que tiene la tabla
$sql = "select * from comentarios where reply = '0' " . $criterio;
$rs = mysql_query($sql);
$total_registros = mysql_num_rows($rs);
//calculo el total de páginas
$total_pag = ceil($total_registros / $LIMITE_PAGINA);

//pongo el número de registros total, el tamaño de página y la página que se muestra
echo "Número de registros encontrados: " . $total_registros . "<br>";
echo "Mostrando la página " . $pagina . " de " . $total_pag . "<p>";

//construyo la sentencia SQL
$sql = "select * from comentarios where reply = '0' order by id desc " . $criterio . " limit " . $inicio . "," . $LIMITE_PAGINA;
$rs = mysql_query($sql);
while ($fila = mysql_fetch_array($rs)){
   	echo $fila['comentario'] . "<br>";
}
//cerramos los resultados y la conexión a la db
mysql_free_result($rs);
mysql_close();


//se muestran los números de páginas existentes, si es que existen
if ($total_pag > 1){
   	for ($j=1;$j<=$total_pag;$j++){
      	if ($pagina == $j)
         	//si muestro el índice de la página actual, no coloco enlace
         	echo $pagina . " ";
      	else
         	//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
         	echo "<a href='paginados.php?pagina=" . $j . "'>" . $j . "</a> ";
   	}
}

 ?>
