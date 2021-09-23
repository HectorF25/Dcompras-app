
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-contacts menu-icon"></i>
                </span> Usuarios
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Informacion usuarios<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Usuarios Registrados <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo $this->model->contarRegistros(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Usuarios Inactivos <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo $this->model->contarUsuariosInactivos(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3" style="color: white;">Usuarios sin verificar <i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo $this->model->contarUsuariosSinVerificar(); ?></h2>
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
                                    <a class="btn btn-gradient-primary mr-2 float-left" href="?c=administrador&a=crudUsuarios">Nuevo Usuario</a>
                                    <a class="btn btn-gradient-primary mr-2 float-right" href="ReportePDF_Usuarios.php">Generar reporte</a>

                                    <br><br><br><br>

                                       <table id="tablaUsu" class="table table-striped">

                                            <thead>

                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 50px;">Usuario</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nombre: activate to sort column descending" style="width: 120px;">Nombre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Rol: activate to sort column ascending" style="width: 140px;">Correo</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Ciudad: activate to sort column ascending" style="width: 169.889px;">Contraseña</th> -->
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 100px;">Estado</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 60px;">Accion</th>
                                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 60px;">Inactivar</th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <?php foreach ($this->model->Listar() as $r) : ?>
                                                    <tr role="row" class="odd">
                                                        <td><img src="./<?php echo $r->imgUsuario; ?>" alt="image" /></td>
                                                        <td><?php echo $r->nombreUsuario; ?>&nbsp;<?php echo $r->apellidoUsuario; ?></td>
                                                        <td><?php echo $r->correoUsuario; ?></td>
                                                        <!-- <td><?php /* echo password_hash($r->contraseñaUsuario, PASSWORD_DEFAULT); */ ?></td> -->
                                                        <td><?php if ($r->estadoUsuario == TRUE) {
                                                                echo "ACTIVO";
                                                            } else {
                                                                echo "INACTIVO";
                                                            }  ?></td>
                                                        <td>
                                                            <a id="btn-abrir-popup" href="?c=administrador&a=crudUsuarios&idUsuario=<?php echo $r->idUsuario; ?>" class="btn-abrir-popup">Modificar</a>
                                                        </td>
                                                        <td>
                                                            <a id="btn-abrir-popup" href="?c=administrador&a=crudUsuarios&idUsuario=<?php echo $r->idUsuario; ?>" class="btn-abrir-popup">Inactivar</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                                       
                                        </table>

                                    </div>
                                </div>
                               
                            </div>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>