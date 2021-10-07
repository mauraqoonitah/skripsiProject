<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Petunjuk Pengisian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to previous page -->
                <a href="#">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content col-lg-10 mx-auto">
        <div class="container-fluid">
            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <!-- ./ flash success tambah data  -->

            <div class="card mt-2">
                <div class="card-header py-4 text-rouge">
                    <strong> Judul Instrumen nya (join) </strong>
                </div>
                <div class="card-body p-4">
                    <form action="<?= base_url(); ?>/admin/updatePernyataan/< ?= $pernyataan['id']; ?>" method="post">
                        <?= csrf_field(); ?>

                        <!-- isi petunjuk -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <div class="col-lg-12">
                                    <?php foreach ($getIsiPetunjuk as $isi) : ?>
                                        <?php if (empty($isi['isiPetunjuk'])) {
                                            echo "Data masih kosong";
                                        } ?>
                                        <textarea id="summernote-petunjuk-pengisian" name="isiPetunjuk"><?= $isi['isiPetunjuk']; ?> </textarea>
                                    <?php endforeach; ?>

                                    <div class="d-flex align-items-center ">
                                        <button type="submit" class="btn btn-success btn-block mr-auto mt-3">
                                            <i class="fas fa-save"></i> Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>