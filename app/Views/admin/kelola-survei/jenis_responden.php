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
            <div class="card border-light shadow ">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="text-rouge">Responden Survei</h5>

                    <a href="#" class="ml-auto">
                        <button type="button" class="btn btn-rouge ">
                            <i class="fas fa-plus"></i> Tambah Responden
                        </button></a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- datatables -->
                        <table id="table-kelola-survei" class="hover compact">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Responden</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($responden as $resp) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td><?= $resp['responden']; ?> </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-sm btn-yellow-sea text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-responden">
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- modal hapus responden -->
                                    <div class="modal fade" id="modal-delete-responden" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fw-bold">Hapus </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                    Yakin hapus?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                    <form action="#" method="post">
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
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>