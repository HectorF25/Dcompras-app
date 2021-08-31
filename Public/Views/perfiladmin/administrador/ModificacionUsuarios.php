<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Registros</h1>
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
                            <strong class="card-title">Usuarios Registrados</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <div class="well well-sm text-right">
                                                <a class="btn btn-primary" href="?c=administrador&a=crudUsuarios">Nuevo Usuario</a>
                                            </div>
                                            <table id="tablaUsuarios" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 180.889px;">Nombre</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Correo</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Contraseña</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Estado</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Modificar</th>
                                                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Modificar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($this->model->Listar() as $r) : ?>
                                                        <tr role="row" class="odd">
                                                            <td><?php echo $r->nombreUsuario; ?>&nbsp;<?php echo $r->apellidoUsuario; ?></td>
                                                            <td><?php echo $r->correoUsuario; ?></td>
                                                            <td><?php echo password_hash($r->contraseñaUsuario, PASSWORD_DEFAULT); ?></td>
                                                            <td><?php if ($r->estadoUsuario == TRUE) {
                                                                    echo "ACTIVO";
                                                                } else {
                                                                    echo "INACTIVO";
                                                                }  ?></td>
                                                            <td>
                                                                <a id="btn-abrir-popup" href="?c=administrador&a=crudUsuarios&idUsuario=<?php echo $r->idUsuario; ?>" class="btn-abrir-popup">Modificar</a>
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