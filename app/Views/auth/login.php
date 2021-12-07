<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>
<section class="auth-page d-flex justify-content-center align-items-center">
    <div class="auth-wrapper">
        <div class="auth-card row">
            <div class="auth-wrapper-left align-middle col-md-8">
                <div class="container pt-3 mt-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <img src=" <?= base_url(); ?>/img/unj.png" alt="unj" class="img-fluid">
                            </div>
                            <div class="col-10">
                                <h3 class="">Masuk</h3>
                                <span class="text-muted text-center fs-6 fw-bold"> untuk mulai akses survei instrumen kepuasan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body m-3">
                    <?= view('Myth\Auth\Views\_message_block') ?>


                    <form action="<?= url_to('login') ?>" method="post" class="user">
                        <?= csrf_field() ?>

                        <!-- username -->
                        <div class="form-floating mb-3 pl-2">
                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Username/Email">
                            <label for="login" class="text-muted">Username/Email</label>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                        <!-- password -->
                        <div class="form-floating mb-3 pl-2">
                            <input type="password" name="password" id="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">

                            <span style="color: #7a797e;position: absolute; right: 12px;transform: translate(0,-55%);top: 55%;cursor: pointer; ">
                                <i class="far fa-eye " id="eye" onclick="togglepasswordLogin()"></i>
                            </span>

                            <label for="password" class="text-muted">Password</label>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cosmic btn-user btn-block "><?= lang('Auth.loginAction') ?></button>
                        </div>
                    </form>
                    <hr>
                    <?php if ($config->activeResetter) : ?>
                        <p class="small text-center">
                            <a href="<?= url_to('forgot') ?>"><u><?= lang('Auth.forgotYourPassword') ?></u>
                            </a>
                        </p>
                    <?php endif; ?>

                </div>
            </div>
            <div class="auth-wrapper-right col-md-4 pt-5">
                <img src="<?= base_url(); ?>/img/ex-jumbotron-img.png" alt="" class="img-fluid auth-header-img">
                <div class="container mt-3">
                    <div class="row">
                        <div class="text-center">
                            <?php if ($config->allowRegistration) : ?>
                                <p class="text-muted small">
                                    Belum punya akun? <a href="<?= url_to('register') ?>"><br><u>Daftar Disini</u>
                                    </a>
                                </p>
                            <?php endif; ?>

                            <p class="text-muted small">
                                Dosen/Mahasiswa UNJ? <a href="<?= url_to('checkAkun') ?>">
                                    <br><u>Daftar Disini</u>
                                </a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    var state = false;

    function togglepasswordLogin() {
        if (state) {
            document.getElementById("password").setAttribute("type", "password");
            document.getElementById("eye").style.color = '#7a797e';
            state = false;
        } else {
            document.getElementById("password").setAttribute("type", "text");
            document.getElementById("eye").style.color = '#5887ef';
            state = true;
        }
    }
</script>
<?= $this->endSection() ?>