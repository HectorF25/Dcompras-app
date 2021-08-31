<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Registros Negocios</h1>
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
                            <strong class="card-title">Negocios Registrados</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <div class="well well-sm text-right">
                                                <a class="btn btn-primary" href="?c=negocios&a=crudNegocio">Nuevo Negocio</a>
                                            </div>
                                            <table id="tablaNegocios" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 180.889px;">Nombre Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Dirección Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Nit Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Estado</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Tipo Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Barrio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Nombre Propietario</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Codigo Peticio Negocio</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Modificar</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Modificar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($this->model->ListarNegocio() as $c) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $c->nombreNegocio; ?></td>
                                                            <td><?php echo $c->direccionNegocio; ?></td>
                                                            <td><?php echo $c->nitNegocio; ?></td>
                                                            <td><?php if ($c->estadoNegocio == TRUE) {
                                                                    echo "ACTIVO";
                                                                } else {
                                                                    echo "INACTIVO";
                                                                }  ?></td>
                                                            <td><?php echo $c->nombreTipoNegocio; ?></td>
                                                            <td><?php echo $c->nombreBarrio; ?></td>
                                                            <td><?php echo $c->nombreUsuario; ?>&nbsp;<?php echo $c->apellidoUsuario; ?></td>
                                                            <td><?php echo $c->idPeticionNegocio; ?></td>
                                                            <td>
                                                                <a id="btn-abrir-popup" href="?c=negocios&a=crudNegocio&idNegocio=<?php echo $c->idNegocio; ?>" class="btn-abrir-popup">Modificar</a>
                                                            </td>
                                                            <td>

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