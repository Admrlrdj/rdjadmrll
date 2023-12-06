<div class="col-md-3">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">

        <?php $errors = session()->getFlashdata('errors');
        if (!empty($errors)) { ?>
            <div class="alert alert-danger alert-dismissible mb-3">
                <ul>
                    <?php foreach ($errors as $key => $error) {  ?>
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

        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('AdminLTE') ?>/dist/img/user2-160x160.jpg" alt=" User profile picture">
            </div>
            <h3 class="profile-username text-center"><?= session()->get('nama'); ?> <?php if (session()->get('role') != '4') { ?> <i class="fas fa-check-circle" style="color: #005eff;"> <?php } ?></i></h3>

            <p class="text-muted text-center"><?php
                                                if (session()->get('role') == '1') {
                                                    echo 'Owner';
                                                } elseif (session()->get('role') == '2') {
                                                    echo 'Admin';
                                                } elseif (session()->get('role') == '3') {
                                                    echo 'Petugas';
                                                } elseif (session()->get('role') == '4') {
                                                    echo 'Warga';
                                                }
                                                ?></p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?= session()->get('username'); ?></a>
                </li>
                <li class="list-group-item">
                    <b>Password</b>
                    <a class="float-right">
                        <span id="password">********</span>
                        <button class="btn btn-link btn-sm" id="showPasswordBtn">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </a>
                </li>
                <li class="list-group-item">
                    <b>Tanggal Lahir</b> <a class="float-right"><?= date('d F Y', strtotime(session()->get('tgl_lahir'))); ?></a>
                </li>
                <li class="list-group-item">
                    <b>Jenis Kelamin</b> <a class="float-right"><?php
                                                                if (session()->get('jenkel') === '1') {
                                                                    echo 'Laki - Laki';
                                                                } elseif (session()->get('jenkel') === '2') {
                                                                    echo 'Perempuan';
                                                                } else {
                                                                    echo 'Jenkel Tidak Valid!';
                                                                }
                                                                ?></a>
                </li>
                <li class="list-group-item">
                    <b>No. Telepon</b> <a class="float-right"><?= session()->get('telp'); ?></a>
                </li>
            </ul>
            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-profile<?= session()->get('id_user') ?>"><i class="fas fa-pencil-alt"></i></button>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- /edit-modal -->
<?php foreach ($profile as $key => $value) { ?>
    <div class="modal fade" id="edit-profile<?= $value['id_user'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('/update-profile/' . $value['id_user']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input name="nama" class="form-control" value="<?= $value['nama'] ?>" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="username" class="form-control" value="<?= $value['username'] ?>" placeholder="Masukkan Username" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" value="<?= $value['password'] ?>" placeholder="Masukkan Password" required>
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" class="form-control">
                            <?php if (session()->get('role') == '1') { ?>
                                <option value="1" <?= session()->get('role') == '1' ? 'Selected' : '' ?>>Owner</option>
                                <option value="2" <?= session()->get('role') == '2' ? 'Selected' : '' ?>>Admin</option>
                                <option value="3" <?= session()->get('role') == '3' ? 'Selected' : '' ?>>Petugas</option>
                                <option value="4" <?= session()->get('role') == '4' ? 'Selected' : '' ?>>Warga</option>
                            <?php } elseif (session()->get('role') == '2') { ?>
                                <option value="1" <?= session()->get('role') == '1' ? 'Selected' : '' ?> disabled>Owner</option>
                                <option value="2" <?= session()->get('role') == '2' ? 'Selected' : '' ?>>Admin</option>
                                <option value="3" <?= session()->get('role') == '3' ? 'Selected' : '' ?>>Petugas</option>
                                <option value="4" <?= session()->get('role') == '4' ? 'Selected' : '' ?>>Warga</option>
                            <?php } elseif (session()->get('role') == '3') { ?>
                                <option value="1" <?= session()->get('role') == '1' ? 'Selected' : '' ?> disabled>Owner</option>
                                <option value="2" <?= session()->get('role') == '2' ? 'Selected' : '' ?> disabled>Admin</option>
                                <option value="3" <?= session()->get('role') == '3' ? 'Selected' : '' ?>>Petugas</option>
                                <option value="4" <?= session()->get('role') == '4' ? 'Selected' : '' ?>>Warga</option>
                            <?php } elseif (session()->get('role') == '4') { ?>
                                <option value="1" <?= session()->get('role') == '1' ? 'Selected' : '' ?> disabled>Owner</option>
                                <option value="2" <?= session()->get('role') == '2' ? 'Selected' : '' ?> disabled>Admin</option>
                                <option value="3" <?= session()->get('role') == '3' ? 'Selected' : '' ?> disabled>Petugas</option>
                                <option value="4" <?= session()->get('role') == '4' ? 'Selected' : '' ?>>Warga</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?= $value['tgl_lahir'] ?>" placeholder="Masukkan Tanggal Lahir" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">No. Telepon</label>
                        <input name="telp" class="form-control" value="<?= $value['telp'] ?>" placeholder="Masukkan No. Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenkel" class="form-control">
                            <option value="1" <?= $value['jenkel'] == '1' ? 'Selected' : '' ?>>Laki - Laki</option>
                            <option value="2" <?= $value['jenkel'] == '2' ? 'Selected' : '' ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning btn-flat">Save</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>

<script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const showPasswordBtn = document.getElementById('showPasswordBtn');

        if (passwordField.innerHTML === '********') {
            passwordField.innerHTML = '<?= $value['password'] ?>';
            showPasswordBtn.innerHTML = '<i class="fas fa-eye"></i>';
        } else {
            passwordField.innerHTML = '********';
            showPasswordBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
        }
    }

    document.getElementById('showPasswordBtn').addEventListener('click', togglePasswordVisibility);
</script>