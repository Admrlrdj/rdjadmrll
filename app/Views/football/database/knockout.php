<div class="col-md-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-ro16-tab" data-toggle="pill" href="#custom-tabs-one-ro16" role="tab" aria-controls="custom-tabs-one-ro16" aria-selected="true">Round of 16</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-qf-tab" data-toggle="pill" href="#custom-tabs-one-qf" role="tab" aria-controls="custom-tabs-one-qf" aria-selected="false">Quarter Final</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-sf-tab" data-toggle="pill" href="#custom-tabs-one-sf" role="tab" aria-controls="custom-tabs-one-sf" aria-selected="false">Semi Final</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-final-tab" data-toggle="pill" href="#custom-tabs-one-final" role="tab" aria-controls="custom-tabs-one-final" aria-selected="false">Final</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-ro16" role="tabpanel" aria-labelledby="custom-tabs-one-ro16-tab">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-ro16"><i class="fas fa-plus"></i> Add RO16</button>
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
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th width="100px">No</th>
                                        <th width="800px">Kode RO16</th>
                                        <th width="500px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($ro16 as $key => $value) { ?>
                                        <tr class="text-center">
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['code_ro16'] ?></td>
                                            <td>
                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-ro16<?= $value['id_ro16'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-ro16<?= $value['id_ro16'] ?>"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /add-modal -->
                    <div class="modal fade" id="add-ro16">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add RO16</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php echo form_open('/add-ro16') ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Code RO16</label>
                                        <input name="code_ro16" class="form-control" placeholder="Masukkan Code RO16" required>
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
                    <?php foreach ($ro16 as $key => $value) { ?>
                        <div class="modal fade" id="edit-ro16<?= $value['id_ro16'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit RO16</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/edit-ro16/' . $value['id_ro16']) ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Code RO16</label>
                                            <input name="code_ro16" class="form-control" value="<?= $value['code_ro16'] ?>" placeholder="Masukkan Code RO16" required>
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
                    <?php foreach ($ro16 as $key => $value) { ?>
                        <div class="modal fade" id="delete-ro16<?= $value['id_ro16'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete RO16</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin Hapus RO16 <b><?= $value['code_ro16'] ?></b> ..?
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('/delete-ro16/' . $value['id_ro16']) ?>" class="btn btn-danger btn-flat">Delete</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-qf" role="tabpanel" aria-labelledby="custom-tabs-one-qf-tab">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-qf"><i class="fas fa-plus"></i> Add QF</button>
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
                                <table id="qf" class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="100px">No</th>
                                            <th width="800px">Kode QF</th>
                                            <th width="500px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($qf as $key => $value) { ?>
                                            <tr class="text-center">
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['code_qf'] ?></td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-qf<?= $value['id_qf'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-qf<?= $value['id_qf'] ?>"><i class="fas fa-trash"></i></button>
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
                    <div class="modal fade" id="add-qf">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add QF</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php echo form_open('/add-qf') ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Code QF</label>
                                        <input name="code_qf" class="form-control" placeholder="Masukkan Code QF" required>
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
                    <?php foreach ($qf as $key => $value) { ?>
                        <div class="modal fade" id="edit-qf<?= $value['id_qf'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit QF</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/edit-qf/' . $value['id_qf']) ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Code QF</label>
                                            <input name="code_qf" class="form-control" value="<?= $value['code_qf'] ?>" placeholder="Masukkan Code QF" required>
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
                    <?php foreach ($qf as $key => $value) { ?>
                        <div class="modal fade" id="delete-qf<?= $value['id_qf'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete QF</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin Hapus QF <b><?= $value['code_qf'] ?></b> ..?
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('/delete-qf/' . $value['id_qf']) ?>" class="btn btn-danger btn-flat">Delete</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-sf" role="tabpanel" aria-labelledby="custom-tabs-one-sf-tab">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-sf"><i class="fas fa-plus"></i> Add SF</button>
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
                                <table id="sf" class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="100px">No</th>
                                            <th width="800px">Kode SF</th>
                                            <th width="500px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($sf as $key => $value) { ?>
                                            <tr class="text-center">
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['code_sf'] ?></td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-sf<?= $value['id_sf'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-sf<?= $value['id_sf'] ?>"><i class="fas fa-trash"></i></button>
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
                    <div class="modal fade" id="add-sf">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add SF</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php echo form_open('/add-sf') ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Code SF</label>
                                        <input name="code_sf" class="form-control" placeholder="Masukkan Code SF" required>
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
                    <?php foreach ($sf as $key => $value) { ?>
                        <div class="modal fade" id="edit-sf<?= $value['id_sf'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit SF</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/edit-sf/' . $value['id_sf']) ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Code SF</label>
                                            <input name="code_sf" class="form-control" value="<?= $value['code_sf'] ?>" placeholder="Masukkan Code SF" required>
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
                    <?php foreach ($sf as $key => $value) { ?>
                        <div class="modal fade" id="delete-sf<?= $value['id_sf'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete SF</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin Hapus SF <b><?= $value['code_sf'] ?></b> ..?
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('/delete-sf/' . $value['id_sf']) ?>" class="btn btn-danger btn-flat">Delete</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-final" role="tabpanel" aria-labelledby="custom-tabs-one-final-tab">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-final"><i class="fas fa-plus"></i> Add Final</button>
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
                                <table id="final" class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="100px">No</th>
                                            <th width="800px">Kode Final</th>
                                            <th width="500px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($final as $key => $value) { ?>
                                            <tr class="text-center">
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['code_final'] ?></td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-final<?= $value['id_final'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-final<?= $value['id_final'] ?>"><i class="fas fa-trash"></i></button>
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
                    <div class="modal fade" id="add-final">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Final</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php echo form_open('/add-final') ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Code Final</label>
                                        <input name="code_final" class="form-control" placeholder="Masukkan Code Final" required>
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
                    <?php foreach ($final as $key => $value) { ?>
                        <div class="modal fade" id="edit-final<?= $value['id_final'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Final</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/edit-final/' . $value['id_final']) ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Code Final</label>
                                            <input name="code_final" class="form-control" value="<?= $value['code_final'] ?>" placeholder="Masukkan Code Final" required>
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
                    <?php foreach ($final as $key => $value) { ?>
                        <div class="modal fade" id="delete-final<?= $value['id_final'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Final</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin Hapus Final <b><?= $value['code_final'] ?></b> ..?
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('/delete-final/' . $value['id_final']) ?>" class="btn btn-danger btn-flat">Delete</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $("#qf").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": false,
        }).buttons().container().appendTo('#qf_wrapper .col-md-6:eq(0)');
    });
    $(function() {
        $("#sf").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": false,
        }).buttons().container().appendTo('#sf_wrapper .col-md-6:eq(0)');
    });
    $(function() {
        $("#final").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": false,
        }).buttons().container().appendTo('#final_wrapper .col-md-6:eq(0)');
    });
</script>