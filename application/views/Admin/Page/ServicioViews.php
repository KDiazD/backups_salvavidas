<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Servicio</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">Agregar Servicio</h3>
                            </center>
                        </div>
                        <?php if ($this->session->flashdata('Guardar')) { ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Sea guardado exitosamente</center>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('EditarPro')) { ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Se a modificado el servicio </center>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('EditarProFot')) { ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Se a modificado la foto del servicio </center>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('EliminarPro')) { ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Se a eliminado el el servicio </center>
                            </div>
                        <?php } ?>
                        <div class="panel-body">
                            <form action="<?php echo base_url(); ?>Admin/AgregarServi" method="post">
                                <div class="form-group">
                                    <center><label class="col-md-12 control-label">Nombre del Servicio:</label></center>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Digite el nombre del producto " name="Nombre" required class="form-control" />
                                        <br>
                                    </div>
                                </div>
                                <center><label for="Imagen">Foto:</label></center>
                                <center>
                                    <img alt="Producto-img" class="img-top" src="AssAdmin/images/users/" width="150px" height="150px" id="algo">



                                    <input type="file" name="tcarga" id="upload">

                                </center>
                                <script>
                                    document.getElementById("upload").onchange = function() {
                                        var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                                        reader.onload = function(e) {
                                            document.getElementById("algo").src = e.target.result;
                                        };
                                        // read the image file as a data URL.
                                        reader.readAsDataURL(this.files[0]);
                                    };
                                </script>
                                <br>
                                <div class="form-group">
                                    <center><label class="col-md-12 control-label"> la descripcion del Servicio </label></center>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Digite la descripcion del producto " name="Descripcion" required class="form-control" />
                                        <br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <center><label class="col-sm-12 ">El tipo de servicio</label></center>
                                    <div class="col-sm-12">
                                        <select class="form-control" required name="Id_TipoServicio">
                                            <option value="">Seleciona el tipo de servicio </option>
                                            <?php foreach ($TpServicios as $Servicio) { ?>
                                                <option value="<?php echo $Servicio->Id_TipoServicio ?>"><?php echo $Servicio->TipoServicio ?></option>
                                            <?php } ?>

                                        </select>
                                        <br>
                                    </div>
                                </div>
                                <!--
                                <div class="form-group">
                                    <center><label class="col-md-12 control-label">El precio del producto al publico</label></center>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Digite el precio del producto al publico" name="PrecioPubli" required class="form-control" />
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label class="col-md-12 control-label">El precio del producto asociado</label></center>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Digite el precio del producto asociado" name="PrecioAsoci" required class="form-control" />
                                        <br>
                                    </div>
                                </div>-->
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Guardar">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">Servicio </h3>
                            </center>
                        </div>
                        <div class="panel-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre del Producto</th>
                                        <th>Foto</th>
                                        <th>tipo de servicio</th>
                                        <th>Descripcion del servicio</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Servicios as $Servicio) { 
                                    ?>
                                    <tr>
                                        <td><?php echo $Servicio->NombreServi;?></td>
                                        <td>
                                            <center>
                                                <a href="#" data-toggle="modal" data-target="#exampleModalLong<?php echo $Servicio->Id_servicio;?>">
                                                    <img alt="user-img" class="img-top" src="<?php echo base_url();?>AssAdmin/images/users/<?php echo $Servicio->FotoSerci; ?>" width="100px" height="100px">
                                                </a>
                                            </center>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong<?php echo $Servicio->Id_servicio;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <form action="<?php echo base_url() ?>Admin/EditarFotoServi" method="post">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Cambiar Imagen</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <center><label for="Imagen">Foto:</label></center>
                                                                <center>
                                                                    <img alt="user-img" class="img-circle" src="<?php echo base_url();?>AssAdmin/images/users/<?php echo $Servicio->FotoSerci; ?>" width="150px" height="150px" id="algo">
                                                                    <input type="hidden" name="id" value="<?php echo $Servicio->Id_servicio;?>">
                                                                    <input type="file" value="<?php echo $Servicio->FotoSerci; ?>" name="tcarga" id="upload">
                                                            </div>
                                                            </center>
                                                            <script>
                                                                document.getElementById("upload").onchange = function() {
                                                                    var reader = new FileReader(); //instanciamos el objeto de la api FileReader

                                                                    reader.onload = function(e) {
                                                                        document.getElementById("algo").src = e.target.result;
                                                                    };
                                                                    // read the image file as a data URL.
                                                                    reader.readAsDataURL(this.files[0]);
                                                                };
                                                            </script>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td><?php echo $Servicio->TipoServicio; ?></td>
                                        <td><?php echo $Servicio->DescricionServi;?></td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modificar<?php echo $Servicio->Id_servicio;?>">
                                                Modificar
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modificar<?php echo $Servicio->Id_servicio;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <form action="<?php echo base_url()?>Admin/ModificarServi" method="post">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modeficar</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label class="col-md-12 control-label">Nombre de servicio</label>
                                                                    <div class="col-md-12">
                                                                        <input type="" value="<?php echo $Servicio->NombreServi;?>" name="Nombre" class="form-control" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-12 control-label">Descripcion de servicio</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" value="<?php echo $Servicio->DescricionServi; ?>" name="Descripcion" class="form-control" />
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <center><label class="col-sm-12 ">El tipo de servicio</label></center>
                                                                    <div class="col-sm-12">
                                                                        <select class="form-control" required name="Id_TipoServicio">
                                                                            <option value="">Seleciona el tipo de servicio </option>
                                                                            <?php foreach ($TpServicios as $ServicioTpd) { ?>
                                                                                <option value="<?php echo $ServicioTpd->Id_TipoServicio; ?>"><?php echo $ServicioTpd->TipoServicio; ?></option>
                                                                            <?php } ?>

                                                                        </select>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" value="  <?php echo $Servicio->Id_servicio;?>" name="Id_servicio">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-warning">Modificar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Eliminar<?php echo $Servicio->Id_servicio;?>">
                                                Eliminar
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Eliminar<?php echo $Servicio->Id_servicio;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <form action="<?php echo base_url() ?>Admin/EliminarServi" method="post">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    Desea elminar esta servicio <samp style="color: red;"><?php echo $Servicio->NombreServi;?></samp>
                                                                    <input type="hidden" value="<?php echo $Servicio->Id_servicio;?>" name="Id_servicio">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php  }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>