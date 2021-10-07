<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Jenis Responden</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Jenis Responden</li>
                    </ol>
                </div>
                <!-- back to previous page -->
                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- flash success tambah data  -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
    <!-- ./ flash success tambah data  -->


    <!-- Main content -->
    <section class="content col-lg-6 mx-auto">
        <div class="container-fluid">
            <div class="card mt-2">
                <div class="card-header py-4 text-rouge">
                    <strong><?= $responden['responden'] ?></strong>
                </div>
                <div class="card-body p-4">
                    <form action="<?= base_url(); ?>/admin/updateJenisResponden/<?= $responden['id']; ?>" method="post">
                        <?= csrf_field(); ?>

                        <!-- nama instrumen -->
                        <div class="form-group">
                            <label for="nama-instrumen" class="col-form-label">Jenis Responden:</label>
                            <input type="text" class="form-control" name="responden" value="<?= (old('responden')) ? old('responden') : $responden['responden']; ?>">
                        </div>

                        <div class="d-flex align-items-center ">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Ubah
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