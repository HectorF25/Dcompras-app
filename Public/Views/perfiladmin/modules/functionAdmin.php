<?php

session_start();

$idUsuario = $_SESSION["idUsuario"];
$conex = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
mysqli_select_db($conex, DB_NAME);

$consulta1=mysqli_query($conex,"SELECT SUM(valorTotalPedido) AS ventas FROM pedido");                  
while($filas=mysqli_fetch_array($consulta1)){
     $ventas=$filas['ventas'];                           
}

$consulta2=mysqli_query($conex,"SELECT imgUsuario FROM usuario WHERE idUsuario = $idUsuario");                  
while($filas=mysqli_fetch_array($consulta2)){
     $img=$filas['imgUsuario'];                           
}
?>