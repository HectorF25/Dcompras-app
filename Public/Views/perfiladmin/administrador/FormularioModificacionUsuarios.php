<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D compras | Home Page</title>

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./vendors/form.css">


	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 

</head>
<body>

<!-- header section starts  -->

<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Producto</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tablero</a></li>

                                    <li class="active">Datos del Producto</li>
                                </ol>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

<!-- header section ends -->


<main>
    <form action="?c=administrador&a=Guardar" target="" method="POST" value="<?php echo $administradores->idUsuario; ?>" class="formulario" id="formulario">
    <h2>Actualizar Usuario</h2><br />
    <input type="hidden" id="idUsuario" name="idUsuario" value="<?php echo $administradores->idUsuario; ?>" />



    <!-- Grupo: Usuario -->
    <div class="formulario__grupo" id="grupo__nombreUsuario">
            <label for="nombreUsuario" class="formulario__label">Nombre(s)</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombreUsuario" id="nombreUsuario" placeholder="Juan Camilo" value="<?php echo $administradores->nombreUsuario; ?>" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener un máximo de 40 caracteres y solo debe contener letras.</p>
        </div>

            <!-- Grupo: Usuario -->
            <div class="formulario__grupo" id="grupo__apellidoUsuario">
            <label for="apellidoUsuario" class="formulario__label">Apellido(s)</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="apellidoUsuario" id="apellidoUsuario" placeholder="Garzón Medina"  value="<?php echo $administradores->apellidoUsuario ?>" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El apellido debe tener un máximo de 40 caracteres y solo debe contener letras.</p>
        </div>

        <div class="formulario__grupo" id="grupo__correoUsuario">
            <label for="correoUsuario" class="formulario__label">Correo electrónico</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="correoUsuario" id="correoUsuario" placeholder="juan@mail.com"  value="<?php echo $administradores->correoUsuario ?>" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El email debe tener un máximo de 60 caracteres y puede contener letras, números y simbolos.</p>
        </div>

        
        <div class="formulario__grupo" id="grupo__contraseñaUsuario">
            <label for="contraseñaUsuario" class="formulario__label">Contraseña</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="contraseñaUsuario" id="contraseñaUsuario" placeholder="*******"  value="<?php echo $administradores->contraseñaUsuario ?>" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La contraseña debe tener un minímo de 4 caracteres y un máximo de 12 y puede contener letras, números y simbolos.</p>
        </div>
        

        <div class="formulario__grupo" id="grupo__fechaNacimiento">
            <label for="fechaNacimiento" class="formulario__label">Fecha de Nacimiento</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="fechaNacimiento" id="fechaNacimiento" placeholder="07/15/2002"  value="<?php echo $administradores->fechaNacimiento ?>" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
           
        </div>


        <div class="formulario__grupo" id="grupo__documentoUsuario">
            <label for="documentoUsuario" class="formulario__label">Numero Documento</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="documentoUsuario" id="documentoUsuario" placeholder="1016757835"  value="<?php echo $administradores->documentoUsuario ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                <p class="formulario__input-error">El numero de documento debe tener un minímo de 4 caracteres numericos y un máximo de 12.</p>
            </div>
           
        </div>


        <div class="formulario__grupo" id="grupo__estadoUsuario">
        <label for="estadoUsuario" class="formulario__label">Estado del Usuario</label>
        <div class="formulario__grupo-input">
             <select class="formulario__input" name="estadoUsuario" id="estadoUsuario" placeholder=" ">
                   <option class="form__input" value="<?php echo $administradores->estadoUsuario; ?>"><?php if ($administradores->estadoUsuario == TRUE) {
                                                                                                                                echo "ACTIVO";
                                                                                                                            } else {
                                                                                                                                echo "INACTIVO";
                                                                                                                            } ?></option>
                   <option class="form__input" value="1">ACTIVO</option>
                   <option class="form__input" value="0">INACTIVO</option>
             </select>
             </div>
        </div>

  


           
        <div class="formulario__grupo">
        <label for="" class="formulario__label">Id. Tipo doc</label>        
        <select class="formulario__label" id="idTipoDoc" name="idTipoDoc">
                <option class="formulario__label"  value="<?php echo $administradores->idTipoDoc; ?>"><?php echo $administradores->nombreTipoDoc; ?>> </option>
                <?php
                                    
                foreach ($this -> model ->Listar() as $valores):?> 

                    <option value="<?php echo $valores -> idTipoDoc ?>"><?php echo $valores->nombreTipoDoc?></option>
                   <?php
                endforeach;
                    ?>
             
                </select>
                
                
        </div>

 
 
        <div class="formulario__grupo">
        <label for="" class="formulario__label">Id. perfil usuario</label>    

        <select class="formulario__label" id="idPerfilUsuario" name="idPerfilUsuario">
                                  
                                <option class="formulario__label"value="<?php echo $administradores->idPerfilUsuario; ?>"><?php echo $administradores->nombrePerfilUsuario; ?></option>
                                        <?php
                                    
                                    foreach ($this -> model ->Listar() as $valores):?> 

                                    <option value="<?php echo $valores -> idPerfilUsuario ?>"><?php echo $valores->nombrePerfilUsuario?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                    </select>
                                  
                                </div>







        
        <!-- Grupo: Terminos y Condiciones -->
        <br>     


        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        

        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit"  class="formulario__btn" onclick="mensaje();">Enviar</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </div>
        
    </form>
    
</main>

<!-- home section starts  -->










<!-- aos js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="./js/happ.js"></script>

<script src="./js/formActualizar.js"></script>


<!-- initializing aos  -->

<script>

    AOS.init({
        delay:400,
        duration:1000
    })

</script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>


</body>
</html>

                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
