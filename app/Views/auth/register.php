<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>



<section class="auth-page d-flex justify-content-center align-items-center">
    <div class="card align-middle col-lg-6 m-3">
        <div class="container m-3 pt-3">
            <h3 class="">Registrasi</h3>
            <h6 class="text-muted"> Daftar untuk mulai isi survei instrumen kepuasan</h6>
        </div>
        <div class="card-body m-3">

            <?= view('Myth\Auth\Views\_message_block') ?>

            <form action="<?= url_to('register') ?>" method="post" class="user">
                <?= csrf_field() ?>

                <?php if (isset($_SESSION['nim'])) :  ?>
                    <?php foreach ($userCheckByInput as $user) :  ?>
                        <div class="form-group mb-3">
                            <!-- email -->
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class=" form-control form-control-user" value="<?= $user['email']; ?>" name="email" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <!-- fullname -->
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" class=" form-control form-control-user" name="fullname" value="<?= $user['namaLengkap']; ?>" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <!-- nim -->
                            <label for="nim" class="form-label">NIM / NIDN</label>
                            <input type="text" class=" form-control form-control-user" name="nim" value="<?= $user['nim']; ?>" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <!-- fakultas -->
                            <label for="programStudi" class="form-label">Fakultas</label>
                            <input type="text" class=" form-control form-control-user" name="fakultas" id="fakultas" value="<?= $user['fakultas']; ?>" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <!-- program studi -->
                            <label for="programStudi" class="form-label">Program Studi</label>
                            <input type="text" class=" form-control form-control-user" name="programStudi" id="programStudi" value="<?= $user['programStudi']; ?>" readonly>
                        </div>
                        <hr>
                        <div class="m-3 pt-3 pb-3">
                            <h5 class="">Buat Akun</h5>
                            <h6 class="text-muted"> Buat username dan password untuk masuk lebih mudah</h6>
                        </div>
                        <div class="form-group mb-3">
                            <!-- username -->
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group mb-3">
                            <!-- jenis responden -->
                            <label for="Responden" class="form-label">Sebagai</label>
                            <select class="form-select " name="" id="peruntukkanIns" onChange="getText()">
                                <option selected>Pilih..</option>
                                <option value="Dosen">Dosen</option>
                                <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Alumni/Lulusan">Alumni/Lulusan</option>
                                <option value="Pengguna Lulusan">Alumni/Lulusan</option>
                                <option value="Mitra">Mitra</option>
                                <option value="Peneliti">Peneliti</option>
                                <option value="Pengabdi">Pengabdi</option>
                            </select>

                            <input type="hidden" name="role" id="peruntukkanInsTxt" />

                        </div>

                        <!-- password -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="pass_confirm"" class=" form-label">Ulang Password</label>
                                <input type="password" name="pass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cosmic btn-user  btn-block">
                                <?= lang('Auth.register') ?>
                            </button>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </form>
            <hr>
            <div class="text-center">
                <p class="text-muted small">
                    <?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a>
                </p>
            </div>
        </div>
    </div>

</section>
<script type="text/javascript">
    function getText() {
        var select = document.getElementById('peruntukkanIns');
        var option = select.options[select.selectedIndex];

        document.getElementById('peruntukkanInsTxt').value = option.text;
    }

    getText();
</script>
<?= $this->endSection('auth-content'); ?>