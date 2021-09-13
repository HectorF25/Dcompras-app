<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Personalización</span></span>
            <h3 class="page-title">Perfil de usuario</h3>
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
                            <img class="rounded-circle" src="./<?php echo $imgUsuario; ?>" alt="User Avatar" width="110">
                        </div>
                        <h4 class="mb-0"><?php echo $nombreUsuario . " " . $apellidoUsuario ?></h4>
                        <span class="text-muted d-block mb-2"><?php echo strtolower($_SESSION['correo']); ?></span>
                        <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primaryy mr-2">Administrador</button>
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
                    <h6 class="m-0">Resumen del Perfil</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <div class="row">
                            <div class="col">
                                <form  method="POST" class="pro-form" id="pro-form" value="<?php  ?>">
                                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?php  ?>" />
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="feFirstName">Nombre</label>
                                            <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Juan Camilo" value="<?php ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="feLastName">Apellido</label>
                                            <input type="text" class="form-control" name="apellidoUsuario" id="apellidoUsuario" placeholder="Garzón Medina" value="<?php  ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="feEmailAddress">Correo electrónico</label>
                                            <input type="email" class="form-control" name="correoUsuario" id="correoUsuario" placeholder="juan@gmail.com" value="<?php  ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="fePassword">Contraseña</label>
                                            <input type="password" class="form-control" name="contraseñaUsuario" id="contraseñaUsuario" placeholder="*******" value="<?php  ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="feInputAddress">Fecha de nacimiento</label>
                                            <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" placeholder="07/15/2002" value="<?php  ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="feInputCity">Número de documento</label>
                                            <input type="number" class="form-control" name="documentoUsuario" id="documentoUsuario" placeholder="1016757835" value="<?php  ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="feInputCity">Tipo de documento</label>
                                            <select id="feInputState" class="form-control" id="idTipoDoc" name="idTipoDoc" placeholder=" " required>

                                                <option class="" value="<?php ?>"><?php  ?></option>
                                                <?php
                                         ?>
                                                    <option value="<?php ?>"><?php ?></option>
                                                <?php ?>

                                            </select>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="feInputAddress">Dirección</label>
                                            <input type="text" class="form-control" name="direccionUsuario" id="direccionUsuario" placeholder="calle 28c sur 15-56 este" value="<?php ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Subir foto de perfil</label>
                                            <input type="file" name="img[]" class="file-upload-default">
                                            <div class="input-group ">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Subir foto">
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