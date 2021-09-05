<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Kategori Instrumen</h1>
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
        <a href="<?= base_url(); ?>/admin/kelolaKategori">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>
    </section>
    <!-- Main content -->
    <section class="content col-lg-10 mx-auto">
        <div class="container-fluid">

            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>

            <div class="card">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="text-rouge">Buat Kategori Instrumen</h5>
                </div>
                <div class="card-body m-4">
                    <form action="<?= base_url(); ?>/admin/saveKategori" method="post">
                        <?= csrf_field(); ?>

                        <!-- kode kategori -->
                        <div class="form-group">
                            <label for="kode-kategori" class="col-form-label">Kode Kategori:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control <?= ($validation->hasError('kodeCategory')) ? 'is-invalid' : ''; ?>" id="kodeCategory" name="kodeCategory" value="<?= old('kodeCategory'); ?>">
                                <!-- popover -->
                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-kategori" aria-expanded="false" aria-controls="popover-kode-kategori" style="cursor: pointer;">
                                    <i class="fas fa-info"></i>
                                </span>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kodeCategory'); ?>
                                </div>
                            </div>
                            <div class="collapse" id="popover-kode-kategori">
                                <p class="font-monospace text-secondary">
                                    <b>Kategori yang terdaftar :</b><br>
                                    <?php foreach ($category as $ctg) :  ?>
                                        <span><?= $ctg['kodeCategory'] . ' - ' .  $ctg['namaCategory']; ?> <br>
                                        </span>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                            <!-- end popover -->
                        </div>

                        <!-- nama kategori -->
                        <div class="form-group">
                            <label for="nama-kategori" class="col-form-label">Nama Kategori:</label>
                            <textarea class="form-control <?= ($validation->hasError('namaCategory')) ? 'is-invalid' : ''; ?>" id="namaCategory" name="namaCategory" value="<?= old('namaCategory'); ?>"></textarea>
                            <div class=" invalid-feedback">
                                <?= $validation->getError('namaCategory'); ?>
                            </div>
                        </div>

                        <!-- peruntukkan kategori -->
                        <div class="form-group">
                            <label for="peruntukkan-kategori" class="col-form-label">Responden:</label>
                            <?php foreach ($responden as $resp) : ?>
                                <div class="form-check">
                                    <input class="form-check-input <?= ($validation->hasError('peruntukkanCategory')) ? 'is-invalid' : ''; ?>" type="checkbox" value="<?= $resp['responden']; ?>" id="peruntukkanCategory" name="peruntukkanCategory[]">
                                    <label class="form-check-label" for="peruntukkanCategory">
                                        <?= $resp['responden']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="btn btn-success ml-auto mt-3">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>