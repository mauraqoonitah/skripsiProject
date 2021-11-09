<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
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

            <button type="button" class="btn btn-primary"> Kelola Dosen yang bisa mengisi instrumen kepuasan</button>

            <!-- card admin gpjm -->
            <div class="card">
                <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4">
                    <h3 class="card-title">Admin GPjM</h3>
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
                                                    <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.password') ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                                    <input type="password" name="pass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
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
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="table-admin-gpjm" class="table table-bordered display row-border">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Date Created</th>
                                <th>Active</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($getAdminUser as $admin) : ?>
                                <tr>
                                    <td class="text-center"><?= $i++; ?></td>
                                    <td><?= $admin->fullname; ?></td>
                                    <td><?= $admin->email; ?></td>
                                    <td><?= $admin->created_at; ?></td>
                                    <td><?= $admin->active; ?></td>

                                    <td class="align-middle">
                                        <div class="btn-group " role="group">
                                            <a href="<?= base_url(); ?>/admin ?>" class="btn btn-sm btn-info text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                <button type="button" class="btn btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal-delete-adminGPJM-<?= $admin->id; ?>">
                                                <button type="button" class="btn btn-sm">
                                                    <i class="fas fa-trash-alt text-white"></i>
                                                </button>
                                            </a>
                                        </div>
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
                                                Yakin hapus akun admin <?= $admin->fullname; ?>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                <form action="<?= base_url(); ?>/admin/" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- ./card admin gpjm -->

            <!-- card admin kontributor -->
            <div class="card mt-5">
                <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4">
                    <h3 class="card-title">Kontributor</h3>
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
                                                    <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.password') ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                                    <input type="password" name="pass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
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
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="table-admin-kontributor" class="table table-bordered display row-border">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Date Created</th>
                                <th>Active</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($getKontributor as $kontributor) : ?>
                                <tr>
                                    <td class="text-center"><?= $i++; ?></td>
                                    <td><?= $kontributor->fullname; ?></td>
                                    <td><?= $kontributor->email; ?></td>
                                    <td><?= $kontributor->created_at; ?></td>
                                    <td><?= $kontributor->active; ?></td>

                                    <td class="align-middle">
                                        <div class="btn-group " role="group">
                                            <a href="<?= base_url(); ?>/admin ?>" class="btn btn-sm btn-info text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                <button type="button" class="btn btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal-delete-adminGPJM-<?= $kontributor->id; ?>">
                                                <button type="button" class="btn btn-sm">
                                                    <i class="fas fa-trash-alt text-white"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- modal hapus admin GPJM -->
                                <div class="modal fade" id="modal-delete-adminGPJM-<?= $kontributor->id; ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header bg-cosmic text-white">
                                                <h5 class="modal-title fw-bold">Hapus </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                Yakin hapus akun admin <?= $kontributor->fullname; ?>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                <form action="<?= base_url(); ?>/admin/" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- ./card admin kontributor -->



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

<?= $this->endSection(); ?>