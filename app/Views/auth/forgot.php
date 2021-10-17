<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>
<section class="auth-page d-flex justify-content-center align-items-center">
    <div class="auth-wrapper">
        <div class="auth-card row">
            <div class="auth-wrapper-left align-middle">
                <div class="container pt-3 my-3">
                    <div class="row col-lg-8 mx-auto">
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <img src=" <?= base_url(); ?>/img/unj.png" alt="unj" class="img-fluid">
                        </div>
                        <div class="col-10">
                            <h3 class=""><?= lang('Auth.forgotPassword') ?></h3>
                        </div>


                        <div class="card-body">

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <p><?= lang('Auth.enterEmailForInstructions') ?></p>

                            <form action="<?= route_to('forgot') ?>" method="post">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <label for="email"><?= lang('Auth.emailAddress') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <br>

                                <button type="submit" class="btn btn-cosmic btn-user btn-block "><?= lang('Auth.sendInstructions') ?></button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>