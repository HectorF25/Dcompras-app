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


            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                <form action="?c=crearProductos&a=Guardar" method="POST" value="<?php echo $crearP->getIdProductoNegocio(); ?>" name="formDatosPersonales">
                                <h2>Crear Producto</h2><br />
                                <input type="hidden" id="idProductoNegocio" name="idProductoNegocio" value="<?php echo $crearP->getIdProductoNegocio(); ?>" />
                                
                                <label for="idProducto">Codigo Producto</label>
                                <input type="text" name="idProducto" id="idProducto" rows="10" cols="30" placeholder="Escribe el codigo del producto" value="<?php echo $crearP->getIdProducto(); ?>"></br>

                                <label for="idProducto">Codigo Negocio</label>
                                <input type="text" name="idNegocio" id="idNegocio" rows="10" cols="30" placeholder="Escribe el codigo del negocio" value="<?php echo $crearP->getIdNegocio(); ?>"></br>

                                <label for="nombreProductos">Precio Producto</label>
                                <input type="text" name="precioProducto" id="precioProducto" rows="10" cols="30" placeholder="Escribe el precio del producto" value="<?php echo $crearP->getPrecioProducto(); ?>"></br>

                                <label for="especificacionProducto">Cantidad</label>
                                <input type="number" name="cantidadProducto" id="cantidadProducto" value="<?php echo $crearP->getCantidadProducto(); ?>" placeholder="Ingrese la cantidad" required /><br />
                                <label for="estadoProductoNegocio">Estado Producto</label>
                                <input type="number" name="estadoProductoNegocio" id="estadoProductoNegocio" value="<?php echo $crearP->getCantidadProducto(); ?>" placeholder="Ingrese el estado" required /><br />
                                <input type="submit"href="?c=crearProductos&a=mostrarProductos" name="Volver" value="Volver" class="btn btn-primary"/>
                                <input type="submit" href="?c=crearProductos&a=Guardar" name="Crear" value="Crear" class="btn btn-primary"/>
                            </form>
                            


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
