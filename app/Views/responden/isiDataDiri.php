<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>
<div class="content-wrapper pb-5 pt-2" style="min-height: 80vh;">
    <!-- Content Header (Page header) -->
    <div class="content-header mb-3">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="purple-text"> Lengkapi Data Diri </h1>
                </div>

            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->


    <section class="content">
        <div class="container">
            <div class="card col-lg-8 py-4 px-2 mx-auto rounded-3">

                <form action="<?= base_url(); ?>/responden/updateDataDiri/<?= user()->id; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <!-- flash success tambah data  -->
                        <?php if (session()->getFlashdata('message')) :  ?>
                            <div class="alert alert-success d-flex align-items-center fw-bold" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </symbol>
                                    <use xlink:href="#check-circle-fill" />
                                </svg>
                                <div class="fs-6">
                                    <?= session()->getFlashData('message'); ?>

                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- ./ flash success tambah data  -->

                        <!-- flash gagal tambah data  -->
                        <?php if (session()->getFlashdata('messageError')) :  ?>
                            <div class="alert alert-danger d-flex align-items-center fw-bold" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="22" height="22" role="img" aria-label="Danger:">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div class="small">
                                    <?= session()->getFlashData('messageError'); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- ./ flash gagal tambah data  -->

                        <div class="container row">
                            <?php foreach ($getDataUser as $user) : ?>
                                <div class="mx-auto pr-3">
                                    <div class="mb-3 ">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input type="text" readonly class="form-control" id="email" value="<?= $user->email; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="col-form-label">Username</label>
                                        <input type="text" readonly class="form-control" id="username" value="<?= $user->username; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fullname" class="col-form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user->fullname; ?> " required>
                                    </div>

                                    <!-- mahasiswa -->
                                    <?php if (in_groups(5)) : ?>
                                        <?php echo $selectedProdi = $user->programStudi; ?>

                                        <div class="mb-3">
                                            <label for="prodi" class="col-form-label">Program Studi</label>
                                            <select class="form-select" name="programStudi" aria-label="Default select example" required>

                                                <?php foreach ($getProdi as $prodi) :  ?>
                                                    <option value="<?= $prodi['id']; ?>" <?php echo in_array($prodi['id'], $selectedProdi) ? 'selected' : '' ?>><?= $prodi['nama_prodi']; ?></option>

                                                <?php endforeach; ?>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="angkatan" class="col-form-label">Angkatan</label>
                                            <input type="text" class="form-control" id="angkatan" value="">
                                        </div>
                                    <?php endif; ?>
                                    <!-- ./ mahasiswa -->

                                    <!-- dosen / peneliti -->
                                    <?php if (in_groups(3) || in_groups(9)) : ?>
                                        <?php $selectedProdi = $user->programStudi; ?>

                                        <div class="mb-3">
                                            <label for="prodi" class="col-form-label">Program Studi</label>
                                            <select class="form-select" name="programStudi" aria-label="Default select example" required>

                                                <option selected>Pilih</option>
                                                <?php foreach ($getProdi as $prodi) :  ?>

                                                    <option value="<?= $prodi['id']; ?>" <?php if ($prodi['id'] === $selectedProdi) {
                                                                                                echo 'selected';
                                                                                            } ?>><?= $prodi['nama_prodi']; ?></option>

                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                    <?php endif; ?>
                                    <!-- ./ dosen / peneliti-->


                                    <!-- tendik -->
                                    <?php if (in_groups(4)) : ?>

                                        <div class="mb-3">
                                            <label for="Unit" class="col-form-label">Unit/Biro/Lembaga (tendik)</label>
                                            <input type="text" readonly class="form-control" id="Unit" value="">
                                        </div>
                                    <?php endif; ?>
                                    <!-- ./tendik -->

                                    <!-- alumni -->
                                    <?php if (in_groups(6)) : ?>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Asal Program Studi (alumni)</label>
                                            <select class="form-select" name="programStudi" aria-label="Default select example">
                                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                            </select>
                                        </div>
                                    <?php endif; ?>
                                    <!-- ./ alumni-->

                                    <!-- pengguna lulusan -->
                                    <?php if (in_groups(7)) : ?>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Asal Program Studi yang dinilai (pengguna lulusan)</label>
                                            <select class="form-select" name="programStudi" aria-label="Default select example">
                                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>

                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Institusi/Tempat Kerja(pengguna lulusan)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Alamat (pengguna lulusan)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>

                                    <?php endif; ?>
                                    <!-- ./ pengguna lulusan-->

                                    <!-- mitra -->
                                    <?php if (in_groups(8)) : ?>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Lembaga/Unit/Institusi/Industri (mitra)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Asal program studi (jika alumni unj) (mitra)</label>
                                            <select class="form-select" name="programStudi" aria-label="Default select example">
                                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>

                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Alamat (mitra)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    <?php endif; ?>
                                    <!-- ./mitra -->

                                    <!-- mitra luar / partners-->
                                    <?php if (in_groups(11)) : ?>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Name (mitra luar)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Institution/Workplace (mitra luar)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">Address (mitra luar)</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    <?php endif; ?>
                                    <!-- ./mitra luar / partners-->

                                    <div class="d-grid gap-2 mt-5">
                                        <button type="submit" class="btn btn-purple">
                                            <i class="fas fa-save mr-3"></i>Simpan
                                        </button>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>