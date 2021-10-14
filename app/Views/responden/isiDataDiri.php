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

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="card p-5 col-lg-8 mx-auto">
                <form action="" method="post">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="row">

                            <?php foreach ($getDataUser as $user) : ?>

                                <div class="mx-auto">
                                    <div class="mb-3 row">
                                        <label for="namaLengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control" id="namaLengkap" value="<?= $user->fullname; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control" id="email" value="<?= $user->email; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-4 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control" id="username" value="<?= $user->username; ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="role" class="col-sm-4 col-form-label">Sebagai</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control" id="role" value="<?= $user->role; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Password Lama</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Password Baru</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Ulang Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="inputPassword">
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-purple">
                                            <i class="fas fa-save mr-3"></i>Simpan
                                        </button>

                                    </div>

                                    <!-- <div class="mb-3 row">
                                        <label for="prodi" class="col-sm-4 col-form-label">Program Studi</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control" id="prodi" value="">
                                        </div>
                                    </div> -->
                                    <!-- <div class="mb-3 row">
                                        <label for="angkatan" class="col-sm-4 col-form-label">Angkatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control" id="angkatan" value="">
                                        </div>
                                    </div> -->
                                    <!-- <div class="mb-3 row">
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
                                    </div> -->

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