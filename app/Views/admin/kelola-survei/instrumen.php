views nya instrumen.php

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
            <div class="alert alert-primary fw-bold mb-3" role="alert">
                Menampilkan seluruh instrumen kepuasan</div>

            <div class="card mt-5">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="">Instrumen Kepuasan</h5>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning ml-auto" data-bs-toggle="modal" data-bs-target="#tambahInstrumenModal">
                        <i class="fas fa-plus"></i> Tambah Instrumen
                    </button>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <!-- datatables -->
                        <table id="table-kelola-instrumen" class="stripe hover row-border" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode<br>Kategori</th>
                                    <th>Kode<br>Instrumen</th>
                                    <th>Judul Instrumen</th>
                                    <th>Peruntukkan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($instrumen as $ins) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td>
                                            [kodeCategory]
                                        </td>
                                        <td><?= $ins['kodeInstrumen']; ?></td>
                                        <td><?= $ins['namaInstrumen']; ?></td>
                                        <td> <?= $ins['peruntukkanInstrumen']; ?> </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?= base_url(); ?>/admin/editInstrumen/<?= $ins['id']; ?>" class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat/Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus" data-bs-toggle="modal" data-bs-target="#hapusInstrumen">
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

<!-- modal tambah instrumen -->
<div class="modal fade" id="tambahInstrumenModal" tabindex="-1" aria-labelledby="tambahInstrumenLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahInstrumenLabel">Tambah Instrumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form tambah instrumen -->
                <form>
                    <!-- nama instrumen -->
                    <div class="form-group">
                        <label for="nama-instrumen" class="col-form-label">Nama instrumen:</label>
                        <textarea class="form-control" id="nama-instrumen" placeholder="Instrumen Kepuasan atas Manajemen Layanan"></textarea>
                    </div>
                    <!-- kode instrumen -->
                    <div class="form-group">
                        <label for="kode-instrumen" class="col-form-label">Kode instrumen:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="kode-instrumen" placeholder="C.4">
                            <!-- popover -->
                            <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-instrumen" aria-expanded="false" aria-controls="popover-kode-instrumen" style="cursor: pointer;">
                                <i class="fas fa-info"></i>
                            </span>
                        </div>
                        <div class="collapse" id="popover-kode-instrumen">
                            <p class="font-monospace text-secondary">
                                test popover - Masukkan kode instrumen
                            </p>
                        </div>
                        <!-- end popover -->
                    </div>
                    <!-- peruntukkan instrumen -->
                    <div class="form-group">
                        <label for="peruntukkan-instrumen" class="col-form-label">Peruntukkan:</label>
                        <select class="form-select" id="peruntukkan-instrumen">
                            <option selected class="text-muted">Pilih Responden yang dapat mengisi kuesioner </option>
                            <option value="Dosen">Dosen</option>
                            <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Mahasiswa">Alumni/Lulusan</option>
                            <option value="Mahasiswa">Pengguna Lulusan</option>
                            <option value="Mahasiswa">Mitra</option>
                            <option value="Mahasiswa">Pengabdi</option>
                            <option value="Mahasiswa">Peneliti</option>
                        </select>

                    </div>
                </form>
                <!-- end form tambah instrumen -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="<?= base_url(); ?>/admin/kelolaInstrumen"> <button type="button" class="btn btn-success">Simpan</button></a>

            </div>
        </div>
    </div>
</div>
<!-- end modal tambah instrumen -->


<!-- modal hapus instrumen -->
<div class="modal fade" id="hapusInstrumen" tabindex="-1" aria-labelledby="hapusInstrumenLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="hapusInstrumenLabel">Hapus Instrumen (nama)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5>Yakin hapus instrumen?</h5>
                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i>
                <p style="color: #D60C0C;">Instrumen dan butir pernyataan didalamnya (jika ada) akan terhapus</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal hapus instrumen -->

<?= $this->endSection(); ?>