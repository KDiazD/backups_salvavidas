<body class="fixed-left">
    <div id="wrapper">
        <div class="topbar">
            <div class="topbar-left">
                <div class="text-center">
                    <a href="<?php echo base_url(); ?>Admin" class="logo"><img src="/AssAdmin/images/logo_white_2.png" height="28"></a>
                    <a href="<?php echo base_url(); ?>Admin" class="logo-sm"><img src="/AssAdmin/images/logo_sm.png" height="36"></a>
                </div>
            </div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left"> <button type="button" class="button-menu-mobile open-left waves-effect waves-light"> <i class="ion-navicon"></i> </button> <span class="clearfix"></span></div>
                        <form class="navbar-form pull-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control search-bar" placeholder="Search...">
                            </div> <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </form>
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger">3
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li>
                                    <li class="list-group">
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-heading">Your order is placed</div>
                                                <p class="m-0"> <small>Dummy text of the printing and typesetting industry.</small></p>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">New Message received</div>
                                                    <p class="m-0"> <small>You have 87 unread messages</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item">
                                            <div class="media">
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">Your item is shipped.</div>
                                                    <p class="m-0"> <small>It is a long established fact that a reader will</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="list-group-item"> <small class="text-primary">See all notifications</small> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light">
                                    <i class="fa fa-crosshairs"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <?php $foto = $this->session->userdata('Foto'); ?>
                                    <img src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $foto ?>" alt="user-img" class="img-circle">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>Admin/Perfil">Perfil</a></li>
                                    <li><a href="javascript:void(0)"><span class="badge badge-success pull-right">5</span> Settings </a></li>
                                    <li><a href="javascript:void(0)"> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>login/salir"> Salir</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="text-center"> <img src="<?php echo base_url() ?>AssAdmin/images/users/<?php echo $foto ?>" alt="" class="img-circle"></div>
                    <div class="user-info">
                        <a href="<?php echo base_url() ?>Admin" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <?php $nombre = $this->session->userdata('Nombre');
                            $Apellido = $this->session->userdata('Apellido');
                            echo $nombre; ?>
                            <br>
                            <?php echo $Apellido; ?>
                        </a>
                        <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                    </div>
                </div>
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html" class="waves-effect"><i class="ti-home">

                                </i>
                                <span> Dashboard
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="typography.html" class="waves-effect">
                                <i class="ti-ruler-pencil"></i>
                                <span> Typography <span class="badge badge-primary pull-right">6</span>
                                </span>
                            </a>
                        </li>
                        <li class="has_sub"> <a href="" class="waves-effect">
                                <i class="ion-ios7-cart"></i>
                                <span>
                                    Tienda
                                </span>
                                <span class="pull-right">
                                    <i class="mdi mdi-plus">
                                    </i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url(); ?>Admin/Catgoria">Categoria</a></li>
                                <li><a href="<?php echo base_url();?>Admin/Producto">Producto</a></li>
                                <!--<li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-components.html">Components</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>>-->
                            </ul>
                        </li>
                        <li class="has_sub"> 
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa-dropbox"></i> <span> Servicio</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo base_url()?>Admin/TipoServi">Tipo de servicio</a></li>
                                <li><a href="<?php echo base_url()?>Admin/Servicio">Servicio</a></li>
                                <li><!--<a href="">Font awesome</a>--></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href="javascript:void(0);" class="waves-effect"><i class="ti-write"></i><span> Forms </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-wysiwyg.html">WYSIWYG Editor</a></li>
                                <li><a href="form-uploads.html">Multiple File Upload</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> Tables </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Charts </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                <li><a href="charts-other.html">Other Chart</a></li>
                            </ul>
                        </li>
                        <li class="has_sub"> <a href="javascript:void(0);" class="waves-effect"><i class="ti-map-alt"></i><span> Maps </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="maps-google.html"> Google Map</a></li>
                                <li><a href="maps-vector.html"> Vector Map</a></li>
                            </ul>
                        </li>
                        <li> <a href="calendar.html" class="waves-effect"><i class="ti-calendar"></i><span> Calendar <span class="badge badge-primary pull-right">NEW</span></span></a></li>
                        <li class="has_sub"> <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Pages </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-directory.html">Directory</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-blank.html">Blank Page</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>