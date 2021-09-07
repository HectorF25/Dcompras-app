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
    <form action="?c=crearProductos&a=Guardar" method="POST" value="<?php echo $crearP->getIdProductoNegocio(); ?>" class="formulario" id="formulario">
    <h2>Crear Producto</h2><br />
    <input type="hidden" id="idProductoNegocio" name="idProductoNegocio" value="<?php echo $crearP->getIdProductoNegocio(); ?>" />

    <!-- Grupo: Usuario -->
        <div class="formulario__grupo" id="grupo__idProducto">
            <label for="idProducto" class="formulario__label">Codigo de producto</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="idProducto" id="idProducto" placeholder="Codigo de producto" value="<?php echo $crearP->getIdProducto(); ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El codigo del producto tiene que ser de 1 a 10 dígitos y solo puede contener numeros.</p>
        </div>

        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__idNegocio">
            <label for="idNegocio" class="formulario__label">Codigo de Negocio</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="idNegocio" id="idNegocio" placeholder="Codigo de Negocio" value="<?php echo $crearP->getIdNegocio(); ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El codigo del negocio tiene que ser de 1 a 10 dígitos y solo puede contener numeros.</p>
        </div>

        <!-- Grupo: Nit -->
        <div class="formulario__grupo" id="grupo__precioProducto">
            <label for="precioProducto" class="formulario__label">Precio del Producto</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="precioProducto" id="precioProducto" placeholder="32.000" value="<?php echo $crearP->getPrecioProducto(); ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El precio del producto solo puede contener numeros y un maximo de 11 digitos.</p>
        </div>

        <!-- Grupo: Razón social -->
        <div class="formulario__grupo" id="grupo__cantidadProducto">
            <label for="cantidadProducto" class="formulario__label">Cantidad de Productos</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="cantidadProducto" id="cantidadProducto" placeholder="20" value="<?php echo $crearP->getCantidadProducto(); ?>">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La cantidad del producto debe contener como minimo 1 digito y solo puede contener numeros.</p>
        </div>

        <!-- Grupo: Teléfono -->
        <div class="formulario__grupo" id="grupo__estadoProductoNegocio">
            <label for="estadoProductoNegocio" class="formulario__label">Estado Del Producto Negocio</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="estadoProductoNegocio" id="estadoProductoNegocio" placeholder="Activo (1)" value="<?php echo $crearP->getEstadoProductoNegocio(); ?>" >
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El estado solo puede contener numeros entre 1 y 2.</p>
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

<script src="./js/form.js"></script>


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