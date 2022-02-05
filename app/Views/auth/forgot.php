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
                            <?php if (logged_in()) : ?>
                                <div class="alert alert-warning d-flex align-items-center fw-bold" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </symbol>
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        Harap segera ganti password Anda untuk keamanan data
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- ./ flash warning isi data diri  -->
                            <?php if (!logged_in()) : ?>
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <img src=" <?= base_url(); ?>/img/unj.png" alt="unj" class="img-fluid">
                                </div>
                            <?php endif; ?>
                            <div class="col-10">
                                <h3 class=""> <?= logged_in() ? 'Ganti Password' : lang('Auth.forgotPassword'); ?> </h3>
                            </div>
                            <div class="card-body">
                                <p> <?= logged_in() ? lang('Auth.enterEmailForChangePassword') : lang('Auth.enterEmailForInstructions'); ?></p>
                                <form action="<?= route_to('forgot') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" <?= logged_in() ? 'value="' . user()->email . '"' : ''; ?>>
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-cosmic btn-user btn-block "><?= lang('Auth.sendInstructions') ?></button>

                                    <?php if (logged_in()) : ?>
                                        <p class="text-center mt-2 small text-primary">
                                            <a href="<?= base_url(); ?>/admin"><u>Nanti Saja</u>
                                            </a>
                                        </p>
                                    <?php endif; ?>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
<?php else : ?>
    <section class="auth-page <?= logged_in() ? 'pt-5' : 'd-flex justify-content-center'; ?> align-items-center">
        <div class="auth-wrapper">
            <div class="auth-card row">
                <div class="auth-wrapper-left align-middle">
                    <div class="container pt-3 my-3">
                        <!-- flash warning isi data diri  -->
                        <?php if (logged_in()) : ?>
                            <div class="alert alert-warning d-flex align-items-center fw-bold" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div>
                                    Harap segera ganti password Anda untuk keamanan data
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- ./ flash warning isi data diri  -->
                        <div class="row col-lg-8 mx-auto">
                            <?php if (!logged_in()) : ?>
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <img src=" <?= base_url(); ?>/img/unj.png" alt="unj" class="img-fluid">
                                </div>
                            <?php endif; ?>
                            <div class="col-10">
                                <h3 class=""> <?= logged_in() ? 'Ganti Password' : lang('Auth.forgotPassword'); ?> </h3>
                            </div>
                            <div class="card-body">
                                <p> <?= logged_in() ? lang('Auth.enterEmailForChangePassword') : lang('Auth.enterEmailForInstructions'); ?></p>
                                <form action="<?= route_to('forgot') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    <div class="form-group">
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" <?= logged_in() ? 'value="' . user()->email . '"' : ''; ?>>
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>

                                    <br>


                                    <button type="submit" class="btn btn-cosmic btn-user btn-block "><?= lang('Auth.sendInstructions') ?></button>

                                    <?php if (logged_in()) : ?>
                                        <p class="text-center mt-2 small text-primary">
                                            <a href="<?= base_url(); ?>/responden"><u>Nanti Saja</u>
                                            </a>
                                        </p>
                                    <?php endif; ?>
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