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

                            <form action="?c=administrador&a=Guardar" target="" method="POST" value="<?php echo $administradores->idUsuario; ?>" class="formularios" name="formDatosPersonales">
                            <h1><?php echo  ' ' .strtoupper($_SESSION[ 'correo']); ?></h1>   
                                    <h3>Bienvenido a tu Perfil</h3>
                                <div class="form__div">
                                    <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $administradores->idUsuario; ?>" />
                                </div>
                                <div class="form__div">
                                    <input type="text" class="form__input" placeholder=" " name="nombreUsuario" id="nombreUsuario" value="<?php echo $administradores->nombreUsuario; ?>" required>
                                    <label for="nombreUsuario" class="form__label">Nombre(s)</label>
                                </div>

                                <div class="form__div">
                                    <input type="text" class="form__input" placeholder=" " name="apellidoUsuario" id="apellidoUsuario" value="<?php echo $administradores->apellidoUsuario ?>" required>
                                    <label for="" class="form__label">Apellido(s)</label>
                                </div>

                                <div class="form__div">
                                    <input type="email" class="form__input" placeholder=" " value="<?php echo $administradores->correoUsuario ?>" required>
                                    <label for="" class="form__label">Correo(@)</label>
                                </div>

                                <div class="form__div">
                                    <input type="password" class="form__input" placeholder=" " name="contraseñaUsuario" id="contraseñaUsuario" value="<?php echo $administradores->contraseñaUsuario ?>" required>
                                    <label for="" class="form__label">Contraseña</label>
                                </div>

                                <div class="form__div">
                                    <input type="date" class="form__input" placeholder=" " name="fechaNacimiento" id="fechaNacimiento" value="<?php echo $administradores->fechaNacimiento ?>" required>
                                    <label for="" class="form__label">Fecha de nacimiento</label>
                                </div>

                                <div class="form__div">
                                    <input type="number" class="form__input" placeholder=" " name="documentoUsuario" id="documentoUsuario" value="<?php echo $administradores->documentoUsuario ?>">
                                    <label for="" class="form__label">Numero de documento</label>
                                </div>

                                <div class="form__div">
                                    <select class="form__input" name="estadoUsuario" id="estadoUsuario" placeholder=" ">
                                        <option class="form__input" value="<?php echo $administradores->estadoUsuario; ?>"><?php if ($administradores->estadoUsuario == TRUE) {
                                                                                                                                echo "ACTIVO";
                                                                                                                            } else {
                                                                                                                                echo "INACTIVO";
                                                                                                                            } ?></option>
                                        <option class="form__input" value="1">ACTIVO</option>
                                        <option class="form__input" value="0">INACTIVO</option>
                                    </select>
                                    <label for="" class="form__label">Estado usuario</label>
                                </div>

                                <div class="form__div">
                                    <select class="form__input" id="idTipoDoc" name="idTipoDoc">
                                        <option class="form__input" value="<?php echo $administradores->idTipoDoc; ?>"><?php echo $administradores->nombreTipoDoc; ?></option>
                                        <option class="form__input" value="01">Cedula de Ciudadanía</option>
                                        <option class="form__input" value="02">Tarjeta de identidad</option>
                                        <option class="form__input" value="03"> Cédula de extranjería</option>
                                    </select>
                                    <label for="" class="form__label">Id. Tipo doc</label>
                                </div>

                                <div class="form__div">
                                <select class="form__input" id="idPerfilUsuario" name="idPerfilUsuario">
                                        <option class="form__input" value="<?php echo $administradores->idPerfilUsuario; ?>"><?php echo $administradores->nombrePerfilUsuario; ?></option>
                                        <option class="form__input" value="01">Administrador</option>
                                        <option class="form__input" value="02">Cliente</option>
                                        <option class="form__input" value="03">Vendedor</option>
                                        <option class="form__input" value="04">Repartidor</option>
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