
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-store menu-icon"></i>
                </span> Modificación de Categoría
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Categorías<i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- header section ends -->
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Datos de la categoría</h6>
                </div>
                <div class="card-body">
                    <form action="?c=categoria&a=Guardar" target="" method="POST" value="<?php echo $categoria->idCategoria; ?>" class="form-sample" id="formulario">
                        <input type="hidden" id="idCategoria" name="idCategoria" value="<?php echo $categoria->idCategoria; ?>" />
                        <div class="row">
                            <div class="col-md-6 formulario__grupo" id="grupo__nombreNegocio">
                                <div class="form-group row">
                                    <label for="nombreNegocio" class="col-sm-3 col-form-label formulario__label">Nombre de la categoria</label>
                                    <div class="col-sm-9 formulario__grupo-input ">
                                        <input type="text" class="form-control formulario__input" name="nombreCategoria" id="nombreCategoria" value="<?php echo $categoria->nombreCategoria; ?>" />
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre de la categoría tiene que ser de 4 a 24
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