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

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
                                        <i class="nav-icon">
                                            <svg width="30" viewBox="0 0 86 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="fc-header_logo__1sRk4">
                                                <path d="M0 .024V28h8.714V17.904h6.041l2.347-6.133H8.714V6.11h10.224l2.23-6.086H0zM23.818.024L23.795 28h8.62V.024h-8.597zM66.179 18.87l3.323-11.652 3.439 11.653h-6.762zM74.103.025H65.18L55.28 28h8.32l1.068-3.75h9.69L75.474 28h8.574L74.103.024zM38.341.024V28h8.714V17.904h6.041l2.37-6.133h-8.411V6.109h10.224L59.533.024H38.341zM82.212 2.996h.605c.093 0 .185 0 .278-.024.093 0 .163-.047.233-.07a.547.547 0 00.162-.166.509.509 0 00.07-.283.428.428 0 00-.07-.26c-.046-.07-.093-.117-.162-.14a.444.444 0 00-.233-.072c-.093 0-.162-.023-.255-.023h-.604v1.038h-.024zm-.697-1.58h1.371c.442 0 .79.07 1 .235.232.165.348.448.348.85 0 .306-.07.542-.256.707-.162.165-.395.26-.697.283l.976 1.628h-.697l-.953-1.604h-.395v1.604h-.697V1.415zM82.77 5.92c.349 0 .65-.071.953-.189.302-.141.558-.307.767-.542.209-.236.395-.52.534-.826.116-.33.186-.684.186-1.062 0-.377-.07-.73-.186-1.061-.14-.33-.302-.59-.534-.826-.233-.236-.465-.424-.767-.542a2.544 2.544 0 00-.953-.189c-.349 0-.65.07-.953.189-.302.141-.557.306-.766.542-.21.236-.395.52-.512.826a3.18 3.18 0 00-.186 1.061c0 .378.07.732.186 1.062.14.33.302.59.511.826.233.235.489.424.767.542.28.118.605.189.953.189zm0 .637a3.23 3.23 0 01-1.255-.26 3.076 3.076 0 01-1.022-.707 3.186 3.186 0 01-.674-1.038 3.364 3.364 0 01-.256-1.274 3.364 3.364 0 01.93-2.312A3.466 3.466 0 0181.515.26C81.91.071 82.33 0 82.77 0c.442 0 .86.07 1.255.26.395.165.72.4 1.022.707.28.307.535.637.697 1.038.163.401.256.826.256 1.274 0 .448-.093.873-.256 1.274a3.127 3.127 0 01-.697 1.038 2.859 2.859 0 01-1.022.707 3.23 3.23 0 01-1.255.26z" fill="#C2C7D0"></path>
                                            </svg></i>
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
                                        <i class="nav-icon">
                                            <svg version="1.1" id="svg8" inkscape:version="1.0.2-2 (e86c870879, 2021-01-15)" sodipodi:docname="Logotipo_de_Televisa.svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30" viewBox="0 0 100 44.5" enable-background="new 0 0 100 44.5" xml:space="preserve">
                                                <path d="M21.1,31.3c-0.9,0.8-2.1,1.2-3.1,1c-1.2-0.2-2-0.7-3.2-2.1l-6.1-7.5L6,25l6.6,8.2c1.4,1.7,3,2.6,4.8,2.8
                                                c2.1,0.2,3.9-0.4,5.8-1.9c1.8-1.5,2.8-3.2,3.1-5.3c0.2-1.8-0.4-3.6-1.7-5.3l-6.6-8.2l-2.7,2.2l6.1,7.5c1.2,1.5,1.5,2.3,1.4,3.6
                                                C22.6,29.5,22,30.6,21.1,31.3 M84,39.2l5-17.5c0.2-0.6,0.3-1.3-0.6-1.9l-0.7-0.5c-0.8-0.6-1.4-0.4-2,0l-15.2,9.9l3.2,1.8l11-7.1
                                                l-1.7,6l-1.4-1.1l-2.9,1.9l3.4,2.6l-1,3.4L84,39.2z M50,2.7c18.8,0,35.9,7.7,48.1,20.2l1.9-1.9C87.3,8.1,69.6,0,50,0
                                                C30.4,0,12.7,8.1,0,21.1L1.9,23C14.1,10.5,31.2,2.7,50,2.7 M50,31.4c11.5,0,21.9,5.1,29,13.1l2-1.8c-7.5-8.6-18.6-14.1-31-14.1
                                                c-12.3,0-23.4,5.5-31,14.1l2,1.8C28.1,36.5,38.5,31.4,50,31.4 M64.8,12.1l6.3,1.7l0.8-3.2l-6.4-1.7c-3-0.8-5.8-0.1-6.7,3.6
                                                l-2.9,10.9c-0.2,0.8,0.2,1.4,0.9,1.6l2.1,0.5l1.9-7l7.8,2l0.8-3.1l-7.8-2l0.4-1.6C62.4,12,63.2,11.7,64.8,12.1 M43.5,7L32.7,9.2
                                                c-0.7,0.1-1.2,0.7-1,1.6l2.3,11c0.8,3.8,3.5,4.6,6.5,4l6.5-1.3l-0.7-3.2L40,22.5c-1.7,0.3-2.4,0-2.8-1.8L37,19.1l7.9-1.6l-0.7-3.1
                                                l-7.9,1.6L35.5,12l8.6-1.8L43.5,7z" />
                                            </svg>
                                        </i>
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
                        if ($page) {
                            echo view($page);
                        }
                        ?>
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