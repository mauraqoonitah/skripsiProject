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
                        <li class="breadcrumb-item active">Analisis Kepuasan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- back to previous page -->
        <a href="<?= base_url(); ?>/admin/laporan">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>
    </section>

    <!-- Main content -->
    <section class="content mx-auto col-lg-10">
        <div class="container-fluid">
            <div class="list-group center">
                <div class="card border-light">
                    <div class="card-header d-flex align-items-center py-4">
                        <h6 class="text-rouge">Pilih instrumen untuk membuat laporan analisis kepuasan</h6>
                    </div>

                    <div class="card-body">
                        <div class="accordion accordion-flush mx-auto" id="accordionExample">
                            <?php foreach ($category as $ctg) : ?>
                                <div class="accordion-item mt-3 mb-5">
                                    <!-- header collapse - kategori  -->
                                    <h5 class="accordion-header" id="headingOne-<?= $ctg['slug']; ?>">
                                        <div class="accordion-button rounded d-flex align-items-center col-lg-12 " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $ctg['slug']; ?>" aria-expanded="true" aria-controls="collapse-<?= $ctg['slug']; ?>">
                                            <span class="fw-bold fs-6"><?= $ctg['kodeCategory']; ?> - <?= $ctg['namaCategory']; ?></span>
                                        </div>

                                    </h5>
                                    <!-- ./header collapse - kategori  -->

                                    <!-- content collapse - kategori  -->
                                    <div id="collapse-<?= $ctg['slug']; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne-<?= $ctg['slug']; ?>">
                                        <div class="accordion-body">
                                            <div class="container">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <ul class="list-group list-group-flush">

                                                            <?php $i = 1; ?>
                                                            <?php
                                                            $db = db_connect();
                                                            $slug = $ctg['slug'];

                                                            $sql = "SELECT * FROM instrumen WHERE slug = ?";

                                                            $query =  $db->query($sql, [$slug]);
                                                            foreach ($query->getResultArray() as $row) : ?>
                                                                <li class="list-group-item">
                                                                    <?= $row['kodeInstrumen']; ?> -
                                                                    <a id="a-hov" href="">
                                                                        <?= $row['namaInstrumen']; ?>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>