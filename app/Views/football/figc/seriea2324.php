<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-2324-tab" data-toggle="pill" href="#custom-tabs-one-2324" role="tab" aria-controls="custom-tabs-one-group" aria-selected="true">23/24</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-2223-tab" data-toggle="pill" href="#custom-tabs-one-2223" role="tab" aria-controls="custom-tabs-one-2223" aria-selected="false">22/23</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-2122-tab" data-toggle="pill" href="#custom-tabs-one-2122" role="tab" aria-controls="custom-tabs-one-2122" aria-selected="false">21/22</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-2021-tab" data-toggle="pill" href="#custom-tabs-one-2021" role="tab" aria-controls="custom-tabs-one-2021" aria-selected="false">20/21</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-1920-tab" data-toggle="pill" href="#custom-tabs-one-1920" role="tab" aria-controls="custom-tabs-one-1920" aria-selected="false">19/20</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <!-- //* 2023/2024 -->
                <div class="tab-pane fade show active" id="custom-tabs-one-2324" role="tabpanel" aria-labelledby="custom-tabs-one-2324-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <?php if (session()->get('role') != '4') { ?>
                                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-seriea2324">
                                                <i class="fas fa-serieaus"></i> Add Klub
                                            </button>
                                        <?php } ?>
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
                                    <table id="2324" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="border: none;" width="1px"></th>
                                                <th>No</th>
                                                <th width="500px">Tim</th>
                                                <th>M</th>
                                                <th>M</th>
                                                <th>S</th>
                                                <th>K</th>
                                                <th>GM</th>
                                                <th>GK</th>
                                                <th>SG</th>
                                                <th>Poin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Sort the array based on points, goal difference, and goals scored
                                            usort($seriea2324, function ($a, $b) {
                                                if ($b['points'] !== $a['points']) {
                                                    return $b['points'] - $a['points'];
                                                }

                                                if ($b['goal_diff'] !== $a['goal_diff']) {
                                                    return $b['goal_diff'] - $a['goal_diff'];
                                                }

                                                return $b['goal_in'] - $a['goal_in'];
                                            });
                                            $no = 1;
                                            foreach ($seriea2324 as $key => $value) { ?>
                                                <tr class="text-center">
                                                    <td style="border: none;" class="<?= ($no == 1 || $no == 2 || $no == 3 || $no == 4) ? 'bg-blue color-palette' : (($no == 5 || $no == 6) ? 'bg-orange color-palette' : ($no == 7 ? 'bg-green color-palette' : ($no == 18 || $no == 19 || $no == 20 ? 'bg-red color-palette' : ''))) ?>"></td>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value['name_club'] ?></td>
                                                    <td><?= $value['serieaay'] ?></td>
                                                    <td><?= $value['win'] ?></td>
                                                    <td><?= $value['draw'] ?></td>
                                                    <td><?= $value['lose'] ?></td>
                                                    <td><?= $value['goal_in'] ?></td>
                                                    <td><?= $value['goal_out'] ?></td>
                                                    <td><?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?></td>
                                                    <td><?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?></td>
                                                    <?php if (session()->get('role') != '4') { ?>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-seriea2324<?= $value['id_seriea2324'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-seriea2324<?= $value['id_seriea2324'] ?>"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php
                                                if ($no > 20) {
                                                    break;
                                                } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /add-modal -->
                        <div class="modal fade" id="add-seriea2324">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Klub</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-seriea2324') ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Klub</label>
                                            <select name="id_club" class="form-control">
                                                <option value=""> ---Pilih Klub--- </option>
                                                <?php
                                                foreach ($club as $c) {
                                                    // Check if the club's country is Italy
                                                    if ($c['name_country'] == 'Italy') {
                                                        $clubId = $c['id_club'];
                                                        // Check if the selected club is already in any group
                                                        $clubAlreadyInGroup = false;
                                                        foreach ($seriea2324 as $key => $value) {
                                                            if ($value['id_club'] == $clubId) {
                                                                $clubAlreadyInGroup = true;
                                                                break;
                                                            }
                                                        }
                                                        // If the club is already in any group, skip adding it to the dropdown
                                                        if ($clubAlreadyInGroup) {
                                                            continue;
                                                        }

                                                        echo '<option value="' . $clubId . '">' . $c['name_club'] . '</option>';
                                                    }
                                                }
                                                ?>
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
                        <?php foreach ($seriea2324 as $key => $value) { ?>
                            <div class="modal fade" id="edit-seriea2324<?= $value['id_seriea2324'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php echo form_open('/edit-seriea2324/' . $value['id_seriea2324']) ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Klub</label>
                                                <select name="id_club" class="form-control">
                                                    <option value=""> ---Pilih Klub--- </option>
                                                    <?php foreach ($club as $key => $c) {
                                                        if ($c['name_country'] == 'Italy') { ?>
                                                            <option value="<?= $c['id_club'] ?>" <?= $value['id_club'] == $c['id_club'] ? 'Selected' : '' ?>><?= $c['name_club'] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Main</label>
                                                <input name="serieaay" class="form-control" serieaaceholder="Masukkan Main" value="<?= $value['serieaay'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Menang</label>
                                                <input name="win" class="form-control" serieaaceholder="Masukkan Menang" value="<?= $value['win'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Seri</label>
                                                <input name="draw" class="form-control" serieaaceholder="Masukkan Seri" value="<?= $value['draw'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kalah</label>
                                                <input name="lose" class="form-control" serieaaceholder="Masukkan Kalah" value="<?= $value['lose'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Masuk</label>
                                                <input name="goal_in" class="form-control" serieaaceholder="Masukkan Gol Masuk" value="<?= $value['goal_in'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Keluar</label>
                                                <input name="goal_out" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_out'] ?>" required>
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Selisih Gol</label>
                                                <input name="goal_diff" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?>">
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Poin</label>
                                                <input name="points" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?>">
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
                        <?php foreach ($seriea2324 as $key => $value) { ?>
                            <div class="modal fade" id="delete-seriea2324<?= $value['id_seriea2324'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Hapus Klub <b><?= $value['name_club'] ?></b> ..?
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                            <a href="<?= base_url('/delete-seriea2324/' . $value['id_seriea2324']) ?>" class="btn btn-danger btn-flat">Delete</a>
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
                <!-- //* 2022/2023 -->
                <div class="tab-pane fade" id="custom-tabs-one-2223" role="tabpanel" aria-labelledby="custom-tabs-one-2223-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <?php if (session()->get('role') != '4') { ?>
                                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-seriea2223">
                                                <i class="fas fa-serieaus"></i> Add Klub
                                            </button>
                                        <?php } ?>
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
                                    <table id="2223" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="border: none;" width="1px"></th>
                                                <th>No</th>
                                                <th width="500px">Tim</th>
                                                <th>M</th>
                                                <th>M</th>
                                                <th>S</th>
                                                <th>K</th>
                                                <th>GM</th>
                                                <th>GK</th>
                                                <th>SG</th>
                                                <th>Poin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Sort the array based on points, goal difference, and goals scored
                                            usort($seriea2223, function ($a, $b) {
                                                if ($b['points'] !== $a['points']) {
                                                    return $b['points'] - $a['points'];
                                                }

                                                if ($b['goal_diff'] !== $a['goal_diff']) {
                                                    return $b['goal_diff'] - $a['goal_diff'];
                                                }

                                                return $b['goal_in'] - $a['goal_in'];
                                            });
                                            $no = 1;
                                            foreach ($seriea2223 as $key => $value) { ?>
                                                <tr class="text-center">
                                                    <td style="border: none;" class="<?= ($no == 1 || $no == 2 || $no == 3 || $no == 4) ? 'bg-blue color-palette' : (($no == 5 || $no == 6) ? 'bg-orange color-palette' : ($no == 7 ? 'bg-green color-palette' : ($no == 18 || $no == 19 || $no == 20 ? 'bg-red color-palette' : ''))) ?>"></td>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value['name_club'] ?></td>
                                                    <td><?= $value['serieaay'] ?></td>
                                                    <td><?= $value['win'] ?></td>
                                                    <td><?= $value['draw'] ?></td>
                                                    <td><?= $value['lose'] ?></td>
                                                    <td><?= $value['goal_in'] ?></td>
                                                    <td><?= $value['goal_out'] ?></td>
                                                    <td><?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?></td>
                                                    <td><?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?></td>
                                                    <?php if (session()->get('role') != '4') { ?>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-seriea2223<?= $value['id_seriea2223'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-seriea2223<?= $value['id_seriea2223'] ?>"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php
                                                if ($no > 20) {
                                                    break;
                                                } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /add-modal -->
                        <div class="modal fade" id="add-seriea2223">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Klub</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-seriea2223') ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Klub</label>
                                            <select name="id_club" class="form-control">
                                                <option value=""> ---Pilih Klub--- </option>
                                                <?php
                                                foreach ($club as $c) {
                                                    // Check if the club's country is Italy
                                                    if ($c['name_country'] == 'Italy') {
                                                        $clubId = $c['id_club'];
                                                        // Check if the selected club is already in any group
                                                        $clubAlreadyInGroup = false;
                                                        foreach ($seriea2223 as $key => $value) {
                                                            if ($value['id_club'] == $clubId) {
                                                                $clubAlreadyInGroup = true;
                                                                break;
                                                            }
                                                        }
                                                        // If the club is already in any group, skip adding it to the dropdown
                                                        if ($clubAlreadyInGroup) {
                                                            continue;
                                                        }

                                                        echo '<option value="' . $clubId . '">' . $c['name_club'] . '</option>';
                                                    }
                                                }
                                                ?>
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
                        <?php foreach ($seriea2223 as $key => $value) { ?>
                            <div class="modal fade" id="edit-seriea2223<?= $value['id_seriea2223'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php echo form_open('/edit-seriea2223/' . $value['id_seriea2223']) ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Klub</label>
                                                <select name="id_club" class="form-control">
                                                    <option value=""> ---Pilih Klub--- </option>
                                                    <?php foreach ($club as $key => $c) {
                                                        if ($c['name_country'] == 'Italy') { ?>
                                                            <option value="<?= $c['id_club'] ?>" <?= $value['id_club'] == $c['id_club'] ? 'Selected' : '' ?>><?= $c['name_club'] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Main</label>
                                                <input name="serieaay" class="form-control" serieaaceholder="Masukkan Main" value="<?= $value['serieaay'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Menang</label>
                                                <input name="win" class="form-control" serieaaceholder="Masukkan Menang" value="<?= $value['win'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Seri</label>
                                                <input name="draw" class="form-control" serieaaceholder="Masukkan Seri" value="<?= $value['draw'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kalah</label>
                                                <input name="lose" class="form-control" serieaaceholder="Masukkan Kalah" value="<?= $value['lose'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Masuk</label>
                                                <input name="goal_in" class="form-control" serieaaceholder="Masukkan Gol Masuk" value="<?= $value['goal_in'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Keluar</label>
                                                <input name="goal_out" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_out'] ?>" required>
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Selisih Gol</label>
                                                <input name="goal_diff" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?>">
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Poin</label>
                                                <input name="points" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?>">
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
                        <?php foreach ($seriea2223 as $key => $value) { ?>
                            <div class="modal fade" id="delete-seriea2223<?= $value['id_seriea2223'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Hapus Klub <b><?= $value['name_club'] ?></b> ..?
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                            <a href="<?= base_url('/delete-seriea2223/' . $value['id_seriea2223']) ?>" class="btn btn-danger btn-flat">Delete</a>
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
                <!-- //* 2021/2022 -->
                <div class="tab-pane fade" id="custom-tabs-one-2122" role="tabpanel" aria-labelledby="custom-tabs-one-2122-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <?php if (session()->get('role') != '4') { ?>
                                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-seriea2122">
                                                <i class="fas fa-serieaus"></i> Add Klub
                                            </button>
                                        <?php } ?>
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
                                    <table id="2122" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="border: none;" width="1px"></th>
                                                <th>No</th>
                                                <th width="500px">Tim</th>
                                                <th>M</th>
                                                <th>M</th>
                                                <th>S</th>
                                                <th>K</th>
                                                <th>GM</th>
                                                <th>GK</th>
                                                <th>SG</th>
                                                <th>Poin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Sort the array based on points, goal difference, and goals scored
                                            usort($seriea2122, function ($a, $b) {
                                                if ($b['points'] !== $a['points']) {
                                                    return $b['points'] - $a['points'];
                                                }

                                                if ($b['goal_diff'] !== $a['goal_diff']) {
                                                    return $b['goal_diff'] - $a['goal_diff'];
                                                }

                                                return $b['goal_in'] - $a['goal_in'];
                                            });
                                            $no = 1;
                                            foreach ($seriea2122 as $key => $value) { ?>
                                                <tr class="text-center">
                                                    <td style="border: none;" class="<?= ($no == 1 || $no == 2 || $no == 3 || $no == 4) ? 'bg-blue color-palette' : (($no == 5 || $no == 6) ? 'bg-orange color-palette' : ($no == 7 ? 'bg-green color-palette' : ($no == 18 || $no == 19 || $no == 20 ? 'bg-red color-palette' : ''))) ?>"></td>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value['name_club'] ?></td>
                                                    <td><?= $value['serieaay'] ?></td>
                                                    <td><?= $value['win'] ?></td>
                                                    <td><?= $value['draw'] ?></td>
                                                    <td><?= $value['lose'] ?></td>
                                                    <td><?= $value['goal_in'] ?></td>
                                                    <td><?= $value['goal_out'] ?></td>
                                                    <td><?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?></td>
                                                    <td><?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?></td>
                                                    <?php if (session()->get('role') != '4') { ?>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-seriea2122<?= $value['id_seriea2122'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-seriea2122<?= $value['id_seriea2122'] ?>"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php
                                                if ($no > 20) {
                                                    break;
                                                } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /add-modal -->
                        <div class="modal fade" id="add-seriea2122">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Klub</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-seriea2122') ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Klub</label>
                                            <select name="id_club" class="form-control">
                                                <option value=""> ---Pilih Klub--- </option>
                                                <?php foreach ($club as $c) {
                                                    // Check if the club's country is Italy
                                                    if ($c['name_country'] == 'Italy') {
                                                        $clubId = $c['id_club'];
                                                        // Check if the selected club is already in any group
                                                        $clubAlreadyInGroup = false;
                                                        foreach ($seriea2122 as $key => $value) {
                                                            if ($value['id_club'] == $clubId) {
                                                                $clubAlreadyInGroup = true;
                                                                break;
                                                            }
                                                        }
                                                        // If the club is already in any group, skip adding it to the dropdown
                                                        if ($clubAlreadyInGroup) {
                                                            continue;
                                                        } ?>

                                                        <option value="<?= $clubId ?>"><?= $c['name_club'] ?></option>
                                                <?php }
                                                } ?>
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
                        <?php foreach ($seriea2122 as $key => $value) { ?>
                            <div class="modal fade" id="edit-seriea2122<?= $value['id_seriea2122'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php echo form_open('/edit-seriea2122/' . $value['id_seriea2122']) ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Klub</label>
                                                <select name="id_club" class="form-control">
                                                    <option value=""> ---Pilih Klub--- </option>
                                                    <?php foreach ($club as $key => $c) {
                                                        // Check if the club's country is Italy
                                                        if ($c['name_country'] == 'Italy') { ?>
                                                            <option value="<?= $c['id_club'] ?>" <?= $value['id_club'] == $c['id_club'] ? 'Selected' : '' ?>><?= $c['name_club'] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Main</label>
                                                <input name="serieaay" class="form-control" serieaaceholder="Masukkan Main" value="<?= $value['serieaay'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Menang</label>
                                                <input name="win" class="form-control" serieaaceholder="Masukkan Menang" value="<?= $value['win'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Seri</label>
                                                <input name="draw" class="form-control" serieaaceholder="Masukkan Seri" value="<?= $value['draw'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kalah</label>
                                                <input name="lose" class="form-control" serieaaceholder="Masukkan Kalah" value="<?= $value['lose'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Masuk</label>
                                                <input name="goal_in" class="form-control" serieaaceholder="Masukkan Gol Masuk" value="<?= $value['goal_in'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Keluar</label>
                                                <input name="goal_out" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_out'] ?>" required>
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Selisih Gol</label>
                                                <input name="goal_diff" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?>">
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Poin</label>
                                                <input name="points" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?>">
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
                        <?php foreach ($seriea2122 as $key => $value) { ?>
                            <div class="modal fade" id="delete-seriea2122<?= $value['id_seriea2122'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Hapus Klub <b><?= $value['name_club'] ?></b> ..?
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                            <a href="<?= base_url('/delete-seriea2122/' . $value['id_seriea2122']) ?>" class="btn btn-danger btn-flat">Delete</a>
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
                <!-- //* 2020/2021 -->
                <div class="tab-pane fade" id="custom-tabs-one-2021" role="tabpanel" aria-labelledby="custom-tabs-one-2021-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <?php if (session()->get('role') != '4') { ?>
                                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-seriea2021">
                                                <i class="fas fa-serieaus"></i> Add Klub
                                            </button>
                                        <?php } ?>
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
                                    <table id="2021" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="border: none;" width="1px"></th>
                                                <th>No</th>
                                                <th width="500px">Tim</th>
                                                <th>M</th>
                                                <th>M</th>
                                                <th>S</th>
                                                <th>K</th>
                                                <th>GM</th>
                                                <th>GK</th>
                                                <th>SG</th>
                                                <th>Poin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Sort the array based on points, goal difference, and goals scored
                                            usort($seriea2021, function ($a, $b) {
                                                if ($b['points'] !== $a['points']) {
                                                    return $b['points'] - $a['points'];
                                                }

                                                if ($b['goal_diff'] !== $a['goal_diff']) {
                                                    return $b['goal_diff'] - $a['goal_diff'];
                                                }

                                                return $b['goal_in'] - $a['goal_in'];
                                            });
                                            $no = 1;
                                            foreach ($seriea2021 as $key => $value) { ?>
                                                <tr class="text-center">
                                                    <td style="border: none;" class="<?= ($no == 1 || $no == 2 || $no == 3 || $no == 4) ? 'bg-blue color-palette' : (($no == 5 || $no == 6) ? 'bg-orange color-palette' : ($no == 7 ? 'bg-green color-palette' : ($no == 18 || $no == 19 || $no == 20 ? 'bg-red color-palette' : ''))) ?>"></td>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value['name_club'] ?></td>
                                                    <td><?= $value['serieaay'] ?></td>
                                                    <td><?= $value['win'] ?></td>
                                                    <td><?= $value['draw'] ?></td>
                                                    <td><?= $value['lose'] ?></td>
                                                    <td><?= $value['goal_in'] ?></td>
                                                    <td><?= $value['goal_out'] ?></td>
                                                    <td><?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?></td>
                                                    <td><?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?></td>
                                                    <?php if (session()->get('role') != '4') { ?>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-seriea2021<?= $value['id_seriea2021'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-seriea2021<?= $value['id_seriea2021'] ?>"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php
                                                if ($no > 20) {
                                                    break;
                                                } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /add-modal -->
                        <div class="modal fade" id="add-seriea2021">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Klub</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-seriea2021') ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Klub</label>
                                            <select name="id_club" class="form-control">
                                                <option value=""> ---Pilih Klub--- </option>
                                                <?php foreach ($club as $c) {
                                                    // Check if the club's country is Italy
                                                    if ($c['name_country'] == 'Italy') {
                                                        $clubId = $c['id_club'];
                                                        // Check if the selected club is already in any group
                                                        $clubAlreadyInGroup = false;
                                                        foreach ($seriea2021 as $key => $value) {
                                                            if ($value['id_club'] == $clubId) {
                                                                $clubAlreadyInGroup = true;
                                                                break;
                                                            }
                                                        }
                                                        // If the club is already in any group, skip adding it to the dropdown
                                                        if ($clubAlreadyInGroup) {
                                                            continue;
                                                        } ?>

                                                        <option value="<?= $clubId ?>"><?= $c['name_club'] ?></option>
                                                <?php }
                                                } ?>
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
                        <?php foreach ($seriea2021 as $key => $value) { ?>
                            <div class="modal fade" id="edit-seriea2021<?= $value['id_seriea2021'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php echo form_open('/edit-seriea2021/' . $value['id_seriea2021']) ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Klub</label>
                                                <select name="id_club" class="form-control">
                                                    <option value=""> ---Pilih Klub--- </option>
                                                    <?php foreach ($club as $key => $c) {
                                                        // Check if the club's country is Italy
                                                        if ($c['name_country'] == 'Italy') { ?>
                                                            <option value="<?= $c['id_club'] ?>" <?= $value['id_club'] == $c['id_club'] ? 'Selected' : '' ?>><?= $c['name_club'] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Main</label>
                                                <input name="serieaay" class="form-control" serieaaceholder="Masukkan Main" value="<?= $value['serieaay'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Menang</label>
                                                <input name="win" class="form-control" serieaaceholder="Masukkan Menang" value="<?= $value['win'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Seri</label>
                                                <input name="draw" class="form-control" serieaaceholder="Masukkan Seri" value="<?= $value['draw'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kalah</label>
                                                <input name="lose" class="form-control" serieaaceholder="Masukkan Kalah" value="<?= $value['lose'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Masuk</label>
                                                <input name="goal_in" class="form-control" serieaaceholder="Masukkan Gol Masuk" value="<?= $value['goal_in'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Keluar</label>
                                                <input name="goal_out" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_out'] ?>" required>
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Selisih Gol</label>
                                                <input name="goal_diff" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?>">
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Poin</label>
                                                <input name="points" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?>">
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
                        <?php foreach ($seriea2021 as $key => $value) { ?>
                            <div class="modal fade" id="delete-seriea2021<?= $value['id_seriea2021'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Hapus Klub <b><?= $value['name_club'] ?></b> ..?
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                            <a href="<?= base_url('/delete-seriea2021/' . $value['id_seriea2021']) ?>" class="btn btn-danger btn-flat">Delete</a>
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
                <!-- //* 2019/2020 -->
                <div class="tab-pane fade" id="custom-tabs-one-1920" role="tabpanel" aria-labelledby="custom-tabs-one-1920-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <?php if (session()->get('role') != '4') { ?>
                                            <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-seriea1920">
                                                <i class="fas fa-serieaus"></i> Add Klub
                                            </button>
                                        <?php } ?>
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
                                    <table id="1920" class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="border: none;" width="1px"></th>
                                                <th>No</th>
                                                <th width="500px">Tim</th>
                                                <th>M</th>
                                                <th>M</th>
                                                <th>S</th>
                                                <th>K</th>
                                                <th>GM</th>
                                                <th>GK</th>
                                                <th>SG</th>
                                                <th>Poin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Sort the array based on points, goal difference, and goals scored
                                            usort($seriea1920, function ($a, $b) {
                                                if ($b['points'] !== $a['points']) {
                                                    return $b['points'] - $a['points'];
                                                }

                                                if ($b['goal_diff'] !== $a['goal_diff']) {
                                                    return $b['goal_diff'] - $a['goal_diff'];
                                                }

                                                return $b['goal_in'] - $a['goal_in'];
                                            });
                                            $no = 1;
                                            foreach ($seriea1920 as $key => $value) { ?>
                                                <tr class="text-center">
                                                    <td style="border: none;" class="<?= ($no == 1 || $no == 2 || $no == 3 || $no == 4) ? 'bg-blue color-palette' : (($no == 5 || $no == 6) ? 'bg-orange color-palette' : ($no == 7 ? 'bg-green color-palette' : ($no == 18 || $no == 19 || $no == 20 ? 'bg-red color-palette' : ''))) ?>"></td>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $value['name_club'] ?></td>
                                                    <td><?= $value['serieaay'] ?></td>
                                                    <td><?= $value['win'] ?></td>
                                                    <td><?= $value['draw'] ?></td>
                                                    <td><?= $value['lose'] ?></td>
                                                    <td><?= $value['goal_in'] ?></td>
                                                    <td><?= $value['goal_out'] ?></td>
                                                    <td><?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?></td>
                                                    <td><?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?></td>
                                                    <?php if (session()->get('role') != '4') { ?>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-seriea1920<?= $value['id_seriea1920'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-seriea1920<?= $value['id_seriea1920'] ?>"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php
                                                if ($no > 20) {
                                                    break;
                                                } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <!-- /add-modal -->
                        <div class="modal fade" id="add-seriea1920">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Klub</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-seriea1920') ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Klub</label>
                                            <select name="id_club" class="form-control">
                                                <option value=""> ---Pilih Klub--- </option>
                                                <?php foreach ($club as $c) {
                                                    // Check if the club's country is Italy
                                                    if ($c['name_country'] == 'Italy') {
                                                        $clubId = $c['id_club'];
                                                        // Check if the selected club is already in any group
                                                        $clubAlreadyInGroup = false;
                                                        foreach ($seriea1920 as $key => $value) {
                                                            if ($value['id_club'] == $clubId) {
                                                                $clubAlreadyInGroup = true;
                                                                break;
                                                            }
                                                        }
                                                        // If the club is already in any group, skip adding it to the dropdown
                                                        if ($clubAlreadyInGroup) {
                                                            continue;
                                                        } ?>

                                                        <option value="<?= $clubId ?>"><?= $c['name_club'] ?></option>
                                                <?php }
                                                } ?>
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
                        <?php foreach ($seriea1920 as $key => $value) { ?>
                            <div class="modal fade" id="edit-seriea1920<?= $value['id_seriea1920'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php echo form_open('/edit-seriea1920/' . $value['id_seriea1920']) ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Klub</label>
                                                <select name="id_club" class="form-control">
                                                    <option value=""> ---Pilih Klub--- </option>
                                                    <?php foreach ($club as $key => $c) {
                                                        // Check if the club's country is Italy
                                                        if ($c['name_country'] == 'Italy') { ?>
                                                            <option value="<?= $c['id_club'] ?>" <?= $value['id_club'] == $c['id_club'] ? 'Selected' : '' ?>><?= $c['name_club'] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Main</label>
                                                <input name="serieaay" class="form-control" serieaaceholder="Masukkan Main" value="<?= $value['serieaay'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Menang</label>
                                                <input name="win" class="form-control" serieaaceholder="Masukkan Menang" value="<?= $value['win'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Seri</label>
                                                <input name="draw" class="form-control" serieaaceholder="Masukkan Seri" value="<?= $value['draw'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kalah</label>
                                                <input name="lose" class="form-control" serieaaceholder="Masukkan Kalah" value="<?= $value['lose'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Masuk</label>
                                                <input name="goal_in" class="form-control" serieaaceholder="Masukkan Gol Masuk" value="<?= $value['goal_in'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Gol Keluar</label>
                                                <input name="goal_out" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_out'] ?>" required>
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Selisih Gol</label>
                                                <input name="goal_diff" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?>">
                                            </div>
                                            <div class="form-group" hidden>
                                                <label for="">Poin</label>
                                                <input name="points" class="form-control" serieaaceholder="Masukkan Gol Keluar" value="<?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?>">
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
                        <?php foreach ($seriea1920 as $key => $value) { ?>
                            <div class="modal fade" id="delete-seriea1920<?= $value['id_seriea1920'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Klub</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Hapus Klub <b><?= $value['name_club'] ?></b> ..?
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                            <a href="<?= base_url('/delete-seriea1920/' . $value['id_seriea1920']) ?>" class="btn btn-danger btn-flat">Delete</a>
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
</div>

<script>
    $("#2324").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "paging": false,
        "searching": true,
        "ordering": false,
        "info": false,
    });
    $("#2223").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "paging": false,
        "searching": true,
        "ordering": false,
        "info": false,
    });
    $("#2122").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "paging": false,
        "searching": true,
        "ordering": false,
        "info": false,
    });
    $("#2021").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "paging": false,
        "searching": true,
        "ordering": false,
        "info": false,
    });
    $("#1920").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "paging": false,
        "searching": true,
        "ordering": false,
        "info": false,
    });
</script>