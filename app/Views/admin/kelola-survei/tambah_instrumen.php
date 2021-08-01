views nya instrumen.php

<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Buat Instrumen</h1>
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

            <div class="alert alert-primary alert-dismissible fade show col-lg-6" role="alert"> Pilih kategori yang akan dibuat instrumennya
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="card">
                <div class="card-body">


                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>



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
                                        <!-- pilih kode kategori -->
                                        <div class="form-group">
                                            <select class="form-select" id="kode-kategori">
                                                <option selected class="text-muted">Pilih Kode Kategori </option>
                                                <option value="C.1">C.1</option>
                                                <option value="C.3">C.3</option>
                                                <option value="C.6">C.6</option>
                                            </select>

                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="button">Selanjutnya</button>
                                        </div>
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
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>