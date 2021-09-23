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

    <?php

$conexion = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conexion, 'imake');

$tables = array();
$query = mysqli_query($conexion,'SHOW TABLES');
while($row = mysqli_fetch_row($query)){
     $tables[] = $row[0];
}

$result = "";
foreach($tables as $table){
$query = mysqli_query($conexion,'SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($query);

$result .= 'DROP TABLE IF EXISTS '.$table.';';
$row2 = mysqli_fetch_row(mysqli_query($conexion,'SHOW CREATE TABLE '.$table));
$result .= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++) {
while($row = mysqli_fetch_row($query)){
   $result .= 'INSERT INTO '.$table.' VALUES(';
     for($j=0; $j<$num_fields; $j++){
       $row[$j] = addslashes($row[$j]);
       $row[$j] = str_replace("\n","\\n",$row[$j]);
       if(isset($row[$j])){
		   $result .= '"'.$row[$j].'"' ; 
		}else{ 
			$result .= '""';
		}
		if($j<($num_fields-1)){ 
			$result .= ',';
		}
    }
   	$result .= ");\n";
}
}
$result .="\n\n";
}


$folder = 'copias/';
if (!is_dir($folder))
mkdir($folder, 0777, true);
chmod($folder, 0777);
date_default_timezone_set('America/Bogota');
$date = date('d-m-Y_h-i-s'); 
$filename = $folder."DCOMPRAS_backup_".$date; 

$handle = fopen($filename.'.sql','w+');
fwrite($handle,$result);
fclose($handle);

$exito = "Copia de seguridad realizada con exito.";
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
            location.href = '../../Public/Views/perfiladmin/administrador/Backup';
        } else {
            location.href = '../../Public/Views/perfiladmin/administrador/Backup';
        }
          });
        }
        
</script>";  
?>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</body>

</html>