<?php
include './Connet.php';
$restorePoint=SGBD::limpiarCadena($_POST['restorePoint']);
$sql=explode(";",file_get_contents($restorePoint));
$totalErrors=0;
for($i = 0; $i < (count($sql)-1); $i++){
    if(SGBD::sql("$sql[$i];")){  }else{ $totalErrors++; }
}
if($totalErrors<=0){
    $exito = "Restauracion de la Base de Datos Realizada con Exito.";
echo "<script> window.addEventListener('load', init, false);
function init () {
    Swal.fire({
        title: '¡Genial!',
        text: '$exito',
        icon: 'success',
        buttons: true,
        dangerMode: true,
        }).then((willDelete) => {
        if (willDelete) {
            location.href = '../../Public/Views/perfiladmin/administrador/index.php?c=administrador&a=backup';
        } else {
            location.href = '../../Public/Views/perfiladmin/administrador/index.php?c=administrador&a=backup';
        }
          });
        }
        </script>";  
}else{
    $error = "No se ha podido realizar la restauracion de la Base de Datos.";
    echo "<script> window.addEventListener('load', init, false);
    function init () {
        Swal.fire({
            title: '¡Genial!',
            text: '$error',
            icon: 'error',
            buttons: true,
            dangerMode: true,
            }).then((willDelete) => {
            if (willDelete) {
                location.href = '../../Public/Views/perfiladmin/administrador/index.php?c=administrador&a=backup';
            } else {
                location.href = '../../Public/Views/perfiladmin/administrador/index.php?c=administrador&a=backup';
            }
              });
            }
            </script>"; 
}

?>
<html>

<head>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    * {
        font-family: "Poppins";
    }
    </style>

</head>

<body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</body>

</html>