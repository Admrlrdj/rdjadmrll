<div class="col-12">
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-group-tab" data-toggle="pill" href="#custom-tabs-one-group" role="tab" aria-controls="custom-tabs-one-group" aria-selected="true">Group Stage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-ro16-tab" data-toggle="pill" href="#custom-tabs-one-ro16" role="tab" aria-controls="custom-tabs-one-ro16" aria-selected="false">Round of 16</a>
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
                <div class="tab-pane fade show active" id="custom-tabs-one-group" role="tabpanel" aria-labelledby="custom-tabs-one-group-tab">
                    <?php $groups = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H']; ?>
                    <?php if (session()->get('role') != '4') {
                        $canAddCountry = false;

                        foreach ($groups as $group) {
                            $countInGroup = 0;
                            foreach ($wc22 as $key => $value) {
                                if ($value['code_group'] === $group) {
                                    $countInGroup++;
                                }
                            }

                            if ($countInGroup < 4) {
                                $canAddCountry = true;
                                break;
                            }
                        }

                        if ($canAddCountry) { ?>
                            <div class="card-tools">
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#add-wc22"><i class="fas fa-plus"></i></button>
                            </div>
                    <?php }
                    } ?>
                    <?php
                    usort($wc22, function ($a, $b) {
                        $pointsDiff = $b['points'] - $a['points'];
                        if ($pointsDiff !== 0) {
                            return $pointsDiff;
                        }

                        $goalDiffDiff = $b['goal_diff'] - $a['goal_diff'];

                        if ($goalDiffDiff !== 0) {
                            return $goalDiffDiff;
                        }

                        return $b['goal_in'] - $a['goal_in'];
                    });
                    ?>
                    <div class="row">
                        <?php usort($wc22, function ($a, $b) {
                            return $b['points'] - $a['points'];
                        }); ?>

                        <?php foreach ($groups as $group) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Group <?= $group ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <th style="border: none;"></th>
                                                    <th>No</th>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="300px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } ?>
                                                    <th>M</th>
                                                    <th>M</th>
                                                    <th>S</th>
                                                    <th>K</th>
                                                    <th>GM</th>
                                                    <th>GK</th>
                                                    <th>SG</th>
                                                    <th>Poin</th>
                                                    <?php if (session()->get('role') != '4') { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($wc22 as $key => $value) {
                                                    if ($value['code_group'] === $group) { ?>
                                                        <tr class="text-center">
                                                            <td style="border: none;" class="<?= ($no == 1 || $no == 2) ? 'bg-blue color-palette' : '' ?>"></td>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $value['name_country'] ?></td>
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
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>
                                                    <?php
                                                        if ($no > 4) {
                                                            break;
                                                        }
                                                    } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>



                    <!-- /add-modal -->
                    <div class="modal fade" id="add-wc22">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Negara</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php echo form_open('/add-wc22') ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Negara</label>
                                        <select name="id_country" class="form-control">
                                            <option value=""> ---Pilih Negara--- </option>
                                            <?php
                                            $sortedCountries = array_column($country, 'name_country');
                                            asort($sortedCountries); // Mengurutkan negara berdasarkan abjad
                                            foreach ($sortedCountries as $countryName) {
                                                $countryId = array_search($countryName, array_column($country, 'name_country'));
                                                $countryId = $country[$countryId]['id_country'];
                                                // Periksa apakah Negara yang dipilih sudah berada di grup mana pun
                                                $countryAlreadyInGroup = false;
                                                foreach ($wc22 as $key => $value) {
                                                    if ($value['id_country'] == $countryId) {
                                                        $countryAlreadyInGroup = true;
                                                        break;
                                                    }
                                                }
                                                // Jika Negara sudah berada di grup mana pun, lewati penambahan ke dropdown
                                                if ($countryAlreadyInGroup) {
                                                    continue;
                                                }
                                            ?>
                                                <option value="<?= $countryId ?>"><?= $countryName ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Grup</label>
                                        <select name="id_group" class="form-control" id="groupSelect">
                                            <option value=""> ---Pilih Grup--- </option>
                                            <?php
                                            $sortedGroups = array_column($grup, 'code_group');
                                            asort($sortedGroups); // Mengurutkan grup berdasarkan abjad
                                            foreach ($sortedGroups as $groupCode) {
                                                $groupId = array_search($groupCode, array_column($grup, 'code_group'));
                                                $groupId = $grup[$groupId]['id_group'];

                                                // Hitung jumlah tim dalam grup saat ini
                                                $countInGroup = 0;
                                                foreach ($wc22 as $key => $value) {
                                                    if ($value['code_group'] === $groupCode) {
                                                        $countInGroup++;
                                                    }
                                                }

                                                // Sembunyikan opsi jika grup sudah memiliki 4 tim
                                                $hiddenStyle = ($countInGroup >= 4) ? 'style="display:none;"' : '';

                                            ?>
                                                <option value="<?= $groupId ?>" <?= $hiddenStyle ?>><?= $groupCode ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    <!-- /edit-modal -->
                    <?php foreach ($wc22 as $key => $value) { ?>
                        <div class="modal fade" id="edit-wc22<?= $value['id_wc22'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Negara</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/edit-wc22/' . $value['id_wc22']) ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Negara</label>
                                            <select name="id_country" class="form-control">
                                                <option value=""> ---Pilih Negara--- </option>
                                                <?php foreach ($country as $key => $c) { ?>
                                                    <option value="<?= $c['id_country'] ?>" <?= $value['id_country'] == $c['id_country'] ? 'Selected' : '' ?>><?= $c['name_country'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Grup</label>
                                            <select name="id_group" class="form-control">
                                                <option value=""> ---Pilih Grup--- </option>
                                                <?php foreach ($grup as $key => $g) { ?>
                                                    <option value="<?= $g['id_group'] ?>" <?= $value['id_group'] == $g['id_group'] ? 'Selected' : '' ?>><?= $g['code_group'] ?></option>
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
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status_ro16" class="form-control">
                                                <option value="1" <?= $value['status_ro16'] == '1' ? 'Selected' : '' ?>>Qualified</option>
                                                <option value="0" <?= $value['status_ro16'] == '0' ? 'Selected' : '' ?>>Not Qualified</option>
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
                    <!-- /.modal -->

                    <!-- /delete-modal -->
                    <?php foreach ($wc22 as $key => $value) { ?>
                        <div class="modal fade" id="delete-wc22<?= $value['id_wc22'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Negara</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda Yakin Hapus Negara <b><?= $value['name_country'] ?></b> ..?
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                        <a href="<?= base_url('/delete-wc22/' . $value['id_wc22']) ?>" class="btn btn-danger btn-flat">Delete</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    <?php } ?>
                    <!-- /.modal -->
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-ro16" role="tabpanel" aria-labelledby="custom-tabs-one-ro16-tab">
                    <?php $groups = ['R1', 'R2', 'R3', 'R4', 'R5', 'R6', 'R7', 'R8']; ?>
                    <div class="row">
                        <?php if (session()->get('role') != 4) { ?>
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Qualified Countries</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Negara</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['status_ro16'] == 1) { ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#add-wc22-ro16<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php foreach ($groups as $group) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Round of 16 <?= $group ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="wcro16" class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } ?>
                                                    <th>S</th>
                                                    <th>-</th>
                                                    <th>S</th>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['code_ro16'] === $group) { ?>
                                                        <tr class="text-center">
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-ro16<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-ro16<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td><?= $value['score_ro16'] ?></td>
                                                            <td>-</td>
                                                            <?php $opponentScore = $value['score_ro16'];
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_ro16'] === $group && $opponent['score_ro16'] !== $value['score_ro16']) {
                                                                    $opponentScore = $opponent['score_ro16'];
                                                                    break;
                                                                }
                                                            } ?>
                                                            <td><?= $opponentScore ?></td>
                                                            <?php $opponentCountry = '';
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_ro16'] === $group && $opponent['name_country'] !== $value['name_country']) {
                                                                    $opponentCountry = $opponent['name_country'];
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                            <td><?= $opponentCountry ?></td>
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-ro16<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-ro16<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>
                                                        <?php if ($no >= 1) {
                                                            break;
                                                        } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- /add-modal -->
                    <?php foreach ($wc22 as $key => $value) { ?>
                        <div class="modal fade" id="add-wc22-ro16<?= $value['id_wc22'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Negara (<?= $value['name_country'] ?>)</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-wc22-ro16/' . $value['id_wc22']) ?>
                                    <div class="modal-body">
                                        <div class="form-group" hidden>
                                            <label for="">Negara</label>
                                            <select name="id_country" class="form-control">
                                                <option value=""> ---Pilih Negara--- </option>
                                                <?php foreach ($country as $key => $c) {
                                                    // Tampilkan Negara hanya jika group_rank-nya adalah 1 atau 2
                                                    if ($value['status_ro16'] == 1) { ?>
                                                        <option value="<?= $c['id_country'] ?>" <?= $value['id_country'] == $c['id_country'] ? 'Selected' : '' ?>><?= $c['name_country'] ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Room</label>
                                            <select name="id_ro16" class="form-control" id="groupSelect">
                                                <option value=""> ---Pilih Room--- </option>
                                                <?php
                                                $sortedRooms = array_column($ro16, 'code_ro16');
                                                asort($sortedRooms); // Mengurutkan Room berdasarkan abjad
                                                foreach ($sortedRooms as $roomCode) {
                                                    $roomId = array_search($roomCode, array_column($ro16, 'code_ro16'));
                                                    $roomId = $ro16[$roomId]['id_ro16'];

                                                    // Menghitung jumlah tim di Room saat ini
                                                    $countInRoom = 0;
                                                    foreach ($wc22 as $key => $value) {
                                                        if ($value['code_ro16'] === $roomCode) {
                                                            $countInRoom++;
                                                        }
                                                    }

                                                    // Sembunyikan opsi jika grup sudah memiliki 4 tim
                                                    $hiddenStyle = ($countInRoom >= 2) ? 'style="display:none;"' : '';

                                                    // Tampilkan opsi hanya jika $no ada di grup 1 atau 2
                                                    $displayOption = ($no == 1 || $no == 2) ? '' : 'style="display:none;"';
                                                ?>
                                                    <option value="<?= $roomId ?>" <?= $hiddenStyle . ' ' . $displayOption ?>><?= $roomCode ?></option>
                                                <?php
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
                    <?php } ?>

                    <!-- /edit-modal -->
                    <?php foreach ($wc22 as $key => $value) { ?>
                        <div class="modal fade" id="edit-wc22-ro16<?= $value['id_wc22'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Negara</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/edit-wc22-ro16/' . $value['id_wc22']) ?>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Negara</label>
                                            <select name="id_country" class="form-control">
                                                <option value=""> ---Pilih Negara--- </option>
                                                <?php foreach ($wc22 as $key => $c) { ?>
                                                    <option value="<?= $c['id_country'] ?>" <?= $value['id_country'] == $c['id_country'] ? 'Selected' : '' ?>><?= $c['name_country'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Skor</label>
                                            <input name="score_ro16" class="form-control" placeholder="Masukkan Skor" value="<?= $value['score_ro16'] ?>" required>
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
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-qf" role="tabpanel" aria-labelledby="custom-tabs-one-qf-tab">
                    <?php $groups = ['QF1', 'QF2', 'QF3', 'QF4']; ?>
                    <div class="row">
                        <?php if (session()->get('role') != 4) { ?>
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Qualified Countries</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Negara</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['status_qf'] == 1) { ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#add-wc22-qf<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php foreach ($groups as $group) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Quarter Final <?= $group ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="wcqf" class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } ?>
                                                    <th>S</th>
                                                    <th>-</th>
                                                    <th>S</th>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['code_qf'] === $group) { ?>
                                                        <tr class="text-center">
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-qf<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-qf<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td><?= $value['score_qf'] ?></td>
                                                            <td>-</td>
                                                            <?php $opponentScore = $value['score_qf'];
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_qf'] === $group && $opponent['score_qf'] !== $value['score_qf']) {
                                                                    $opponentScore = $opponent['score_qf'];
                                                                    break;
                                                                }
                                                            } ?>
                                                            <td><?= $opponentScore ?></td>
                                                            <?php $opponentCountry = '';
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_qf'] === $group && $opponent['name_country'] !== $value['name_country']) {
                                                                    $opponentCountry = $opponent['name_country'];
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                            <td><?= $opponentCountry ?></td>
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-qf<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-qf<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>
                                                        <?php if ($no >= 1) {
                                                            break;
                                                        } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- /add-modal -->
                    <?php foreach ($wc22 as $key => $value) { ?>
                        <div class="modal fade" id="add-wc22-qf<?= $value['id_wc22'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Negara (<?= $value['name_country'] ?>)</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-wc22-qf/' . $value['id_wc22']) ?>
                                    <div class="modal-body">
                                        <div class="form-group" hidden>
                                            <label for="">Negara</label>
                                            <select name="id_country" class="form-control">
                                                <option value=""> ---Pilih Negara--- </option>
                                                <?php foreach ($country as $key => $c) {
                                                    // Tampilkan Negara hanya jika group_rank-nya adalah 1 atau 2
                                                    if ($value['status_qf'] == 1) { ?>
                                                        <option value="<?= $c['id_country'] ?>" <?= $value['id_country'] == $c['id_country'] ? 'Selected' : '' ?>><?= $c['name_country'] ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Room</label>
                                            <select name="id_qf" class="form-control" id="groupSelect">
                                                <option value=""> ---Pilih Room--- </option>
                                                <?php
                                                $sortedRooms = array_column($qf, 'code_qf');
                                                asort($sortedRooms); // Mengurutkan Room berdasarkan abjad
                                                foreach ($sortedRooms as $roomCode) {
                                                    $roomId = array_search($roomCode, array_column($qf, 'code_qf'));
                                                    $roomId = $qf[$roomId]['id_qf'];

                                                    // Menghitung jumlah tim di Room saat ini
                                                    $countInRoom = 0;
                                                    foreach ($wc22 as $key => $value) {
                                                        if ($value['code_qf'] === $roomCode) {
                                                            $countInRoom++;
                                                        }
                                                    }

                                                    // Sembunyikan opsi jika grup sudah memiliki 4 tim
                                                    $hiddenStyle = ($countInRoom >= 2) ? 'style="display:none;"' : '';

                                                    // Tampilkan opsi hanya jika $no ada di grup 1 atau 2
                                                    $displayOption = ($no == 1 || $no == 2) ? '' : 'style="display:none;"';
                                                ?>
                                                    <option value="<?= $roomId ?>" <?= $hiddenStyle . ' ' . $displayOption ?>><?= $roomCode ?></option>
                                                <?php
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
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-sf" role="tabpanel" aria-labelledby="custom-tabs-one-sf-tab">
                    <?php $groups = ['SF1', 'SF2']; ?>
                    <div class="row">
                        <?php if (session()->get('role') != 4) { ?>
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Qualified Countries</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Negara</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['status_sf'] == 1) { ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#add-wc22-sf<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php foreach ($groups as $group) { ?>
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Semi Final <?= $group ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } ?>
                                                    <th>S</th>
                                                    <th>-</th>
                                                    <th>S</th>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="400px">Tim</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['code_sf'] === $group) { ?>
                                                        <tr class="text-center">
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-sf<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-sf<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td><?= $value['score_sf'] ?></td>
                                                            <td>-</td>
                                                            <?php $opponentScore = $value['score_sf'];
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_sf'] === $group && $opponent['score_sf'] !== $value['score_sf']) {
                                                                    $opponentScore = $opponent['score_sf'];
                                                                    break;
                                                                }
                                                            } ?>
                                                            <td><?= $opponentScore ?></td>
                                                            <?php $opponentCountry = '';
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_sf'] === $group && $opponent['name_country'] !== $value['name_country']) {
                                                                    $opponentCountry = $opponent['name_country'];
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                            <td><?= $opponentCountry ?></td>
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-sf<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-sf<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>
                                                        <?php if ($no >= 1) {
                                                            break;
                                                        } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- /add-modal -->
                    <?php foreach ($wc22 as $key => $value) { ?>
                        <div class="modal fade" id="add-wc22-sf<?= $value['id_wc22'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Negara (<?= $value['name_country'] ?>)</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-wc22-sf/' . $value['id_wc22']) ?>
                                    <div class="modal-body">
                                        <div class="form-group" hidden>
                                            <label for="">Negara</label>
                                            <select name="id_country" class="form-control">
                                                <option value=""> ---Pilih Negara--- </option>
                                                <?php foreach ($country as $key => $c) {
                                                    // Tampilkan Negara hanya jika group_rank-nya adalah 1 atau 2
                                                    if ($value['status_sf'] == 1) { ?>
                                                        <option value="<?= $c['id_country'] ?>" <?= $value['id_country'] == $c['id_country'] ? 'Selected' : '' ?>><?= $c['name_country'] ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Room</label>
                                            <select name="id_sf" class="form-control" id="groupSelect">
                                                <option value=""> ---Pilih Room--- </option>
                                                <?php
                                                $sortedRooms = array_column($sf, 'code_sf');
                                                asort($sortedRooms); // Mengurutkan Room berdasarkan abjad
                                                foreach ($sortedRooms as $roomCode) {
                                                    $roomId = array_search($roomCode, array_column($sf, 'code_sf'));
                                                    $roomId = $sf[$roomId]['id_sf'];

                                                    // Menghitung jumlah tim di Room saat ini
                                                    $countInRoom = 0;
                                                    foreach ($wc22 as $key => $value) {
                                                        if ($value['code_sf'] === $roomCode) {
                                                            $countInRoom++;
                                                        }
                                                    }

                                                    // Sembunyikan opsi jika grup sudah memiliki 4 tim
                                                    $hiddenStyle = ($countInRoom >= 2) ? 'style="display:none;"' : '';

                                                    // Tampilkan opsi hanya jika $no ada di grup 1 atau 2
                                                    $displayOption = ($no == 1 || $no == 2) ? '' : 'style="display:none;"';
                                                ?>
                                                    <option value="<?= $roomId ?>" <?= $hiddenStyle . ' ' . $displayOption ?>><?= $roomCode ?></option>
                                                <?php
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
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-final" role="tabpanel" aria-labelledby="custom-tabs-one-final-tab">
                    <?php $groups = ['F1']; ?>
                    <div class="row">
                        <?php if (session()->get('role') != 4) { ?>
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Qualified Countries</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Negara</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['status_final'] == 1) { ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#add-wc22-final<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php foreach ($groups as $group) { ?>
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Final</h3>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                                <tr class="text-center">
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="750px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="750px">Tim</th>
                                                    <?php } ?>
                                                    <th>S</th>
                                                    <th>-</th>
                                                    <th>S</th>
                                                    <?php if (session()->get('role') == 1) { ?>
                                                        <th width="750px">Tim</th>
                                                    <?php } else { ?>
                                                        <th width="750px">Tim</th>
                                                    <?php } ?>
                                                    <?php if (session()->get('role') == 5) { ?>
                                                        <th width="150px">Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1 ?>
                                                <?php foreach ($wc22 as $key => $value) { ?>
                                                    <?php if ($value['code_final'] === $group) { ?>
                                                        <tr class="text-center">
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-final<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-final<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                            <td><?= $value['name_country'] ?></td>
                                                            <td><?= $value['score_final'] ?></td>
                                                            <td>-</td>
                                                            <?php $opponentScore = $value['score_final'];
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_final'] === $group && $opponent['score_final'] !== $value['score_final']) {
                                                                    $opponentScore = $opponent['score_final'];
                                                                    break;
                                                                }
                                                            } ?>
                                                            <td><?= $opponentScore ?></td>
                                                            <?php $opponentCountry = '';
                                                            foreach ($wc22 as $opponent) {
                                                                if ($opponent['code_final'] === $group && $opponent['name_country'] !== $value['name_country']) {
                                                                    $opponentCountry = $opponent['name_country'];
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                            <td><?= $opponentCountry ?></td>
                                                            <?php if (session()->get('role') == 5) { ?>
                                                                <td>
                                                                    <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc22-final<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                    <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-wc22-final<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                                </td>
                                                            <?php } ?>
                                                        </tr>
                                                        <?php if ($no >= 1) {
                                                            break;
                                                        } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- /add-modal -->
                    <?php foreach ($wc22 as $key => $value) { ?>
                        <div class="modal fade" id="add-wc22-final<?= $value['id_wc22'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Negara (<?= $value['name_country'] ?>)</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php echo form_open('/add-wc22-final/' . $value['id_wc22']) ?>
                                    <div class="modal-body">
                                        <div class="form-group" hidden>
                                            <label for="">Negara</label>
                                            <select name="id_country" class="form-control">
                                                <option value=""> ---Pilih Negara--- </option>
                                                <?php foreach ($country as $key => $c) {
                                                    // Tampilkan Negara hanya jika group_rank-nya adalah 1 atau 2
                                                    if ($value['status_final'] == 1) { ?>
                                                        <option value="<?= $c['id_country'] ?>" <?= $value['id_country'] == $c['id_country'] ? 'Selected' : '' ?>><?= $c['name_country'] ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Room</label>
                                            <select name="id_final" class="form-control" id="groupSelect">
                                                <option value=""> ---Pilih Room--- </option>
                                                <?php
                                                $sortedRooms = array_column($final, 'code_final');
                                                asort($sortedRooms); // Mengurutkan Room berdasarkan abjad
                                                foreach ($sortedRooms as $roomCode) {
                                                    $roomId = array_search($roomCode, array_column($final, 'code_final'));
                                                    $roomId = $final[$roomId]['id_final'];

                                                    // Menghitung jumlah tim di Room saat ini
                                                    $countInRoom = 0;
                                                    foreach ($wc22 as $key => $value) {
                                                        if ($value['code_final'] === $roomCode) {
                                                            $countInRoom++;
                                                        }
                                                    }

                                                    // Sembunyikan opsi jika grup sudah memiliki 4 tim
                                                    $hiddenStyle = ($countInRoom >= 2) ? 'style="display:none;"' : '';

                                                    // Tampilkan opsi hanya jika $no ada di grup 1 atau 2
                                                    $displayOption = ($no == 1 || $no == 2) ? '' : 'style="display:none;"';
                                                ?>
                                                    <option value="<?= $roomId ?>" <?= $hiddenStyle . ' ' . $displayOption ?>><?= $roomCode ?></option>
                                                <?php
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
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#groupSelect").change(function() {
            var selectedGroup = $(this).val();

            if (teamCountByGroup[selectedGroup] >= 4) {
                $("#groupSelect option[value='" + selectedGroup + "']").hide();
            } else {
                $("#groupSelect option[value='" + selectedGroup + "']").show();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#roomSelect").change(function() {
            var selectedRoom = $(this).val();

            if (teamCountByRoom[selectedRoom] >= 1) {
                $("#roomSelect option[value='" + selectedRoom + "']").hide();
            } else {
                $("#roomSelect option[value='" + selectedRoom + "']").show();
            }
        });
    });
</script>