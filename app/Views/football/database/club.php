<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-club"><i class="fas fa-plus"></i> Add Club
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
            <table id="example1" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Klub</th>
                        <th>Kode Klub</th>
                        <th>Negara</th>
                        <th>Konfederasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($club as $key => $value) { ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $value['name_club'] ?></td>
                            <td><?= $value['code_club'] ?></td>
                            <td><?= $value['name_country'] ?></td>
                            <td><?= $value['code_confederation'] ?></td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-club<?= $value['id_club'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-club<?= $value['id_club'] ?>"><i class="fas fa-trash"></i></button>
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
<div class="modal fade" id="add-club">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Klub</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('/add-club') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama Klub</label>
                    <input name="name_club" class="form-control" placeholder="Masukkan Nama Klub" required>
                </div>
                <div class="form-group">
                    <label for="">Code Klub</label>
                    <input name="code_club" class="form-control" placeholder="Masukkan Code Club" required>
                </div>
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
                    <label for="">Konfederasi</label>
                    <select name="id_confederation" class="form-control">
                        <option value=""> ---Pilih Konfederasi--- </option>
                        <?php
                        $sortedConfederations = array_column($confederation, 'code_confederation');
                        asort($sortedConfederations); // Mengurutkan negara berdasarkan abjad
                        foreach ($sortedConfederations as $confederationName) {
                            $confederationId = array_search($confederationName, array_column($confederation, 'code_confederation'));
                            $confederationId = $confederation[$confederationId]['id_confederation'];
                        ?>
                            <option value="<?= $confederationId ?>"><?= $confederationName ?></option>
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
<?php
// Mengambil daftar konfederasi dan mengurutkannya berdasarkan nama konfederasi (A-Z)
$sortedConfederations = $confederation; // Salin daftar konfederasi
usort($sortedConfederations, function ($a, $b) {
    return strcasecmp($a['name_confederation'], $b['name_confederation']);
});
// Mengambil daftar konfederasi dan mengurutkannya berdasarkan nama konfederasi (A-Z)
$sortedCountries = $country; // Salin daftar konfederasi
usort($sortedCountries, function ($a, $b) {
    return strcasecmp($a['name_country'], $b['name_country']);
});
?>

<?php foreach ($club as $key => $value) { ?>
    <div class="modal fade" id="edit-club<?= $value['id_club'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Club</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('/edit-club/' . $value['id_club']) ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Club</label>
                        <input name="name_club" class="form-control" value="<?= $value['name_club'] ?>" placeholder="Masukkan Nama Club" required>
                    </div>
                    <div class="form-group">
                        <label for="">Code Klub</label>
                        <input name="code_club" class="form-control" value="<?= $value['code_club'] ?>" placeholder="Masukkan Code Club" required>
                    </div>
                    <div class="form-group">
                        <label for="">Negara</label>
                        <select name="id_country" class="form-control">
                            <option value=""> ---Pilih Negara--- </option>
                            <?php foreach ($sortedCountries as $country) { ?>
                                <option value="<?= $country['id_country'] ?>" <?= $value['id_country'] == $country['id_country'] ? 'selected' : '' ?>>
                                    <?= $country['name_country'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Konfederasi</label>
                        <select name="id_confederation" class="form-control">
                            <option value=""> ---Pilih Konfederasi--- </option>
                            <?php foreach ($sortedConfederations as $confederation) { ?>
                                <option value="<?= $confederation['id_confederation'] ?>" <?= $value['id_confederation'] == $confederation['id_confederation'] ? 'selected' : '' ?>>
                                    <?= $confederation['code_confederation'] ?>
                                </option>
                            <?php } ?>
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
<?php foreach ($club as $key => $value) { ?>
    <div class="modal fade" id="delete-club<?= $value['id_club'] ?>">
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
                    <a href="<?= base_url('/delete-club/' . $value['id_club']) ?>" class="btn btn-danger btn-flat">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>