<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>

<section class="auth-page d-flex justify-content-center align-items-center">
    <div class="auth-wrapper">
        <div class="auth-card row">
            <div class="auth-wrapper-left align-middle col-md-8">
                <div class="container m-3 pt-3">
                    <h3 class="">Cek Akun</h3>
                    <h6 class="text-muted"> untuk mulai isi survei instrumen kepuasan</h6>
                </div>
                <div class="card-body m-3">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('checkAkun') ?>" method="post" class="user">
                        <?= csrf_field() ?>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-user rounded-pill " name="nim" placeholder="NIM / NIDN">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cosmic btn-user btn-block rounded-pill ">Cek Akun</button>
                        </div>
                        <?php foreach ($userCheck as $us) : ?>
                            <?= $us['namaLengkap']; ?>
                            <?= $us['nim']; ?> - <?= $us['nidn']; ?> <br>
                        <?php endforeach; ?>
                        <hr>
                        <div class="text-center">
                            <p class="text-muted small">
                                Tidak punya nim/nidn? <a href="#"> Hubungi Admin
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="auth-wrapper-right align-middle col-md-4 mx-auto">
                <img src="<?= base_url(); ?>/img/ex-jumbotron-img.png" alt="" class="img-fluid auth-header-img">
            </div>
        </div>

    </div>
</section>


<?= $this->endSection('auth-content'); ?>