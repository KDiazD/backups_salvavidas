<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Categoria</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">Agregar categoria</h3>
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
                        <?php if ($this->session->flashdata('EditarCategor')) { ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Se a modificado el producto </center>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('EliminarCategor')) { ?>
                            <div class="alert alert-danger alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <center> Se a eliminado el producto </center>
                            </div>
                        <?php } ?>
                        <div class="panel-body">
                            <form action="<?php echo base_url(); ?>Admin/AgregarCategoria" method="post">
                                <div class="form-group">
                                    <center><label class="col-md-12 control-label">Categria:</label></center>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Digite la categoria" name="categoria" required class="form-control" />
                                        <br>
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Guardar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title">Tabla</h3>
                            </center>
                        </div>
                        <div class="panel-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Categoria as $Categorias) { ?>
                                        <tr>
                                            <td><?php echo $Categorias->Categoria ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modificar<?php echo $Categorias->Id_Categoria ?>">
                                                  Modificar
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="Modificar<?php echo $Categorias->Id_Categoria ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="<?php echo base_url()?>Admin/modificarCategoria" method="post">
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
                                                                        <label class="col-md-3 control-label">Nombre</label>
                                                                        <div class="col-md-12">
                                                                                <input type="text" value="<?php echo $Categorias->Categoria ?>" name="Categoria" class="form-control" />
                                                                                <input type="hidden" value="<?php echo $Categorias->Id_Categoria ?>" name="Id_categoria">
                                                                        </div>
                                                                    </div>
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
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $Categorias->Id_Categoria ?>">
                                                    Eliminar
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal<?php echo $Categorias->Id_Categoria ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="<?php echo base_url()?>Admin/EliminarCatego" method="post">
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
                                                                    Desea elminar esta categoria <samp style="color: red;"><?php echo $Categorias->Categoria ?></samp>
                                                                    <input type="hidden" value="<?php echo $Categorias->Id_Categoria ?>" name="Id_categoria">
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
                                    <? } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>