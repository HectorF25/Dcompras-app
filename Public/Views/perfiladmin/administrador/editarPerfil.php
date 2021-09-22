<?php

$idUsuario = $_SESSION["idUsuario"];
$nombreUsuario = $_SESSION["nombreUsuario"];
$apellidoUsuario = $_SESSION["apellidoUsuario"];
$nombrePerfilUsuario = $_SESSION["nombrePerfilUsuario"];
$imgUsuario = $_SESSION["imgUsuario"];
$correoUsuario = $_SESSION['correo'];
if (!isset($correoUsuario)) {
    echo '<script type="text/javascript">
    alert("La pagina a la cual intenta acceder requiere haber iniciado sesion previamente");
    window.location.href="../../index";
    </script>';
} else {
    $conexion = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conexion, 'imake');	 
    $consulta=mysqli_query($conexion,"select imgUsuario from usuario where idUsuario = $idUsuario");                  
    while($filas=mysqli_fetch_array($consulta)){
         $img=$filas['imgUsuario'];                           
}
}
/*
$sesion = true;

if($sesion){
$codigo = 6;


*/
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-contacts menu-icon"></i>
                </span> Personalización
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Perfil de usuario<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
    </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-small mb-4" style="height: 610;">
                    <div class="card-header border-bottom text-center">
                        <center>
                            <div class="mb-3 mx-auto">
                                <img class="rounded-circle" src=".<?php echo $img ?>" alt="User Avatar" width="110">
                            </div>
                            <h4 class="mb-0"><?php echo $administradores->nombreUsuario . " " . $administradores->apellidoUsuario ?></h4>
                            <span class="text-muted d-block mb-2"><?php echo strtolower($administradores->correoUsuario); ?></span>
                            <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primaryy mr-2"><?php echo $administradores->nombrePerfilUsuario ?></button>
                        </center>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4">
                            <div class="progress-wrapper">
                                <strong class="text-muted d-block mb-2">Completa tu perfil</strong>
                                <progress max="100" value="0" id="progress" style="width: 100%;"></progress>
                                <div class="progress-message" id="progress-message" style="color: #F17C12;">Vamos a empezar.</div>
                        </li>
                        <li class="list-group-item p-4">
                            <strong class="text-muted d-block mb-2">Descripción</strong>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Detalles del Perfil</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form action="?c=administrador&a=GuardarPerfil" method="POST" class="pro-form" id="pro-form" value="<?php echo $administradores->idUsuario; ?>" enctype="multipart/form-data" />
                                        <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $administradores->idUsuario; ?>" />
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feFirstName">Nombre</label>
                                                <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Juan Camilo" value="<?php echo $administradores->nombreUsuario; ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feLastName">Apellido</label>
                                                <input type="text" class="form-control" name="apellidoUsuario" id="apellidoUsuario" placeholder="Garzón Medina" value="<?php echo $administradores->apellidoUsuario; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feEmailAddress">Correo electrónico</label>
                                                <input type="email" class="form-control" name="correoUsuario" id="correoUsuario" placeholder="juan@gmail.com" value="<?php echo $administradores->correoUsuario; ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="fePassword">Contraseña</label>
                                                <input type="password" class="form-control" name="contraseñaUsuario" id="contraseñaUsuario" placeholder="*******" value="<?php echo $administradores->contraseñaUsuario; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feInputAddress">Fecha de nacimiento</label>
                                                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" placeholder="07/15/2002" value="<?php echo $administradores->fechaNacimiento; ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feInputCity">Número de documento</label>
                                                <input type="number" class="form-control" name="documentoUsuario" id="documentoUsuario" placeholder="1016757835" value="<?php echo $administradores->documentoUsuario; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feInputCity">Tipo de documento</label>
                                                <select id="feInputState" class="form-control" id="idTipoDoc" name="idTipoDoc" placeholder=" " required>

                                                    <option class="" value="<?php echo $administradores->idTipoDoc; ?>"><?php echo $administradores->nombreTipoDoc; ?></option>
                                                    <?php
                                                    foreach ($this->model->ListarTipoDoc() as $valores) : ?>
                                                        <option value="<?php echo $valores->idTipoDoc ?>"><?php echo $valores->nombreTipoDoc ?></option>
                                                    <?php endforeach; ?>

                                                </select>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feInputAddress">Dirección</label>
                                                <input type="text" class="form-control" name="direccionUsuario" id="direccionUsuario" placeholder="calle 28c sur 15-56 este" value="<?php echo $administradores->direccionUsuario; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Subir foto de perfil</label>
                                                <input type="file" name="imgUsuario" id="imgUsuario" class="file-upload-default">
                                                <div class="input-group ">
                                                    <input type="text" class="form-control file-upload-info"  disabled value="<?php echo $administradores->imgUsuario; ?>">
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Subir</button>
                                                    </span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary mr-2" style="float: right;">Actualizar Datos</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>