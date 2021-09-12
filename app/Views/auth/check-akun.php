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

                    <!-- flash gagal tambah data  -->
                    <?php if (session()->getFlashdata('messageError')) :  ?>
                        <div class="alert alert-danger d-flex align-items-center fw-bold" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </symbol>
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <div>
                                <?= session()->getFlashData('messageError'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- ./ flash gagal tambah data  -->

                    <form action="<?= url_to('checkAkun') ?>" method="post" class="user">
                        <?= csrf_field() ?>

                        <div class="form-floating mb-3 pl-2">
                            <input type="text" class="form-control " name="nim" id="nim" placeholder="NIM / NIDN">
                            <label for="nim">NIM / NIDN</label>

                            <input type="hidden" class="form-control " name="nidn" id="nidn">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-cosmic btn-user btn-block rounded-pill ">Cek Akun</button>
                        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- get nidn value from nim value -->
<script type="text/javascript">
    $(document).ready(function() {
        $("button").click(function() {
            var select = document.getElementById("nim").value
            $("#nidn").val(document.getElementById("nim").value);
        });
    });
</script>

<?= $this->endSection('auth-content'); ?>