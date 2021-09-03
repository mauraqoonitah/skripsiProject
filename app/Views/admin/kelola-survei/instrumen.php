<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to page view categories -->
                <a href="<?= base_url(); ?>/admin/kelola-survei/kategori">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
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

            <!-- Main content -->
            <div class="card border-light shadow ">
                <div class="card-header d-flex align-items-center py-4">
                    <h6 class=""> <?= $category['kodeCategory']; ?> - <?= $category['namaCategory']; ?> </h6>
                    <!-- Button trigger modal -->
                    <a href="<?= base_url(); ?>/admin/kelola-survei/tambah_instrumen/<?= $category['slug']; ?>" class="ml-auto">
                        <button type="button" class="btn btn-warning ">
                            <i class=" fas fa-plus"></i> Tambah Instrumen
                        </button></a>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <!-- datatables -->
                        <table id="table-kelola-survei" class="hover order-column cell-border">

                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode<br>Instrumen</th>
                                    <th>Nama Instrumen</th>
                                    <th>Responden</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($instrumenByCtg as $insCtg) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center"><?= $insCtg['kodeInstrumen']; ?></td>
                                        <td>
                                            <a id="a-hov" href="<?php echo base_url('/admin/kelola-survei/butir/' . $insCtg['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lihat Butir Pernyataan"><?= $insCtg['namaInstrumen']; ?> </a>
                                        </td>


                                        <td> <?= $insCtg['peruntukkanInstrumen']; ?> </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?= base_url(); ?>/admin/editInstrumen/<?= $insCtg['id']; ?>" class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat/Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-instrumen-<?= $insCtg['id']; ?>">
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>

                                    <!-- modal hapus instrumen -->
                                    <div class="modal fade" id="modal-delete-instrumen-<?= $insCtg['id']; ?>" tabindex="-1" aria-labelledby="hapusInstrumenLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <small class="text-muted" id="hapusInstrumenLabel"><?= $insCtg['namaInstrumen']; ?></small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h5>Yakin hapus instrumen?</h5>
                                                    <i class="fas fa-exclamation-circle fa-2x" style="width: 3rem; color: #D60C0C"></i>
                                                    <p class="mt-4" style="color: #D60C0C;">Butir pernyataan didalamnya (jika ada) akan terhapus</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                                    <form action="<?= base_url(); ?>/admin/deleteInstrumen/<?= $insCtg['id']; ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal hapus instrumen -->
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