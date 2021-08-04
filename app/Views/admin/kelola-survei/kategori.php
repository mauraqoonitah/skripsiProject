<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Kategori Instrumen</h1>
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
                <div class="alert alert-success d-flex align-items-center fw-bold mb-3" role="alert">
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

            <div class="card mt-5">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="">Kategori Kuesioner</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning ml-auto" data-bs-toggle="modal" data-bs-target="#tambahKategoriModal">
                        <i class="fas fa-plus"></i> Tambah Kategori
                    </button>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <!-- datatables -->
                        <table id="table-kelola-kategori" class="stripe hover row-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode<br>Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th>Peruntukkan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($category as $ctg) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $ctg['kodeCategory']; ?></td>
                                        <td> <?= $ctg['namaCategory']; ?> </td>
                                        <td><?= $ctg['peruntukkanCategory']; ?></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?= base_url(); ?>/admin/editKategori/<?= $ctg['slug']; ?>" class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat/Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus" data-bs-toggle="modal" data-bs-target="#hapusKategori">
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
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- modal tambah kategori -->
<div class="modal fade" id="tambahKategoriModal" tabindex="-1" aria-labelledby="tambahKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahKategoriLabel">Buat Kategori Instrumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form tambah kategori -->
                <form action="<?= base_url(); ?>/admin/saveKategori" method="post">
                    <?= csrf_field(); ?>

                    <!-- nama kategori -->
                    <div class="form-group">
                        <label for="nama-kategori" class="col-form-label">Nama Kategori:</label>
                        <textarea class="form-control" id="namaCategory" name="namaCategory" placeholder="Instrumen Kepuasan atas Manajemen Layanan"></textarea>
                    </div>
                    <!-- kode kategori -->
                    <div class="form-group">
                        <label for="kode-kategori" class="col-form-label">Kode Kategori:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="kodeCategory" name="kodeCategory" placeholder="C.4">
                            <!-- popover -->
                            <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-kategori" aria-expanded="false" aria-controls="popover-kode-kategori" style="cursor: pointer;">
                                <i class="fas fa-info"></i>
                            </span>
                        </div>
                        <div class="collapse" id="popover-kode-kategori">
                            <p class="font-monospace text-secondary">
                                test popover - Masukkan kode kategori
                            </p>
                        </div>
                        <!-- end popover -->
                    </div>
                    <!-- peruntukkan kategori -->
                    <div class="form-group">
                        <label for="peruntukkan-kategori" class="col-form-label">Peruntukkan:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                Dosen
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory">
                            <label class="form-check-label" for="flexCheckChecked">
                                Tenaga Pendidik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory">
                            <label class="form-check-label" for="flexCheckChecked">
                                Mahasiswa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory">
                            <label class="form-check-label" for="flexCheckChecked">
                                Alumni/Lulusan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory">
                            <label class="form-check-label" for="flexCheckChecked">
                                Pengguna Lulusan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory">
                            <label class="form-check-label" for="flexCheckChecked">
                                Mitra
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory">
                            <label class="form-check-label" for="flexCheckChecked">
                                Pengabdi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="peruntukkanCategory" name="peruntukkanCategory">
                            <label class="form-check-label" for="flexCheckChecked">
                                Peneliti
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
                <!-- end form tambah kategori -->
            </div>
        </div>
    </div>
</div>
<!-- end modal tambah kategori -->


<!-- modal hapus kategori -->
<div class="modal fade" id="hapusKategori" tabindex="-1" aria-labelledby="hapusKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="hapusKategoriLabel">Hapus Kategori (kode)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5>Yakin hapus kategori?</h5>
                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i>
                <p style="color: #D60C0C;">Instrumen dan butir pernyataan pada kategori ini akan terhapus</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal hapus kategori -->

<?= $this->endSection(); ?>