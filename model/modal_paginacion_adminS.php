<?php
//LIMITAR LA CANTIDAD DE PELICULAS QUE APARESCAN EN UNA PAGINA
$pelisXpaginas = 24;

// CONTAR LAS CANTIDAD DE PAGINAS QUE AY POR CADA LIMITE DE PELICULAS
$restult = mysqli_query($mysqli, $sql);
$countPaginas = mysqli_num_rows($restult);
$paginasN = $countPaginas/24;
$paginasN = ceil($paginasN);

$iniciar = ($_GET['seriePage']-1)*$pelisXpaginas;

$serArray ="SELECT * FROM series ORDER BY year DESC LIMIT $iniciar,16 ";
$ser = Conexion::consultar($serArray);


 ?>
