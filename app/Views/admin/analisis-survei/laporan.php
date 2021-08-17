<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold"> Laporan Survei Instrumen Kepuasan</h1>
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
            <div class="alert alert-info fw-bold" role="alert">
                <strong>Pilih kategori untuk melihat hasil survei kepuasan </strong>
            </div>
            <div class="card-body py-4">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <a href="<?= base_url(); ?>/admin/laporanInstrumen" class="text-decoration-none">
                            <div class="card border border-1 border-white rounded-3">
                                <div class="card-body">
                                    <h5 class="card-title">C.2</h5>
                                    <p class="card-text">Instrumen Kepuasan atas Layanan.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url(); ?>/admin/laporanInstrumen" class="text-decoration-none">
                            <div class="card border border-1 border-white rounded-3">
                                <div class="card-body">
                                    <h5 class="card-title">C.4</h5>
                                    <p class="card-text">Instrumen Kepuasan atas Layanan.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url(); ?>/admin/laporanInstrumen" class="text-decoration-none">
                            <div class="card border border-1 border-white rounded-3">
                                <div class="card-body">
                                    <h5 class="card-title">C.5</h5>
                                    <p class="card-text">Instrumen Kepuasan atas Layanan.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url(); ?>/admin/laporanInstrumen" class="text-decoration-none">
                            <div class="card border border-1 border-white rounded-3">
                                <div class="card-body">
                                    <h5 class="card-title">C.6</h5>
                                    <p class="card-text">Instrumen Kepuasan atas Layanan.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>