<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>

<?php

use CodeIgniter\I18n\Time;
?>



<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold">Kelola Akun</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Akun</li>
                    </ol>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <!-- ./ flash success tambah data  -->

            <!-- flash gagal tambah data  -->
            <?php if (session()->getFlashdata('messageError')) :  ?>
                <div class="alert alert-danger d-flex align-items-center fw-bold" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </symbol>
                        <use xlink:href="#exclamation-triangle-fill" />
                    </svg>
                    <div>
                        <?= session()->getFlashData('messageError'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- ./ flash gagal tambah data  -->


            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link btn btn-app fw-bold active" id="dosen-tab" data-toggle="pill" href="#tabs-dosen" role="tab" aria-controls="tabs-dosen" aria-selected="true">Dosen</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-app  fw-bold" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false" class="fw-bold">Admin</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link btn btn-app fw-bold" id="kontributor-tab" data-toggle="pill" href="#tabs-kontributor" role="tab" aria-controls="tabs-kontributor" aria-selected="false">Kontributor</a>
                        </li>


                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">

                        <!-- ================================= content tab dosen ==================================== -->
                        <div class="tab-pane fade show active" id="tabs-dosen" role="tabpanel" aria-labelledby="dosen-tab">

                            <?= csrf_field(); ?>
                            <!-- KELOLA responden dosen -->
                            <div class="card-body">
                                <!-- button collapse lihat Daftar Dosen -->
                                <p>
                                    <button class="btn btn-rouge btn-sm  px-3 " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-list-dosen" aria-expanded="false">
                                        <i class="fas fa-chevron-down"> </i> List Daftar Dosen
                                    </button>
                                </p>
                                <!-- ./button collapse lihat Daftar Dosen -->

                                <!-- content collapse  -->
                                <div class="collapse my-3" id="collapse-list-dosen">
                                    <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4 mb-3">
                                        <h3 class="card-title">Lihat Daftar Dosen</h3>
                                        <?php if (in_groups('Admin')) : ?>
                                            <!-- Button trigger modal -->
                                            <a data-bs-toggle="modal" data-bs-target="#modal-tambah-dosen" class="ml-auto">
                                                <button type="button" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-plus"></i> Buat Akun Dosen
                                                </button></a>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (in_groups('Admin')) : ?>
                                        <!-- modal tambah responden dosen -->
                                        <div class="modal fade" id="modal-tambah-dosen" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-cosmic text-white">
                                                        <h5 class="modal-title text-center">Buat Akun Dosen</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- form tambah responden dosen -->
                                                        <form action="<?= url_to('register') ?>" method="post" class="user" accept-charset="utf-8">
                                                            <?= csrf_field() ?>

                                                            <!-- role-->
                                                            <input type="hidden" name="role" value="Dosen" />

                                                            <!-- email -->
                                                            <div class="form-group my-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" class=" form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>">
                                                                <div class="invalid-feedback">
                                                                    <?= session('errors.email') ?>
                                                                </div>
                                                            </div>

                                                            <!-- username -->
                                                            <div class="form-group mb-3">
                                                                <label for="username" class="form-label">Username</label>
                                                                <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                                                                <div class="invalid-feedback">
                                                                    <?= session('errors.username') ?>
                                                                </div>
                                                            </div>

                                                            <!-- password -->
                                                            <div class="form-group row mb-3">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <label for="password" class="form-label">Password</label>
                                                                    <input type="password" name="password" id="inputPasswordDosen" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                                                    <input type="checkbox" onclick="showPasswordDosen()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>
                                                                    <div class="invalid-feedback">
                                                                        <?= session('errors.password') ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                                                    <input type="password" name="pass_confirm" id="inputPasswordConfirmDosen" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                                                    <input type="checkbox" onclick="showPasswordConfirmDosen()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>
                                                                    <div class="invalid-feedback">
                                                                        <?= session('errors.pass_confirm') ?>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex align-items-center">
                                                                <button type="submit" class="btn btn-success ml-auto mt-3">
                                                                    <i class="fas fa-save mr-2"></i>Simpan
                                                                </button>
                                                            </div>
                                                        </form>
                                                        <!-- end form responden dosen -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal tambah responden dosen -->
                                    <?php endif; ?>

                                    <table class="table table-bordered table-hover display row-border ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="align-middle">No.</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($getAllDosen as $allDosen) :  ?>
                                                <tr>
                                                    <td scope="row" class="align-middle text-center"> <?= $i++; ?></td>
                                                    <td><?= $allDosen->email; ?> </td>
                                                    <td><?= $allDosen->username; ?> </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>



                                </div>
                                <!-- ./content collapse   -->

                                <!-- button collapse list akses instrumen -->
                                <p>
                                    <button class="btn btn-rouge btn-sm mt-3 px-3 " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-list-akses" aria-expanded="false">
                                        <i class="fas fa-chevron-down"> </i> Instrumen yang dapat diisi oleh Dosen
                                    </button>
                                </p>
                                <!-- ./button collapse list akses instrumen  -->

                                <div class="collapse mt-3" id="collapse-list-akses">
                                    <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4 mb-3">
                                        <h3 class="card-title">Survei Instrumen Kepuasan yang dapat diisi oleh Responden: Dosen</h3>
                                    </div>

                                    <div class="accordion" id="accordionExample">

                                        <?php foreach ($instrumenByResponden as $insDosen) : ?>
                                            <div class="accordion-item my-3">
                                                <h5 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button rounded d-flex align-items-center col-lg-12" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIns-<?= $insDosen['slug']; ?>" aria-expanded="true" aria-controls="collapseIns-<?= $insDosen['slug']; ?>">
                                                        <span class="fw-bold fs-6"> <?= $insDosen['kodeInstrumen']; ?> - <?= $insDosen['namaInstrumen']; ?></span>

                                                    </button>
                                                </h5>

                                                <div id="collapseIns-<?= $insDosen['slug']; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="table-responsive">
                                                            <?php $permissionNameDosen = $insDosen['id']; ?>
                                                            <table class="table table-bordered table-hover display row-border ">

                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Email</th>
                                                                        <th>Username</th>
                                                                        <?php if (in_groups('Admin')) : ?>
                                                                            <th class="text-center">Aksi</th>
                                                                        <?php endif; ?>
                                                                    </tr>
                                                                </thead>

                                                                <?php
                                                                $db = db_connect();
                                                                $name = $permissionNameDosen;
                                                                $sql = "SELECT * FROM auth_permissions WHERE name = ? ";
                                                                $getAuthPermissions =  $db->query($sql, [$name]);
                                                                $i = 1;

                                                                foreach ($getAuthPermissions->getResultArray() as $getPermissionId) {
                                                                    $permissionId = $getPermissionId['id'];
                                                                    // echo "permission id " . $permissionId;
                                                                }
                                                                ?>

                                                                <button type="button" class="btn btn-sm btn-warning mb-3 " data-bs-toggle="modal" data-bs-target="#tambahAkunPermissionModal-<?= $permissionId; ?>">
                                                                    <i class=" fas fa-plus"></i> Tambah Akses Akun
                                                                </button>
                                                                <!-- modal tambah akun -->
                                                                <div class="modal fade" id="tambahAkunPermissionModal-<?= $permissionId; ?>" tabindex="-1">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-cosmic text-white">
                                                                                <h5 class="modal-title" id="tambahButirLabel">Buat Akses pada Instrumen</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <?php
                                                                                $sql_2 = "SELECT * FROM auth_users_permissions WHERE permission_id = ? ";
                                                                                $getUsersPermissions =  $db->query($sql_2, [$permissionId]); ?>

                                                                                <?php $userIdnya = []; ?>
                                                                                <?php foreach ($getUsersPermissions->getResultArray() as $getUserId) : ?>

                                                                                    <?php
                                                                                    $userIdnya[] = $getUserId['user_id'];
                                                                                    $userID = $getUserId['user_id'];
                                                                                    ?>
                                                                                <?php endforeach; ?>

                                                                                <div class="container">
                                                                                    <?= csrf_field(); ?>
                                                                                    <!-- isi OLD -->
                                                                                    <form action="<?= base_url(); ?>/admin/kelolaAkun/addAkunPermission" method="post">
                                                                                        <div class="form-group">
                                                                                            <label class="col-form-label">Instrumen :</label>
                                                                                            <input class="form-control" type="text" value="<?= $insDosen['namaInstrumen']; ?>" readonly>

                                                                                            <label class="col-form-label mt-3">Pilih akun yang dapat mengakses instrumen kepuasan ini:</label>
                                                                                            <select name="addAkunPermission[]" class="form-select form-select-responden-dosen-<?= $permissionId; ?>" style="width: 100%" multiple>
                                                                                                <?php foreach ($getAllDosen as $allDosen) :  ?>
                                                                                                    <option value="<?= $allDosen->id; ?>" <?php echo in_array($allDosen->id, $userIdnya) ? 'selected' : '' ?>> <?= $allDosen->email; ?></option>
                                                                                                <?php endforeach; ?>
                                                                                            </select>
                                                                                            <input type="hidden" name="permission_id" value="<?= $permissionId; ?>">

                                                                                        </div>
                                                                                        <div class="modal-footer mt-5">
                                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                                            <button type="submit" class="btn btn-success">Simpan</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                $sql_2 = "SELECT * FROM auth_users_permissions WHERE permission_id = ? ";
                                                                $getUsersPermissions =  $db->query($sql_2, [$permissionId]); ?>

                                                                <?php $userIdnya = []; ?>
                                                                <?php foreach ($getUsersPermissions->getResultArray() as $getUserId) : ?>

                                                                    <?php
                                                                    $userIdnya[] = $getUserId['user_id'];
                                                                    $userID = $getUserId['user_id'];
                                                                    // var_dump($userIdnya);

                                                                    // echo "user id " . $userID;

                                                                    // get data dosen by user id
                                                                    $userModel = model('UserModel');
                                                                    $this->userModel = new $userModel;
                                                                    $getDataDosen = $this->userModel->getDataDosen($userID);
                                                                    ?>

                                                                    <?php foreach ($getDataDosen as $dosen) : ?>
                                                                        <?php
                                                                        $userId =  $dosen['id'];
                                                                        $permissionModel = model('PermissionModel');
                                                                        $this->permissionModel = new $permissionModel;
                                                                        // $doesUserHavePermission =  $this->permissionModel->doesUserHavePermission($userId, $permissionId);
                                                                        // var_dump($doesUserHavePermission);

                                                                        ?>
                                                                        <tr>
                                                                            <td class="text-center"><?= $i++; ?></td>
                                                                            <td>
                                                                                <?= $dosen['id']; ?>
                                                                                <?= $dosen['email']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $dosen['username']; ?>
                                                                            </td>
                                                                            <?php if (in_groups('Admin')) : ?>
                                                                                <!-- remove permission -->
                                                                                <td class="d-flex justify-content-center ">
                                                                                    <a href="#" class="btn btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal-delete-permission-<?= $permissionId; ?>-userID-<?= $userID; ?>">
                                                                                        <button type="button" class="btn btn-sm" id="remove_permission">
                                                                                            <i class=" fas fa-user-minus text-white"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                </td>
                                                                                <!-- ./remove permission   -->

                                                                                <!-- modal remove permissio-->
                                                                                <div class="modal fade" id="modal-delete-permission-<?= $permissionId; ?>-userID-<?= $userID; ?>" tabindex="-1" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-centered ">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header bg-cosmic text-white">
                                                                                                <h5 class="modal-title fw-bold">Hapus Akses</h5>
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body text-center">
                                                                                                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                                                Anda akan menghapus akses akun <u><?= $dosen['email']; ?></u> pada kuesioner <?= $insDosen['namaInstrumen']; ?> ?
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                                                <form action="<?= base_url(); ?>/admin/kelolaAkun/removePermission/<?= $permissionId; ?>/<?= $userID; ?>" method="post">
                                                                                                    <?= csrf_field(); ?>
                                                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                                                </form>


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- ./modal remove permissio-->

                                                                            <?php endif; ?>
                                                                        </tr>
                                                                        </tbody>



                                                                    <?php endforeach; ?>

                                                                <?php endforeach; ?>
                                                                <!-- select2 -->
                                                                <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                                                                <script>
                                                                    $(".form-select-responden-dosen-<?= $permissionId; ?>").select2({
                                                                        dropdownParent: $('#tambahAkunPermissionModal-<?= $permissionId; ?>'),
                                                                        placeholder: "Klik Disini"
                                                                    });
                                                                </script>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./ content tab dosen -->

                        <!-- ================================= content tab gpjm ==================================== -->

                        <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <!-- card admin gpjm -->
                            <div class="card-body">
                                <div class="card-header text-rouge d-flex align-items-center row py-3 mb-3">
                                    <div class="col-lg-8">
                                        <h3 class="card-title">Admin GPjM</h3>
                                    </div>
                                    <div class="col-lg-4 d-flex justify-content-end">
                                        <?php if (in_groups('Admin')) : ?>
                                            <!-- Button trigger modal -->
                                            <a data-bs-toggle="modal" data-bs-target="#modal-tambah-admin-GPJM" class="ml-auto">
                                                <button type="button" class="btn btn-sm btn-rouge text-white">
                                                    <i class="fas fa-plus"></i> Tambah Admin
                                                </button></a>

                                            <!-- modal tambah admin gpjm -->
                                            <div class="modal fade" id="modal-tambah-admin-GPJM" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-cosmic text-white">
                                                            <h5 class="modal-title text-center">Tambah Admin GPjM</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <!-- form tambah admin gpjm -->
                                                            <form action="<?= url_to('register') ?>" method="post" class="user" accept-charset="utf-8">
                                                                <?= csrf_field() ?>

                                                                <!-- role-->
                                                                <input type="hidden" name="role" value="Admin" />

                                                                <!-- email -->
                                                                <div class="form-group my-3">
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <input type="email" class=" form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>">
                                                                    <div class="invalid-feedback">
                                                                        <?= session('errors.email') ?>
                                                                    </div>
                                                                </div>

                                                                <!-- username -->
                                                                <div class="form-group mb-3">
                                                                    <label for="username" class="form-label">Username</label>
                                                                    <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                                                                    <div class="invalid-feedback">
                                                                        <?= session('errors.username') ?>
                                                                    </div>
                                                                </div>

                                                                <!-- password -->
                                                                <div class="form-group row mb-3">
                                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                                        <label for="password" class="form-label">Password</label>
                                                                        <input type="password" name="password" id="inputPassword" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">

                                                                        <input type="checkbox" onclick="showPassword()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>

                                                                        <div class="invalid-feedback">
                                                                            <?= session('errors.password') ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                                                        <input type="password" name="pass_confirm" id="inputPass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">

                                                                        <input type="checkbox" onclick="showPasswordConfirm()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>

                                                                        <div class="invalid-feedback">
                                                                            <?= session('errors.pass_confirm') ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex align-items-center">
                                                                    <button type="submit" class="btn btn-success ml-auto mt-3">
                                                                        <i class="fas fa-save"></i>Simpan
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <!-- end form admin gpjm -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal tambah admin gpjm -->
                                        <?php endif; ?>
                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="table-responsive">
                                    <table id="table-admin-gpjm" class="table table-bordered display row-border">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Tgl Dibuat</th>
                                                <th>Status Aktif</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($getAdminUser as $admin) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $i++; ?></td>
                                                    <td><?= $admin->email; ?></td>
                                                    <td><?= $admin->username; ?></td>
                                                    <td>
                                                        <?php
                                                        $timeCreated = Time::parse($admin->created_at, 'Asia/Jakarta');
                                                        ?>
                                                        <?= $timeCreated->toLocalizedString('d MMM yyyy,  HH:mm'); ?>
                                                    </td>

                                                    <form action="<?= base_url(); ?>/admin/kelolaAkun/activeStatus/<?= $admin->id; ?>" method="post" enctype="multipart/form-data">
                                                        <td>
                                                            <?php
                                                            $is_active = $admin->active;
                                                            ?>
                                                            <div class="form-check mr-4">
                                                                <input class="form-check-input-status-admin-<?= $admin->id; ?>" type="checkbox" <?= check_access($is_active); ?> data-active="<?= $is_active; ?>" data-id="<?= $admin->id; ?>">
                                                            </div>
                                                        </td>

                                                        <!-- is_active checkbox -->
                                                        <script>
                                                            // get data
                                                            $('.form-check-input-status-admin-<?= $admin->id; ?>').on('click', function() {
                                                                const activeId = $(this).data('active');
                                                                const id = $(this).data('id');

                                                                $.ajax({
                                                                    url: "<?= base_url(); ?>/admin/kelolaAkun/activeStatus/<?= $admin->id; ?>",
                                                                    headers: {
                                                                        'X-Requested-With': 'XMLHttpRequest'
                                                                    },
                                                                    type: 'post',
                                                                    data: {
                                                                        activeId: activeId,
                                                                        id: id
                                                                    },
                                                                    success: function() {
                                                                        document.location.href = "<?= base_url(); ?>/admin/kelolaAkun"
                                                                    }
                                                                })

                                                            });
                                                        </script>
                                                        <!-- ./is_active checkbox -->
                                                    </form>


                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal-delete-adminGPJM-<?= $admin->id; ?>">
                                                            <button type="button" class="btn btn-sm">
                                                                <i class="fas fa-trash-alt text-white"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!-- modal hapus admin GPJM -->
                                                <div class="modal fade" id="modal-delete-adminGPJM-<?= $admin->id; ?>" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered ">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-cosmic text-white">
                                                                <h5 class="modal-title fw-bold">Hapus </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                Yakin hapus akun admin <?= $admin->username; ?>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                <form action="<?= base_url(); ?>/admin/kelolaAkun/deleteUser/<?= $admin->id; ?>" method="post">
                                                                    <?= csrf_field(); ?>
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./modal hapus admin GPJM -->
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- ./card admin gpjm -->
                        </div>
                        <!-- ./content tab admin gpjm -->

                        <!-- ================================= content tab kontributor ============================= -->

                        <div class="tab-pane fade" id="tabs-kontributor" role="tabpanel" aria-labelledby="kontributor-tab">
                            <!-- KELOLA ADMIN KONTRIBUTOR -->
                            <div class="card-body">
                                <div class="card-header text-rouge d-flex align-items-center row py-3 mb-3">
                                    <div class="col-lg-8">
                                        <h3 class="card-title">Kontributor</h3>
                                    </div>
                                    <div class="col-lg-4 d-flex justify-content-end">
                                        <?php if (in_groups('Admin')) : ?>
                                            <!-- Button trigger modal -->
                                            <a data-bs-toggle="modal" data-bs-target="#modal-tambah-admin-kontributor" class="ml-auto">
                                                <button type="button" class="btn btn-sm btn-rouge text-white">
                                                    <i class="fas fa-plus"></i> Tambah Kontributor
                                                </button></a>

                                            <!-- modal tambah admin kontributor -->
                                            <div class="modal fade" id="modal-tambah-admin-kontributor" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-cosmic text-white">
                                                            <h5 class="modal-title text-center">Tambah Admin Kontributor</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- form tambah admin kontributor -->
                                                            <form action="<?= url_to('register') ?>" method="post" class="user" accept-charset="utf-8">
                                                                <?= csrf_field() ?>

                                                                <!-- role-->
                                                                <input type="hidden" name="role" value="Kontributor" />

                                                                <!-- email -->
                                                                <div class="form-group my-3">
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <input type="email" class=" form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>">
                                                                    <div class="invalid-feedback">
                                                                        <?= session('errors.email') ?>
                                                                    </div>
                                                                </div>

                                                                <!-- username -->
                                                                <div class="form-group mb-3">
                                                                    <label for="username" class="form-label">Username</label>
                                                                    <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                                                                    <div class="invalid-feedback">
                                                                        <?= session('errors.username') ?>
                                                                    </div>
                                                                </div>

                                                                <!-- password -->
                                                                <div class="form-group row mb-3">
                                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                                        <label for="password" class="form-label">Password</label>
                                                                        <input type="password" name="password" id="inputPasswordKontributor" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                                                        <input type="checkbox" onclick="showPasswordKontributor()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>

                                                                        <div class="invalid-feedback">
                                                                            <?= session('errors.password') ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                                                        <input type="password" name="pass_confirm" id="inputPasswordConfirmKontributor" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                                                        <input type="checkbox" onclick="showPasswordConfirmKontributor()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>

                                                                        <div class="invalid-feedback">
                                                                            <?= session('errors.pass_confirm') ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex align-items-center">
                                                                    <button type="submit" class="btn btn-success ml-auto mt-3">
                                                                        <i class="fas fa-save"></i>Simpan
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <!-- end form admin kontributor -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal tambah admin kontributor -->
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="table-responsive">
                                    <table id="table-admin-kontributor" class="table table-bordered display row-border">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Tgl Dibuat</th>
                                                <th>Status Aktif</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($getKontributor as $kontributor) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $i++; ?></td>
                                                    <td><?= $kontributor->email; ?></td>
                                                    <td><?= $kontributor->username; ?></td>
                                                    <td>
                                                        <?php
                                                        $timeCreated = Time::parse($kontributor->created_at, 'Asia/Jakarta');
                                                        ?>
                                                        <?= $timeCreated->toLocalizedString('d MMM yyyy,  HH:mm'); ?>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mr-4">
                                                            <input class="form-check-input-status-kontributor-<?= $kontributor->id; ?>" type="checkbox" <?= check_access($kontributor->active); ?> data-active="<?= $kontributor->active; ?>" data-id="<?= $kontributor->id; ?>">

                                                        </div>
                                                    </td>
                                                    <!-- is_active checkbox -->
                                                    <script>
                                                        // get data
                                                        $('.form-check-input-status-kontributor-<?= $kontributor->id; ?>').on('click', function() {
                                                            const activeId = $(this).data('active');
                                                            const id = $(this).data('id');

                                                            $.ajax({
                                                                url: "<?= base_url(); ?>/admin/kelolaAkun/activeStatus/<?= $kontributor->id; ?>",
                                                                headers: {
                                                                    'X-Requested-With': 'XMLHttpRequest'
                                                                },
                                                                type: 'post',
                                                                data: {
                                                                    activeId: activeId,
                                                                    id: id
                                                                },
                                                                success: function() {
                                                                    document.location.href = "<?= base_url(); ?>/admin/kelolaAkun"
                                                                }
                                                            })

                                                        });
                                                    </script>
                                                    <!-- ./is_active checkbox -->

                                                    <td class="align-middle">
                                                        <a href="#" class="btn btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal-delete-kontributor-<?= $kontributor->id; ?>">
                                                            <button type="button" class="btn btn-sm">
                                                                <i class="fas fa-trash-alt text-white"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!-- modal hapus kontributor -->
                                                <div class="modal fade" id="modal-delete-kontributor-<?= $kontributor->id; ?>" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered ">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-cosmic text-white">
                                                                <h5 class="modal-title fw-bold">Hapus </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                Yakin hapus akun admin <?= $kontributor->username; ?>?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                <form action="<?= base_url(); ?>/admin/kelolaAkun/deleteUser/<?= $kontributor->id; ?>" method="post">
                                                                    <?= csrf_field(); ?>
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./modal hapus kontributor -->
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- ./KELOLA ADMIN KONTRIBUTOR -->
                        </div>
                        <!-- ./ content tab kontributor -->


                    </div>

                </div>
            </div>
        </div>
</div>
</section>
<!-- /.content -->
</div>
<!-- table admin gpjm -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#table-admin-gpjm').DataTable({
            "paging": false,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Admin GPjM',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Admin GPjM',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Admin GPjM',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',
                    messageTop: 'Admin GPjM',


                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
</script>
<!-- ./table admin gpjm -->

<!-- table kontributor -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#table-admin-kontributor').DataTable({
            "paging": false,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Admin GPjM',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Admin GPjM',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Admin GPjM',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',
                    messageTop: 'Admin GPjM',


                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
</script>
<!-- ./table kontributor -->


<!-- show password toggle -->
<script>
    function showPassword() {
        var x = document.getElementById("inputPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function showPasswordConfirm() {
        var x = document.getElementById("inputPass_confirm");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script>
    function showPasswordKontributor() {
        var x = document.getElementById("inputPasswordKontributor");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function showPasswordConfirmKontributor() {
        var x = document.getElementById("inputPasswordConfirmKontributor");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script>
    function showPasswordDosen() {
        var x = document.getElementById("inputPasswordDosen");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function showPasswordConfirmDosen() {
        var x = document.getElementById("inputPasswordConfirmDosen");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?= $this->endSection(); ?>