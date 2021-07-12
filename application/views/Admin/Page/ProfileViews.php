<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h4 class="pull-left page-title">Perfils</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Editar Perfil</h3>
                        </div>
                        <div class="panel-body">
                            <?php if ($this->session->flashdata('Editar')) { ?>
                                <div class="alert alert-warning alert-dismissible fade in">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    Se a modificado tu Perfil
                                </div>
                            <?php } ?>
                            
                            <form class="form-horizontal" action="<?php echo base_url() ?>Admin/Edit" method="post" role="form">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Nombre</label>
                                    <div class="col-md-10">
                                        <?php foreach ($Users as $User) { ?>
                                            <input type="text" value="<?php echo $User->NameUser; ?>" name="NameUsers" class="form-control" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">Apellido</label>
                                    <div class="col-md-10">
                                        <?php foreach ($Users as $User) { ?>
                                            <input type="text" value="<?php echo $User->LastNameUser; ?>" name="LastNameUsers" class="form-control" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Correo</label>
                                    <div class="col-md-10">
                                        <?php foreach ($Users as $User) { ?>
                                            <input type="text" value="<?php echo $User->EmailUser; ?>" name="EmailUsers" class="form-control" />
                                        <?php } ?>
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <label>Fecha de nacimientos</label>
                                    <div>
                                        <div class="input-group">
                                            <?php foreach ($Users as $User) { ?>
                                                <input type="date" value="<?php echo $User->FechaNacimentoUsers; ?>" name="FechaNacimentoUsers" class="form-control" />
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10 ">Seleciona el tipo de documento</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="Id_TpDocument">
                                            <option>Selecion el tipo de documento</option>
                                            <?php foreach ($TraerTpDocuemt as $TraerTpDocuemtos) { ?>
                                                <option value="<?php echo $TraerTpDocuemtos->Id_TpDocument ?>"><?php echo $TraerTpDocuemtos->Documento; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-10">Numero del documento</label>
                                    <div class="col-md-10">
                                        <?php foreach ($Users as $User) { ?>
                                            <input type="text" value="<?php echo $User->NumDocumentUsers; ?>" name="NumDocumentUsers" class="form-control" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de expedicion</label>
                                    <div>
                                        <div class="input-group">
                                            <?php foreach ($Users as $User) { ?>
                                                <input type="date" value="<?php echo $User->FechaExpedi; ?>" name="FechaExpedi" class="form-control" />
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-10 ">Pais:Colombia</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="Id_Pais">
                                            <option value="">Seleciona tu pais </option>
                                            <?php foreach ($traerPaises as $traerPaise) { ?>
                                                <option value="<?php echo $traerPaise->Id_Pais ?>"><?php echo $traerPaise->nombre; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-10">Ciudad</label>
                                    <div class="col-md-10">
                                        <?php foreach ($Users as $User) { ?>
                                            <input type="text" value="<?php echo $User->CityUsers; ?>" name="Ciudad" class="form-control" />
                                        <?php } ?>
                                    </div>
                                </div>

                                <?php foreach ($Users as $User) { ?>
                                    <input type="hidden" value="<?php echo $User->Id_User; ?>" name="Id_User" class="form-control" />
                                <?php } ?>

                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Guardar">

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-color panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php $nombre = $this->session->userdata('Nombre');
                                $Apellido = $this->session->userdata('Apellido');
                                echo $nombre . ' ' . $Apellido; ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                        <?php if ($this->session->flashdata('password')) { ?>
                                <div class="alert alert-warning alert-dismissible fade in">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                   Se a modificado la contraseña 
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('erropassword')) { ?>
                                <div class="alert alert-danger alert-dismissible fade in">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                  La contraseña actual es incorrecta
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('NoConsidenpassword')) { ?>
                                <div class="alert alert-danger alert-dismissible fade in">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                 No coinciden las contraseñas 
                                </div>
                            <?php } ?>

                            <center>
                                <?php $foto = $this->session->userdata('Foto'); ?>
                                <a href="#" data-toggle="modal" data-target="#exampleModalLong">
                                    <img alt="user-img" class="img-circle" src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $foto ?>" width="250px" height="250px">
                                </a>
                            </center>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <form action="<?php echo base_url() ?>Admin/EditFoto" method="post">
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
                                                    <img alt="user-img" class="img-circle" src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $foto ?>" width="150px" height="150px" id="algo">

                                                    <?php foreach ($Users as $User) { ?>
                                                        <input type="hidden" name="id" value="<?php echo $User->Id_User; ?>">
                                                    <? } ?>
                                                    <input type="file" name="tcarga" id="upload">
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
                            <hr>
                            <form class="form-horizontal" action="<?php echo base_url(); ?>Admin/EditarPasss" method="post">
                                <div class="form-group">
                                    <center>
                                        <h4>Cambiar contraseña</h4>
                                    </center>
                                    <div class="col-md-12">
                                        <input type="password" placeholder="Digite tu al actual contraseña" required name="ActualPass" class="form-control" /><br>
                                        <input type="password" placeholder="Digite tu nuva contraseña" required name="NewPass" class="form-control" /><br>
                                        <input type="password" placeholder="Confirme su contraseña" required name="ConPass" class="form-control" />

                                        <?php foreach ($Users as $User) { ?>
                                            <input type="hidden" value="<?php echo $User->Id_User; ?>" name="Id_User" class="form-control" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Guardar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>