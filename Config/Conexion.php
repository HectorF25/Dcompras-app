<?php

$server = 'localhost'; //Host name
$username = 'root'; //Bd username 
$password = ''; //Bd password
$database = 'imake'; //Bd name


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
} catch (PDOException $e) {
	
	die('Error de conexión: '.$e->getMessage());
}

$link = mysqli_connect("localhost", "root", "", "imake") or die($link);


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

