<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Tanggapan Survei Per-Instrumen</h1>
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
            <div class="alert alert-primary fw-bold" role="alert">
                Silakan pilih instrumen kepuasan untuk melihat skor hasil tanggapan responden</div>

            <div class="col-lg-8">
                <div class="list-group center">
                    <?php foreach ($instrumen as $inst) : ?>
                        <a href="<?= base_url(); ?>/admin/lihatInstrumen" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="w-100">
                                <p class="mb-1 py-2 text-center"><?= $inst['namaInstrumen']; ?></p>
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