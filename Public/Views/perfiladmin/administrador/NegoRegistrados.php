<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-store menu-icon"></i>
                </span> Negocios
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Informacion Negocios<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Negocios Registrados <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo $this->model->contarRegistros(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Negocios Inactivos <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo $this->model->contarNegociosInactivos(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Negocios sin verificar <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">0</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Registros</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                    <a class="btn btn-gradient-primary mr-2 float-left" href="?c=negocios&a=crudNegocio"><i class="mdi mdi-store menu-icon"> Nuevo Negocio</i></a>
                                    <a class="btn btn-gradient-danger mr-2 float-right" href="ReportePDF_Negocios.php"><i class="mdi mdi-chart-areaspline menu-icon"> Generar reporte</i></a>
                                    <br><br><br><br>

                                        <table id="tablaUsu" class="table table-striped">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 180.889px;">Nombre Negocio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Dirección</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Nit</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Estado</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Tipo Negocio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Barrio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Propietario</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Modificar</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Inactivar</th>
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
                                                        <td>
                                                            <a id="btn-abrir-popup" href="?c=negocios&a=crudNegocio&idNegocio=<?php echo $c->idNegocio; ?>"  class="btn-abrir-popup">Modificar</a>
                                                        </td>
                                                        <td>
                                                            <a id="btn-abrir-popup" href="?c=administrador&a=crudUsuarios&idUsuario=<?php echo $c->idNegocio; ?>" class="btn-abrir-popup">Inactivar</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
