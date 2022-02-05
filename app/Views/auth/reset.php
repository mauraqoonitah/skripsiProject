<?php if (logged_in()) : ?>
    <?php if ((user()->role == 'Kontributor') || (user()->role == 'Admin')) : ?>
        <?= $this->extend('admin/templates/index'); ?>
        <?= $this->section('admin-body-content'); ?>
    <?php else : ?>
        <?= $this->extend('responden/templates/index'); ?>
        <?= $this->section('responden-body-content'); ?>
    <?php endif; ?>
<?php else : ?>
    <?= $this->extend('auth/templates/index'); ?>
    <?= $this->section('auth-content'); ?>
<?php endif; ?>

<?php if (!empty(user()->role) && ((user()->role == 'Kontributor') || (user()->role == 'Admin'))) : ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header p-4">
            <div class="container-fluid">
                <div class="auth-wrapper-left align-middle">
                    <div class="container">
                        <!-- flash warning isi data diri  -->
                        <div class="row col-lg-8">
                            <h3 class=""><?= lang('Auth.resetYourPassword') ?></h3>
                            <div class="card-body">

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <p><?= lang('Auth.enterCodeEmailPassword') ?></p>

                                <form action="<?= route_to('reset-password') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <div class="form-group mb-3">
                                        <label for="token"><?= lang('Auth.token') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.token') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email"><?= lang('Auth.email') ?></label>
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" <?= logged_in() ? 'value="' . user()->email . '"' : ''; ?>>
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.newPassword') ?></label>
                                        <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
                                        <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm">
                                        <div class="invalid-feedback">
                                            <?= session('errors.pass_confirm') ?>
                                        </div>
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-cosmic btn-user btn-block "><?= lang('Auth.resetPassword') ?></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php else : ?>
    <section class="auth-page d-flex justify-content-center align-items-center">
        <div class="auth-wrapper">
            <div class="auth-card row">
                <div class="auth-wrapper-left align-middle">
                    <div class="container pt-3 my-3">
                        <div class="row">
                            <h3 class=""><?= lang('Auth.resetYourPassword') ?></h3>
                            <div class="card-body">

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <p><?= lang('Auth.enterCodeEmailPassword') ?></p>

                                <form action="<?= route_to('reset-password') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <div class="form-group mb-3">
                                        <label for="token"><?= lang('Auth.token') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.token') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email"><?= lang('Auth.email') ?></label>
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.newPassword') ?></label>
                                        <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
                                        <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm">
                                        <div class="invalid-feedback">
                                            <?= session('errors.pass_confirm') ?>
                                        </div>
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-cosmic btn-user btn-block "><?= lang('Auth.resetPassword') ?></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?= $this->endSection(); ?>