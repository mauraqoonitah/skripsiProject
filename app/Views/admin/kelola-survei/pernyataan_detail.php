<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Butir Pernyataan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to previous page  -->
                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px"></i>
                </a>

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


            <div class="card border-light shadow ">
                <div class="card-header d-flex align-items-center py-4 text-rouge">
                    <h5> <?= $instrumen['kodeInstrumen'] ?> - <?= $instrumen['namaInstrumen'] ?></h5>

                </div>
                <div class="card-body">
                    <!-- petunjuk pengisian -->

                    <div class="callout callout-info mb-5 ">
                        <div class="d-flex align-items-center ">
                            <h6 class="my-3 py-2 text-muted">Petunjuk Pengisian Instrumen</h6>
                            <!-- buat petunjuk pengisian -->
                            <!-- Button trigger modal -->

                            <?php if (empty($petunjukInstrumenModel)) : ?>
                                <button type="button" class="btn btn-info ml-auto" data-bs-toggle="modal" data-bs-target="#modalBuatPetunjuk">
                                    <i class=" fas fa-plus"></i> Buat Petunjuk Pengisian
                                </button>

                            <?php endif; ?>

                            <?php foreach ($petunjukInstrumenModel as $isi) : ?>

                                <?php if (empty($isi['isiPetunjuk']) || empty($isi['id'])) : ?>
                                    <button type="button" class="btn btn-info ml-auto" data-bs-toggle="modal" data-bs-target="#modalBuatPetunjuk">
                                        <i class=" fas fa-plus"></i> Buat Petunjuk Pengisian
                                    </button>
                                <?php endif; ?>

                                <?php if (!empty($isi['isiPetunjuk'])) : ?>
                                    <?php $isiPetunjukID = $isi['id']; ?>
                                    <a href="<?= base_url(); ?>/admin/editPetunjukPengisian/<?= $isiPetunjukID; ?>" class="btn btn-warning text-decoration-none ml-auto" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Petunjuk Pengisian">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                <?php endif; ?>



                            <?php endforeach; ?>

                        </div>
                        <?php if (empty($petunjukInstrumenModel)) : ?>
                            <div class="alert alert-rouge alert-dismissible fade show" role="alert">
                                <span class="text-rouge"><i> Petunjuk Pengisian Instrumen belum dibuat.</i></span>
                            </div>
                        <?php endif; ?>

                        <?php foreach ($petunjukInstrumenModel as $isi) : ?>
                            <?php if (empty($isi['isiPetunjuk'])) : ?>
                                <div class="alert alert-rouge alert-dismissible fade show" role="alert">
                                    <span class="text-rouge"><i> Petunjuk Pengisian Instrumen belum dibuat.</i></span>
                                </div>
                            <?php endif; ?>
                            <?= $isi['isiPetunjuk']; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- modal Buat isi petunjuk -->
                    <div class="modal fade" id="modalBuatPetunjuk" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahButirLabel">Buat Petunjuk Instrumen <?= $instrumen['kodeInstrumen']; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <!-- form Buat isi petunjuk -->
                                    <form action="<?= base_url(); ?>/admin/savePetunjukPengisian/<?= $instrumen['id']; ?>" method="post">
                                        <?= csrf_field(); ?>

                                        <!-- isi butir -->
                                        <div class="form-group">
                                            <div class="mb-3 row">
                                                <div class="col-lg-12">
                                                    <textarea class="form-control <?= ($validation->hasError('isiPetunjuk')) ? 'is-invalid' : ''; ?>" id="summernote-petunjuk-pengisian" name="isiPetunjuk"></textarea>

                                                    <div class=" invalid-feedback">
                                                        <?= $validation->getError('butir'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- instrumen id -->
                                        <input type="hidden" name="instrumenID" value="<?= $instrumen['id']; ?>">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                    <!-- end form Buat isi petunjuk -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal Buat isi petunjuk -->

                    <div class="card-header d-flex align-items-center py-3">
                        <!-- Button trigger modal -->
                        <a class="">
                            <button type="button" class="btn btn-rouge " data-bs-toggle="modal" data-bs-target="#tambahButirModal">
                                <i class=" fas fa-plus"></i> Tambah Butir
                            </button></a>
                    </div>
                    <div class="table-responsive-sm">
                        <table id="example2" class="table table-bordered table-hover align-middle ">
                            <thead class="table-light">

                                <tr>
                                    <th rowspan="2" style="width: 10px">No.</th>
                                    <th rowspan="2">Kriteria Kepuasan</th>
                                    <th colspan="5" class="text-center">Tingkat Kepuasan</th>
                                    <th rowspan="2" style="width: 60px" class="text-center">Aksi</th>
                                </tr>
                                <tr>
                                    <th style="width: 40px">5</th>
                                    <th style="width: 40px">4</th>
                                    <th style="width: 40px">3</th>
                                    <th style="width: 40px">2</th>
                                    <th style="width: 40px">1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <!-- jika butir pernyataan tidak ada -->
                                <?php if (sizeof($lihatPernyataan) === 0) : ?>
                                    <tr>
                                        <th colspan="8">
                                            <div class="alert alert-rouge alert-dismissible fade show" role="alert">
                                                <span class="text-rouge"><i> butir pernyataan belum ditambahkan.</i></span>
                                            </div>
                                        </th>
                                    </tr>
                                <?php endif; ?>
                                <?php foreach ($lihatPernyataan as $questions) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td><?= $questions['butir']; ?></td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="" id="" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="" id="" disabled>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="" id="" disabled>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="" id="" disabled>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="" id="" disabled>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?= base_url(); ?>/admin/editPernyataan/<?= $questions['id']; ?>" class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Pernyataan">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus" data-bs-toggle="modal" data-bs-target="#modal-delete-butir-<?= $questions['id']; ?>">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- modal hapus Butir Pernyataan -->
                                    <div class="modal fade" id="modal-delete-butir-<?= $questions['id']; ?>" tabindex="-1" aria-labelledby="hapusButirLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fw-bold" id="hapusButirLabel">Hapus Butir Pernyataan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">

                                                    <h6>Yakin hapus butir pernyataan ini?</h6>
                                                    <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                                                    <form action="<?= base_url(); ?>/admin/deletePernyataan/<?= $questions['id']; ?>" method="post">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal hapus butir -->
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <th rowspan="2" style="width: 10px">No.</th>
                                    <th rowspan="2">Kriteria Kepuasan</th>
                                    <th style="width: 12px">5</th>
                                    <th style="width: 12px">4</th>
                                    <th style="width: 12px">3</th>
                                    <th style="width: 12px">2</th>
                                    <th style="width: 12px">1</th>

                                </tr>

                            </tfoot>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- modal tambah butir -->
<div class="modal fade" id="tambahButirModal" tabindex="-1" aria-labelledby="tambahButirLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahButirLabel">Tambah Butir Pernyataan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form tambah butir -->
                <form action="<?= base_url(); ?>/admin/savePernyataan/<?= $instrumen['id']; ?>" method="post">
                    <?= csrf_field(); ?>

                    <!-- nama Instrumen -->
                    <input class="form-control" type="hidden" name="instrumenID" value="<?= $instrumen['id'] ?>" readonly>

                    <!-- kode kategori (slug) -->
                    <input class="form-control" type="hidden" name="kodeCategory" value="<?= $instrumen['kodeCategory'] ?>" readonly>

                    <!-- nama Instrumen -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="kode-kategori" class="col-sm-2 col-form-label">Instrumen :</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namaInstrumen" value="<?= $instrumen['namaInstrumen'] ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- responden -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="nama-instrumen" class="col-sm-2 col-form-label">Responden :</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="peruntukkanInstrumen" value="<?= $instrumen['peruntukkanInstrumen'] ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- isi butir -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="butir" class="col-sm-2 col-form-label">Isi Butir Pernyataan:</label>
                            <div class="col-sm-10">

                                <textarea class="form-control <?= ($validation->hasError('butir')) ? 'is-invalid' : ''; ?>" id="summernote-petunjuk-pengisian" name="butir"></textarea>

                                <div class=" invalid-feedback">
                                    <?= $validation->getError('butir'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
                <!-- end form tambah butir -->
            </div>

        </div>
    </div>
</div>
<!-- end modal tambah butir -->



<?= $this->endSection(); ?>