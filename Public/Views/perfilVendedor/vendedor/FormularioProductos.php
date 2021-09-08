<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Productos</h1>
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
                            <strong class="card-title">Productos Registradas</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <div class="well well-sm text-right">
                                                <a class="btn btn-primary" href="?c=crearProductos&a=crudCrearP">Nuevo Producto</a>
                                            </div>
                                            <table id="tablaNegocios" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 180.889px;">Nombre del Producto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Nombre del Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Precio Producto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Cantidad del Producto</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Estado Producto de Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Acción</th>                                                          
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($this->model->ListarProducto() as $c) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $c->nombreProducto; ?></td>
                                                            <td><?php echo $c->nombreNegocio; ?></td>
                                                            <td><?php echo $c->precioProductoNegocio; ?></td>
                                                            <td><?php echo $c->cantidadProducto; ?></td>
                                                            <td><?php echo $c->estadoProductoNegocio; ?></td>
                                                            <td>
                                                                <a id="btn-abrir-popup" href="?c=crearProductos&a=crudCrearP&idProductoNegocio=<?php echo $c->idProductoNegocio; ?>" class="btn-abrir-popup">Modificar</a>
                                                            </td>
                                                            <td>
                                                                <a onclick="javascript:return confirm('¿Seguro de inactivar este registro?');"
                                                                    href="?c=crearProductos&a=inactivar&idProductoNegocio=<?php echo $c->idProductoNegocio; ?>">Inactivar</a>
                                                                    <a onclick="javascript:return confirm('¿Seguro de Activar este registro?');"
                                                                    href="?c=crearProductos&a=activar&idProductoNegocio=<?php echo $c->idProductoNegocio; ?>">Activar</a>
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
        