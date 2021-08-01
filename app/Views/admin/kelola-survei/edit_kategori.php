<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Edit Kategori Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to page view categories -->
                <a href="<?= base_url(); ?>/admin/kelolaKategori">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content col-lg-8 mx-auto">
        <div class="container-fluid">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="modal-body">
                        <!-- form edit kategori -->
                        <form>
                            <!-- nama kategori -->
                            <div class="form-group">
                                <label for="nama-kategori" class="col-form-label">Nama Kategori:</label>
                                <input type="text" class="form-control" id="nama-kategori" value="<?= $category['namaCategory']; ?> ">
                            </div>
                            <!-- kode kategori -->
                            <div class="form-group">
                                <label for="kode-kategori" class="col-form-label">Kode Kategori:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="kode-kategori" value="<?= $category['kodeCategory']; ?>">
                                    <!-- popover -->
                                    <span class="input-group-text" data-bs-toggle="collapse" data-bs-target="#popover-kode-kategori" aria-expanded="false" aria-controls="popover-kode-kategori" style="cursor: pointer;">
                                        <i class="fas fa-info"></i>
                                    </span>
                                </div>
                                <select class="form-select" id="peruntukkan-kategori">
                                    <option selected class="text-muted">kode </option>
                                    <option value="C.2">C.2</option>
                                    <option value="C.7">C.7</option>
                                    <option value="C.6">C.6</option>

                                </select>

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
                                <input type="text" class="form-control" id="peruntukkan-kategori" value="<?= $category['peruntukkanCategory']; ?>">

                                <select class="form-select" id="peruntukkan-kategori">
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
                        <!-- end form edit kategori -->

                        <div class="d-flex align-items-center ">
                            <button type="button" class="btn btn-block btn-success mr-auto mt-5">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<?= $this->endSection(); ?>