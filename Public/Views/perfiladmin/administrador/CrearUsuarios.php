<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Modificar</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">

                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tablero</a></li>

                            <li class="active">Datos a Modificar</li>
                        </ol>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <form action="?c=administrador&a=Guardar" target="" method="POST" value="<?php echo $administradores->getIdUsuario(); ?>" class="formularios" name="formDatosPersonales" enctype="multipart/form-data">

                                <div class="form__div">
                                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $administradores->getIdUsuario(); ?>" />
                                </div>
                                <div class="form__div">
                                    <input type="text" class="form__input" placeholder=" " name="nombreUsuario" id="nombreUsuario" value="<?php echo $administradores->getNombreUsuario();?>" required>
                                    <label for="nombreUsuario" class="form__label">Nombre(s)</label>
                                </div>

                                <div class="form__div">
                                    <input type="text" class="form__input" placeholder=" " name="apellidoUsuario" id="apellidoUsuario" value="<?php echo $administradores->getApellidoUsuario(); ?>" required>
                                    <label for="" class="form__label">Apellido(s)</label>
                                </div>

                                <div class="form__div">
                                    <input type="email" class="form__input" name="correoUsuario" id="correoUsuario" placeholder=" " value="<?php echo $administradores->getCorreoUsuario(); ?>" required>
                                    <label for="" class="form__label">Correo(@)</label>
                                </div>

                                <div class="form__div">
                                    <input type="password" class="form__input" placeholder=" " name="contraseñaUsuario" id="contraseñaUsuario" value="<?php echo $administradores->getContraseñaUsuario(); ?>" required>
                                    <label for="" class="form__label">Contraseña</label>
                                </div>

                                <div class="form__div">
                                    <input type="date" class="form__input" placeholder=" " name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $administradores->getFechaNacimiento(); ?>" required>
                                    <label for="" class="form__label">Fecha de nacimiento</label>
                                </div>

                                <div class="form__div">
                                    <input type="number" class="form__input" placeholder=" " name="documentoUsuario" id="documentoUsuario" value="<?php echo $administradores->getDocumentoUsuario(); ?>">
                                    <label for="" class="form__label">Numero de documento</label>
                                </div>

                                <div class="form__div">
                                    <select class="form__input" name="estadoUsuario" id="estadoUsuario" placeholder=" ">
                                        <option class="form__input" value="<?php echo $administradores->getEstadousuarioValue(); ?>"><?php echo $administradores->getEstadousuario();?></option>
                                        <option class="form__input" value="1">ACTIVO</option>
                                        <option class="form__input" value="0">INACTIVO</option>
                                    </select>
                                    <label for="" class="form__label">Estado usuario</label>
                                </div>

                                <div class="form__div">
                                    <input type="text" class="form__input" placeholder=" " name="direccionUsuario" id="direccionUsuario" value="<?php echo $administradores->getDireccionUsuario(); ?>" required>
                                    <label for="" class="form__label">Direccion usuario</label>
                                </div>

                                <div class="form__div">
                                    <input type="file" class="form__input" placeholder=" " name="imgUsuario" id="imgUsuario" value="<?php echo $administradores->getImgUsuario(); ?>" accept="image/*">
                                    <label for="" class="form__label">Imagen usuario</label>
                                </div>

                                <div class="form__div">
                                    <select class="form__input" id="idTipoDoc" name="idTipoDoc">
                                        <option class="form__input" value="<?php echo $administradores->getIdTipoDoc(); ?>"><?php echo $administradores->getIdTipoDoc(); ?></option>
                                        <option value="1">Cedula</option>
                                        <option value="2">Cedula Extranjera</option>
                                        <option value="3">Tarjeta de identidad</option>
                                    </select>
                                    <label for="" class="form__label">Id. Tipo doc</label>
                                </div>

                                <div class="form__div">
                                <select class="form__input" id="idPerfilUsuario" name="idPerfilUsuario">
                                        <option class="form__input" value="<?php echo $administradores->getIdPerfilUsuario(); ?>"><?php echo $administradores->getIdPerfilUsuario(); ?></option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Cliente</option>
                                        <option value="3">Vendedor</option>
                                        <option value="4">Repartidor</option>
                                    </select>
                                    <label for="" class="form__label">Id. perfil usuario</label>
                                </div>

                                <input class="form__button" type="submit" name="enviar" value="Enviar datos" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

  <!--   <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <form action="?c=administrador&a=Guardar" target="" method="POST" value="<?php echo $administradores->getIdUsuario(); ?>" name="formDatosPersonales">

                                <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $administradores->getIdUsuario(); ?>" />
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre" value="<?php echo $administradores->getNombreUsuario();?>" /><br />

                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidoUsuario" id="apellidoUsuario" placeholder=" Apellido" value="<?php echo $administradores->getApellidoUsuario(); ?>" /><br />

                                <label for="email">Email</label>
                                <input type="email" name="correoUsuario" id="correoUsuario" placeholder="email@email.com" value="<?php echo $administradores->getCorreoUsuario(); ?>"  required /><br />

                                <label for="password">Contraseña</label>
                                <input type="password" name="contraseñaUsuario" id="contraseñaUsuario" placeholder="**********" value="<?php echo $administradores->getContraseñaUsuario(); ?>"  required /><br />

                                <label for="Fecha">Fecha de Nacimiento</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $administradores->getFechaNacimiento(); ?>"  /><br />

                                <label for="apellidos">Documento</label>
                                <input type="text" name="documentoUsuario" id="documentoUsuario" placeholder="Documento" value="<?php echo $administradores->getDocumentoUsuario(); ?>" /><br />
                                
                                <label for="tipodocumento">Tipo de documento: </label>
                                <select id="idTipoDoc" name="idTipoDoc" class="">
                                    <option value="<?php echo $administradores->getIdTipoDoc(); ?>"><?php echo $administradores->getIdTipoDoc(); ?></option>
                                    <?php
                                    
                                    foreach ($this -> model ->Listar() as $valores):?> 

                                    <option value="<?php echo $valores -> idTipoDoc ?>"><?php echo $valores->nombreTipoDoc?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select><br />

                                <label for="estadoUsuario">Estado: </label>
                                <select name="estadoUsuario" id="estadoUsuario">
                                <option value="<?php echo $administradores->getEstadousuarioValue(); ?>"><?php $administradores->getEstadousuario(); ?></option>
                                    <option value="1">ACTIVO</option>
                                    <option value="0">INACTIVO</option>
                                </select>

                                <label for="idPerfilUsuario">Tipo Usuario: </label>
                                <select name="idPerfilUsuario" id="idPerfilUsuario">
                                <option value="<?php echo $administradores->getIdPerfilUsuario(); ?>"><?php $administradores->getIdPerfilUsuario(); ?></option>
                                <?php
                                    
                                    foreach ($this -> model ->Listar() as $valores):?> 

                                    <option value="<?php echo $valores -> idPerfilUsuario ?>"><?php echo $valores->nombrePerfilUsuario?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>

                                <br />

                                <input type="submit" name="enviar" value="Enviar datos" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated
    </div><!-- .content --> 