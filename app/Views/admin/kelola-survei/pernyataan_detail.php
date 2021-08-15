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
                <!-- back to page view categories -->
                <a href="<?= base_url(); ?>/admin/kelolaPernyataan">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Butir Pernyataan id <?= $pernyataan['id']; ?><br>
                    <?= $pernyataan['namaInstrumen']; ?>

                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->

    <!-- butir pernyataan per instrumen -->
    <div class="card-body">
        <div class="table-responsive">
            <!-- datatables -->
            <table id="table-kelola-instrumen" class="stripe hover row-border" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Butir Pernyataan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <?= $pernyataan['butir']; ?>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url(); ?>/admin/editButirPernyataan/< ?= $q['id']; ?>" class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat/Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus" data-bs-toggle="modal" data-bs-target="#hapusButir">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- ./butir pernyataan per instrumen -->

</div>

<!-- modal tambah butir -->
<div class="modal fade" id="tambahButirModal" tabindex="-1" aria-labelledby="tambahButirLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahButirLabel">Tambah Butir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form tambah butir -->
                <form action="<?= base_url(); ?>/admin/savePernyataan" method="post">
                    <?= csrf_field(); ?>

                    <!-- pilih kode kategori -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="kode-kategori" class="col-sm-2 col-form-label">Kategori:</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="kodeCategory" name="kodeCategory">
                                    <?php foreach ($category as $ctg => $value) :  ?>
                                        <option value="<?= $value['kodeCategory']; ?>"><?= $value['kodeCategory']; ?> - <?= $value['namaCategory']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- nama instrumen -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="nama-instrumen" class="col-sm-2 col-form-label">Nama instrumen:</label>

                            <div class="col-sm-10">
                                <select class="form-select" id="peruntukkan-kategori">
                                    <option selected class="text-muted">Pilih </option>
                                    <option value="">ins2 </option>
                                    <option value=""> ins1</option>
                                    <option value="">ins3</option>
                                    <option value="">ins4</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- isi butir -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="pernyataan" class="col-sm-2 col-form-label">Isi Butir Pernyataan:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="pernyataan" name="pernyataan" rows="3"></textarea>
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


<!-- modal hapus Butir Pernyataan -->
<div class="modal fade" id="hapusButir" tabindex="-1" aria-labelledby="hapusButirLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="hapusButirLabel">Hapus Butir Pernyataan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5>Yakin hapus butir pernyataan ini?</h5>
                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal hapus butir -->
<br><br><br><br><br>
<hr>
<hr>
<hr>
<hr>
<hr>

<!-- instrumen -->
<div class="card-body">
    <div class="table-responsive">
        <!-- datatables -->
        <table id="table-kelola-instrumen" class="stripe hover row-border" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Instrumen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($instrumen as $ins) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="nanti masuk ke detail lihat semua butir pada instrumen ini"><?= $ins['namaInstrumen']; ?></a></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url(); ?>/admin/tambahPernyataan" class="ml-auto mr-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Pernyataan">
                                    <button type="button" class="btn btn-warning ">
                                        <i class="fas fa-plus"></i> Tambah
                                    </button>
                                </a>
                                <a href="<?= base_url(); ?>/admin/editButirPernyataan/id" class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat/Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus" data-bs-toggle="modal" data-bs-target="#hapusButir">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- ./instrumen -->



<?= $this->endSection(); ?>