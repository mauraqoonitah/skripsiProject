<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Kategori </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to previous page -->
                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- flash gagal tambah data  -->

    <?php if (session()->getFlashdata('messageError')) :  ?>
        <div class="alert alert-danger d-flex align-items-center fw-bold" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <?= session()->getFlashData('messageError'); ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- ./ flash gagal tambah data  -->
    <!-- jenis responden -->
    <?php $selected_resp = [];
    foreach ($getSelectedResponden as $resp) {
        $selected_resp[] = $resp['peruntukkanCategory'];
    };
    ?>

    <!-- Main content -->
    <section class="content col-lg-10 mx-auto">
        <div class="container-fluid">
            <!-- form edit kategori -->
            <form action="<?= base_url(); ?>/admin/updateKategori_/<?= $category['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="card mt-2">
                    <div class="card-header text-rouge">
                        <strong> <?= $category['kodeCategory']; ?> - <?= $category['namaCategory']; ?></strong>
                    </div>
                    <div class="card-body">

                        <!-- nama kategori -->
                        <div class="form-group">
                            <label for="namaCategory" class="col-form-label">Nama Kategori:</label>
                            <input type="text" class="form-control  <?= ($validation->hasError('namaCategory')) ? 'is-invalid' : ''; ?>" id="namaCategory" name="namaCategory" value="<?= (old('namaCategory')) ? old('namaCategory') : $category['namaCategory']; ?>">
                            <div class=" invalid-feedback">
                                <?= $validation->getError('namaCategory'); ?>
                            </div>
                        </div>

                        <!-- kode kategori -->
                        <div class="form-group">
                            <label for="kodeCategory" class="col-form-label">Kode Kategori:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control <?= ($validation->hasError('kodeCategory')) ? 'is-invalid' : ''; ?>" id="kodeCategory" name="kodeCategory" value="<?= (old('kodeCategory')) ? old('kodeCategory') : $category['kodeCategory']; ?>">
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
                            ?>

                            <!--  ./list of  checked peruntukkancategory -->

                            <select name="peruntukkanCategory[]" class="form-select form-select-responden" id="form-select-responden" style="width: 100%" multiple>
                                <!-- select2 multiple -->
                                <?php foreach ($jenisResponden as $listResp) : ?>
                                    <option value="<?= $listResp['responden']; ?>" <?php echo in_array($listResp['responden'], $selected_resp) ? 'selected' : '' ?>> <?= $listResp['responden']; ?></option>
                                <?php endforeach; ?>

                            </select>
                            <!-- ./select2 multiple -->

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