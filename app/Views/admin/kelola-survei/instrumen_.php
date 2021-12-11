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
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- flash success tambah data  -->
            <?php if (session()->getFlashdata('message')) :  ?>
                <div class="col-lg-12">
                    <div class="alert alert-success d-flex align-items-center fw-bold" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">

                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            <?= session()->getFlashData('message'); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
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

            <div class="card">

                <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4">
                    <h5> Kategori </h5>
                    <?php if (in_groups('Admin')) : ?>
                        <!-- Button trigger modal -->
                        <a data-bs-toggle="modal" data-bs-target="#modal-tambah-kategori" class="ml-auto">
                            <button type="button" class="btn btn-rouge text-white">
                                <i class="fas fa-plus"></i> Tambah Kategori
                            </button></a>

                    <?php endif; ?>
                </div>
                <?php if (in_groups('Admin')) : ?>
                    <!-- modal tambah kategori -->
                    <div class="modal fade" id="modal-tambah-kategori" tabindex="-1" aria-labelledby="tambahKategoriLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-cosmic text-white ">
                                    <h5 class="modal-title text-center" id="tambahKategoriLabel">Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- form tambah kategori -->
                                    <form action="<?= base_url(); ?>/admin/saveKategori_" method="post">
                                        <?= csrf_field(); ?>

                                        <!-- kode kategori -->
                                        <div class="form-group">
                                            <label for="kode-kategori" class="col-form-label">Kode Kategori:</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control <?= ($validation->hasError('kodeCategory')) ? 'is-invalid' : ''; ?>" id="kodeCategory" name="kodeCategory" value="<?= old('kodeCategory'); ?>">
                                                <!-- popover -->
                                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-kategori" aria-expanded="false" aria-controls="popover-kode-kategori" style="cursor: pointer;">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kodeCategory'); ?>
                                                </div>
                                            </div>
                                            <div class="collapse" id="popover-kode-kategori">
                                                <p class="text-secondary">
                                                    <b>Kategori yang terdaftar :</b>
                                                <ul>
                                                    <?php foreach ($category as $ctg) :  ?>
                                                        <li class="text-secondary">
                                                            <?= $ctg['kodeCategory'] . ' (' .  $ctg['namaCategory'] . ')'; ?>
                                                        </li>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </ul>
                                                </p>
                                            </div>
                                            <!-- end popover -->
                                        </div>

                                        <!-- nama kategori -->
                                        <div class="form-group">
                                            <label for="nama-kategori" class="col-form-label">Nama Kategori:</label>
                                            <textarea class="form-control <?= ($validation->hasError('namaCategory')) ? 'is-invalid' : ''; ?>" id="namaCategory" name="namaCategory" value="<?= old('namaCategory'); ?>"></textarea>
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('namaCategory'); ?>
                                            </div>
                                        </div>

                                        <!-- peruntukkan kategori -->
                                        <div class="form-group">
                                            <label for="peruntukkan-kategori" class="col-form-label mb-2">Kategori Responden:</label>
                                            <?php foreach ($responden as $resp) : ?>
                                                <div class="form-check">
                                                    <input class="form-check-input <?= ($validation->hasError('peruntukkanCategory')) ? 'is-invalid' : ''; ?>" type="checkbox" value="<?= $resp['responden']; ?>" id="peruntukkanCategory" name="peruntukkanCategory[]">
                                                    <label class="form-check-label ml-2 mb-2" for="peruntukkanCategory">
                                                        <?= $resp['responden']; ?>
                                                    </label>
                                                </div>
                                            <?php endforeach; ?>
                                            <span class="text-muted small mt-5">*Pilih kategori responden yang dapat mengisi kategori instrumen ini</span>
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
                <?php endif; ?>

                <div class="card-body">
                    <!-- if no results found -->
                    <?php if (empty($category)) : ?>
                        <div class="row my-4">
                            <div class="mx-auto col-lg-3 col-sm-3">
                                <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                            </div>
                            <p class="text-center my-4 fs-6 text-rouge"> Data belum ditambahkan.</p>
                        </div>
                    <?php endif; ?>


                    <div class="accordion accordion-flush mx-auto" id="accordionExample">
                        <?php foreach ($category as $ctg) : ?>
                            <div class="accordion-item mt-3 mb-5">
                                <!-- header collapse - kategori  -->
                                <h5 class="accordion-header" id="headingOne-<?= $ctg['slug']; ?>">
                                    <div class="accordion-button rounded d-flex align-items-center col-lg-12 " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $ctg['slug']; ?>" aria-expanded="true" aria-controls="collapse-<?= $ctg['slug']; ?>">
                                        <span class="fw-bold fs-6"><?= $ctg['kodeCategory']; ?> - <?= $ctg['namaCategory']; ?></span>

                                    </div>

                                </h5>
                                <!-- modal hapus kategori -->
                                <div class="modal fade" id="modal-delete-kategori-<?= $ctg['slug']; ?>" tabindex="-1" aria-labelledby="hapusKategoriLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-cosmic text-white">
                                                <h5 class="modal-title fw-bold" id="hapusKategoriLabel">Hapus Kategori: <?= $ctg['kodeCategory']; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                <h5>Yakin hapus kategori <?= $ctg['namaCategory']; ?>?</h5>

                                                <p style="color: #D60C0C;">Instrumen dan butir pernyataan pada kategori ini akan terhapus</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                <form action="<?= base_url(); ?>/admin/deleteKategori_/<?= $ctg['slug']; ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal hapus kategori -->
                                <!-- ./header collapse - kategori  -->

                                <!-- content collapse - kategori  -->
                                <div id="collapse-<?= $ctg['slug']; ?>" class="accordion-collapse collapse " aria-labelledby="headingOne-<?= $ctg['slug']; ?>">
                                    <div class="accordion-body">
                                        <div class="container">
                                            <div class="card">
                                                <div class="card-header text-rouge d-flex align-items-center mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <span class="fw-bold">Kategori <?= $ctg['kodeCategory']; ?> </span>

                                                            <?php if (in_groups('Admin')) : ?>
                                                                <!-- aksi kategori -->
                                                                <div class="btn-group" role="group">
                                                                    <form method="post" action="<?= base_url(); ?>/admin/editKategori_/<?= $ctg['slug']; ?>">
                                                                        <button class="btn btn-sm text-decoration-none ml-2 " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Kategori">
                                                                            <i class="fas fa-edit fs-6"></i>
                                                                        </button>
                                                                    </form>

                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-kategori-<?= $ctg['slug']; ?>">
                                                                        <button type="button" class="btn btn-sm " data-bs-placement="top" title="Hapus">
                                                                            <i class="fas fa-trash-alt text-danger fs-6"></i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <span class="fw-bold">Responden : </span>
                                                            </div>
                                                            <div class="col-lg-10 col-sm-12">
                                                                <div class="row row-cols-auto ml-2">
                                                                    <!-- get responden by slug category -->
                                                                    <?php
                                                                    $db = db_connect();
                                                                    $slug = $ctg['slug'];
                                                                    $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";

                                                                    $peruntukkan =  $db->query($sql, [$slug]);
                                                                    foreach ($peruntukkan->getResultArray() as $p) {
                                                                        echo ' <div class="col list-button">' . $p['peruntukkanCategory'] . "</div>";
                                                                    }
                                                                    ?>
                                                                    <!-- ./get responden by slug category -->
                                                                </div>
                                                            </div>
                                                            <!-- button collapse lihat instrumen -->
                                                            <p>
                                                                <button class="btn btn-primary btn-sm mt-5 pt-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-slug-<?= $ctg['slug']; ?>" aria-expanded="false">
                                                                    <i class="fas fa-chevron-down"> </i> List Instrumen
                                                                </button>
                                                            </p>
                                                            <!-- ./button collapse lihat instrumen -->

                                                            <!-- content collapse - instrumen  -->
                                                            <div class="collapse mt-3" id="collapse-slug-<?= $ctg['slug']; ?>">

                                                                <table class="table table-hover table-responsive compact">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" class="align-middle">No.</th>
                                                                            <th scope="col" class="align-middle text-center">Kode Instrumen</th>
                                                                            <th scope="col" class="align-middle">Nama Instrumen</th>
                                                                            <th scope="col" class="align-middle text-center">Butir Pernyataan</th>
                                                                            <th scope="col" class="align-middle">Responden</th>
                                                                            <?php if (in_groups('Admin')) : ?>
                                                                                <th scope="col" class="align-middle text-center">Aksi</th>
                                                                            <?php endif; ?>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php
                                                                        $db = db_connect();
                                                                        $slug = $ctg['slug'];

                                                                        $sql = "SELECT * FROM instrumen WHERE slug = ?";

                                                                        $query =  $db->query($sql, [$slug]);
                                                                        $roww = $query->getResultArray(); ?>

                                                                        <?php if (empty($roww)) : ?>
                                                                            <p class="text-rouge mb-5"><i>Data Instrumen belum ditambahkan.</i></p>
                                                                        <?php endif; ?>

                                                                        <?php foreach ($query->getResultArray() as $row) :  ?>
                                                                            <tr>
                                                                                <th scope="row" class="align-middle text-center"> <?= $i++; ?></th>
                                                                                <td class="align-middle text-center"><?= $row['kodeInstrumen']; ?></td>
                                                                                <td>
                                                                                    <a id="a-hov" href="<?php echo base_url('/admin/kelola-survei/butir/' . $row['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php if (in_groups('Kontributor')) : ?>Lihat Butir Pernyataan <?php else : ?>Kelola Butir Pernyataan<?php endif; ?>"> <?= $row['namaInstrumen']; ?> </a>
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <?php
                                                                                    $insID = $row['id'];
                                                                                    $pernyataanModel = model('PernyataanModel');
                                                                                    $this->pernyataanModel = new $pernyataanModel;
                                                                                    $jumlahButir =  $this->pernyataanModel->jumlahPernyataanByInstrumenID($insID);
                                                                                    ?>
                                                                                    <a id="a-hov" href="<?php echo base_url('/admin/kelola-survei/butir/' . $row['id']) ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php if (in_groups('Kontributor')) : ?>Lihat Butir Pernyataan <?php else : ?>Kelola Butir Pernyataan<?php endif; ?>"> <?= $jumlahButir; ?></a>
                                                                                </td>
                                                                                <td><?= $row['peruntukkanInstrumen']; ?></td>
                                                                                <?php if (in_groups('Admin')) : ?>
                                                                                    <td>
                                                                                        <div class="btn-group" role="group">
                                                                                            <a href="<?= base_url(); ?>/admin/editInstrumen_/<?= $row['id']; ?>" class="btn btn-sm btn-yellow-sea text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Instrumen">
                                                                                                <i class="fas fa-edit"></i>
                                                                                            </a>
                                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-instrumen-<?= $row['id']; ?>">
                                                                                                <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus">
                                                                                                    <i class="fas fa-trash-alt"></i>
                                                                                                </button>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                <?php endif; ?>
                                                                            </tr>
                                                                            <!-- modal hapus instrumen -->
                                                                            <div class="modal fade" id="modal-delete-instrumen-<?= $row['id']; ?>" tabindex="-1" aria-labelledby="hapusInstrumenLabel" aria-hidden="true">
                                                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header bg-cosmic text-white">
                                                                                            <h5 class="modal-title fw-bold" id="hapusKategoriLabel">Hapus: <?= $row['kodeInstrumen']; ?></h5>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body text-center">
                                                                                            <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                                            <h5>Yakin hapus instrumen?</h5>
                                                                                            <p class="" style="color: #D60C0C;">Butir pernyataan didalamnya (jika ada) akan terhapus</p>
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
                                                                    </tbody>
                                                                </table>

                                                                <?php if (in_groups('Admin')) : ?>
                                                                    <!-- Button trigger modal -->
                                                                    <a href="<?= base_url(); ?>/admin/kelola-survei/tambah_instrumen_/<?= $ctg['slug']; ?>">
                                                                        <button type="button" class="btn btn-sm btn-success my-3">
                                                                            <i class=" fas fa-plus"></i> Tambah Instrumen
                                                                        </button>
                                                                    </a>
                                                                <?php endif; ?>
                                                            </div>
                                                            <!-- content collapse - instrumen  -->
                                                        </div>
                                                    </div>
                                                    <!-- ./aksi kategori -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./content collapse - kategori  -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<?= $this->endSection(); ?>