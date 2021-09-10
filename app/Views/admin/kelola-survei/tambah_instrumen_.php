<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Tambah Instrumen</h1>
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
        <a href="<?= base_url(); ?>/admin/kelola-survei/kategori_">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>

        <!-- flash success tambah data  -->
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
        <!-- ./ flash success tambah data  -->

    </section>


    <!-- Main content -->
    <section class="content col-lg-10 mx-auto">
        <div class="container-fluid">
            <div class="card mt-2">
                <div class="card-header d-flex align-items-center py-4">
                    <h6 class="text-rouge"><?= $category['kodeCategory']; ?> - <?= $category['namaCategory']; ?></h6>
                </div>

                <div class="card-body p-4">
                    <div class="container">

                        <!-- form tambah instrumen -->
                        <form action="<?= base_url(); ?>/admin/saveInstrumen_/<?= $category['slug']; ?>" method="post" id="form">
                            <?= csrf_field(); ?>

                            <!--  kode kategori -->
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" value="<?= $category['kodeCategory']; ?>" name="kodeCategory">
                            </div>
                            <!--  ./kode kategori -->
                    </div>

                    <!-- PILIH nama instrumen -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="namaInstrumen" class="col-form-label">Nama instrumen:</label>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><?= $category['namaCategory']; ?> oleh : </span>
                                <select class="form-select form-select-lg <?= ($validation->hasError('namaInstrumen')) ? 'is-invalid' : ''; ?>" name="namaInstrumen" id="peruntukkanIns" onChange="getText()">
                                    <?php
                                    $db = db_connect();
                                    $slug = $category['slug'];

                                    $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";

                                    $peruntukkan =  $db->query($sql, [$slug]);
                                    foreach ($peruntukkan->getResultArray() as $row) : ?>

                                        <option value="<?= $category['namaCategory']; ?> oleh <?= $row['peruntukkanCategory']; ?>"><?= $row['peruntukkanCategory']; ?></option>

                                        <?php $selected_peruntukkan = $row['peruntukkanCategory'];
                                        ?>
                                    <?php endforeach; ?>
                                </select>
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('namaInstrumen'); ?>
                                </div>
                                <!--  peruntukkan instrumen -->
                                <input type="hidden" name="peruntukkanInstrumen" id="peruntukkanInsTxt" />
                                <!-- ./peruntukkan instrumen -->
                            </div>
                        </div>
                    </div>
                    <!-- ./PILIH nama instrumen -->

                    <!-- kode instrumen -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="kode-instrumen" class="col-form-label">Kode instrumen:</label>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><?= $category['kodeCategory']; ?>.</span>
                                <input type="text" class="form-control <?= ($validation->hasError('kodeInstrumen')) ? 'is-invalid' : ''; ?>" id="kodeInstrumen" name="kodeInstrumen" placeholder="C.4.2">
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('kodeInstrumen'); ?>
                                </div>
                            </div>

                            <small>INI kalo is-invalid, dia tabnya gamau kebuka, mending diganti aja jadi yang tabcontent nya itu digimanain gitu, ini nanti auto tulis 2 huruf depan dari kode nya misal kalo dia pilih kode kategori 3, berarti masukin 1 angka depan hrs default dan pakein titik. --> 3. (isi) gitu</small>
                        </div>
                    </div>
                    <!-- ./kode instrumen -->

                    <div class="d-flex align-items-center ">
                        <button type="submit" class="btn btn-success ml-auto mt-3">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>

                    </form>
                    <!-- end form tambah instrumen -->
                </div>

            </div>
        </div>
</div>
</section>
<!-- /.content -->
</div>
<script type="text/javascript">
    function getText() {
        var select = document.getElementById('peruntukkanIns');
        var option = select.options[select.selectedIndex];

        document.getElementById('peruntukkanInsTxt').value = option.text;
    }

    getText();
</script>

<?= $this->endSection(); ?>