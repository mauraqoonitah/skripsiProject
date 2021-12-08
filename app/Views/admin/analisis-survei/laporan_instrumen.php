<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold"> Laporan Analisis Survei Instrumen Kepuasan</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <!-- flash success tambah data  -->
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
        <!-- ./ flash success tambah data  -->


        <!-- back to previous page -->
        <a href="<?= base_url(); ?>/admin/laporanSurvei">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>

    </section>

    <!-- Main content -->
    <section class="content mx-auto pb-5">
        <div class="container-fluid">
            <div class="alert alert-primary fw-bold" role="alert">
                <strong class=" fs-6">Pilih Instrumen </strong>
            </div>
        </div>

        <?php foreach ($getInstrumenBySlug as $ins) : ?>
            <form action="<?= base_url(); ?>/admin/saveTampilGrafik/<?= $ins['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="row py-2 px-4">
                    <div class="col-lg-8">
                        <div class="mb-2">
                            <?php
                            $insID = $ins['id'];
                            $responseModel = model('ResponseModel');
                            $this->responseModel = new $responseModel;
                            $jmlTanggapan =  $this->responseModel->getJumlahTanggapanIns($insID);

                            ?>
                            <a href="<?= base_url(); ?>/admin/laporanKepuasan/<?= $ins['id']; ?>" class="pilih-inst-muted text-decoration-none">
                                <span class="text-rouge"><?= $ins['kodeInstrumen']; ?> <br> <?= $ins['namaInstrumen']; ?></span>
                                <div class="d-flex align-items-center ml-auto" data-bs-toggle="tooltip" data-bs-placement="top" title="Jumlah Tanggapan">
                                    <span class=" badge badge-cosmic "><?= $jmlTanggapan; ?> </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=" col-lg-4 d-flex align-items-center">
                        <div class="form-check mr-4">
                            <?php if (user()->role === 'Kontributor') : ?>
                                <?php if ($ins['tampil_grafik'] == '1') :  ?>
                                    <i class="fas fa-chart-bar text-primary mr-2"></i>
                                    <span class="text-primary small"> Hasil Kepuasan Ditampilkan ke Pengunjung Website</span>
                                <?php else : ?>
                                    <i class="far fa-chart-bar text-secondary mr-2"></i>
                                    <span class="text-muted small">Hasil kepuasan Disembunyikan dari Pengunjung Website</span>
                                <?php endif; ?>


                            <?php else : ?>
                                <input class="form-check-input form-check-show-grafik-<?= $ins['id']; ?>" type="checkbox" <?= check_tampil($ins['tampil_grafik']); ?> data-tampil="<?= $ins['tampil_grafik']; ?>" data-id="<?= $ins['id']; ?>" id="flexCheckDefault" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php if ($ins['tampil_grafik'] == '1') :  ?>Klik untuk sembunyikan hasil kepuasan dari pengunjung website<?php else : ?> Klik untuk menampilkan hasil kepuasan ke pengunjung website<?php endif; ?>">
                                <label class="form-check-label ml-2 text-muted" for="flexCheckDefault">
                                    <?php if ($ins['tampil_grafik'] == '1') :  ?>Hasil Kepuasan Ditampilkan<?php else : ?> Hasil Kepuasan Disembunyikan<?php endif; ?>
                                </label>
                            <?php endif; ?>



                        </div>
                    </div>

                    <script type="text/javascript">
                        $('.form-check-show-grafik-<?= $ins['id']; ?>').on('click', function() {
                            const tampilId = $(this).data('tampil');
                            const id = $(this).data('id');

                            $.ajax(
                                console.log('masuk <?= $ins['id']; ?>'), {
                                    url: "<?= base_url(); ?>/admin/saveTampilGrafikStatus/<?= $ins['id']; ?>",
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest'
                                    },
                                    type: 'POST',
                                    data: {
                                        tampilId: tampilId,
                                        id: id
                                    },
                                    success: function() {
                                        document.location.href = "<?= base_url(); ?>/admin/laporanInstrumen/<?= $ins['slug']; ?>"
                                    }
                                })
                        });
                    </script>
                </div>
            </form>
        <?php endforeach; ?>
</div>

</section>

<!-- /.content -->
</div>

<?= $this->endSection(); ?>