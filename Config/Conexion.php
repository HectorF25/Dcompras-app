<?php
class Conexion
{
	public static function Conectar()
	{
		$pdo = new PDO('mysql:host=localhost;dbname=imake;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		return $pdo;
	}
	public function get_connection()
	{
		return $this->pdo;
	}
}
/* function ejecutarConsulta($sql)
{
	global $pdo;
	$query = $pdo->query($sql);
	return $query;
}
function ejecutarConsultaLista($sql)
{
	global $pdo;
	$query = $pdo->query($sql);
	$value = mysqli_fetch_object($query);
	return $value;
}
function limpiarCadena($str)
{
	global $pdo;
	$str = mysqli_real_escape_string($pdo, trim($str));
	return htmlspecialchars($str);
} */
