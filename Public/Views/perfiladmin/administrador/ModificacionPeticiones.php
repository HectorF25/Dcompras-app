
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-store menu-icon"></i>
                </span> Modificación de Peticiones
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Peticiones de Negocios<i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- header section ends -->
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Datos de la Petición</h6>
                </div>
                <div class="card-body">
                    <form action="?c=negocios1&a=Guardar" target="" method="POST" value="<?php echo $negocios->idPeticionNegocio; ?>" class="form-sample" id="formulario">
                        <input type="hidden" id="idPeticionNegocio" name="idPeticionNegocio" value="<?php echo $negocios->idPeticionNegocio; ?>" />


                        <div class="row">

                            <div class="col-md-6 formulario__grupo" id="grupo__nombreNegocio">
                                <div class="form-group row">
                                    <label for="nombreNegocio" class="col-sm-3 col-form-label formulario__label">Nombre del negocio</label>
                                    <div class="col-sm-9 formulario__grupo-input">
                                        <input type="text" class="form-control formulario__input" name="nombreNegocio" id="nombreNegocio" value="<?php echo $negocios->nombreNegocio ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre del negocio tiene que ser de 4 a 24
                                        dígitos y solo puede contener numeros, letras y guion bajo.</p>
                                </div>
                            </div>

                        <div class="col-md-6 formulario__grupo" id="grupo__nombreNegocio">
                        <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label formulario__label">Nombre del propietario</label>
                        <div class="col-sm-9  formulario__grupo-input">
                            <input type="text" class="form-control formulario__input" name="nombrePropietario" id="nombreNegocio" value="<?php echo $negocios->nombrePropietario ?>">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El nombre del propietario tiene que ser de 4 a 24
                                        dígitos y solo puede contener numeros, letras y guion bajo.</p>
                        </div>
                        </div>
                        </div>
                        <div class="row">

                        <div class="col-md-6 formulario__grupo" id="grupo__nitNegocio">
                                <div class="form-group row">
                                    <label for="nitNegocio" class="col-sm-3 col-form-label formulario__label">Nit del negocio</label>
                                    <div class="col-sm-9 formulario__grupo-input">
                                        <input type="text" class="form-control formulario__input" name="nitNegocio" id="nitNegocio" placeholder="800.197.268-4" value="<?php echo $negocios->nitNegocio ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nit solo puede contener numeros, puntos y guiones.</p>
                                </div>
                            </div>

                            <div class="col-md-6 formulario__grupo" id="grupo__nombreNegocio">
                                <div class="form-group row">
                                    <label for="nombreNegocio" class="col-sm-3 col-form-label formulario__label">Nombre del tipo de negocio</label>
                                    <div class="col-sm-9 formulario__grupo-input">
                                        <input type="text" class="form-control formulario__input" name="nombreTipoNegocio" id="nombreNegocio" placeholder="800.197.268-4" value="<?php echo $negocios->nombreTipoNegocio ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre del tipo de negocio tiene que ser de 4 a 24
                                        dígitos y solo puede contener numeros, letras y guion bajo.</p>
                                </div>
                            </div>
                            </div>

                        <div class="row">


                        <div class="col-md-6 formulario__grupo" id="grupo__telefonoNegocio">
                                <div class="form-group row">
                                    <label for="telefonoNegocio" class="col-sm-3 col-form-label formulario__label">Teléfono del negocio</label>
                                    <div class="col-sm-9 formulario__grupo-input">
                                        <input type="number" class="form-control formulario__input" name="telefonoNegocio"
                                            id="telefonoNegocio" placeholder="1234567"
                                            value="<?php echo $negocios->telefonoNegocio ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El telefono solo puede contener numeros</p>
                                </div>
                            </div>


                            
                        <div class="col-md-6 formulario__grupo" id="grupo__fechaFundacion">
                                <div class="form-group row">
                                    <label for="fechaFundacion" class="col-sm-3 col-form-label formulario__label">Fecha de fundación</label>
                                    <div class="col-sm-9 formulario__grupo-input">
                                        <input type="date" class="form-control formulario__input" name="fechaFundacion"
                                            id="fechaFundacion" value="<?php echo $negocios->fechaFundacion ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                </div>
                            </div>

                            

                            </div>
                       

                      

                            

                            <div class="row">
                            <div class="col-md-6 formulario__grupo" id="grupo__fechaFundacion">
                                <div class="form-group row">
                                    <label for="fechaFundacion" class="col-sm-3 col-form-label formulario__label">Razón social</label>
                                    <div class="col-sm-9 formulario__grupo-input">
                                    <input type="textarea" class="form-control formulario__input" name="razonsocialNegocio"
                                             value="<?php echo $negocios->razonsocialNegocio ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                </div>
                            </div>
                            </div>


                            <button type="submit" class="btn btn-gradient-primary crear" style="float: right;">Actualizar Datos</button>

                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/formModficarNegocio.js"></script>