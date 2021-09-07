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
                                <h1>Negocio</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tablero</a></li>

                                    <li class="active">Datos del negocio</li>
                                </ol>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

<!-- header section ends -->


<main>
    <form action="?c=negocios&a=Guardar" target="" method="POST" value="<?php echo $negocios->getIdNegocio(); ?>" class="formulario" id="formulario">
    <h2>Crear Negocio</h2><br />
    <input type="hidden" id="idNegocio" name="idNegocio" value="<?php echo $negocios->getIdNegocio(); ?>" />


     <!-- Grupo: Usuario -->
        <div class="formulario__grupo" id="grupo__nombreNegocio">
            <label for="nombreNegocio" class="formulario__label">Nombre del negocio</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombreNegocio" id="nombreNegocio" placeholder="Supermercado el progreso" value="<?php echo $negocios->getNombreNegocio() ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre del negocio tiene que ser de 4 a 24 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__direccionNegocio">
            <label for="nombre" class="formulario__label">Dirección del negocio</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="direccionNegocio" id="direccionNegocio" placeholder="Cra 7a #10-30 sur" value="<?php echo $negocios->getDireccionNegocio() ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La dirección puede incluir letras, numero y simbolos.</p>
        </div>

        <!-- Grupo: Nit -->
        <div class="formulario__grupo" id="grupo__nit">
            <label for="telefono" class="formulario__label">Nit</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nitNegocio" id="nitNegocio" placeholder="800.197.268-4" value="<?php echo $negocios->getNitNegocio() ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nit solo puede contener numeros, puntos y guiones.</p>
        </div>

        <!-- Grupo: Razón social -->
        <div class="formulario__grupo" >
        <label for="estadoNegocio" class="formulario__label">Estado Negocio: </label>
        <div class="formulario__grupo-input">

                    <select class="formulario__input" name="estadoNegocio" id="estadoNegocio">
                    <option value="<?php echo $negocios->getEstadoNegocioValue(); ?>"><?php echo $negocios->getEstadoNegocio(); ?></option>
                         <option value="TRUE">ACTIVO</option>
                         <option value="FALSE">INACTIVO</option>
                         </select>
                         </div>
                         </div>


                 <div class="formulario__grupo" >

        <label for="idTipoNegocio" class="formulario__label">Tipo Negocio</label>
        <div class="formulario__grupo-input">

                                <select class="formulario__input" id="idTipoNegocio" name="idTipoNegocio" required>
                                    <option value="<?php echo $negocios -> getIdTipoNegocio() ?>"><?php echo $negocios->getIdTipoNegocio() ?></option>
                                    <?php
                                    
                                    foreach ($this -> model ->ListarNegocio() as $valores):?> 

                                    <option value="<?php echo $valores -> idTipoNegocio ?>"><?php echo $valores->nombreTipoNegocio?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                                </div>
                                </div>
                
                                <div class="formulario__grupo" >

                                <label for="idBarrio" class="formulario__label">Nombre Barrio</label>
                                <div class="formulario__grupo-input">

                                <select   class="formulario__input" id="idBarrio" name="idBarrio" required>
                                    <option value="<?php echo $negocios -> getIdBarrio() ?>"><?php echo $negocios->getIdBarrio() ?></option>
                                    <?php
                                    
                                    foreach ($this -> model ->llenarBarrio() as $valores):?> 

                                    <option value="<?php echo $valores -> idBarrio ?>"><?php echo $valores->nombreBarrio?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                                </div>
                                </div>



        <!-- Grupo: Teléfono -->
        <div class="formulario__grupo" id="grupo__idUsuario">
            <label for="telefono" class="formulario__label">Código de usuario</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="idUsuario" id="idUsuario" placeholder="1" value="<?php echo $negocios->getIdUsuario() ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El código de usuario solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>


        <div class="formulario__grupo" id="grupo__idPeticionNegocio">
            <label for="telefono" class="formulario__label">Código de petición</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="idPeticionNegocio" id="idPeticionNegocio" placeholder="1" value="<?php echo $negocios->getIdPeticionNegocio() ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El código de petición solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <!-- Grupo: tipoNegocio -->





        
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

<script src="./js/formNegocio.js"></script>


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
















