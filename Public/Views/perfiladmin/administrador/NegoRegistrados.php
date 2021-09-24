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
                        <h2 class="mb-5">01</h2>
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
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Dirección Negocio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Nit Negocio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Estado</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Tipo Negocio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Barrio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 80px;">Nombre Propietario</th>
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
                                <div class="col">
                                    <div class="well well-sm text-right">
                                        <br>
                                        <br>
                                        <a class="btn btn-primary" href="?c=negocios&a=crudNegocio">Nuevo Negocio</a>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0 mb-1">Basic Data Table</h4>
                                    <p class="sub-header">
                                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:
                                        <code>$().DataTable();</code>.
                                    </p>

                                    <table id="basic-datatable" class="table dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                                end card body
                            </div>
                            
                        </div>
                       
                    </div>
                   --> 
    </div>
 <!-- <div class="breadcrumbs">
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
            </div>
        </div> -->