<?php

include 'appConfig.php';

try{
	$conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	
	die('Error de conexión: '.$e->getMessage());
}

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error " . mysqli_error($link));; 

class Conexion
{
	public static function Conectar()
	{
		$pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		return $pdo;
	}
	public function get_connection()
	{
		return $this->pdo;
	}
}
