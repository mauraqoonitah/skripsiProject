<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="text-center">
                                    <h3 class="card-header py-3">Register</h3>
                                </div>
                                <div class="card-body p-5">

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form action="<?= route_to('register') ?>" method="post" class="user">
                                        <?= csrf_field() ?>

                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" name="email">
                                        </div>

                                        <div class="form-group mb-3">

                                            <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                        </div>


                                        <div class="form-group row mb-3">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" name="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-secondary btn-user btn-block">
                                                <?= lang('Auth.register') ?>
                                            </button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p class="text-muted small">
                                            <?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection('auth-content'); ?>