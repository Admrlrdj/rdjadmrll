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
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Rdj</b>admrll</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">

                <p class="login-box-msg">Register a new membership</p>

                <?php $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger alert-dismissible mb-3">
                        <ul>
                            <?php foreach ($errors as $key => $error) { ?>
                                <li><?= esc($error) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php if (session()->getFlashdata('gagal')) {
                    echo '<div class="alert alert-danger alert-dismissible"> <i class="icon fas fa-times"></i>';
                    echo session()->getFlashdata('gagal');
                    echo '</div>';
                } ?>
                <?php if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible"> <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5></div>';
                } ?>

                <form action="valid-register" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="repassword" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="telp" class="form-control" placeholder="Nomor Handphone">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-birth" hidden></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="jenkel" class="form-control">
                            <option value="1" <?= session()->get('jenkel') == '1' ? 'Selected' : '' ?>>Laki - Laki</option>
                            <option value="2" <?= session()->get('jenkel') == '2' ? 'Selected' : '' ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="row">
                        <!-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <a href="login" class="m-auto text-center">I already have a membership</a>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div> -->
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
    <!-- Toastr -->
    <script src="<?= base_url('AdminLTE') ?>/plugins/toastr/toastr.min.js"></script>
    <script src="<?= base_url('assets') ?>/js/auth.js"></script>
</body>

</html>