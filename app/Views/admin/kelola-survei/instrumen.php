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
                <!-- back to previous page -->
                <a href="<?= base_url(); ?>/admin/kelola-survei/kategori">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <!-- ./ flash success tambah data  -->

            <!-- Main content -->

            <div class="card-header d-flex align-items-center py-4">
                <h6 class="text-rouge"> <?= $category['kodeCategory']; ?> - <?= $category['namaCategory']; ?> </h6>
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
                                            <a href="<?= base_url(); ?>/admin/editInstrumen/<?= $insCtg['id']; ?>" class="btn btn-sm btn-yellow-sea text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat/Edit">
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