<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-groups-tab" data-toggle="pill" href="#custom-tabs-one-groups" role="tab" aria-controls="custom-tabs-one-groups" aria-selected="true">Group Stage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-knockouts-tab" data-toggle="pill" href="#custom-tabs-one-knockouts" role="tab" aria-controls="custom-tabs-one-knockouts" aria-selected="false">Knockout Stage</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-one-groups" role="tabpanel" aria-labelledby="custom-tabs-one-groups-tab">
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
                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#add-country"><i class="fas fa-plus"></i></button>
                        </div>
                    <?php } ?>
                <?php } ?>
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
                                                <th>No</th>
                                                <th width="300px">Tim</th>
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
                                            <?php $no = 1; ?>
                                            <?php foreach ($wc22 as $key => $value) { ?>
                                                <?php if ($value['code_group'] === $group) { ?>
                                                    <tr class="text-center">
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $value['name_country'] ?></td>
                                                        <td><?= $value['play'] ?></td>
                                                        <td><?= $value['win'] ?></td>
                                                        <td><?= $value['draw'] ?></td>
                                                        <td><?= $value['lose'] ?></td>
                                                        <td><?= $value['goal_in'] ?></td>
                                                        <td><?= $value['goal_out'] ?></td>
                                                        <td><?= $value['goal_diff'] ?></td>
                                                        <td><?= $value['points'] ?></td>
                                                        <?php if (session()->get('role') != '4') { ?>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-wc2<?= $value['id_wc22'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                                                <button class="btn btn-danger btn-sm btn-flat " data-toggle="modal" data-target="#delete-wc22<?= $value['id_wc22'] ?>"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
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
                <div class="modal fade" id="add-country">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Negara</h4>
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
                                        ?>
                                            <option value="<?= $countryId ?>"><?= $countryName ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Grup</label>
                                    <select name="id_group" class="form-control">
                                        <option value=""> ---Pilih Grup--- </option>
                                        <?php
                                        $sortedGroups = array_column($grup, 'code_group');
                                        asort($sortedGroups); // Mengurutkan grup berdasarkan abjad
                                        foreach ($sortedGroups as $groupCode) {
                                            $groupId = array_search($groupCode, array_column($grup, 'code_group'));
                                            $groupId = $grup[$groupId]['id_group'];
                                        ?>
                                            <option value="<?= $groupId ?>"><?= $groupCode ?></option>
                                        <?php } ?>
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
                <?php foreach ($wc22 as $key => $value) { ?>
                    <div class="modal fade" id="edit-wc2<?= $value['id_wc22'] ?>">
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
                                    <div>
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
                                    <div class="form-group">
                                        <label for="">Selisih Gol</label>
                                        <input name="goal_diff" class="form-control" placeholder="Masukkan Selisih Gol" value="<?= $value['goal_diff'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Poin</label>
                                        <input name="points" class="form-control" placeholder="Masukkan Points" value="<?= $value['points'] ?>" required>
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
            </div>


            <div class="tab-pane fade" id="custom-tabs-one-knockouts" role="tabpanel" aria-labelledby="custom-tabs-one-knockouts-tab">
                <?php $knockouts = ['16', '8', '4', '2']; ?>
                <?php
                // Define an array to store group winners and runners-up
                $groupWinners = [];
                $groupRunnersUp = [];

                // Separate the teams into winners and runners-up based on group standings
                foreach ($groups as $group) {
                    $groupTeams = [];
                    foreach ($wc22 as $key => $value) {
                        if ($value['code_group'] === $group) {
                            $groupTeams[] = $value;
                        }
                    }

                    // Sort the teams in the group based on points (highest to lowest)
                    usort($groupTeams, function ($a, $b) {
                        return $b['points'] - $a['points'];
                    });

                    // Add the group winner and runner-up to the respective arrays
                    $groupWinners[] = $groupTeams[0];
                    $groupRunnersUp[] = $groupTeams[1];
                }

                // Define the RO16 pairings
                $ro16Pairings = [];
                for ($i = 0; $i < count($groupWinners); $i++) {
                    $ro16Pairings[] = "RO16 " . ($i + 1);
                    $ro16Pairings[] = $groupWinners[$i]['name_country'] . " vs " . $groupRunnersUp[$i]['name_country'];
                }
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tbody>
                                <?php for ($i = 0; $i < count($ro16Pairings); $i += 2) { ?>
                                    <tr class="text-center">
                                        <td><?php echo $ro16Pairings[$i + 1]; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>