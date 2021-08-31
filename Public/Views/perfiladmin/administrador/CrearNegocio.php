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

                            <form action="?c=negocios&a=Guardar" target="" method="POST" value="<?php echo $negocios->getIdNegocio(); ?>" name="formDatosPersonales">

                                <input type="hidden" id="idNegocio" name="idNegocio" value="<?php echo $negocios->getIdNegocio(); ?>" />
                                <label for="nombre">Nombre Negocio</label>
                                <input type="text" name="nombreNegocio" id="nombreNegocio" placeholder="Nombre" value="<?php echo $negocios->getNombreNegocio() ?>" /><br />

                                <label for="direccionNegocio">Direccion Negocio</label>
                                <input type="text" name="direccionNegocio" id="direccionNegocio" placeholder=" Apellido" value="<?php echo $negocios->getDireccionNegocio() ?>" /><br />

                                <label for="nitNegocio">Nit Negocio</label>
                                <input type="text" name="nitNegocio" id="nitNegocio" placeholder="Escriba el nit" value="<?php echo $negocios->getNitNegocio() ?>"  required /><br />

                                <label for="estadoNegocio">Estado Negocio: </label>
                                <select name="estadoNegocio" id="estadoNegocio">
                                <option value="<?php echo $negocios->getEstadoNegocioValue(); ?>"><?php echo $negocios->getEstadoNegocio(); ?></option>
                                    <option value="TRUE">ACTIVO</option>
                                    <option value="FALSE">INACTIVO</option>
                                </select>
                                <br />

                                <label for="idTipoNegocio">Tipo Negocio</label>
                                <select  id="idTipoNegocio" name="idTipoNegocio" required>
                                    <option value="<?php echo $negocios -> getIdTipoNegocio() ?>"><?php echo $negocios->getIdTipoNegocio() ?></option>
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
                                    <option value="<?php echo $negocios -> getIdBarrio() ?>"><?php echo $negocios->getIdBarrio() ?></option>
                                    <?php
                                    
                                    foreach ($this -> model ->llenarBarrio() as $valores):?> 

                                    <option value="<?php echo $valores -> idBarrio ?>"><?php echo $valores->nombreBarrio?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                                <br>
                                <label for="idUsuario">Codigo Usuario</label>
                                <input type="text" name="idUsuario" id="idUsuario" placeholder=" Codigo Usuario" value="<?php echo $negocios->getIdUsuario() ?>" /><br />

                                <label for="idPeticion">Codigo Petición: </label>
                                <input type="text" name="idPeticionNegocio" id="idPeticionNegocio" placeholder=" Codigo Petición" value="<?php echo $negocios->getIdPeticionNegocio() ?>" /><br />
                                <br />
                                <input type="submit" name="enviar" value="Enviar datos" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
