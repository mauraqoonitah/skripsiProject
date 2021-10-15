<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>

<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Data Hasil Survei Kepuasan <br>(Per-Responden)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <!-- ./ flash success tambah data  -->

            <!-- jika belum ada responden -->
            <?php if (sizeof($responden) === 0) : ?>
                <div class="row mb-4">
                    <div class="mx-auto col-lg-4 col-sm-4">
                        <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                        <p class=" text-center my-4 fs-5"> Responden belum mengisi survei.</p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 border-light shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-rouge">Hasil Survei Per-Responden</h6>
                </div>
                <div class="card-body">
                    <div class="p-0">
                        <table id="tableResponden" class="table table-bordered table-bordered table-hover text-wrap">
                            <thead class="bg-thead">
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Responden</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($responden as $rpd) : ?>

                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td>
                                            <?= $rpd['fullname']; ?>
                                        </td>
                                        <td><?= $rpd['role']; ?></td>
                                        <td>
                                            <div class="d-grid gap-2 d-md-block">
                                                <a href="<?= base_url(); ?>/admin/hasilSurveiResponden/<?= $rpd['userID']; ?>" class="btn btn-sm btn-yellow-sea text-decoration-none">
                                                    Detail
                                                </a>
                                                <?php if (in_groups('Admin')) : ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-respoden-<?= $rpd['id']; ?>">
                                                        <button type="button" class="btn btn-sm btn-danger">
                                                            Hapus
                                                        </button>
                                                    </a>

                                                    <!-- modal hapus responden -->
                                                    <div class="modal fade" id="modal-delete-respoden-<?= $rpd['id']; ?>" tabindex="-1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered ">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title fw-bold">Hapus Responden</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                    Yakin hapus <?= $rpd['fullname']; ?>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                    <form action="<?= base_url(); ?>/admin/deleteResponden/<?= $rpd['id']; ?>" method="post">
                                                                        <?= csrf_field(); ?>
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end modal hapus responden -->
                                                <?php endif; ?>

                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>