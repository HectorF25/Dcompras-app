
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pedido</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">

                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tablero</a></li>

                                    <li class="active">Datos del Pedido</li>
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

                                <form action="?c=pedido&a=Guardar" method="POST" value="<?php echo $pedidos->getIdPedido(); ?>" name="formDatosPersonales">
                                <h2>Crear Pedido</h2><br />
                                <input type="hidden" id="idPedido" name="idPedido" value="<?php echo $pedidos->getIdPedido(); ?>" />
                                <label for="domicilioPedido">Domicilio</label>
                                <select id="domicilioPedido" name="domicilioPedido" class="">
                                    <option value="<?php echo $pedidos->getDomicilioPedido(); ?>"><?php if($pedidos->getDomicilioPedido()==TRUE){echo "SI";}else{echo "NO";} ?></option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select><br />
                                <label for="nombreProductos">Nombre Productos</label>
                                <textarea name="nombreProductos" id="nombreProductos" rows="10" cols="30" placeholder="Escribe aquí los productos que deseas comprar"><?php echo $pedidos->getNombreProductos(); ?></textarea><br />

                                <label for="especificacionProducto">Especificación Producto</label>
                                <input type="text" name="especificacionProducto" id="especificacionProducto" value="<?php echo $pedidos->getEspecificacionProducto(); ?>" placeholder="Ingrese la Especificacion del producto" required /><br />

                                <label for="valorTotalPedido">Valor del Pedido</label>
                                <input type="text" name="valorTotalPedido" id="valorTotalPedido" value="<?php echo $pedidos->getValorTotalPedido(); ?>" placeholder="Ingrese el valor del pedido" required /><br />

                                <label for="estadoPedido">Estado: </label>
                                <select name="estadoPedido" id="estadoPedido">
                                    <option value="<?php echo $pedidos->getEstadoPedido(); ?>"><?php if($pedidos->getEstadoPedido()==TRUE){echo "ACTIVO";}else{echo "INACTIVO";} ?></option>
                                    <option value="1">ACTIVO</option>
                                    <option value="0">INACTIVO</option>
                                </select><br />

                                <label for="idUsuario">Codigo Usuario</label>
                                <input type="text" name="idUsuario" id="idUsuario" value="<?php echo $pedidos->getIdUsuario(); ?>" placeholder="Ingrese el valor del pedido" required /><br />
                                <label for="idTipoPago">Tipo Pago</label>
                                <select id="idTipoPago" name="idTipoPago" class="">
                                    <option value="<?php echo $pedidos->getIdTipoPago(); ?>"><?php echo $pedidos->getIdTipoPago(); ?></option>
                                    <?php

                                    foreach ($this->model->llenarTipoPago() as $valores) : ?>

                                        <option value="<?php echo $valores->idTipoPago ?>"><?php echo $valores->nombreTipoPago ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select><br />
                                <label for="idNegocio">Nombre Negocio</label>
                                <select id="idNegocio" name="idNegocio" class="">
                                    <option value="<?php echo $pedidos->getIdNegocio() ?>"><?php echo $pedidos->getIdNegocio() ?></option>
                                    <?php

                                    foreach ($this->model->traerNegocios() as $valores) : ?>

                                        <option value="<?php echo $valores->idNegocio ?>"><?php echo $valores->nombreNegocio ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select><br />
                                <label for="idBarrio">Nombre Barrio</label>
                                <select id="idBarrio" name="idBarrio" required>
                                    <option value="<?php echo $pedidos->getIdBarrio() ?>"><?php echo $pedidos->getIdBarrio() ?></option>
                                    <?php

                                    foreach ($this->model->llenarBarrio() as $valores) : ?>

                                        <option value="<?php echo $valores->idBarrio ?>"><?php echo $valores->nombreBarrio ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select></br>
                                <label for="idUsuario">Codigo Domicilio</label>
                                <input type="text" name="idDomicilio" id="idDomicilio" value="<?php echo $pedidos->getIdDomicilio() ?>" placeholder="Id Domicilio:" required /><br />
                                <center>
                                    
                                    <input type="submit" name="enviar" value="Pedir" />
                                </center>
                            </form>
                            <input type="submit" href="?c=pedido&a=cliente" name="salir" value="Salir" /></br>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
