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
                    <h1 class="fw-bold"> Edit Laporan</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- back to previous page -->
        <a href="<?= base_url(); ?>/admin/laporanSurvei">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>
    </section>

    <section class="content">
        <div class="container-fluid px-4">
            <div class="row justify-content-center ">
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
                <?php foreach ($getLaporanAnalisis as $laporanAnls) :  ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="container py-4">
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Dokumen Lama</label>
                                    <div class="col-sm-10">
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row mt-3">
                                                    <div class="col-2 text-center">
                                                        <span style="font-size: 48px; color: Dodgerblue;">
                                                            <i class="far fa-file"></i>
                                                        </span>
                                                    </div>
                                                    <div class="col-10 ">
                                                        <a href="" class="btn-link text-dark mt-4" style="font-size: larger;"> <?= $oldNamaFile = $laporanAnls['laporanInstrumen']; ?></a>

                                                        <br>
                                                        <?php
                                                        $timeCreated = Time::parse($laporanAnls['created_at'], 'Asia/Jakarta');
                                                        $timeUpdated = Time::parse($laporanAnls['updated_at'], 'Asia/Jakarta');
                                                        ?>
                                                        <span class="text-muted small">Dibuat pada <?= $timeCreated->toLocalizedString(' HH:mm, d MMM yyyy'); ?></span>

                                                        <?php if ($laporanAnls['created_at'] !== $laporanAnls['updated_at']) : ?>
                                                            <br>
                                                            <span class="text-muted small">telah di ubah pada <?= $timeUpdated->toLocalizedString(' HH:mm, d MMM yyyy'); ?></span>
                                                        <?php endif; ?>
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Dokumen Baru</label>
                                    <div class="col-sm-10">
                                        <form action="<?= base_url(); ?>/admin/updateLaporanAnalisis/<?= $laporanAnls['id']; ?>" method="post" enctype="multipart/form-data">

                                            <?= csrf_field(); ?>
                                            <div class="row mt-3">
                                                <div class="col-2 text-center">
                                                    <span style="font-size: 48px; color: grey;">
                                                        <i class="far fa-file"></i>
                                                    </span>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control form-control-lg fs-6 <?= ($validation->hasError('laporanInstrumen')) ? 'is-invalid' : ''; ?>" id="formFileLg" type="file" id="laporanInstrumen" name="laporanInstrumen">
                                                    <div class=" invalid-feedback">
                                                        <?= $validation->getError('laporanInstrumen'); ?>
                                                    </div>
                                                    <input type="hidden" name="oldNamaFile" value="<?= $oldNamaFile; ?>">

                                                    <button type="submit" class="btn btn-primary mb-3">Upload</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
    </section>
</div>
<?= $this->endSection(); ?>