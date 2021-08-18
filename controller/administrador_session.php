<?php

session_start();

if (isset($_SESSION['usuario'])){
	if ($_SESSION['usuario']['tipo_usuario'] != "admin"){
		header('Location: ../usuario/peliculas_session');
	}
}else{
	header('Location: ../iniciar_sesion');
}

?>
