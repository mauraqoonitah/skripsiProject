<h1>jenis responden</h1>
<?php foreach ($responden as $resp) : ?>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $resp['responden']; ?>" id="peruntukkanCategory" name="peruntukkanCategory" checked>
        <label class="form-check-label" for="peruntukkanCategory">
            <?= $resp['responden']; ?>
        </label>
    </div>
<?php endforeach; ?>



<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold">Jenis Responden</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Jenis Responden</li>
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


            <div class="col-lg-8">
                <div class="card border-light shadow">

                    <div class="card-header d-flex align-items-center py-4">
                        <h5 class="text-rouge">Responden Survei</h5>

                        <!-- Button trigger modal -->
                        <a data-bs-toggle="modal" data-bs-target="#modal-tambah-jenisResponden" class="ml-auto">
                            <button type="button" class="btn btn-rouge text-white">
                                <i class="fas fa-plus"></i> Tambah Responden
                            </button></a>

                        <!-- modal tambah kategori -->
                        <div class="modal fade" id="modal-tambah-jenisResponden" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                                <div class="modal-content">
                                    <div class="modal-header card-header text-rouge ">
                                        <h5 class="modal-title text-center" id="tambahKategoriLabel">Tambah Jenis Responden</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- form tambah kategori -->
                                        <form action="<?= base_url(); ?>/admin/saveJenisResponden" method="post">
                                            <?= csrf_field(); ?>

                                            <!-- nama kategori -->
                                            <div class="form-group">
                                                <label for="nama-kategori" class="col-form-label">Nama Jenis Responden:</label>
                                                <textarea class="form-control <?= ($validation->hasError('responden')) ? 'is-invalid' : ''; ?>" id="responden" name="responden"></textarea>
                                                <div class=" invalid-feedback">
                                                    <?= $validation->getError('responden'); ?>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <button type="submit" class="btn btn-success ml-auto mt-3">
                                                    <i class="fas fa-save"></i> Simpan
                                                </button>
                                            </div>
                                        </form>
                                        <!-- end form tambah kategori -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end modal tambah kategori -->


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- datatables -->
                            <table id="table-jenis-responden" class="table table-hover compact">
                                <thead>
                                    <tr>
                                        <th>Responden</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($responden as $resp) : ?>
                                        <tr>
                                            <td><?= $resp['responden']; ?> </td>
                                            <td class="align-middle">
                                                <div class="btn-group " role="group">
                                                    <a href="<?= base_url(); ?>/admin/editJenisResponden/<?= $resp['id']; ?>" class="btn btn-sm btn-yellow-sea text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <button type="button" class="btn btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>

                                                    <a href="#" class="btn btn-sm btn-danger text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal-delete-jenisResponden-<?= $resp['id']; ?>">
                                                        <button type="button" class="btn btn-sm">
                                                            <i class="fas fa-trash-alt text-white"></i>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>


                                        <!-- modal hapus responden -->
                                        <div class="modal fade" id="modal-delete-jenisResponden-<?= $resp['id']; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title fw-bold">Hapus </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                        Yakin hapus <?= $resp['responden']; ?>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                        <form action="<?= base_url(); ?>/admin/deleteJenisResponden/<?= $resp['id']; ?>" method="post">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal hapus responden -->
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>