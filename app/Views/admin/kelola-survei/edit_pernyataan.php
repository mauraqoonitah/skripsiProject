<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Butir Pernyataan</h1>
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
    <section class="content col-lg-10 mx-auto">
        <div class="container-fluid">
            <!-- flash success tambah data  -->
            <?php if (session()->getFlashdata('message')) :  ?>
                <div class="alert alert-success d-flex align-items-center fw-bold" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                    </svg>
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        <?= session()->getFlashData('message'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- ./ flash success tambah data  -->

            <div class="card mt-2">
                <div class="card-header py-4">
                    <strong> <?= $pernyataan['namaInstrumen']; ?></strong>
                </div>
                <div class="card-body p-4">
                    <form action="<?= base_url(); ?>/admin/updatePernyataan/<?= $pernyataan['id']; ?>" method="post">
                        <?= csrf_field(); ?>

                        <!-- isi butir -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="butir" class="col-sm-2 col-form-label">Isi Butir Pernyataan:</label>
                                <div class="col-sm-10">
                                    <textarea id="summernote-petunjuk-pengisian" name="butir"><?= (old('butir')) ? old('butir') : $pernyataan['butir']; ?></textarea>
                                </div>
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