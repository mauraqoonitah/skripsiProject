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
            <div class="card">
                <div class="card-header text-rouge col-lg-12 py-4">
                    <h5> List Instrumen </h5>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush col-lg-10 mx-auto" id="accordionExample">
                        <?php foreach ($category as $ctg) : ?>
                            <div class="accordion-item my-3">
                                <h5 class="accordion-header" id="headingOne-<?= $ctg['slug']; ?>">
                                    <button class="accordion-button rounded" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $ctg['slug']; ?>" aria-expanded="true" aria-controls="collapse-<?= $ctg['slug']; ?>">
                                        <span class="fw-bold fs-6"><?= $ctg['kodeCategory']; ?> - <?= $ctg['namaCategory']; ?></span>
                                    </button>
                                </h5>
                                <div id="collapse-<?= $ctg['slug']; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne-<?= $ctg['slug']; ?>">

                                    <div class="accordion-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="align-middle">No.</th>
                                                    <th scope="col" class="align-middle">Kode Instrumen</th>
                                                    <th scope="col" class="align-middle">Nama Instrumen</th>
                                                    <th scope="col" class="align-middle">Responden</th>
                                                    <th scope="col" class="align-middle text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php
                                                $db = db_connect();
                                                $slug = $ctg['slug'];

                                                $sql = "SELECT * FROM instrumen WHERE slug = ?";

                                                $query =  $db->query($sql, [$slug]);
                                                foreach ($query->getResultArray() as $row) : ?>
                                                    <tr>
                                                        <th scope="row" class="align-middle text-center"> <?= $i++; ?></th>
                                                        <td class="align-middle text-center"><?= $row['kodeInstrumen']; ?></td>
                                                        <td><?= $row['namaInstrumen']; ?></td>
                                                        <td><?= $row['peruntukkanInstrumen']; ?></td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <a href="<?= base_url(); ?>/admin/editInstrumen_/<?= $row['id']; ?>" class="btn btn-sm btn-yellow-sea text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                                    <i class="fas fa-edit"></i>
                                                                </a>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-instrumen-<?= $row['id']; ?>">
                                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <div class="d-flex align-items-center">
                                            <!-- Button trigger modal -->
                                            <a href="<?= base_url(); ?>/admin/kelola-survei/tambah_instrumen_/<?= $ctg['slug']; ?>" class="ml-auto">
                                                <button type="button" class="btn btn-warning ">
                                                    <i class=" fas fa-plus"></i> Tambah Instrumen
                                                </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal hapus instrumen -->
                            <div class="modal fade" id="modal-delete-instrumen-<?= $row['id']; ?>" tabindex="-1" aria-labelledby="hapusInstrumenLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <small class="text-muted" id="hapusInstrumenLabel"><?= $row['namaInstrumen']; ?></small>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h5>Yakin hapus instrumen?</h5>
                                            <i class="fas fa-exclamation-circle fa-2x" style="width: 3rem; color: #D60C0C"></i>
                                            <p class="mt-4" style="color: #D60C0C;">Butir pernyataan didalamnya (jika ada) akan terhapus</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                            <form action="<?= base_url(); ?>/admin/deleteInstrumen_/<?= $row['id']; ?>" method="post">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<?= $this->endSection(); ?>