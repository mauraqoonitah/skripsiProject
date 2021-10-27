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

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>

            <div class="card border-light shadow ">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="text-rouge">Kategori Instrumen</h5>
                    <!-- Button trigger modal -->
                    <a href="<?= base_url(); ?>/admin/kelola-survei/tambah_kategori" class="ml-auto">
                        <button type="button" class="btn btn-rouge ">
                            <i class="fas fa-plus"></i> Tambah Kategori
                        </button></a>

                </div>

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <!-- datatables -->
                        <table id="table-kelola-survei" class="table table-bordered hover order-column cell-border">
                            <thead>
                                <tr>
                                    <th style="width: 50px;"> No.</th>
                                    <th style="width: 50px;">Kode</th>
                                    <th style="width: 600px;">Nama Kategori</th>
                                    <th style="width: 200px;">Responden</th>
                                    <th style="width: 100px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($category as $ctg) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center"><?= $ctg['kodeCategory']; ?></td>
                                        <td> <a id="a-hov" href="<?php echo base_url('admin/kelola-survei/lihatInstrumen/' . $ctg['slug']) ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lihat Instrumen"><?= $ctg['namaCategory']; ?> </a></td>
                                        <td>
                                            <!-- get peruntukkancategory by slug -->
                                            <?php
                                            $db = db_connect();
                                            $slug = $ctg['slug'];

                                            $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";

                                            $peruntukkan =  $db->query($sql, [$slug]);
                                            foreach ($peruntukkan->getResultArray() as $row) {
                                                echo "
                                                <ul>
                                                <li>" . $row['peruntukkanCategory'] . "</li></ul>";
                                            }
                                            ?>
                                            <!--./ get peruntukkancategory by slug -->

                                        </td>

                                        <td>
                                            <div class="btn-group" role="group">
                                                <form method="post" action="<?= base_url(); ?>/admin/editKategori/<?= $ctg['slug']; ?>">
                                                    <button class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Kategori">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </form>

                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-kategori-<?= $ctg['slug']; ?>">
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- modal hapus kategori -->
                                    <div class="modal fade" id="modal-delete-kategori-<?= $ctg['slug']; ?>" tabindex="-1" aria-labelledby="hapusKategoriLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header bg-cosmic text-white">
                                                    <h5 class="modal-title fw-bold" id="hapusKategoriLabel">Hapus <?= $ctg['kodeCategory']; ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                    Yakin hapus kategori <?= $ctg['namaCategory']; ?> ?
                                                    <p style="color: #D60C0C;">Instrumen dan butir pernyataan pada kategori ini akan terhapus</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                    <form action="<?= base_url(); ?>/admin/deleteKategori/<?= $ctg['slug']; ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal hapus kategori -->
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