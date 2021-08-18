<?php
$mysqli = new mysqli('localhost', 'root', '', 'thepelic_DB');
if ($mysqli->connect_errno){
	die("Error al conectarse con la base de datos " . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');

require_once("config.php");

class Conexion{

public static $obj = null;
public $conn;

public function __construct(){
	$this->conn = mysqli_connect(SERVER,USER,PASS,DATABASE) or die("Error de conexion.");
}

public static function getConexion(){
	if (self::$obj == null) {
		self::$obj = new Conexion();
	}
	return self::$obj->conn;
}


	public function ejecutar($sql){
		$cx = self::getConexion();
		$query = mysqli_query($cx, $sql);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function consultar($sql){
		$cx = self::getConexion();
		$ResultSet = mysqli_query($cx, $sql);
		$resultado = array();
		while ($filas = mysqli_fetch_array($ResultSet)) {
			$resultado[] = $filas;
		}
		return $resultado;
	}

public function __destruct(){
	mysqli_close($this->conn);
}


}



?>
