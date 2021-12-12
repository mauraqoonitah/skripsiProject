<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold">Kategori Responden</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kategori Responden</li>
                    </ol>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- flash success tambah data  -->
            <?php if (session()->getFlashdata('message')) :  ?>
                <div class="col-lg-12">
                    <div class="alert alert-success d-flex align-items-center fw-bold" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">

                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            <?= session()->getFlashData('message'); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
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

            <div class="card">

                <div class="card-body pb-5 mt-2">
                    <!-- if no results found -->
                    <?php if (empty($responden)) : ?>
                        <div class="row my-4">
                            <div class="mx-auto col-lg-3 col-sm-3">
                                <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                            </div>
                            <p class="text-center my-4 fs-6 text-rouge">Data tidak tersedia. <br>Kategori Responden belum ditambahkan.</p>
                        </div>
                    <?php endif; ?>

                    <!-- datatables -->
                    <div class="table-responsive">
                        <table id="table-jenis-responden" class="display table-hover table-bordered compact">
                            <thead class="card-header py-3">
                                <tr>
                                    <th>Kategori Responden</th>
                                    <th class="text-center ">Jumlah Responden</th>
                                    <th class="text-center ">Instrumen yang dapat diisi</th>
                                    <th scope="col" class="align-middle text-center">Pertanyaan<br>Data Diri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($responden as $resp) : ?>
                                    <tr>
                                        <!-- nama kategori responden -->
                                        <td class="fw-bold pl-3"><?= $resp['responden']; ?> </td>
                                        <!-- jumlah responden -->
                                        <td class="text-center ">
                                            <?php
                                            $jenisResponden = $resp['responden'];
                                            $respondenModel = model('RespondenModel');
                                            $this->respondenModel = new $respondenModel;
                                            $jumlahResponden =  $this->respondenModel->getJumlahRespondenByRole($jenisResponden);
                                            ?>
                                            <?= $jumlahResponden; ?>
                                        </td>
                                        <!-- Instrumen yang dapat diisi -->
                                        <td class="text-center">
                                            <?php
                                            $jenisResponden = $resp['responden'];
                                            $instrumenModel = model('InstrumenModel');
                                            $this->instrumenModel = new $instrumenModel;
                                            $sql =  $this->instrumenModel->getInstrumenByJenisResponden($jenisResponden);
                                            ?>

                                            <?php if (empty($sql)) : ?>
                                                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_">Buat disini</a>
                                            <?php else : ?>
                                                <ul>
                                                    <?php foreach ($sql as $row) : ?>
                                                        <li>
                                                            <?= $row['kodeInstrumen']; ?> - <?= $row['namaInstrumen']; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </td>

                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="<?= base_url(); ?>/admin/kelolaDataDiri/<?= $resp['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Kelola Pertanyaan untuk Data Diri <?= $resp['responden']; ?> ">
                                                    <button type="button" class="btn btn-sm btn-success">
                                                        <i class="fas fa-th-list text-white"></i>
                                                    </button>
                                                </a>
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

use CodeIgniter\I18n\Time;

date_default_timezone_set('Asia/Jakarta');
$timeNow = Time::now()->toDateTimeString(); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table-jenis-responden').DataTable({
            "paging": false,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Kategori Responden',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Kategori Responden',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Kategori Responden',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
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
                    messageTop: 'Kategori Responden',

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