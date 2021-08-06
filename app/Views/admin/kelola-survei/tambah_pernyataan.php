<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>

            </div>
        </div><!-- /.container-fluid -->
        <!-- previous page -->
        <a href="<?= base_url(); ?>/admin/kelolaPernyataan">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>

        <!-- flash success tambah data  -->
        <?php if (session()->getFlashdata('msgButir')) :  ?>
            <div class="alert alert-success d-flex align-items-center fw-bold mb-3" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    <?= session()->getFlashData('msgButir'); ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- ./ flash success tambah data  -->



    </section>

    <!-- Main content -->
    <section class="content col-lg-10 mx-auto">
        <div class="container-fluid">
            <div class="card mt-2">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="">Buat Butir Pernyataan</h5>
                </div>
                <div class="card-body py-4">
                    <!-- form tambah pernyataan -->
                    <form action="<?= base_url(); ?>/admin/savePernyataan" method="post">
                        <?= csrf_field(); ?>

                        <!-- pilih kode kategori -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="kode-kategori" class="col-sm-2 col-form-label">Pilih Kategori:</label>
                                <div class="col-sm-10">
                                    <select class="form-select " id="kodeCategory" name="kodeCategory">
                                        <?php foreach ($category as $ctg => $value) :  ?>
                                            <option value="<?= $value['kodeCategory']; ?>"><?= $value['kodeCategory']; ?> - <?= $value['namaCategory']; ?></option>

                                        <?php endforeach; ?>

                                    </select>

                                </div>
                            </div>
                        </div>

                        <!-- Pilih nama instrumen -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="namaInstrumen" class="col-sm-2 col-form-label">Pilih Nama instrumen:</label>

                                <div class="col-sm-10">
                                    <select class="form-select" id="namaInstrumen" name="namaInstrumen">
                                        <option value="">ins2 </option>
                                        <option value=""> ins1</option>
                                        <option value="">ins3</option>
                                        <option value="">ins4</option>

                                    </select>

                                </div>
                            </div>
                        </div>

                        <!-- isi butir -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="pernyataan" class="col-sm-2 col-form-label">Isi Butir Pernyataan:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="pernyataan" name="pernyataan" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center ">
                            <button type="submit" class="btn btn-success ml-auto mt-3">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>

                    </form>
                    <!-- end form tambah pernyataan -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>