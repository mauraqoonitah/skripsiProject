<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>

<section class="auth-page d-flex justify-content-center align-items-center">
    <div class="auth-wrapper">
        <div class="auth-card row">
            <div class="auth-wrapper-left align-middle col-md-8">
                <div class="container m-3 pt-3">
                    <h3 class="">Registrasi</h3>
                    <h6 class="text-muted"> Daftar untuk mulai isi survei instrumen kepuasan</h6>
                </div>
                <div class="card-body m-3">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post" class="user">
                        <?= csrf_field() ?>
                        <div class="form-group mb-3">
                            <!-- email -->
                            <input type="email" class="rounded-pill form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" name="email">
                        </div>

                        <div class="form-group mb-3">
                            <!-- fullname -->
                            <input type="text" class="rounded-pill form-control form-control-user <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" placeholder="Nama Lengkap" value="<?= old('fullname') ?>">
                        </div>
                        <div class="form-group mb-3">
                            <!-- username -->
                            <input type="text" class="rounded-pill form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group mb-3">
                            <!-- jenis responden -->
                            <select class="form-select rounded-pill" aria-label="Default select example">
                                <option selected>Responden</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <!-- password -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user rounded-pill <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="password" name="pass_confirm" class="form-control form-control-user rounded-pill <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cosmic btn-user rounded-pill btn-block">
                                <?= lang('Auth.register') ?>
                            </button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="text-muted small">
                            <?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="auth-wrapper-right align-middle col-md-4 mx-auto">
                <img src="<?= base_url(); ?>/img/ex-jumbotron-img.png" alt="" class="img-fluid auth-header-img">
            </div>
        </div>

    </div>
</section>

<section class="auth-page d-flex justify-content-center align-items-center">
    <div class="auth-wrapper">
        <div class="auth-card row">
            <div class="auth-wrapper-left align-middle col-md-8">
                <div class="container m-3 pt-3">
                    <h3 class="">Registrasi</h3>
                    <span class="text-muted"> Daftar untuk mulai isi survei instrumen kepuasan</span>
                </div>
                <div class="card-body m-3">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post" class="user">
                        <?= csrf_field() ?>

                        <div class="form-group mb-3">
                            <!-- email -->
                            <input type="email" class="rounded-pill form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" name="email">
                        </div>

                        <div class="form-group mb-3">
                            <!-- fullname -->
                            <input type="text" class="rounded-pill form-control form-control-user <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" placeholder="Nama Lengkap" value="<?= old('fullname') ?>">
                        </div>
                        <div class="form-group mb-3">
                            <!-- username -->
                            <input type="text" class="rounded-pill form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group mb-3">
                            <!-- jenis responden -->
                            <select class="form-select rounded-pill" aria-label="Default select example">
                                <option selected>Responden</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <!-- password -->
                        <div class="form-group row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user rounded-pill <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <input type="password" name="pass_confirm" class="form-control form-control-user rounded-pill <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cosmic btn-user rounded-pill btn-block">
                                <?= lang('Auth.register') ?>
                            </button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="text-muted small">
                            <?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="auth-wrapper-right align-middle col-md-4 mx-auto">
                <img src="<?= base_url(); ?>/img/ex-jumbotron-img.png" alt="" class="img-fluid auth-header-img">
            </div>
        </div>

    </div>
</section>

<?= $this->endSection('auth-content'); ?>