<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Hasil Survei Kepuasan - Instrumen</h1>
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
    <!-- flash success tambah data  -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
    <!-- ./ flash success tambah data  -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="alert alert-primary fw-bold mb-3ft" role="alert">
                    Pilih instrumen untuk melihat tanggapan responden</div>
            </div>

            <!-- if no results found -->
            <?php if (sizeof($response) === 0) : ?>
                <div class="row my-4">
                    <div class="mx-auto col-lg-3 col-sm-3">
                        <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                    </div>
                    <p class="text-center my-4 fs-6 text-rouge">Data tidak tersedia. <br>Responden belum mengisi survei.</p>
                </div>
            <?php endif; ?>


            <div class="container">
                <div class="list-group center">
                    <?php foreach ($response as $rspns) : ?>
                        <form action="<?= base_url(); ?>/admin/saveTampilGrafik/<?= $rspns['id']; ?>" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-10">
                                    <?php
                                    $insID = $rspns['id'];
                                    $responseModel = model('ResponseModel');
                                    $this->responseModel = new $responseModel;
                                    $jmlTanggapan =  $this->responseModel->getJumlahTanggapanIns($insID);

                                    ?>
                                    <div class="mb-4">
                                        <a href="<?= base_url() ?>/admin/hasil-survei/instrumen/<?= $rspns['id']; ?>" class="pilih-inst">
                                            <span class="text-rouge fw-bold"><?= $rspns['kodeInstrumen']; ?> <br> <?= $rspns['namaInstrumen']; ?></span>
                                            <div class="d-flex align-items-center ml-auto">
                                                <span class="badge badge-cosmic " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jumlah Tanggapan"><?= $jmlTanggapan; ?> </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>