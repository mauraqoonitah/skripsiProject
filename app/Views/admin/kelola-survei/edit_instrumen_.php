<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<!-- flash success tambah data  -->
<div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
<!-- ./ flash success tambah data  -->

<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Instrumen</h1>
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
                <div class="card-header py-4 text-rouge">
                    <strong><?= $instrumen['kodeCategory']; ?> - <?= $instrumen['namaInstrumen']; ?></strong>

                </div>
                <div class="card-body p-4">
                    <form action="<?= base_url(); ?>/admin/updateInstrumen_/<?= $instrumen['id']; ?>" method="post">
                        <?= csrf_field(); ?>

                        <!-- nama instrumen -->
                        <div class="form-group">
                            <label for="nama-instrumen" class="col-form-label">Nama instrumen:</label>
                            <input type="text" class="form-control" id="nama-instrumen" name="namaInstrumen" value="<?= (old('namaInstrumen')) ? old('namaInstrumen') : $instrumen['namaInstrumen']; ?>">
                        </div>
                        <!-- kode instrumen -->
                        <div class="form-group">
                            <label for="kode-instrumen" class="col-form-label">Kode instrumen:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control <?= ($validation->hasError('kodeInstrumen')) ? 'is-invalid' : ''; ?>" id="kode-instrumen" name="kodeInstrumen" value="<?= (old('kodeInstrumen')) ? old('kodeInstrumen') : $instrumen['kodeInstrumen']; ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kodeInstrumen'); ?>
                                </div>

                                <!-- input kode category -->
                                <input type="hidden" class="form-control" name="kodeCategory" value="<?= $instrumen['kodeCategory']; ?>">
                                <!-- ./input kode category -->

                                <!-- popover -->
                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-instrumen" aria-expanded="false" aria-controls="popover-kode-instrumen" style="cursor: pointer;">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>

                            <div class="collapse" id="popover-kode-instrumen">
                                <?php
                                $slug = $instrumen['slug'];
                                $instrumenModel = model('InstrumenModel');
                                $this->instrumenModel = new $instrumenModel;
                                $instrumenBySlug =  $this->instrumenModel->getInstrumenByCtg($slug);
                                ?>
                                <p class="text-secondary">
                                    <b>Kode Instrumen yang terdaftar pada kategori ini :</b>
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
                            <!-- end popover -->
                        </div>
                        <!-- peruntukkan instrumen -->
                        <div class="form-group">
                            <label for="peruntukkanInstrumen" class="col-form-label">Responden:</label>
                            <!-- jenis responden -->
                            <?php $selected_resp[] = $instrumen['peruntukkanInstrumen'];
                            ?>
                            <?php

                            $peruntukkanInsBySlug =  $this->instrumenModel->getPeruntukkanBySlug($slug);
                            ?>


                            <div class="input-group mb-3">
                                <select class="form-select <?= ($validation->hasError('peruntukkanInstrumen')) ? 'is-invalid' : ''; ?>" id="peruntukkanInstrumen" name="peruntukkanInstrumen">
                                    <?php
                                    $db = db_connect();
                                    $slug = $instrumen['slug'];
                                    $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";
                                    $respondenIns =  $db->query($sql, [$slug]);
                                    ?>


                                    <?php foreach ($respondenIns->getResultArray() as $row) : ?>

                                        <option value="<?= $row['peruntukkanCategory']; ?>" <?php echo in_array($row['peruntukkanCategory'], $selected_resp) ? 'selected' : '' ?>><?= $row['peruntukkanCategory']; ?> </option>

                                    <?php endforeach; ?>

                                </select>
                                <!-- popover -->
                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-responden-kategori" aria-expanded="false" aria-controls="popover-responden-kategori" style="cursor: pointer;">
                                    <i class="fas fa-info"></i>
                                </span>

                                <div class="invalid-feedback">
                                    <?= $validation->getError('peruntukkanInstrumen'); ?>
                                </div>
                            </div>
                            <div class="collapse" id="popover-responden-kategori">
                                <p class=" text-secondary">
                                    <b>Responden yang terdaftar pada kategori ini :</b>
                                <ul>
                                    <?php foreach ($peruntukkanInsBySlug as $respondenCtg) :  ?>
                                        <li class="text-secondary"><?= $respondenCtg['peruntukkanInstrumen']; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                </p>
                            </div>

                        </div>
                        <div class="d-flex align-items-center ">
                            <button type="submit" class="btn btn-success btn-block mr-auto mt-5">
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