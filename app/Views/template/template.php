<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rdjadmrll | <?= $title ?></title>

    <link rel="website icon" type="png" href="<?= base_url('AdminLTE') ?>/dist/img/AdminLTELogo.png">

    <!-- STYLE -->

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
                                <!-- UCL -->
                                <li class="nav-item <?= $submenu1 == 'uefa' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'uefa' ? 'active' : '' ?>">
                                        <p>
                                            UEFA
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <!-- 23/24 -->
                                        <li class="nav-item <?= $submenu2 == 'cl2324' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'cl2324' ? 'active' : '' ?>">
                                                <p>
                                                    Champions League 23/24
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/cl2324standings') ?>" class="nav-link <?= $submenu3 == 'cl2324standings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/cl2324stats') ?>" class="nav-link <?= $submenu3 == 'cl2324stats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- 22/23 -->
                                        <li class="nav-item <?= $submenu2 == 'cl2223' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'cl2223' ? 'active' : '' ?>">
                                                <p>
                                                    Champions League 22/23
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/cl2223standings') ?>" class="nav-link <?= $submenu3 == 'cl2223standings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/cl2223stats') ?>" class="nav-link <?= $submenu3 == 'cl2223stats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <br>
                            <ul class="nav nav-treeview">
                                <!-- English -->
                                <li class="nav-item <?= $submenu1 == 'fa' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'fa' ? 'active' : '' ?>">
                                        <p>
                                            English
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item <?= $submenu2 == 'premierleague' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'premierleague' ? 'active' : '' ?>">
                                                <p>
                                                    Premier League
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/plstandings') ?>" class="nav-link <?= $submenu3 == 'plstandings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/plstats') ?>" class="nav-link <?= $submenu3 == 'plstats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Spain -->
                                <li class="nav-item <?= $submenu1 == 'rfef' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'rfef' ? 'active' : '' ?>">
                                        <p>
                                            Spain
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item <?= $submenu2 == 'laliga' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'laliga' ? 'active' : '' ?>">
                                                <p>
                                                    LaLiga
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/llstandings') ?>" class="nav-link <?= $submenu3 == 'llstandings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/llstats') ?>" class="nav-link <?= $submenu3 == 'llstats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Italy -->
                                <li class="nav-item <?= $submenu1 == 'figc' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'figc' ? 'active' : '' ?>">
                                        <p>
                                            Italy
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item <?= $submenu2 == 'seriea' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'seriea' ? 'active' : '' ?>">
                                                <p>
                                                    Serie A
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/sastandings') ?>" class="nav-link <?= $submenu3 == 'sastandings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/sastats') ?>" class="nav-link <?= $submenu3 == 'sastats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Germany -->
                                <li class="nav-item <?= $submenu1 == 'dfl' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'dfl' ? 'active' : '' ?>">
                                        <p>
                                            Germany
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item <?= $submenu2 == 'bundesliga' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'bundesliga' ? 'active' : '' ?>">
                                                <p>
                                                    Bundesliga
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/blstandings') ?>" class="nav-link <?= $submenu3 == 'blstandings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/blstats') ?>" class="nav-link <?= $submenu3 == 'blstats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- France -->
                                <li class="nav-item <?= $submenu1 == 'fff' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'fff' ? 'active' : '' ?>">
                                        <p>
                                            France
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item <?= $submenu2 == 'ligue1' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'ligue1' ? 'active' : '' ?>">
                                                <p>
                                                    Ligue 1
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/lg1standings') ?>" class="nav-link <?= $submenu3 == 'lg1standings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/lg1stats') ?>" class="nav-link <?= $submenu3 == 'lg1stats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Indonesia -->
                                <li class="nav-item <?= $submenu1 == 'pssi' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'pssi' ? 'active' : '' ?>">
                                        <p>
                                            Indonesia
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item <?= $submenu2 == 'liga1' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'liga1' ? 'active' : '' ?>">
                                                <p>
                                                    Liga 1
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/l1standings') ?>" class="nav-link <?= $submenu3 == 'l1standings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/l1stats') ?>" class="nav-link <?= $submenu3 == 'l1stats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Saudi Arabia -->
                                <li class="nav-item <?= $submenu1 == 'saff' ? 'menu-open' : '' ?>">
                                    <a href="#" class="nav-link <?= $submenu1 == 'saff' ? 'active' : '' ?>">
                                        <p>
                                            Saudi Arabia
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item <?= $submenu2 == 'roshn' ? 'menu-open' : '' ?>">
                                            <a href="#" class="nav-link <?= $submenu2 == 'roshn' ? 'active' : '' ?>">
                                                <p>
                                                    ROSHN Saudi League
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/splstandings') ?>" class="nav-link <?= $submenu3 == 'splstandings' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-list"></i>
                                                        <p>Standings</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('/splstats') ?>" class="nav-link <?= $submenu3 == 'splstats' ? 'active' : '' ?>">
                                                        <i class="nav-icon fas fa-chart-bar"></i>
                                                        <p>Stats</p>
                                                    </a>
                                                </li>
                                            </ul>
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