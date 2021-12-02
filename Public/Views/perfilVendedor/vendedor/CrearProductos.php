<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-contacts menu-icon"></i>
                </span> Nuevo Producto
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Productos<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom text-center">
                        <center>
                            <div class="mb-3 mx-auto">
                                <img class="rounded-circle" src="../../perfiladmin/administrador/images/fotos_perfil/perfil.jpg" alt="User Avatar" width="110">
                            </div>

                            <input type="text" readonly class="form-control-plaintext mb-0 nombre apellido h4" style="text-align: center;" value="Nombre de Producto">

                            <input type="text" readonly class="form-control-plaintext text-muted d-block mb-2 correo" style="text-align: center; font-size: 17px;" value="Categoria">
                            <!--
                            <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primaryy mr-2">
                            <input type="text" readonly class="rol" style="text-align: center; border-color:transparent; text-shadow: none; background-color: transparent;" value="Rol de usuario">
                            </button>
                            -->
                        </center>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4">
                            <div class="progress-wrapper">
                                <strong class="text-muted d-block mb-2">Completa tu producto</strong>
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
            <!-- header section ends -->



            <div class="col-lg-8">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Crear Producto</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <form action="?c=crearProducto&a=Guardar" method="POST" class="pro-form" id="pro-form" value="<?php echo $crearProducto->idProducto; ?>" enctype="multipart/form-data">

                                        <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $crearProducto->getIdProducto(); ?>" />
                                        <!-- Grupo: Usuario -->
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__nombreUsuario">
                                                    <label for="nombreUsuario">Nombre Producto</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="text" class="form-control nombreUsuario" name="nombreProducto" id="nombreProducto" placeholder="Paquete de papas" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El nombre debe tener un máximo de 40 caracteres y solo debe contener letras.</p>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__apellidoUsuario">
                                                    <label for="apellidoUsuario">Iva producto</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="number" class="form-control apellidoUsuario" name="ivaProducto" id="ivaProducto" placeholder="19%" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El iva debe tener un máximo de 40 caracteres y solo debe contener letras.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__correoUsuario">
                                                    <label for="correoUsuario">Precio producto</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="number" class="form-control correoUsuario" name="precioProducto" id="precioProducto" placeholder="2500" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El email debe tener un máximo de 60 caracteres y puede contener letras, números y simbolos.</p>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__correoUsuario">
                                                    <label for="correoUsuario">Precio de venta negocio</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="number" class="form-control correoUsuario" name="precioProducto" id="precioProductoNegocio" placeholder="2900" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El email debe tener un máximo de 60 caracteres y puede contener letras, números y simbolos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__contraseñaUsuario">
                                                    <label for="fePassword">Especificación Producto</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="text" class="form-control" name="especificacionProducto" id="especificacionProducto" placeholder="Paquete de 50g" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">La contraseña debe tener un minímo de 4 caracteres y un máximo de 12 y puede contener letras, números y simbolos.</p>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="feInputCity">Subcategoria Producto</label>
                                                <select id="feInputState" class="form-control" id="idTipoDoc" name="idTipoDoc" placeholder=" " required>
                                                    <?php
                                                    foreach ($this->model->ListarSubCategoria() as $valores) : ?>
                                                        <option value="<?php echo $valores->idSubCategoria ?>"><?php echo $valores->nombreSubCategoria ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <div class="formulario__grupo" id="grupo__correoUsuario">
                                                    <label for="correoUsuario">Cantidad Producto</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="number" class="form-control correoUsuario" name="cantidadProducto" id="cantidadProducto" placeholder="10" required>
                                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                                    </div>
                                                    <p class="formulario__input-error">El email debe tener un máximo de 60 caracteres y puede contener letras, números y simbolos.</p>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Subir foto de producto</label>
                                                <input type="file" name="imgProducto" id="imgProducto" class="file-upload-default">
                                                <div class="input-group ">
                                                    <input type="text" class="form-control file-upload-info" disabled>
                                                    <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Subir</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <br><button type="submit" class="btn btn-gradient-primary mr-2" style="float: right;">Crear Producto</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>