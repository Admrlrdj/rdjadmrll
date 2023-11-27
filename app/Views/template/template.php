<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rdjadmrll | <?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- SCRIPT -->

    <!-- jQuery -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('AdminLTE') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/script.js"></script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <label id="jam" class="nav-link"></label>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/logout') ?>" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('AdminLTE') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Rdjadmrll</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('AdminLTE') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?= session()->get('nama'); ?>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('/profile') ?>" class="nav-link <?= $menu == 'profile' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-solid fa-user"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                        <?php if (session()->get('role') != '4') { ?>
                            <li class="nav-item">
                                <a href="<?= base_url('/user') ?>" class="nav-link <?= $menu == 'user' ? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        User
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (session()->get('role') != '4') { ?>
                            <br>
                            <li class="nav-item <?= $menu == 'data' ? 'menu-open' : '' ?>">
                                <a href="#" class="nav-link <?= $menu == 'data' ? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-solid fa-database"></i>
                                    <p>
                                        Database
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('/club') ?>" class="nav-link <?= $submenu1 == 'club' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-shield-alt"></i>
                                            <p>Club</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('/country') ?>" class="nav-link <?= $submenu1 == 'country' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-flag"></i>
                                            <p>Country</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('/confederation') ?>" class="nav-link <?= $submenu1 == 'confederation' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-globe"></i>
                                            <p>Confederation</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('/group') ?>" class="nav-link <?= $submenu1 == 'group' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-users"></i>
                                            <p>Group</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('/knockout') ?>" class="nav-link <?= $submenu1 == 'knockout' ? 'active' : '' ?>">
                                            <i class="nav-icon fas fa-users"></i>
                                            <p>Knockout</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>
                        <br>
                        <li class="nav-item <?= $menu == 'football' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= $menu == 'football' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-regular fa-futbol"></i>
                                <p>
                                    Football
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item <?= $submenu1 == 'fifa' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'fifa' ? 'active' : '' ?>">
                                        <p>
                                            FIFA
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/wc22') ?>" class="nav-link <?= $submenu2 == 'wc22' ? 'active' : '' ?>">
                                                <i class="nav-icon fas fa-trophy"></i>
                                                <p>World Cup 2022</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item <?= $submenu1 == 'uefa' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'uefa' ? 'active' : '' ?>">
                                        <p>
                                            UEFA
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/cl2324') ?>" class="nav-link <?= $submenu2 == 'cl2324' ? 'active' : '' ?>">
                                                <i class="nav-icon fas fa-trophy"></i>
                                                <p>Champions League 23/24</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item <?= $submenu1 == 'fa' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'fa' ? 'active' : '' ?>">
                                        <p>
                                            FA
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/pl2324') ?>" class="nav-link <?= $submenu2 == 'premierleague' ? 'active' : '' ?>">
                                                <i class="nav-icon fas fa-trophy"></i>
                                                <p>Premier League</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item <?= $submenu1 == 'rfef' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'rfef' ? 'active' : '' ?>">
                                        <p>
                                            RFEF
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laliga2324') ?>" class="nav-link <?= $submenu2 == 'laliga' ? 'active' : '' ?>">
                                                <i class="nav-icon fas fa-trophy"></i>
                                                <p>LaLiga</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item <?= $submenu1 == 'figc' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'figc' ? 'active' : '' ?>">
                                        <p>
                                            FIGC
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/seriea2324') ?>" class="nav-link <?= $submenu2 == 'seriea' ? 'active' : '' ?>">
                                                <i class="nav-icon fas fa-trophy"></i>
                                                <p>Serie A</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item <?= $submenu1 == 'dfl' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'dfl' ? 'active' : '' ?>">
                                        <p>
                                            DFL
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/bundesliga2324') ?>" class="nav-link <?= $submenu2 == 'bundesliga' ? 'active' : '' ?>">
                                                <i class="nav-icon fas fa-trophy"></i>
                                                <p>Bundesliga</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $subjudul2 ?></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        if ($page) { ?>
                            <?php echo view($page); ?>
                        <?php } ?>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1
            </div>
            <strong>Copyright &copy; 2022-2023 <a href="#">Rdjadmrl</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>

</html>