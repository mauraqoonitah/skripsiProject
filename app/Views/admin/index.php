<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if (in_groups('Admin')) : ?>
                        <h1>Dashboard Admin GPjM</h1>
                    <?php endif; ?>
                    <?php if (in_groups('Kontributor')) : ?>
                        <h1>Dashboard Admin Kontributor</h1>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-4 ">
                        <img src="<?= base_url(); ?>/img/undraw_Organize.svg" class="img-fluid" />
                    </div>
                </div>

                <div class="col-lg-8">
                    <!-- Info boxes -->
                    <div class="row mt-2">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalResponden; ?></h3>
                                    <p>Responden</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?= base_url(); ?>/admin/hasil-survei/responden" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalInstrumen; ?></h3>
                                    <p>Instrumen Kepuasan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalPernyataan; ?></h3>
                                    <p>Butir Pernyataan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-cosmic">
                                <div class="inner text-white">
                                    <h3><?= $totalPernyataan; ?></h3>
                                    <p>Butir Pernyataan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                    </div>
                    <!-- ./Info boxes -->
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>