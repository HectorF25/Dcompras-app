<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pedidos</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">

                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tablero</a></li>

                            <li class="active">Datos tabla</li>
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
                            <strong class="card-title">Pedidos Registrados</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            
                                            <table id="tablaPedidos" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 180.889px;">Codigo Pedido</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Domicilio Pedido</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Nombre Producto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Especificación Producto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Valor Total Pedido</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Estado Pedido</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Usuario</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Tipo Pago</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Barrio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">idDomicilio</th>scandir
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Inactivar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($this->model->ListarPedido() as $c) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $c->idPedido; ?></td>
                                                            <td><?php echo $c->domicilioPedido; ?></td>
                                                            <td><?php echo $c->nombreProductos; ?></td>
                                                            <td><?php echo $c->especificacionProducto; ?></td>
                                                            <td><?php echo $c->valorTotalPedido; ?></td>
                                                            <td><?php if ($c->estadoPedido == TRUE) {
                                                                    echo "ACTIVO";
                                                                } else {
                                                                    echo "INACTIVO";
                                                                }  ?></td>
                                                            <td><?php echo $c->nombreUsuario; ?>&nbsp;<?php echo $c->apellidoUsuario; ?></td>
                                                            <td><?php echo $c->nombreTipoPago; ?></td>
                                                            <td><?php echo $c->nombreNegocio; ?></td>
                                                            <td><?php echo $c->nombreBarrio; ?></td>
                                                            <td><?php echo $c->idDomicilio; ?></td>                                                          
                                                            <td>
                                                                <a onclick="javascript:return confirm('¿Seguro de inactivar este registro?');" href="?c=pedido&a=inactivar&idPedido=<?php echo $c->idPedido; ?>">Inactivar</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->