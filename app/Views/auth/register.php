<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('auth-content'); ?>


<section>
    <div class="auth-page d-flex justify-content-center align-items-center">
        <div class="<?= (isset($_SESSION['nim'])) ? 'auth-wrapper-lg' : ' auth-wrapper-sm '; ?>">
            <div class="auth-card row my-5 auth-wrapper-left">
                <div class="auth-wrapper-left col-12">
                    <div class="card-header py-3 px-4 container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-center mb-2">
                                    <img src=" <?= base_url(); ?>/img/unj.png" alt="unj" class="" style="width; 48px; height: 48px">
                                </div>
                                <h3 class="text-center">Registrasi</h3>
                                <p class="text-muted text-center fs-6 fw-bold"> Daftar akun untuk mulai akses survei instrumen kepuasan</p>
                            </div>
                        </div>
                        <!-- flash success tambah data  -->
                        <?php if (session()->getFlashdata('message')) :  ?>
                            <div class="alert alert-success d-flex align-items-center fw-bold mt-2" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </symbol>
                                    <use xlink:href="#check-circle-fill" />
                                </svg>
                                <div>
                                    <?= session()->getFlashData('message'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- ./ flash gagal tambah data  -->
                    </div>
                </div>
                <div class="auth-wrapper-left align-middle <?= (isset($_SESSION['nim'])) ? 'col-lg-6' : ' mx-auto col-lg-12 '; ?>">
                    <div class=" card-body m-3">
                        <form action="<?= url_to('register') ?>" method="post" class="user">
                            <?= csrf_field() ?>

                            <?php if (isset($_SESSION['nim'])) :  ?>
                                <?php foreach ($userCheckByInput as $user) :  ?>
                                    <div class="form-group mb-3">
                                        <!-- email -->
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class=" form-control form-control-user " value="<?= $user['email']; ?>" name="email" readonly>
                                    </div>

                                    <div class="form-group mb-3">
                                        <!-- fullname -->
                                        <label for="fullname" class="form-label">Nama Lengkap</label>
                                        <input type="text" class=" form-control form-control-user" name="fullname" value="<?= $user['namaLengkap']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <!-- fullname -->
                                        <label for="nidn" class="form-label">Nama Lengkap</label>
                                        <input type="text" class=" form-control form-control-user" name="nidn" value="<?= $user['nidn']; ?>" readonly>
                                    </div>

                                    <div class="form-group mb-3">
                                        <!-- jenis responden siakad akun -->
                                        <label for="responden" class="form-label">Status</label>
                                        <input type="text" class=" form-control form-control-user <?php if (session('errors.role')) : ?>is-invalid<?php endif ?>" name="role" id="responden" value="<?= $user['role']; ?>" readonly>
                                    </div>


                                    <div class="form-group mb-3">
                                        <!-- nim -->
                                        <label for="nim" class="form-label">NIM / NIDN</label>
                                        <input type="text" class=" form-control form-control-user" name="nim" value="<?= $user['nim']; ?>" readonly>
                                    </div>

                                    <div class="form-group mb-3">
                                        <!-- fakultas -->
                                        <label for="programStudi" class="form-label">Fakultas</label>
                                        <input type="text" class=" form-control form-control-user" name="fakultas" id="fakultas" value="<?= $user['fakultas']; ?>" readonly>
                                    </div>

                                    <div class="form-group mb-3">
                                        <!-- program studi -->
                                        <label for="programStudi" class="form-label">Program Studi</label>
                                        <input type="text" class=" form-control form-control-user" name="programStudi" id="programStudi" value="<?= $user['programStudi']; ?>" readonly>
                                    </div>
                    </div>
                    <!-- ./card-body -->
                </div>
                <div class="auth-wrapper-right col-lg-6">
                    <div class="card-body m-3">
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <!-- flash success tambah data  -->
                        <?php if (session()->getFlashdata('message')) :  ?>
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <div>
                                    Silakan buat username dan password untuk masuk ke aplikasi instrumen kepuasan
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- ./ flash gagal tambah data  -->

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
                                <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="pass_confirm" class=" form-label">Repeat Password</label>
                                <input type="password" name="pass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= session('errors.pass_confirm') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="auth-wrapper-right col-12">
                        <div class="container d-grid gap-2 ">
                            <button type="submit" class="btn btn-cosmic btn-user btn-block">
                                <?= lang('Auth.register') ?>
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        <?php else : ?>
            <!--  -------------- section untuk responden non siakad ----------------- -->
            <section>
                <?= view('Myth\Auth\Views\_message_block') ?>
                <div class="form-group mb-3">
                    <!-- email -->
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class=" form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email">
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <!-- fullname -->
                    <label for="fullname" class="form-label">Nama Lengkap</label>
                    <input type="text" class=" form-control form-control-user <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname">
                    <div class="invalid-feedback">
                        <?= session('errors.fullname') ?>
                    </div>
                </div>
                <!-- username -->
                <div class="form-group mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class=" form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.username') ?>
                    </div>
                </div>

                <!-- jenis responden untuk non siakad -->
                <div class="form-group mb-3">
                    <label for="responden" class="form-label">Sebagai</label>
                    <select class="form-select <?php if (session('errors.role')) : ?>is-invalid<?php endif ?>" name="role" id="responden" onChange="getText()">
                        <option>Pilih</option>
                        <?php foreach ($jenisResponden as $r) : ?>
                            <option value="<?= $r['responden']; ?>"><?= $r['responden']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        < ?=session('errors.role') ?>
                    </div>

                    <input type="hidden" name="role" id="respondenTxt" />

                </div>

                <!-- password -->
                <div class="form-group row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="pass_confirm" class=" form-label">Repeat Password</label>
                        <input type="password" name="pass_confirm" class="form-control form-control-user  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                        <div class="invalid-feedback">
                            <?= session('errors.pass_confirm') ?>
                        </div>
                    </div>
                    <div class="auth-wrapper-left col-12 mt-5">
                        <div class="d-grid gap-2 ">
                            <button type="submit" class="btn btn-cosmic btn-user btn-block">
                                <?= lang('Auth.register') ?>
                            </button>
                        </div>
                        <hr>
                        <div class="text-center pb-3">
                            <p class="text-muted small">
                                Sudah punya akun? <a href="<?= url_to('login') ?>">
                                    <?= lang('Auth.signIn') ?>
                                </a>
                            </p>
                        </div>
                    </div>
            </section>
        <?php endif; ?>
        </div>
    </div>
    </form>
    <span class="text-muted">on progress: pengecekan kondisi kalau ternyata user sudah pernah buat akun(sdh ada di database), langsung redirectnya ke page login, bukan page ini</span>

</section>

<script type="text/javascript">
    function getText() {
        var select = document.getElementById('responden');
        var option = select.options[select.selectedIndex];

        document.getElementById('respondenTxt').value = option.text;
    }

    getText();
</script>
<?= $this->endSection('auth-content'); ?>