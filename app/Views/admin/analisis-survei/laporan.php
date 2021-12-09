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
                <div class="col-sm-8">
                    <!-- laporan.php-  -->
                    <h1 class="fw-bold">Laporan Analisis Survei Instrumen Kepuasan</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mx-auto">
        <div class="container-fluid">
            <div class="row">
                <div class="container col-lg-8">
                    <div class="alert alert-primary fw-bold mt-3" role="alert">
                        <strong class=" fs-6">Kelola Dokumen Hasil Instrumen Kepuasan</strong>
                    </div>

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
                                    <a class="nav-link btn btn-app active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true"><i class="fas fa-file-alt"></i>Dokumen</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn btn-app" id="laporan-tabs-upload-tab" data-toggle="pill" href="#laporan-tabs-upload" role="tab" aria-controls="laporan-tabs-upload" aria-selected="false"><i class="fas fa-upload"></i>Upload</a>
                                </li>


                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <!-- content tab store dokumen -->
                                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                    <div class="container py-4">
                                        <ul class="list-unstyled">
                                            <?php if (empty($getLaporanAnalisis)) :  ?>
                                                <span class="text-rouge"><i>Dokumen belum ditambahkan.</i></span>
                                            <?php endif; ?>

                                            <?php foreach ($getLaporanAnalisis as $laporanAnls) :  ?>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-2 text-center">
                                                            <span style="font-size: 48px; color: Dodgerblue;">
                                                                <i class="far fa-file"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-10 ">
                                                            <a href="<?= base_url(); ?>/dokumenLaporan/<?= $laporanAnls['laporanInstrumen']; ?>" class="btn-link text-dark mt-4" style="font-size: larger;" target="_blank"> <?= $laporanAnls['laporanInstrumen']; ?></a>

                                                            <br>
                                                            <?php
                                                            $timeCreated = Time::parse($laporanAnls['created_at'], 'Asia/Jakarta');
                                                            $timeUpdated = Time::parse($laporanAnls['updated_at'], 'Asia/Jakarta');
                                                            ?>
                                                            <span class="text-muted small">Dibuat oleh <?= $laporanAnls['created_by']; ?>, pukul <?= $timeCreated->toLocalizedString('HH:mm, d MMM yyyy'); ?></span>

                                                            <?php if ($laporanAnls['created_at'] !== $laporanAnls['updated_at']) : ?>
                                                                <br>
                                                                <span class="text-muted small">telah di ubah oleh <?= $laporanAnls['updated_by']; ?>, pukul <?= $timeUpdated->toLocalizedString('HH:mm, d MMM yyyy'); ?> </span>
                                                            <?php endif; ?>

                                                            <div class="mt-2">
                                                                <span class="mr-3">
                                                                    <a href="<?= base_url(); ?>/admin/editLaporanAnalisis/<?= $laporanAnls['id']; ?>" class="link-black text-sm text-decoration-none"><i class="fas fa-edit mr-1"></i> Edit</a>
                                                                </span>
                                                                <span class="mr-3">
                                                                    <a href="<?= base_url(); ?>/dokumenLaporan/<?= $laporanAnls['laporanInstrumen']; ?>" target="_blank" class="link-black text-sm text-decoration-none"><i class="fas fa-download mr-1"></i> Download</a>
                                                                </span>
                                                                <span class="mr-3">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-laporanIns-<?= $laporanAnls['id']; ?>" class="link-black text-sm text-decoration-none"><i class="fas fa-trash-alt mr-1"></i> Hapus</a>
                                                                </span>
                                                            </div>
                                                            <!-- modal hapus laporan file instrumen -->
                                                            <div class="modal fade" id="modal-delete-laporanIns-<?= $laporanAnls['id']; ?>" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-cosmic text-white">
                                                                            <h5 class="modal-title fw-bold">Hapus File</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                            <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                            Yakin hapus file <?= $laporanAnls['laporanInstrumen']; ?> ?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                            <form action="<?= base_url(); ?>/admin/deleteLaporanInstrumen/<?= $laporanAnls['id']; ?>" method="post">
                                                                                <?= csrf_field(); ?>
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end modal hapus laporan file instrumen -->

                                                        </div>
                                                    </div>
                                                </li>
                                                <hr>
                                            <?php endforeach; ?>
                                        </ul>

                                    </div>
                                </div>
                                <!-- ./content tab store dokumen -->


                                <!-- content tab upload dokumen -->
                                <div class="tab-pane fade" id="laporan-tabs-upload" role="tabpanel" aria-labelledby="laporan-tabs-upload-tab">
                                    <form action="<?= base_url(); ?>/admin/saveLaporanAnalisis" method="post" enctype="multipart/form-data">

                                        <?= csrf_field(); ?>
                                        <div class="container py-4">
                                            <label for="formFileLg" class="form-label fs-6">Upload Dokumen Laporan Analisis</label>
                                            <input class="form-control form-control-lg fs-6 <?= ($validation->hasError('laporanInstrumen')) ? 'is-invalid' : ''; ?>" id="formFileLg" type="file" id="laporanInstrumen" name="laporanInstrumen">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('laporanInstrumen'); ?>
                                            </div>
                                            <input type="hidden" name="created_by" value="<?= user()->username; ?>">


                                            <button type="submit" class="btn btn-primary mb-3">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- ./ content tab upload dokumen -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-3">
                    <div class="alert alert-primary fw-bold" role="alert">
                        <strong class=" fs-6">Export Data</strong>
                    </div>
                    <form action="<?= base_url(); ?>/admin/lihatKategori" method="get" class="mb-3  ">
                        <button type="submit" class="btn btn-lg btn-malibu"><i class="far fa-file"></i> Tabel Kategori</button>
                    </form>
                    <form action="<?= base_url(); ?>/admin/lihatInstrumen" method="get" class="mb-3">
                        <button type="submit" class="btn btn-lg btn-malibu"><i class="far fa-file-alt"></i> Tabel Instrumen</button>
                    </form>
                    <form action="<?= base_url(); ?>/admin/hasil-survei/responden" method="get" class="mb-3">
                        <button type="submit" class="btn btn-lg btn-malibu"><i class="far fa-user"></i> Tabel Responden</button>
                    </form>
                    <form action="<?= base_url(); ?>/admin/jenisResponden" method="get" class="mb-3">
                        <button type="submit" class="btn btn-lg btn-malibu"><i class="fas fa-users"></i> Tabel Kategori Responden</button>
                    </form>
                </div>
            </div>

            <div class="alert alert-primary fw-bold mt-5" role="alert">
                <strong class=" fs-6">Pilih Kategori untuk Melihat Hasil Analisis Instrumen Kepuasan </strong>
            </div>

            <div class="col-lg-8">
                <div class="list-group center">
                    <?php foreach ($category as $ctg) : ?>
                        <div class="mb-4">
                            <a href="<?= base_url(); ?>/admin/laporanInstrumen/<?= $ctg['slug']; ?>" class="pilih-inst text-decoration-none">
                                <span class="text-rouge fw-bold"><?= $ctg['kodeCategory']; ?> <br> <?= $ctg['namaCategory']; ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>