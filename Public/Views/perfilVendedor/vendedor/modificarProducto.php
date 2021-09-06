
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

                                <form action="?c=crearProductos&a=Guardar" method="POST" value="<?php echo $crearP->idProductoNegocio; ?>" name="formDatosPersonales">
                                <h2>Actualizar Producto</h2><br />
                                <input type="hidden" id="idProductoNegocio" name="idProductoNegocio" value="<?php echo $crearP->idProductoNegocio; ?>" />
                                <label for="idProducto">Codigo Producto</label>
                                <input type="text" id="precioProducto" name="idProducto" value="<?php echo $crearP->idProducto; ?>" /></br>
                                <label for="idNegocio">Codigo Negocio</label>
                                <input type="text" id="precioProducto" name="idNegocio" value="<?php echo $crearP->idNegocio; ?>" /></br>
                                <label for="precioProducto">Precio Producto</label>
                                <input type="text" id="precioProducto" name="precioProducto" value="<?php echo $crearP->precioProducto; ?>" /></br>
                                <label for="cantidadProducto">Cantidad</label>
                                <input type="text" name="cantidadProducto" id="cantidadProducto" placeholder="Escribe la cantidad" value="<?php echo $crearP->cantidadProducto; ?>"><br />
                                <center>
                                    <input type="submit"href="?c=crearProductos&a=mostrarProductos" name="salir" value="Volver" class="btn btn-primary"/>
                                    <input class="form__button" type="submit" name="enviar" value="Modificar" />
                                </center>
                                
                            </form>



                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
 