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
                    <div class="alert alert-rouge fw-bold" role="alert">
                        <strong> Pilih instrumen untuk melihat butir pernyataan </strong>
                    </div>
                    <div class="card-body py-4">
                        <!-- form tambah instrumen -->
                        <form action="" method="post">
                            <?= csrf_field(); ?>

                            <!-- kode kategori -->
                            <div class="form-group">
                                <div class="mb-3 row">
                                    <label for="namaCategory" class="col-sm-2 col-form-label">Kategori:</label>

                                    <div class="col-lg-6">
                                        <select class="form-select" id="namaCategory" name="namaCategory">
                                            <option value="belum">belum</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- nama instrumen -->
                            <div class="form-group">
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
                            </div>
                            <hr>
                            <div class="d-flex align-items-center ">
                                <button type="submit" class="btn btn-success mt-3">
                                    <i class="fas fa-save"></i> Create
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>