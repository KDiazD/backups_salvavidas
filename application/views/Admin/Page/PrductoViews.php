<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Producto</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">Agregar Prodcto</h3>
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
                                <center> Se a modificado el producto </center>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('EditarProFot')) { ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Se a modificado la foto del producto </center>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('EliminarPro')) { ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Se a eliminado el producto </center>
                            </div>
                        <?php } ?>
                        <div class="panel-body">
                            <form action="<?php echo base_url(); ?>Admin/AgregarPro" method="post">
                                <div class="form-group">
                                    <center><label class="col-md-12 control-label">Nombre del producto:</label></center>
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
                                    <center><label class="col-md-12 control-label">La marca del producto</label></center>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Digite la marca del producto " name="Marca" required class="form-control" />
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label class="col-md-12 control-label"> la descripcion del producto </label></center>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Digite la descripcion del producto " name="Descripcion" required class="form-control" />
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><label class="col-sm-12 ">La categoria del producto</label></center>
                                    <div class="col-sm-12">
                                        <select class="form-control" required name="Id_Categoria">
                                            <option value="">Seleciona la categoria </option>
                                            <?php foreach ($Categoria as $Categorias) { ?>
                                                <option value="<?php echo $Categorias->Id_Categoria ?>"><?php echo $Categorias->Categoria ?></option>
                                            <?php } ?>

                                        </select>
                                        <br>
                                    </div>
                                </div>
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
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Guardar">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">Producto</h3>
                            </center>
                        </div>
                        <div class="panel-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre del Producto</th>
                                        <th>Foto</th>
                                        <th>Marca del producto</th>
                                        <th>Categoria la categoria</th>
                                        <th>Descripcion del producto</th>
                                        <th>Precio al publico</th>
                                        <th>Precio asociado</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Productos as $Producto) { ?>
                                        <tr>
                                            <td><?php echo $Producto->NombrePro; ?></td>
                                            <td>
                                                <center>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModalLong<?php echo $Producto->Id_Producto; ?>">
                                                        <img alt="user-img" class="img-top" src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $Producto->FotoPro; ?>" width="100px" height="100px">
                                                    </a>
                                                </center>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalLong<?php echo $Producto->Id_Producto; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                    <form action="<?php echo base_url() ?>Admin/editarFoto" method="post">
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
                                                                        <img alt="user-img" class="img-circle" src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $Producto->FotoPro; ?>" width="150px" height="150px" id="algo">


                                                                        <input type="hidden" name="id" value="<?php echo $Producto->Id_Producto; ?>">
                                                                        <input type="file" value="<?php echo $Producto->FotoPro; ?>" name="tcarga" id="upload">
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
                                            <td><?php echo $Producto->MarcaPro; ?></td>
                                            <td><?php echo $Producto->Categoria; ?></td>
                                            <td><?php echo $Producto->DescripcionPro; ?></td>
                                            <td>$<?php echo $Producto->PrecioPro; ?></td>
                                            <td>$<?php echo $Producto->PreAsociadoPro; ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modificar<?php echo $Producto->Id_Producto; ?>">
                                                    Modificar
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="Modificar<?php echo $Producto->Id_Producto; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="<?php echo base_url() ?>Admin/Editarpro" method="post">
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
                                                                        <label class="col-md-12 control-label">Nombre de producto</label>
                                                                        <div class="col-md-12">
                                                                            <input type="" value="<?php echo $Producto->NombrePro; ?>" name="Nombre" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-12 control-label">Marca de producto</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" value="<?php echo $Producto->MarcaPro; ?>" name="Marca" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-12 control-label">Descripcion de producto</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" value="<?php echo $Producto->DescripcionPro; ?>" name="Descripcion" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-12 control-label">Precio del producto al publico</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" placeholder="$<?php echo $Producto->PreAsociadoPro; ?>" name="publico" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-12 control-label">Precio del producto al asociado</label>
                                                                        <div class="col-md-12">
                                                                            <input type="text" placeholder="$<?php echo $Producto->PreAsociadoPro; ?>" name="asociado" class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <center><label class="col-sm-12 ">La categoria del producto</label></center>
                                                                        <div class="col-sm-12">
                                                                            <select class="form-control" name="Id_Categoria">
                                                                                <?php foreach ($Categoria as $Categorias) { ?>
                                                                                    <option value="<?php echo $Categorias->Id_Categoria ?>"><?php echo $Categorias->Categoria ?></option>
                                                                                <?php } ?>

                                                                            </select>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" value="<?php echo $Producto->Id_Producto; ?>" name="Id_Producto">
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
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Eliminar<?php echo $Producto->Id_Producto; ?>">
                                                    Eliminar
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="Eliminar<?php echo $Producto->Id_Producto; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="<?php echo base_url() ?>Admin/EliminarPro" method="post">
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
                                                                        Desea elminar esta producto <samp style="color: red;"><?php echo $Producto->NombrePro; ?></samp>
                                                                        <input type="hidden" value="<?php echo $Producto->Id_Producto; ?>" name="Id_Producto">
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
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>