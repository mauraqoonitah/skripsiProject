<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>

<?php

use CodeIgniter\I18n\Time;
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header p-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-lg-8">
                    <?php if (in_groups('Admin')) : ?>
                        <h3>Dashboard Instrumen Kepuasan</h3>
                        <h4 class="text-muted">Admin GPjM</h4>
                    <?php endif; ?>
                    <?php if (in_groups('Kontributor')) : ?>
                        <h3>Dashboard Instrumen Kepuasan</h3>
                        <h4 class="text-muted">Admin Kontributor</h4>
                    <?php endif; ?>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content px-4 mb-5">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <!-- Info boxes -->
                    <div class="row mt-2">
                        <div class="col-lg-3 col-sm-4">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalResponden; ?></h3>
                                    <p>Responden</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-check"></i>
                                </div>
                                <a href="<?= base_url(); ?>/admin/hasil-survei/responden" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-sm-4">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalTanggapan; ?></h3>
                                    <p>Tanggapan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-reply-all"></i>
                                </div>
                                <a href="<?= base_url(); ?>/admin/hasil-survei/instrumen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-sm-4">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalKategori; ?></h3>
                                    <p>Kriteria Kepuasan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-clipboard-list"></i>
                                </div>
                                <a target="_blank" href="<?= base_url(); ?>/admin/lihatKategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-3 col-sm-4">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalInstrumen; ?></h3>
                                    <p>Instrumen Kepuasan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-clipboard-list"></i>
                                </div>
                                <a target="_blank" href="<?= base_url(); ?>/admin/lihatInstrumen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                    </div>
                    <!-- ./Info boxes -->
                </div>

                <!-- recent activities -->
                <div class="col-lg-12 mt-3">
                    <h5 class="mb-4">Aktivitas</h5>

                    <?php foreach ($getLoginDate as $getUser) : ?>

                        <?php
                        $userID = $getUser->user_id;

                        $userModel = model('UserModel');
                        $this->userModel = new $userModel;
                        $getDataUser =  $this->userModel->getDataUser($userID);
                        ?>

                        <?php
                        $time = Time::parse($getUser->date);
                        ?>

                        <div class="container">
                            <div class="row">
                                <?php foreach ($getDataUser as $dataUser) : ?>
                                    <div class="col-12 mb-3">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="<?= base_url(); ?>/../../img/user_profile.png" alt="user image">
                                            <span class="username">
                                                <span class="fw-bold text-primary"><?= $dataUser->username; ?></span>
                                                <span class="small text-muted"> | <?= $dataUser->email; ?> | <?= $dataUser->role; ?></span>
                                                <p class="fw-bold small">Last login - <?= $time->humanize(); ?></p>
                                            </span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>