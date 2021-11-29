<?php
require_once '../../../../App/backup/Connet.php';
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-database menu-icon"></i>
                </span> Copias de seguridad
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Base de datos<i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crear copia de seguridad</h4><br>
                        <form class="forms-sample" action="../../../../App/backup/backup" method="post">
                            <!--Fin del Segundo Row !-->
                            <div class="col-md-4 mx-auto text-center">
                                <img src="../assets/images/db.png" class="center-block">
                            </div>
                            <br><br>
                            <center><input type="submit" name="copia" class="btn btn-gradient-primary mr-2"
                                    value="Realizar Copia de Seguridad" /></center>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Restaurar copia de seguridad</h4>

                        <form class="forms-sample" action="../../../../App/backup/restore" method="POST">
                            <label>Selecciona un punto de restauración</label>
                            <select name="restorePoint" class="form-control form-control-lg" required="true">
                                <option value="" disabled="" selected="">Selecciona un punto de restauración</option>
                                <?php
                $ruta="../../../../App/backup/".BACKUP_PATH;
                if(is_dir($ruta)){
                    if($aux=opendir($ruta)){
                        while(($archivo = readdir($aux)) !== false){
                            if($archivo!="."&&$archivo!=".."){
                                $nombrearchivo=str_replace(".sql", "", $archivo);
                                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
                                $ruta_completa=$ruta.$archivo;
                                if(is_dir($ruta_completa)){
                                }else{
                                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
                                }
                            }
                        }
                        closedir($aux);
                    }
                }else{
                    echo $ruta." No es ruta válida";
                }
            ?>
                            </select>
                            <br><br><br><br><br><br>
                            <center><button type="submit" class="btn btn-gradient-primary mr-2">Restaurar</button></center>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

