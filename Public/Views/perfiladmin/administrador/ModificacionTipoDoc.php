<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-store menu-icon"></i>
                </span> Modificación de Tipos de documento
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Tipos de documento<i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- header section ends -->
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Datos del tipo de documento</h6>
                </div>
                <div class="card-body">
                    <form action="?c=documento&a=Guardar" target="" method="POST" value="<?php echo $documento->idTipoDoc; ?>" class="form-sample" id="formulario">
                        <input type="hidden" id="idTipoDoc" name="idTipoDoc" value="<?php echo $documento->idTipoDoc; ?>" />
                        <div class="row">
                            <div class="col-md-6 formulario__grupo" id="grupo__nombreNegocio">
                                <div class="form-group row">
                                    <label for="nombreNegocio" class="col-sm-3 col-form-label formulario__label">Nombre del tipo de documento</label>
                                    <div class="col-sm-9 formulario__grupo-input ">
                                        <input type="text" class="form-control formulario__input" name="nombreTipoDoc" id="nombreTipoDoc" value="<?php echo $documento->nombreTipoDoc; ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre del tipo de documento tiene que ser de 4 a 24
                                        dígitos y solo puede contener numeros, letras y guion bajo.</p>
                                </div>
                            </div>
                        <div class="row">
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