
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-store menu-icon"></i>
                </span> Modificación de Negocios
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Negocios<i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- header section ends -->
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Datos del negocio</h6>
                </div>
                <div class="card-body">
                    <form action="?c=negocios&a=Guardar" target="" method="POST" value="<?php echo $negocios->idNegocio; ?>" class="form-sample" id="formulario">
                        <input type="hidden" id="idNegocio" name="idNegocio" value="<?php echo $negocios->idNegocio; ?>" />
                        <input type="hidden" id="idPeticionNegocio" name="idPeticionNegocio" value="1" />


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

                        <div class="col-md-6 formulario__grupo" id="grupo__direccionNegocio">
                        <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label formulario__label">Dirección del negocio</label>
                        <div class="col-sm-9  formulario__grupo-input">
                            <input type="text" class="form-control formulario__input" name="direccionNegocio" id="direccionNegocio" value="<?php echo $negocios->direccionNegocio ?>">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">La dirección puede incluir letras, numero y simbolos.</p>
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

                            <div class="col-md-6" id="grupo__estadoNegocio">
                                <div class="form-group row">
                                    <label for="estadoNegocio" class="col-sm-3 col-form-label formulario__label" class="col-sm-3 col-form-label">Estado</label>
                                    <div class="col-sm-9 formulario__grupo-input ">
                                    <select class="formulario__input form-control" name="estadoNegocio" id="estadoNegocio">
                                    <option value="<?php echo $negocios->estadoNegocio; ?>"><?php if($negocios->estadoNegocio==TRUE){echo "ACTIVO";}else{echo "INACTIVO";} ?></option>
                                    <option value="1">ACTIVO</option>                         
                                    <option value="FALSE">INACTIVO</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

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
                            </div>
                       

                        <div class="row">

                            <div class="col-md-6" id="grupo__TipoNegocio">
                                <div class="form-group row">
                                    <label for="TipoNegocio" class="col-sm-3 col-form-label formulario__label" class="col-sm-3 col-form-label">Tipo de negocio</label>
                                    <div class="col-sm-9 formulario__grupo-input ">
                                    <select class="formulario__input form-control" id="idTipoNegocio" name="idTipoNegocio" required>
                                    <option value="<?php echo $negocios -> idTipoNegocio ?>"><?php echo $negocios->nombreTipoNegocio; ?></option>
                                    
                                    <?php
                                    
                                    foreach ($this -> model ->llenarTipo() as $valores):?> 

                                        <option value="<?php echo $valores -> idTipoNegocio ?>"><?php echo $valores->nombreTipoNegocio?></option>
                                        <?php
                                        endforeach;
                                        
                                    ?>
                                </select>                                    
                                     </div>
                                </div>
                            </div>

                            <div class="col-md-6" id="grupo__nombreBarrio">
                                <div class="form-group row">
                                    <label for="nombreBarrio" class="col-sm-3 col-form-label formulario__label" >Nombre del barrio</label>
                                    <div class="col-sm-9 formulario__grupo-input ">
                                    <select class="formulario__input form-control" id="idBarrio" name="idBarrio" required>
                                <option value="<?php echo $negocios -> idBarrio ?>"><?php echo $negocios->nombreBarrio ?></option>
                                    <?php
                                    
                                    foreach ($this -> model ->llenarBarrio() as $valores):?> 

                                    <option value="<?php echo $valores -> idBarrio ?>"><?php echo $valores->nombreBarrio?></option>
                                    <?php
                                    endforeach;
                                    
                                    ?>
                                </select>                                   
                                     </div>
                                </div>
                            </div>
                            </div>

                            <div class="row">

                            <div class="col-md-6" id="grupo__idUsuario">
                                <div class="form-group row">
                                    <label for="idUsuario" class="col-sm-3 col-form-label formulario__label" class="col-sm-3 col-form-label">Propietario</label>
                                    <div class="col-sm-9 formulario__grupo-input ">
                                    <select class="formulario__input form-control" id="idUsuario" name="idUsuario" required>
                                 <option value="<?php echo $negocios -> idUsuario ?>"><?php echo $negocios->nombreUsuario." ".$negocios->apellidoUsuario; ?></option>
        
                                    <?php
        
                                    foreach ($this -> model ->llenarUser() as $valores):?> 

                                        <option value="<?php echo $valores -> idUsuario ?>"><?php echo $valores->nombreUsuario." ".$valores->apellidoUsuario?></option>
                                        <?php
                                        endforeach;
            
                                    ?>
                                </select>                                    
                                     </div>
                                </div>
                            </div>

                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2 crear" style="float: right;">Actualizar Datos</button>

                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/formModficarNegocio.js"></script>