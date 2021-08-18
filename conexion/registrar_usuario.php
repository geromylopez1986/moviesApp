<?php

$opciones = [
    'cost' => 12,
];

//INCLUYENDO LA CONEXION
include 'conexion.php';

//RECIBIR DATOS Y ALMACENARLOS EN VARIABLES
$nombre = $_REQUEST["nom"];
$correo = $_REQUEST["correoo"];
$contrasena = $_REQUEST["contra"];
$imagen = "usuario.png";
$tipo_usuario = "user";
$fecha = date("Y-m-d");

$nombre = mysqli_real_escape_string($mysqli, $nombre);
$correo = mysqli_real_escape_string($mysqli, $correo);
$pass = mysqli_real_escape_string($mysqli, $contrasena);
// $pass = password_hash($contrasena, PASSWORD_BCRYPT, $opciones);


//CONSULTA PARA INSERTAR REGISTROS DE USUARIOS
$sql = "INSERT INTO login (nombre, correo, contrasena, img_user, tipo_usuario, fecha)
			VALUES ('".$nombre."', '".$correo."', '".$pass."', '".$imagen."', '".$tipo_usuario."', '".$fecha."')";

//CONFIRMANDO SI NO EXISTE OTRO CORREO IGUAL
$verificar = mysqli_query($mysqli, "SELECT * FROM login WHERE correo = '".$correo."'");
if (mysqli_num_rows($verificar) > 0) {
	echo '<script>
	alert("Este correo ya se encuentra registrado");
	window.history.go(-1);
	</script>';
	exit;
}


//EJECUTAR CONSULTA
$Validar = mysqli_query($mysqli, $sql);

if(isset($Validar)){
	//echo 'good';
echo "<script>alert('Ya Estas Registrado Bienvenido..');window.location= '../iniciar_sesion'</script>";

}else{
	//echo 'bad';
	header('Location: registrate');
}

?>
