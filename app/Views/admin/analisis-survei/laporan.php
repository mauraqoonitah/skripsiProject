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
            <div class="row">
                <div class="alert alert-rouge fw-bold mt-3 col-lg-10" role="alert">
                    <strong class="text-rouge fs-6">Pilih kategori untuk membuat laporan hasil survei kepuasan </strong>
                </div>
                <div class="col-lg-2 align-middle">
                    <a href="<?= base_url(); ?>/admin/analisisKepuasan">
                        <button type="button" class="btn btn-sm btn-success mt-3">
                            <i class=" fas fa-plus"></i> Buat Laporan
                        </button>
                    </a>
                </div>
            </div>

            <div class="card-body">


                <div class="accordion accordion-flush mx-auto" id="accordionExample">
                    <?php foreach ($category as $ctg) : ?>


                        <a href="<?= base_url(); ?>/admin/laporanInstrumen/<?= $ctg['slug']; ?>" class="text-decoration-none">
                            <div class="card border border-1 border-white rounded-3">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $ctg['kodeCategory']; ?> </h5>
                                    <p class="card-text"><?= $ctg['namaCategory']; ?></p>
                                </div>
                            </div>
                        </a>

                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>