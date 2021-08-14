<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Kategori Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to page view categories -->
                <a href="<?= base_url(); ?>/admin/kelolaKategori">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content col-lg-8 mx-auto">
        <div class="container-fluid">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="modal-body">
                        <!-- form edit kategori -->
                        <form action="<?= base_url(); ?>/admin/updateKategori/<?= $category['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <p>slug :</p>
                            <input type="text" name="slug" value="<?= $category['slug']; ?>">

                            <!-- nama kategori -->
                            <div class="form-group">
                                <label for="namaCategory" class="col-form-label">Nama Kategori:</label>
                                <input type="text" class="form-control  <?= ($validation->hasError('namaCategory')) ? 'is-invalid' : ''; ?>" id="namaCategory" name="namaCategory" value="<?= (old('namaCategory')) ? old('namaCategory') : $category['namaCategory']; ?> ">
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('namaCategory'); ?>
                                </div>
                            </div>
                            <!-- kode kategori -->
                            <div class="form-group">
                                <label for="kodeCategory" class="col-form-label">Kode Kategori:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control <?= ($validation->hasError('kodeCategory')) ? 'is-invalid' : ''; ?>" id="kodeCategory" name="kodeCategory" value="<?= (old('kodeCategory')) ? old('kodeCategory') : $category['kodeCategory']; ?> ">
                                    <div class=" invalid-feedback">
                                        <?= $validation->getError('kodeCategory'); ?>
                                    </div>
                                    <!-- popover -->
                                    <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-kategori" aria-expanded="false" aria-controls="popover-kode-kategori" style="cursor: pointer;">
                                        <i class="fas fa-info"></i>
                                    </span>
                                </div>
                                <div class="collapse" id="popover-kode-kategori">
                                    <p class="font-monospace text-secondary">
                                        test popover - Masukkan kode kategori
                                    </p>
                                </div>
                                <!-- end popover -->
                            </div>
                            <!-- peruntukkan kategori -->
                            <div class="form-group">
                                <label for="peruntukkanCategory" class="col-form-label">Peruntukkan:</label>
                                <input type="text" class="form-control" value="<?= (old('peruntukkanCategory')) ? old('peruntukkanCategory') : $category['peruntukkanCategory']; ?> " id="peruntukkanCategory" name="peruntukkanCategory">

                                <?php foreach ($responden as $resp) : ?>
                                    <div class=" form-check">
                                        <input class="form-check-input  <?= ($validation->hasError('peruntukkanCategory')) ? 'is-invalid' : ''; ?>" type="checkbox" value="<?= $resp['responden']; ?>">

                                        <label class="form-check-label" for="peruntukkanCategory">
                                            <?= $resp['responden']; ?>
                                        </label>
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('peruntukkanCategory'); ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                            <div class="d-flex align-items-center ">
                                <button type="submit" class="btn btn-block btn-success mr-auto mt-5">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                        <!-- end form edit kategori -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<?= $this->endSection(); ?>