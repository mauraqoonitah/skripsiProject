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
                    <!-- kode instrumen -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="kode-instrumen" class="col-form-label">Kode instrumen:</label>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><?= $category['kodeCategory']; ?>.</span>
                                <input type="hidden" name="kodeCategory" value="<?= $category['kodeCategory']; ?>">

                                <input type="text" class="form-control <?= ($validation->hasError('kodeInstrumen')) ? 'is-invalid' : ''; ?>" id="kodeInstrumen" name="kodeInstrumen" value="<?= old('kodeInstrumen'); ?>" required>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kodeInstrumen'); ?>
                                </div>

                                <!-- popover -->
                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-instrumen" aria-expanded="false" aria-controls="popover-kode-instrumen" style="cursor: pointer;">
                                    <i class="fas fa-info"></i>
                                </span>

                            </div>
                            <div class="collapse" id="popover-kode-instrumen">
                                <?php
                                $slug = $category['slug'];
                                $instrumenModel = model('InstrumenModel');
                                $this->instrumenModel = new $instrumenModel;
                                $instrumenBySlug =  $this->instrumenModel->getInstrumenByCtg($slug);
                                ?>
                                <p class="text-secondary">
                                    <b>Kode Instrumen yang sudah terdaftar untuk kategori instrumen ini :</b>
                                    <?php if (empty($instrumenBySlug)) : ?>
                                        <span><i>Data tidak tersedia.</i></span>
                                    <?php endif; ?>
                                <ul>
                                    <?php foreach ($instrumenBySlug as $kodeIns) :  ?>
                                        <li class="text-secondary">
                                            <?= $kodeIns['kodeInstrumen'] . ' (' .  $kodeIns['namaInstrumen'] . ')'; ?>
                                        </li>
                                        </span>
                                    <?php endforeach; ?>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ./kode instrumen -->

                    <!-- PILIH nama instrumen -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="namaInstrumen" class="col-form-label">Nama instrumen:</label>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><?= $category['namaCategory']; ?> oleh </span>
                                <select class="form-select form-select-lg <?= ($validation->hasError('namaInstrumen')) ? 'is-invalid' : ''; ?>" name="namaInstrumen" id="peruntukkanIns" onChange="getText()" required>
                                    <?php
                                    $db = db_connect();
                                    $slug = $category['slug'];

                                    $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";

                                    $peruntukkan =  $db->query($sql, [$slug]); ?>

                                    <option selected disabled>Pilih...</option>

                                    <?php
                                    foreach ($peruntukkan->getResultArray() as $row) : ?>

                                        <option value="<?= $category['namaCategory']; ?> oleh <?= $row['peruntukkanCategory']; ?>"><?= $row['peruntukkanCategory']; ?></option>

                                        <?php $selected_peruntukkan = $row['peruntukkanCategory'];
                                        ?>
                                    <?php endforeach; ?>
                                </select>
                                <div class=" invalid-feedback">
                                    <?= $validation->getError('namaInstrumen'); ?>
                                </div>
                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-responden-kategori" aria-expanded="false" aria-controls="popover-responden-kategori" style="cursor: pointer;">
                                    <i class="fas fa-info"></i>
                                </span>


                                <!--  peruntukkan instrumen -->
                                <input type="hidden" name="peruntukkanInstrumen" id="peruntukkanInsTxt" />
                                <!-- ./peruntukkan instrumen -->
                                <?php $peruntukkanInsBySlug =  $this->instrumenModel->getPeruntukkanBySlug($slug);
                                ?>


                            </div>
                            <div class="collapse" id="popover-responden-kategori">
                                <p class=" text-secondary">
                                    <b>Responden yang sudah terdaftar untuk kategori instrumen ini :</b>
                                    <?php if (empty($peruntukkanInsBySlug)) : ?>
                                        <span><i>Data tidak tersedia.</i></span>
                                    <?php endif; ?>
                                <ul>
                                    <?php foreach ($peruntukkanInsBySlug as $respondenCtg) :  ?>
                                        <li class="text-secondary"><?= $respondenCtg['peruntukkanInstrumen']; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ./PILIH nama instrumen -->



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
        console.log(document.getElementById('peruntukkanInsTxt').value);
    }

    getText();
</script>

<?= $this->endSection(); ?>