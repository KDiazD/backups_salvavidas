<!-- content-central-->
<div class="content-central">
    <!-- Nav-->
    <nav id="menu">
        <div class="navbar yamm navbar-default">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar-collapse-1" class="navbar-collapse collapse">
                        <!-- Nav Bar Items -->
                        <ul class="nav navbar-nav">
                            <!-- News Nav Item -->
                            <li class="dropdown">
                                <a href="<?php echo base_url(); ?>" class="dropdown-toggle">
                                    Inicio
                                </a>
                            </li>
                            <!-- End News Nav Item -->
                            <!-- News Nav Item -->
                            <li class="dropdown">
                                <a href="<?php echo base_url(); ?>Tienda" class="dropdown-toggle">
                                    Tienda
                                </a>
                            </li>
                            <!-- End News Nav Item -->
                            <?php foreach ($Categorias as $Categoria) { ?>
                                <!-- News Nav Item -->
                                <li class="dropdown">
                                    <a href="<?php echo base_url(); ?>Tienda/Categoria/<?php echo $Categoria->Id_Categoria; ?>" class="dropdown-toggle">
                                        <?php echo $Categoria->Categoria; ?>
                                    </a>
                                </li>
                                <!-- End News Nav Item -->
                            <?php } ?>
                            <!-- Contact Us Nav Item -->
                            <?php $auth = $this->session->userdata('authenticated') ?>
                            <?php if ($auth == TRUE) { ?>
                                <li class="dropdown">
                                    <a href="<?php echo base_url(); ?>Tienda/Carrito">
                                        <div class="col-md-4 list-unstyled">
                                            Carrito
                                        </div>
                                    </a>
                                </li>
                            <?php } else {
                            ?>
                                <li class="dropdown">
                                    <a href="<?php echo base_url(); ?>Login">
                                        <div class="col-md-4 list-unstyled">
                                            Carrito
                                        </div>
                                    </a>
                                </li>
                            <? } ?>
                            <?php $auth = $this->session->userdata('authenticated') ?>
                            <?php if ($auth == TRUE) { ?>
                                <li class="dropdown">
                                    <a href="<?php echo base_url(); ?>login/salir">
                                        <div class="col-md-4 list-unstyled">
                                            Salir
                                        </div>
                                    </a>
                                </li>
                            <?php } else {
                            ?>
                                <li class="dropdown">
                                    <a href="<?php echo base_url(); ?>Login">
                                        <div class="col-md-4 list-unstyled">
                                            Login
                                        </div>
                                    </a>
                                </li>
                            <? } ?>

                            <!-- End Contact Us Nav Item -->
                        </ul>
                        <!-- End Nav Bar Items -->

                        <!-- Search Form -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Forms -->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
                                    <b class="glyphicon glyphicon-search"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <form class="search-Form" action="#">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search-plus"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Search" name="search" type="text" required="required">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Nav-->