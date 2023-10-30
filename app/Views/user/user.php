<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-user"><i class="fas fa-plus"></i> Add User
                </button>
            </div>
        </div>
        <div class="card-body">
            <?php $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible mb-4">
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
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr class="text-center">
                        <th width="100px">No</th>
                        <th width="300px">Nama</th>
                        <th width="250px">Username</th>
                        <th width="150px">Password</th>
                        <th width="150px">Role</th>
                        <th width="200px">Tanggal Lahir</th>
                        <th width="200px">No. Telepon</th>
                        <th width="200px">Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $key => $value) {
                        if (session()->get('role') == '2') {
                            if ($value['role'] == '1') {
                                continue;
                            }
                        } elseif (session()->get('role') == '3') {
                            if ($value['role'] == '1' || $value['role'] == '2') {
                                continue;
                            }
                        }
                    ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['username'] ?></td>
                            <td><?= $value['password'] ?></td>
                            <td>
                                <?php
                                if ($value['role'] == '1') { ?>
                                    <span class="badge bg-danger">Owner</span>
                                <?php } elseif ($value['role'] == '2') { ?>
                                    <span class="badge bg-success">Admin</span>
                                <?php } elseif ($value['role'] == '3') { ?>
                                    <span class="badge bg-warning">Petugas</span>
                                <?php } elseif ($value['role'] == '4') { ?>
                                    <span class="badge bg-primary">Warga</span>
                                <?php } else { ?>
                                    <span class="badge bg-disabled">Role Not Found</span>
                                <?php } ?>
                            </td>
                            <td><?= $value['tgl_lahir'] ?></td>
                            <td><?= $value['telp'] ?></td>
                            <td><?php
                                if ($value['jenkel'] == '1') { ?>
                                    <span>Laki - Laki</span>
                                <?php } elseif ($value['jenkel'] == '2') { ?>
                                    <span>Perempuan</span>
                                <?php } else { ?>
                                    <span class="badge bg-disabled">Role Not Found</span>
                                <?php } ?>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-user<?= $value['id_user'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-user<?= $value['id_user'] ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- /add-modal -->
<div class="modal fade" id="add-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('/add-user') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input name="nama" class="form-control" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="username" class="form-control" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" class="form-control" required>
                        <?php if (session()->get('role') == '1') { ?>
                            <option value="1" <?= session()->get('role') == '1' ? 'Selected' : '' ?>>Owner</option>
                            <option value="2" <?= session()->get('role') == '2' ? 'Selected' : '' ?>>Admin</option>
                            <option value="3" <?= session()->get('role') == '3' ? 'Selected' : '' ?>>Petugas</option>
                            <option value="4" <?= session()->get('role') == '4' ? 'Selected' : '' ?>>Warga</option>
                        <?php } elseif (session()->get('role') == '2') { ?>
                            <option value="1" <?= session()->get('role') == '1' ? 'Selected' : '' ?> disabled>Owner</option>
                            <option value="2" <?= session()->get('role') == '2' ? 'Selected' : '' ?> disabled>Admin</option>
                            <option value="3" <?= session()->get('role') == '3' ? 'Selected' : '' ?> selected>Petugas</option>
                            <option value="4" <?= session()->get('role') == '4' ? 'Selected' : '' ?>>Warga</option>
                        <?php } elseif (session()->get('role') == '3') { ?>
                            <option value="1" <?= session()->get('role') == '1' ? 'Selected' : '' ?> disabled>Owner</option>
                            <option value="2" <?= session()->get('role') == '2' ? 'Selected' : '' ?> disabled>Admin</option>
                            <option value="3" <?= session()->get('role') == '3' ? 'Selected' : '' ?> disabled>Petugas</option>
                            <option value="4" <?= session()->get('role') == '4' ? 'Selected' : '' ?> selected>Warga</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" required>
                </div>
                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input name="telp" class="form-control" placeholder="Masukkan No. Telepon" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenkel" class="form-control" required>
                        <option value="1" <?= $value['jenkel'] == '1' ? 'Selected' : '' ?>>Laki - Laki</option>
                        <option value="2" <?= $value['jenkel'] == '2' ? 'Selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat">Save</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /edit-modal -->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="edit-user<?= $value['id_user'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('/edit-user/' . $value['id_user']) ?>
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
                                <option value="1" <?= $value['role'] == '1' ? 'Selected' : '' ?>>Owner</option>
                                <option value="2" <?= $value['role'] == '2' ? 'Selected' : '' ?>>Admin</option>
                                <option value="3" <?= $value['role'] == '3' ? 'Selected' : '' ?>>Petugas</option>
                                <option value="4" <?= $value['role'] == '4' ? 'Selected' : '' ?>>Warga</option>
                            <?php } elseif (session()->get('role') == '2') { ?>
                                <option value="1" <?= $value['role'] == '1' ? 'Selected' : '' ?> disabled>Owner</option>
                                <option value="2" <?= $value['role'] == '2' ? 'Selected' : '' ?>>Admin</option>
                                <option value="3" <?= $value['role'] == '3' ? 'Selected' : '' ?>>Petugas</option>
                                <option value="4" <?= $value['role'] == '4' ? 'Selected' : '' ?>>Warga</option>
                            <?php } elseif (session()->get('role') == '3') { ?>
                                <option value="1" <?= $value['role'] == '1' ? 'Selected' : '' ?> disabled>Owner</option>
                                <option value="2" <?= $value['role'] == '2' ? 'Selected' : '' ?> disabled>Admin</option>
                                <option value="3" <?= $value['role'] == '3' ? 'Selected' : '' ?>>Petugas</option>
                                <option value="4" <?= $value['role'] == '4' ? 'Selected' : '' ?>>Warga</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?= $value['tgl_lahir'] ?>" placeholder="Masukkan Tanggal Lahir" required>
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

<!-- /delete-modal -->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="delete-user<?= $value['id_user'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Data Admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Hapus Data User <b><?= $value['nama'] ?></b> ..?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('/delete-user/' . $value['id_user']) ?>" class="btn btn-danger btn-flat">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>