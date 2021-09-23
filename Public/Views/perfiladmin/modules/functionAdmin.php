<?php

session_start();
$idUsuario = $_SESSION["idUsuario"];
$conex = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conex, 'imake');

$consulta1=mysqli_query($conex,"SELECT SUM(valorTotalPedido) AS ventas FROM pedido");                  
while($filas=mysqli_fetch_array($consulta1)){
     $ventas=$filas['ventas'];                           
}

$consulta2=mysqli_query($conex,"select imgUsuario from usuario where idUsuario = $idUsuario");                  
while($filas=mysqli_fetch_array($consulta2)){
     $img=$filas['imgUsuario'];                           
}
?>