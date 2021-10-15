<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Data Hasil Survei Kepuasan<br> (Per-Instrumen)</h1>
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
            <!-- jika belum ada response -->
            <?php if (sizeof($response) === 0) : ?>
                <div class="row mb-4">
                    <div class="mx-auto col-lg-4 col-sm-4">
                        <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                        <p class=" text-center my-4 fs-5"> Responden belum mengisi survei.</p>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-8 mx-auto">
                <div class="list-group center">
                    <?php foreach ($response as $r) : ?>

                        <div class="alert alert-primary fw-bold mb-5" role="alert">
                            Pilih instrumen untuk melihat tanggapan responden</div>

                        <div class="mb-4">
                            <a href="<?= base_url() ?>/admin/hasil-survei/instrumen/<?= $r['id']; ?>" class="pilih-inst">
                                <span class="text-rouge fw-bold"><?= $r['kodeInstrumen']; ?> - <?= $r['namaInstrumen']; ?></span>
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