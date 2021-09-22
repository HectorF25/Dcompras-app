<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Modificar</span></span>
                <h3 class="page-title">Modificar usuario</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom text-center">
                        <center>
                            <div class="mb-3 mx-auto">
                                <img class="rounded-circle" src=".<?php echo $administradores->imgUsuario; ?>" alt="User Avatar" width="110">
                            </div>
                            <h4 class="mb-0"><?php echo $administradores->nombreUsuario . " " . $administradores->apellidoUsuario ?></h4>
                            <span class="text-muted d-block mb-2"><?php echo strtolower($administradores->correoUsuario); ?></span>
                            <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primaryy mr-2"><?php echo $administradores->nombrePerfilUsuario; ?></button>
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
                            <strong class="text-muted d-block mb-2">Description</strong>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
                            </br>
                            </br>
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
                                    <form action="?c=administrador&a=Guardar" method="POST" class="pro-form" id="pro-form" value="<?php echo $administradores->idUsuario; ?>" enctype="multipart/form-data">
                                        <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $administradores->idUsuario; ?>" />
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__nombreUsuario">
                                                    <label for="nombreUsuario">Nombre</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Juan Camilo" value="<?php echo $administradores->nombreUsuario; ?>" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El nombre debe tener un máximo de 40 caracteres y solo debe contener letras.</p>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__apellidoUsuario">
                                                    <label for="apellidoUsuario">Apellido</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="text" class="form-control" name="apellidoUsuario" id="apellidoUsuario" placeholder="Garzón Medina" value="<?php echo $administradores->apellidoUsuario; ?>" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El nombre debe tener un máximo de 40 caracteres y solo debe contener letras.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__correoUsuario">
                                                    <label for="correoUsuario">Correo electrónico</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="email" class="form-control" name="correoUsuario" id="correoUsuario" placeholder="juan@gmail.com" value="<?php echo $administradores->correoUsuario; ?>" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El email debe tener un máximo de 60 caracteres y puede contener letras, números y simbolos.</p>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__contraseñaUsuario">
                                                    <label for="fePassword">Contraseña</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="password" class="form-control" name="contraseñaUsuario" id="contraseñaUsuario" placeholder="*******" value="<?php echo $administradores->contraseñaUsuario; ?>" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">La contraseña debe tener un minímo de 4 caracteres y un máximo de 12 y puede contener letras, números y simbolos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__fechaNacimiento">
                                                    <label for="feInputAddress">Fecha de nacimiento</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" placeholder="07/15/2002" value="<?php echo $administradores->fechaNacimiento; ?>" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__documentoUsuario">
                                                    <label for="feInputCity">Número de documento</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="number" class="form-control" name="documentoUsuario" id="documentoUsuario" placeholder="1016757835" value="<?php echo $administradores->documentoUsuario; ?>" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                        <p class="formulario__input-error">El numero de documento debe tener un minímo de 8 caracteres numericos y un máximo de 10.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="feInputCity">Tipo de documento</label>
                                                <select id="feInputState" class="form-control" id="idTipoDoc" name="idTipoDoc" placeholder=" " required>

                                                    <option class="formulario__label" value="<?php echo $administradores->idTipoDoc; ?>"><?php echo $administradores->nombreTipoDoc; ?></option>
                                                    <?php
                                                    foreach ($this->model->ListarTipoDoc() as $valores) : ?>
                                                        <option value="<?php echo $valores->idTipoDoc ?>"><?php echo $valores->nombreTipoDoc ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feInputAddress">Dirección</label>
                                                <input type="text" class="form-control" name="direccionUsuario" id="direccionUsuario" placeholder="calle 28c sur 15-56 este" value="<?php echo $administradores->direccionUsuario; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo">
                                                    <label for="idPerfilUsuario">Perfil usuario</label>
                                                    <select class="form-control" id="idPerfilUsuario" name="idPerfilUsuario" placeholder=" " required>

                                                        <option class="formulario__label" value="<?php echo $administradores->idPerfilUsuario; ?>"><?php echo $administradores->nombrePerfilUsuario; ?></option>
                                                        <?php
                                                        foreach ($this->model->ListarPerfil() as $valores) : ?>
                                                            <option value="<?php echo $valores->idPerfilUsuario ?>"><?php echo $valores->nombrePerfilUsuario ?></option>
                                                        <?php
                                                        endforeach;
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <!-- <label>Subir foto de perfil</label>
                                                <input type="file" name="imgUsuario" id="imgUsuario" value="" class="file-upload-default">
                                                <div class="input-group ">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Subir foto">
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Subir</button>
                                                    </span>
                                                </div> -->
                                                <label>Subir foto de perfil</label>
                                                <input type="file" name="imgUsuario" id="imgUsuario" class="file-upload-default">
                    <div class="input-group ">
                                                    <input type="text" class="form-control file-upload-info"  disabled value="<?php echo $administradores->imgUsuario; ?>">
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Subir</button>
                                                    </span>
                                                </div>                            
                </div>
                                        </div>
                                        <br><button type="submit" class="btn btn-gradient-primary mr-2" style="float: right;">Actualizar Datos</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

     