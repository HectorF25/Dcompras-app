<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Modificar</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">

                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tablero</a></li>

                            <li class="active">Datos a Modificar</li>
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

                            <form action="?c=negocios&a=Guardar" target="" method="POST" value="<?php echo $negocios->idNegocio; ?>" name="formDatosPersonales">

                                <input type="hidden" id="idNegocio" name="idNegocio" value="<?php echo $negocios->idNegocio; ?>" />
                                <label for="nombre">Nombre Negocio</label>
                                <input type="text" name="nombreNegocio" id="nombreNegocio" placeholder="Nombre" value="<?php echo $negocios->nombreNegocio ?>" /><br />

                                <label for="direccionNegocio">Direccion Negocio</label>
                                <input type="text" name="direccionNegocio" id="direccionNegocio" placeholder=" Apellido" value="<?php echo $negocios->direccionNegocio ?>" /><br />

                                <label for="nitNegocio">Nit Negocio</label>
                                <input type="text" name="nitNegocio" id="nitNegocio" placeholder="Escriba el nit" value="<?php echo $negocios->nitNegocio ?>"  required /><br />

                                <label for="estadoNegocio">Estado Negocio: </label>
                                <select name="estadoNegocio" id="estadoNegocio">
                                <option value="<?php echo $negocios->estadoNegocio; ?>"><?php if($negocios->estadoNegocio==TRUE){echo "ACTIVO";}else{echo "INACTIVO";} ?></option>
                                    <option value="1">ACTIVO</option>
                                    <option value="0">INACTIVO</option>
                                </select>
                                <br />

                                <label for="idTipoNegocio">Tipo Negocio</label>
                                <select  id="idTipoNegocio" name="idTipoNegocio" required>
                                    <option value="<?php echo $negocios -> idTipoNegocio ?>"><?php echo $negocios->nombreTipoNegocio ?></option>
                                    <?php
                                    
                                    foreach ($this -> model ->ListarNegocio() as $valores):?> 

                                    <option value="<?php echo $valores -> idTipoNegocio ?>"><?php echo $valores->nombreTipoNegocio?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                                <br>

                                <label for="idBarrio">Nombre Barrio</label>
                                <select  id="idBarrio" name="idBarrio" required>
                                    <option value="<?php echo $negocios -> idBarrio ?>"><?php echo $negocios->nombreBarrio ?></option>
                                    <?php
                                    
                                    foreach ($this -> model ->llenarBarrio() as $valores):?> 

                                    <option value="<?php echo $valores -> idBarrio ?>"><?php echo $valores->nombreBarrio?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                                <br>
                                <label for="idUsuario">Codigo Usuario</label>
                                <input type="text" name="idUsuario" id="idUsuario" placeholder=" Codigo Usuario" value="<?php echo $negocios->idUsuario ?>" /><br />

                                <label for="idPeticion">Codigo Petición: </label>
                                <input type="text" name="idPeticionNegocio" id="idPeticionNegocio" placeholder=" Codigo Petición" value="<?php echo $negocios->idPeticionNegocio ?>" /><br />
                                <br />
                                <input type="submit" name="enviar" value="Enviar datos" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
