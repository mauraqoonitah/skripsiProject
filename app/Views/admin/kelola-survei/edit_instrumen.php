<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
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
                <!-- back to page view categories -->
                <a href="<?= base_url(); ?>/instrumen/kelolaInstrumen">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content col-lg-8 mx-auto">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url(); ?>/admin/updateInstrumen/<?= $instrumen['id']; ?>" method="post">
                        <?= csrf_field(); ?>

                        <!-- pilih kode kategori -->
                        <div class="form-group">
                            <label for="kode-kategori" class="col-form-label">Kode Kategori:</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="kodeCategory" name="kodeCategory">
                                    <?php foreach ($category as $ctg => $value) :  ?>
                                        <option value="<?= $value['kodeCategory']; ?>"><?= $value['kodeCategory']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- nama instrumen -->
                        <div class="form-group">
                            <label for="nama-instrumen" class="col-form-label">Nama instrumen:</label>
                            <input type="text" class="form-control" id="nama-instrumen" name="namaInstrumen" value="<?= (old('namaInstrumen')) ? old('namaInstrumen') : $instrumen['namaInstrumen']; ?> ">
                        </div>
                        <!-- kode instrumen -->
                        <div class="form-group">
                            <label for="kode-instrumen" class="col-form-label">Kode instrumen:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="kode-instrumen" name="kodeInstrumen" value="<?= (old('kodeInstrumen')) ? old('kodeInstrumen') : $instrumen['kodeInstrumen']; ?> ">
                                <!-- popover -->
                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-instrumen" aria-expanded="false" aria-controls="popover-kode-instrumen" style="cursor: pointer;">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                            <select class="form-select" id="peruntukkan-instrumen">
                                <option selected class="text-muted">kode </option>
                                <option value="C.2">C.2</option>
                                <option value="C.7">C.7</option>
                                <option value="C.6">C.6</option>

                            </select>

                            <div class="collapse" id="popover-kode-instrumen">
                                <p class="font-monospace text-secondary">
                                    test popover - Masukkan kode instrumen
                                </p>
                            </div>
                            <!-- end popover -->
                        </div>
                        <!-- peruntukkan instrumen -->
                        <div class="form-group">
                            <label for="peruntukkanInstrumen" class="col-form-label">Peruntukkan:</label>

                            <div class="input-group mb-3">
                                <select class="form-select" id="peruntukkanInstrumen" name="peruntukkanInstrumen">
                                    <?php foreach ($category as $ctg) :  ?>
                                        <option value="<?= $ctg['peruntukkanCategory']; ?>"><?= $ctg['peruntukkanCategory']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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