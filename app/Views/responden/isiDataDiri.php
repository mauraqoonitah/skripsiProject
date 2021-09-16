<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>
<div class="content-wrapper py-5" style="min-height: 80vh;">
    <!-- Content Header (Page header) -->
    <div class="content-header mb-3">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="purple-text"> Data Diri </h1>
                </div>

            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <p>instrumen id <?= $instrumen['id']; ?><br>
        <?= $instrumen['namaInstrumen']; ?> </p>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="card p-5 col-lg-8 mx-auto">
                <form action="" method="post">
                    <?= csrf_field(); ?>
                    <!-- coba mau masukin ke kolom nama pake isi nya namainstrumen yg dipilih sebelumnya -->
                    <input type="hidden" id="nama" name="nama" value=" <?= $instrumen['namaInstrumen']; ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="mx-auto">
                                <div class="mb-3 row">
                                    <label for="Email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control" id="Email" value="mauraqoonitahputri_1313617009@mhs.unj.ac.id">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="namaLengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control" id="namaLengkap" value="Maura Qoonitah Putri">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="prodi" class="col-sm-4 col-form-label">Program Studi</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control" id="prodi" value="Ilmu Komputer">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="angkatan" class="col-sm-4 col-form-label">Angkatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" readonly class="form-control" id="angkatan" value="2017">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Institusi/Tempat Kerja (ini untuk mitra)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Institution/Workplace (ini untuk mitra luar)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Unit (ini untuk tendik)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="" class="col-sm-4 col-form-label">Asal Program Studi yang Dinilai (ini untuk pengguna lulusan)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center mt-5">
                                    <a href="<?= base_url(); ?>/responden">
                                        <button type="submit" class="btn btn-outline-purple mr-3">
                                            <i class="fas fa-chevron-left mr-3"></i> Kembali
                                        </button>
                                    </a>

                                    <button type="submit" class="btn btn-purple">
                                        Selanjutnya <i class="fas fa-chevron-right ml-3"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>