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

            <!-- card admin gpjm -->
            <div class="card">
                <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4">
                    <h3 class="card-title">Admin GPjM</h3>
                    <?php if (in_groups('Admin')) : ?>
                        <!-- Button trigger modal -->
                        <a data-bs-toggle="modal" data-bs-target="#modal-tambah-admin-GPJM" class="ml-auto">
                            <button type="button" class="btn btn-sm btn-rouge text-white">
                                <i class="fas fa-plus"></i> Tambah Akun
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Date Created</th>
                                <th>Active</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- ./card admin gpjm -->

            <!-- card admin kontributor -->
            <div class="card mt-5">
                <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4">
                    <h3 class="card-title">Admin Kontributor</h3>
                    <?php if (in_groups('Admin')) : ?>
                        <!-- Button trigger modal -->
                        <a data-bs-toggle="modal" data-bs-target="#modal-tambah-admin-kontributor" class="ml-auto">
                            <button type="button" class="btn btn-sm btn-rouge text-white">
                                <i class="fas fa-plus"></i> Tambah Akun
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
                            <tr>
                                <td>1.</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>

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