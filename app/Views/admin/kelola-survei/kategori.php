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
            <!-- flash success tambah data  -->
            <?php if (session()->getFlashdata('msgKategori')) :  ?>
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
                        <?= session()->getFlashData('msgKategori'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- ./ flash success tambah data  -->



            <div class="card border-light shadow ">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="">Kategori Instrumen</h5>
                    <!-- Button trigger modal -->
                    <a href="<?= base_url(); ?>/admin/kelola-survei/tambah_kategori" class="ml-auto">
                        <button type="button" class="btn btn-warning ">
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
                                        <td> <a href="<?php echo base_url('admin/kelola-survei/lihatInstrumen/' . $ctg['slug']) ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lihat Instrumen"><?= $ctg['namaCategory']; ?> </a></td>
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
                                                    <button class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat/Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </form>

                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-kategori-<?= $ctg['id']; ?>">
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- modal hapus kategori -->
                                    <div class="modal fade" id="modal-delete-kategori-<?= $ctg['id']; ?>" tabindex="-1" aria-labelledby="hapusKategoriLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header">
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

                                                    <form action="<?= base_url(); ?>/admin/deleteKategori/<?= $ctg['id']; ?>" method="post">
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