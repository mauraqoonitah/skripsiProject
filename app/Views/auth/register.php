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
                        <p class="text-muted  text-center small">
                            Dosen/Mahasiswa UNJ? <a href="<?= url_to('checkAkun') ?>">
                                <u>Daftar Disini</u>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="auth-wrapper-right">
                    <div class="container">
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

                                <input type="hidden" name="regData" value="<?= $_SESSION['nim']; ?>">
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
                                                <input type="password" name="password" id="inputPassword" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                                <input type="checkbox" onclick="showPassword()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>
                                                <div class="invalid-feedback">
                                                    <?= session('errors.password') ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                                <input type="password" name="pass_confirm" id="inputPasswordConfirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                                <input type="checkbox" onclick="showPasswordConfirm()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>
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
                                <?php
                                $nim = $_SESSION['nim'];
                                $nidn = $_SESSION['nidn'];
                                $db = db_connect();
                                $userCheckModel = model('UserCheckModel');
                                $this->userCheckModel = new $userCheckModel;
                                $sql =  $this->userCheckModel->getUserCheckByInput($nidn);
                                ?>
                                <?php foreach ($sql as $row) : ?>
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
                                <?php
                                unset(
                                    $_SESSION['nim'],
                                    $_SESSION['nidn']
                                ); ?>
                        </form>
                    </div>
                </div>

            <?php else :  ?>
                <?php if (!isset($_SESSION['nim'])) :  ?>
                    <?php
                                    unset(
                                        $_SESSION['nim'],
                                        $_SESSION['nidn']
                                    ); ?>

                    <form action="<?= url_to('register') ?>" method="post" class="user" accept-charset="utf-8">
                        <?= csrf_field() ?>
                        <!--  -------------- section untuk responden non siakad ----------------- -->
                        <section>
                            <div class="container">


                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <div class="form-group my-3">
                                    <!-- email -->
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class=" form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" value="<?= old('email') ?>" required>
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <!-- fullname -->
                                    <label for="fullname" class="form-label">Nama Lengkap</label>
                                    <input type="text" class=" form-control form-control-user " name="fullname" value="<?= old('fullname') ?>" required>
                                </div>

                                <!-- username -->
                                <div class="form-group mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>" required>
                                    <div class="invalid-feedback">
                                        <?= session('errors.username') ?>
                                    </div>
                                </div>

                                <!-- jenis responden untuk non siakad -->
                                <div class="form-group mb-3">
                                    <label for="responden" class="form-label">Sebagai</label>
                                    <select class="form-select option-role <?php if (session('errors.role')) : ?>is-invalid<?php endif ?>" name="role" id="responden" onChange="getText()" value="<?= old('role') ?>" required>
                                        <option selected disabled>Pilih...</option>
                                        <?php foreach ($jenisResponden as $r) : ?>
                                            <?php if ($r['responden'] === 'Dosen') : ?>
                                            <?php endif; ?>
                                            <option value="<?= $r['responden']; ?>"><?= $r['responden']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= session('errors.role') ?>
                                    </div>


                                    <input type="hidden" name="role" id="respondenTxt" />

                                </div>

                                <!-- password -->
                                <div class="form-group row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="inputPassword" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required>
                                        <input type="checkbox" onclick="showPassword()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                        <input type="password" name="pass_confirm" id="inputPasswordConfirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" required>
                                        <input type="checkbox" onclick="showPasswordConfirm()" class="mt-2 ml-2"><small class="ml-2 mt-2 text-muted">Show Password</small>
                                        <div class="invalid-feedback">
                                            <?= session('errors.pass_confirm') ?>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <div class="d-grid gap-2 ">
                                            <button type="submit" class="btn btn-cosmic btn-user btn-block">
                                                <?= lang('Auth.register') ?>
                                            </button>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <p class="text-muted small pb-3">
                                                Sudah punya akun? <a href="<?= url_to('login') ?>">
                                                    <u> <?= lang('Auth.signIn') ?> Disini</u>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </form>
                <?php endif; ?>
            <?php endif; ?>

            </div>
        </div>

</section>
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script type="text/javascript">
    $('.option-role').on('click', function() {
        $("option[value='dosen']").remove();
        $("option[value='Dosen']").remove();
        $("option[value='Mahasiswa']").remove();
        $("option[value='mahasiswa']").remove();
    });
</script>

<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("mySelect");
        x.remove(x.selectedIndex);
    }
</script>
<script type="text/javascript">
    function getText() {
        var select = document.getElementById('responden');
        var option = select.options[select.selectedIndex];

        document.getElementById('respondenTxt').value = option.text;
    }

    getText();
</script>

<script>
    function showPassword() {
        var x = document.getElementById("inputPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function showPasswordConfirm() {
        var x = document.getElementById("inputPasswordConfirm");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?= $this->endSection('auth-content'); ?>