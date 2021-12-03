<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<?php

use CodeIgniter\I18n\Time;
?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Hasil Survei Kepuasan - Responden</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
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

            <!-- jika belum ada responden -->
            <?php if (sizeof($responden) === 0) : ?>
                <div class="row mb-4">
                    <div class="mx-auto col-lg-3 col-sm-3">
                        <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                    </div>
                    <p class="text-center my-4 fs-5 text-rouge">Responden belum mengisi survei.</p>
                </div>
            <?php endif; ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-rouge">Hasil Survei Per-Responden</h6>
                </div>
                <div class="card-body">
                    <div class="p-0">
                        <div class="table-responsive">
                            <table id="tableResponden" class="table table-bordered table-bordered table-hover text-wrap">
                                <thead class="bg-thead">
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Responden</th>
                                        <!-- get all pertanyaan -->
                                        <?php foreach ($getAllPertanyaan as $allPertanyaan) : ?>
                                            <th><?= $colPertanyaan = $allPertanyaan['pertanyaan']; ?></th>
                                        <?php endforeach; ?>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($responden as $rpd) : ?>
                                        <?php $userId = $rpd['userID']; ?>
                                        <?php $userRole = $rpd['role']; ?>

                                        <!-- cari responden Id nya dulu -->
                                        <?php
                                        $jenisRespondenModel = model('JenisRespondenModel');
                                        $this->jenisRespondenModel = new $jenisRespondenModel;

                                        $getJenisRespondenID = $this->jenisRespondenModel->getJenisRespondenID($userRole);
                                        foreach ($getJenisRespondenID as $respId) {
                                            $jenisRespondenId = $respId['id'];
                                        }
                                        ?>

                                        <tr>
                                            <td class="text-center"><?= $i++; ?></td>

                                            <!-- fullname -->
                                            <td>
                                                <a href="<?= base_url(); ?>/admin/hasilSurveiResponden/<?= $userId; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Profil"> <?= $rpd['fullname']; ?></a>
                                            </td>

                                            <!-- role -->
                                            <td><?= $rpd['role']; ?></td>

                                            <!-- tambahan data diri -->
                                            <?php foreach ($getAllPertanyaan as $allPertanyaan) : ?>
                                                <?php
                                                $columnPertanyaan = $allPertanyaan['pertanyaan'];
                                                $colPertanyaan = str_replace(' ', '', $columnPertanyaan);
                                                ?>

                                                <?php
                                                $userModel = model('UserModel');
                                                $this->userModel = new $userModel;
                                                $getDataDiri =  $this->userModel->getDataUser($userId);
                                                ?>
                                                <?php
                                                foreach ($getDataDiri as $datadiri) : ?>
                                                    <?php
                                                    if (empty($datadiri->$colPertanyaan)) {
                                                        echo '<td> - </td>';
                                                    } else {
                                                        echo '<td>' . $datadiri->$colPertanyaan . '</td>';
                                                    }
                                                    ?>
                                                <?php endforeach; ?>

                                            <?php endforeach; ?>

                                            <!-- aksi -->
                                            <td>
                                                <div class=" d-grid gap-2 d-md-block">
                                                    <div class="btn-group" role="group">
                                                        <a href="<?= base_url(); ?>/admin/hasilSurveiResponden/<?= $rpd['userID']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Tanggapan">
                                                            <button type=" button" class="btn btn-sm btn-warning px-3">
                                                                <i class="fas fa-info"></i>
                                                            </button>
                                                        </a>
                                                    </div>

                                                    <?php if (in_groups('Admin')) : ?>
                                                        <div class="btn-group" role="group">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-respoden-<?= $rpd['id']; ?>">
                                                                <button type="button" class="btn btn-sm btn-danger">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <!-- modal hapus responden -->
                                                        <div class="modal fade" id="modal-delete-respoden-<?= $rpd['id']; ?>" tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered ">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-cosmic text-white">
                                                                        <h5 class="modal-title fw-bold">Hapus Responden</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                        Yakin hapus <?= $rpd['fullname']; ?>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                        <form action="<?= base_url(); ?>/admin/deleteResponden/<?= $rpd['id']; ?>" method="post">
                                                                            <?= csrf_field(); ?>
                                                                            <input type="hidden" name="_method" value="DELETE">
                                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end modal hapus responden -->
                                                    <?php endif; ?>

                                                </div>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- /.content -->
</div>
<?php
date_default_timezone_set('Asia/Jakarta');
$timeNow = Time::now()->toDateTimeString(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tableResponden').DataTable({
            "pageLength": 25,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Responden Instrumen Kepuasan',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Responden Instrumen Kepuasan',
                    messageTop: '(downloaded on: <?php echo $timeNow; ?>)',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Responden Instrumen Kepuasan',
                    messageTop: '(downloaded on: <?php echo $timeNow; ?>)',
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
                    messageTop: 'Responden Instrumen Kepuasan',

                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
</script>

<?= $this->endSection(); ?>