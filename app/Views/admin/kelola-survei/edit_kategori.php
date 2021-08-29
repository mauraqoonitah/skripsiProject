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
            <!-- form edit kategori -->
            <form action="<?= base_url(); ?>/admin/updateKategori/<?= $category['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="card mt-2">
                    <div class="card-header">
                        <strong> Kategori <?= $category['namaCategory']; ?></strong>
                    </div>
                    <div class="card-body">
                        <div class="modal-body">

                            <!-- nama kategori -->
                            <div class="form-group">
                                <label for="namaCategory" class="col-form-label">Judul Kategori:</label>
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
                                <label for="peruntukkanCategory" class="col-form-label">Responden:</label>
                                <div class="form-text m-0 p-0">Pilih responden yang dapat mengisi kuesioner pada kategori ini</div><br>


                                <!--  list of checked peruntukkancategory -->
                                <?php $db = db_connect();
                                $slug = $category['slug'];
                                $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";
                                $peruntukkan =  $db->query($sql, [$slug]);

                                foreach ($peruntukkan->getResult() as $row) : {
                                ?>
                                        <div class="form-check">
                                            <input class="form-check-input <?= ($validation->hasError('peruntukkanCategory')) ? 'is-invalid' : ''; ?> " type="hidden" value="<?= $row->peruntukkanCategory; ?>" id="peruntukkanCategory" name="peruntukkanCategory[]">


                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('peruntukkanCategory'); ?>
                                            </div>
                                        </div>
                                    <?php  } ?>
                                <?php endforeach; ?>

                                <!--  ./list of  checked peruntukkancategory -->

                                <!--  ./list of  checked peruntukkancategory -->

                                <!--  list of non-checked peruntukkancategory -->

                                <?php foreach ($jenisResponden as $listResp) : ?>
                                    <?php foreach ($peruntukkan->getResult() as $row) : {
                                    ?>

                                            <div class="form-check">
                                                <input class="form-check-input <?= ($validation->hasError('peruntukkanCategory')) ? 'is-invalid' : ''; ?> " type="checkbox" value="<?= $listResp['responden']; ?>" id="listPeruntukkan" name="peruntukkanCategory[]" <?= set_checkbox('peruntukkanCategory[]', '1') ?> <?php echo ($listResp['responden'] == $row->peruntukkanCategory) ? "checked" : ""; ?> />

                                                <label class="form-check-label " for="listPeruntukkan">
                                                    <?= $listResp['responden']; ?>
                                                </label>
                                                <div class=" invalid-feedback">
                                                    <?= $validation->getError('peruntukkanCategory'); ?>
                                                </div>
                                            </div>
                                        <?php  } ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                <!--  ./list of non-checked peruntukkancategory -->
                            </div>

                            <div class="mt-5">
                                <small class="text-muted mt-5">Catatan: <br>Jika ingin buat kuesioner, silakan pilih menu Kelola Survei -> Instrumen setelah simpan kategori ini</small>

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