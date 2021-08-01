views nya instrumen.php

<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to page view categories -->
                <a href="<?= base_url(); ?>/admin/kelolaInstrumen">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content col-lg-8 mx-auto">
        <div class="container-fluid">
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

                    <hr>
                    <form>
                        <!-- nama instrumen -->
                        <div class="form-group">
                            <label for="nama-instrumen" class="col-form-label">Nama instrumen:</label>
                            <input type="text" class="form-control" id="nama-instrumen" value="<?= $instrumen['namaInstrumen']; ?> ">
                        </div>
                        <!-- kode instrumen -->
                        <div class="form-group">
                            <label for="kode-instrumen" class="col-form-label">Kode instrumen:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="kode-instrumen" value="<?= $instrumen['kodeInstrumen']; ?>">
                                <!-- popover -->
                                <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-instrumen" aria-expanded="false" aria-controls="popover-kode-instrumen" style="cursor: pointer;">
                                    <i class="fas fa-info"></i>
                                </span>
                            </div>
                            <select class="form-select" id="peruntukkan-instrumen">
                                <option selected class="text-muted">kode </option>
                                <option value="C.2">C.2</option>
                                <option value="C.7">C.7</option>
                                <option value="C.6">C.6</option>

                            </select>

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
                            <input type="text" class="form-control" id="peruntukkan-instrumen" value="<?= $instrumen['peruntukkanInstrumen']; ?>">

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


                    <div class="d-flex align-items-center ">
                        <button type="button" class="btn btn-success btn-block mr-auto mt-5">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>