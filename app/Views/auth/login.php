<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>
<section class="auth-page d-flex justify-content-center align-items-center">
    <div class="auth-wrapper">
        <div class="auth-card row">
            <div class="auth-wrapper-left align-middle col-md-8">
                <div class="container m-3 pt-3">
                    <h3 class="">Masuk</h3>
                    <span class="text-muted"> untuk mulai isi survei instrumen kepuasan</span>
                </div>
                <div class="card-body m-3">
                    <?= view('Myth\Auth\Views\_message_block') ?>


                    <form action="<?= url_to('login') ?>" method="post" class="user">
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control form-control-user rounded-pill <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-control-user rounded-pill <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" value="">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group mb-3">
                            <input type="password" name="password" class="form-control form-control-user rounded-pill <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <?php if ($config->allowRemembering) : ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input rounded-pill" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <?= lang('Auth.rememberMe') ?>
                                </label>
                            </div>
                        <?php endif; ?>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cosmic btn-user btn-block rounded-pill "><?= lang('Auth.loginAction') ?></button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <?php if ($config->allowRegistration) : ?>
                            <p class="text-muted small">
                                <?= lang('Auth.needAnAccount') ?> <a href="<?= url_to('register') ?>"><?= lang('Auth.register') ?>
                                </a>
                            </p>
                        <?php endif; ?>
                        <?php if ($config->activeResetter) : ?>
                            <p>
                                <a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="auth-wrapper-right col-md-4 ">
                <img src="<?= base_url(); ?>/img/ex-jumbotron-img.png" alt="" class="img-fluid auth-header-img">
            </div>
        </div>

    </div>
</section>
<?= $this->endSection() ?>