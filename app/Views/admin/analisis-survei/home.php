<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold"> Membuat Laporan Survei Instrumen Kepuasan</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Analisis Kepuasan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mx-auto">
        <div class="container-fluid">
            <div class="list-group center">
                <div class="card mt-2 shadow border-light">
                    <div class="card-header d-flex align-items-center">
                        <h6 class="text-rouge">Pilih Kategori untuk melihat analisis kepuasan</h6>
                    </div>


                    <div class="card-body py-4 col-lg-8">
                        <form action="<?= base_url(); ?>/admin/analisisKepuasan/" method="post">
                            <?= csrf_field(); ?>

                            <!-- kode kategori -->
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="namaCategory" class="col-sm-2 col-form-label">Kategori:</label>

                                    <div class="col-lg-10">
                                        <select name="" class="js-example-responsive form-select form-select-kategori" id="form-select-kategori" style="width: 100%">
                                            <option> Pilih Kategori </option>
                                            <?php foreach ($category as $ctg) : ?>
                                                <option value="<?= $ctg['slug']; ?>"> <?= $ctg['kodeCategory']; ?> - <?= $ctg['namaCategory']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-outline-primary mt-3 text-decoration-none">
                                    <i class="fas fa-arrow-right"></i> Selanjutnya
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- nama instrumen -->
                    <!-- <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="namaInstrumen" class="col-sm-2 col-form-label">Instrumen:</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">

                                            <label class="form-check-label" for="namaInstrumen">
                                                nama instrumen
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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

                                                        <?php $i = 1; ?>
                                                        <?php
                                                        $db = db_connect();
                                                        $slug = $ctg['slug'];

                                                        $sql = "SELECT * FROM instrumen WHERE slug = ?";

                                                        $query =  $db->query($sql, [$slug]);
                                                        foreach ($query->getResultArray() as $row) : ?>
                                                            <td class="align-middle text-center"><?= $row['kodeInstrumen']; ?></td>
                                                            <td>
                                                                <a id="a-hov" href=""> <?= $row['namaInstrumen']; ?> <br></a>
                                                            </td>
                                                        <?php endforeach; ?>
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