<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-tools">
                <?php if (session()->get('role') != '4') { ?>
                    <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-laliga2324"><i class="fas fa-plus"></i> Add Klub
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
            <table id="pl" class="table table-bordered">
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
                    usort($laliga2324, function ($a, $b) {
                        if ($b['points'] !== $a['points']) {
                            return $b['points'] - $a['points'];
                        }

                        if ($b['goal_diff'] !== $a['goal_diff']) {
                            return $b['goal_diff'] - $a['goal_diff'];
                        }

                        return $b['goal_in'] - $a['goal_in'];
                    });
                    $no = 1;
                    foreach ($laliga2324 as $key => $value) { ?>
                        <tr class="text-center">
                            <td style="border: none;" class="<?= ($no == 1 || $no == 2 || $no == 3 || $no == 4) ? 'bg-blue color-palette' : (($no == 5 || $no == 6) ? 'bg-orange color-palette' : ($no == 7 ? 'bg-green color-palette' : ($no == 18 || $no == 19 || $no == 20 ? 'bg-red color-palette' : ''))) ?>"></td>
                            <td><?= $no++ ?></td>
                            <td><?= $value['name_club'] ?></td>
                            <td><?= $value['play'] ?></td>
                            <td><?= $value['win'] ?></td>
                            <td><?= $value['draw'] ?></td>
                            <td><?= $value['lose'] ?></td>
                            <td><?= $value['goal_in'] ?></td>
                            <td><?= $value['goal_out'] ?></td>
                            <td><?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?></td>
                            <td><?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?></td>
                            <?php if (session()->get('role') != '4') { ?>
                                <td>
                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-laliga2324<?= $value['id_laliga2324'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-laliga2324<?= $value['id_laliga2324'] ?>"><i class="fas fa-trash"></i></button>
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
<div class="modal fade" id="add-laliga2324">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Klub</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('/add-laliga2324') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Klub</label>
                    <select name="id_club" class="form-control">
                        <option value=""> ---Pilih Klub--- </option>
                        <?php
                        foreach ($club as $c) {
                            // Check if the club's country is England
                            if ($c['name_country'] == 'Spain') {
                                $clubId = $c['id_club'];
                                // Check if the selected club is already in any group
                                $clubAlreadyInGroup = false;
                                foreach ($laliga2324 as $key => $value) {
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
<?php foreach ($laliga2324 as $key => $value) { ?>
    <div class="modal fade" id="edit-laliga2324<?= $value['id_laliga2324'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Klub</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('/edit-laliga2324/' . $value['id_laliga2324']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Klub</label>
                        <select name="id_club" class="form-control">
                            <option value=""> ---Pilih Klub--- </option>
                            <?php foreach ($club as $key => $c) { ?>
                                <option value="<?= $c['id_club'] ?>" <?= $value['id_club'] == $c['id_club'] ? 'Selected' : '' ?>><?= $c['name_club'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Main</label>
                        <input name="play" class="form-control" placeholder="Masukkan Main" value="<?= $value['play'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Menang</label>
                        <input name="win" class="form-control" placeholder="Masukkan Menang" value="<?= $value['win'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Seri</label>
                        <input name="draw" class="form-control" placeholder="Masukkan Seri" value="<?= $value['draw'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kalah</label>
                        <input name="lose" class="form-control" placeholder="Masukkan Kalah" value="<?= $value['lose'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gol Masuk</label>
                        <input name="goal_in" class="form-control" placeholder="Masukkan Gol Masuk" value="<?= $value['goal_in'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gol Keluar</label>
                        <input name="goal_out" class="form-control" placeholder="Masukkan Gol Keluar" value="<?= $value['goal_out'] ?>" required>
                    </div>
                    <div class="form-group" hidden>
                        <label for="">Selisih Gol</label>
                        <input name="goal_diff" class="form-control" placeholder="Masukkan Gol Keluar" value="<?= $value['goal_diff'] = $value['goal_in'] - $value['goal_out'] ?>">
                    </div>
                    <div class="form-group" hidden>
                        <label for="">Poin</label>
                        <input name="points" class="form-control" placeholder="Masukkan Gol Keluar" value="<?= $value['points'] = ($value['win'] * 3) + ($value['draw'] * 1) + ($value['lose'] * 0) ?>">
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
<?php foreach ($laliga2324 as $key => $value) { ?>
    <div class="modal fade" id="delete-laliga2324<?= $value['id_laliga2324'] ?>">
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
                    <a href="<?= base_url('/delete-laliga2324/' . $value['id_laliga2324']) ?>" class="btn btn-danger btn-flat">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>

<script>
    $(function() {
        $("#pl").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "paging": false,
            "searching": true,
            "ordering": false,
            "info": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>