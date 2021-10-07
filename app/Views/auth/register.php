<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>


<section>
    <div class="auth-page d-flex justify-content-center align-items-center">
        <div class="auth-wrapper-sm">
            <div class="auth-card row my-5 auth-wrapper-left">
                <div class="card-header">
                    <div class="py-3 px-4">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <img src=" <?= base_url(); ?>/img/unj.png" alt="unj" class="" style="width; 48px; height: 48px">
                        </div>
                        <h3 class="text-center">Registrasi</h3>
                        <p class="text-muted text-center fs-6 fw-bold"> Daftar akun untuk mulai akses survei instrumen kepuasan</p>

                    </div>
                </div>
                <div class="auth-wrapper-right">
                    <div class="container">
                        <form action="<?= url_to('register') ?>" method="post" class="user" accept-charset="utf-8">
                            <?= csrf_field() ?>

                            <?php if (isset($_SESSION['nim'])) :  ?>
                                <div class="alert alert-success d-flex align-items-center fw-bold" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </symbol>
                                        <use xlink:href="#check-circle-fill" />
                                    </svg>
                                    <div class="fs-6">
                                        Akun SIAKAD dikenali. Silakan buat username dan password.
                                    </div>
                                </div>

                                <?php
                                $nim = $_SESSION['nim'];
                                $nidn = $_SESSION['nidn'];
                                $db = db_connect();
                                $userCheckModel = model('UserCheckModel');
                                $this->userCheckModel = new $userCheckModel;
                                $sql =  $this->userCheckModel->getUserCheckByInput($nidn);

                                foreach ($sql as $row) : ?>
                                    <!-- email -->
                                    <input type="hidden" value="<?= $row['email']; ?>" name="email">

                                    <!-- fullname -->
                                    <input type="hidden" name="fullname" value="<?= $row['namaLengkap']; ?>">

                                    <!-- fullname -->
                                    <input type="hidden" name="nidn" value="<?= $row['nidn']; ?>">

                                    <!-- nim -->
                                    <input type="hidden" name="nim" value="<?= $row['nim']; ?>">

                                    <!-- jenis responden siakad akun -->
                                    <input type="hidden" name="role" value="<?= $row['role']; ?>">

                                    <!-- fakultas -->
                                    <input type="hidden" name="fakultas" value="<?= $row['fakultas']; ?>">

                                    <!-- program studi -->
                                    <input type="hidden" name="programStudi" value="<?= $row['programStudi']; ?>">
                                <?php endforeach; ?>

                    </div>
                    <!-- ./card-body -->
                </div>
                <div class="auth-wrapper-right">
                    <div class="card-body mx-3">
                        <!-- username -->
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.username') ?>
                            </div>
                        </div>

                        <!-- password -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                <input type="password" name="pass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= session('errors.pass_confirm') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="auth-wrapper-right col-12 mb-5">
                        <div class="container d-grid gap-2 ">
                            <button type="submit" class="btn btn-cosmic btn-user btn-block">
                                <?= lang('Auth.register') ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php
                                unset(
                                    $_SESSION['nim'],
                                    $_SESSION['nidn']
                                ); ?>

        <?php else : ?>
            <form action="<?= url_to('register') ?>" method="post" class="user" accept-charset="utf-8">
                <?= csrf_field() ?>
                <!--  -------------- section untuk responden non siakad ----------------- -->
                <section>
                    <div class="container">


                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <div class="form-group my-3">
                            <!-- email -->
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class=" form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <!-- fullname -->
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input type="text" class=" form-control form-control-user <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" value="<?= old('fullname') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.fullname') ?>
                            </div>
                        </div>
                        <!-- username -->
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.username') ?>
                            </div>
                        </div>

                        <!-- jenis responden untuk non siakad -->
                        <div class="form-group mb-3">
                            <label for="responden" class="form-label">Sebagai</label>
                            <select class="form-select <?php if (session('errors.role')) : ?>is-invalid<?php endif ?>" name="role" id="responden" onChange="getText()" value="<?= old('role') ?>">
                                <option>Pilih</option>
                                <?php foreach ($jenisResponden as $r) : ?>
                                    <option value="<?= $r['responden']; ?>"><?= $r['responden']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                < ?=session('errors.role') ?>
                            </div>

                            <input type="hidden" name="role" id="respondenTxt" />

                        </div>

                        <!-- password -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                <input type="password" name="pass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= session('errors.pass_confirm') ?>
                                </div>
                            </div>
                            <div class="auth-wrapper-left col-12 mt-5">
                                <div class="d-grid gap-2 ">
                                    <button type="submit" class="btn btn-cosmic btn-user btn-block">
                                        <?= lang('Auth.register') ?>
                                    </button>
                                </div>
                                <hr>
                                <div class="text-center pb-3">
                                    <p class="text-muted small">
                                        Sudah punya akun? <a href="<?= url_to('login') ?>">
                                            <?= lang('Auth.signIn') ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                </section>
            </form>
        <?php endif; ?>
        </div>
    </div>

</section>

<script type="text/javascript">
    function getText() {
        var select = document.getElementById('responden');
        var option = select.options[select.selectedIndex];

        document.getElementById('respondenTxt').value = option.text;
    }

    getText();
</script>
<?= $this->endSection('auth-content'); ?>