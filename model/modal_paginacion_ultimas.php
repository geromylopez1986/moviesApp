<?php
//LIMITAR LA CANTIDAD DE PELICULAS QUE APARESCAN EN UNA PAGINA
$pelisXpaginas = 24;

// CONTAR LAS CANTIDAD DE PAGINAS QUE AY POR CADA LIMITE DE PELICULAS
$restult = mysqli_query($mysqli, $sql);
$countPaginas = mysqli_num_rows($restult);
$paginasN = $countPaginas/24;
$paginasN = ceil($paginasN);

$iniciar = ($_GET['categoria_ultimas']-1)*$pelisXpaginas;


$pelisArray ="SELECT * FROM peliculas ORDER BY year_pelicula DESC LIMIT $iniciar,24 ";
$pelis = Conexion::consultar($pelisArray);


 ?>
