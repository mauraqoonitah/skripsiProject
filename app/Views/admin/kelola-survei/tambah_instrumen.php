<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>

            </div>
        </div><!-- /.container-fluid -->
        <!-- previous page -->
        <a href="<?= base_url(); ?>/instrumen/kelolaInstrumen">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>

        <!-- flash success tambah data  -->
        <?php if (session()->getFlashdata('msgInstrumen')) :  ?>
            <div class="alert alert-success d-flex align-items-center fw-bold mb-3" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    <?= session()->getFlashData('msgInstrumen'); ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- ./ flash success tambah data  -->



    </section>

    <!-- Main content -->
    <section class="content col-lg-10 mx-auto">
        <div class="container-fluid">

            <div class="content col-lg-12 mx-auto">
                <div class=" container-fluid">
                    <strong>Pilih Kode Kategori</strong><br>
                    <button class="tablink" onclick="openPage('defaultTab')" id="defaultOpen">Default Tab Open</button>

                    <?php foreach ($category as $ctg) : ?>
                        <button class="tablink mb-2" onclick="openPage('category-<?= $ctg['id']; ?>')"><?= $ctg['namaCategory']; ?></button> <br>
                    <?php endforeach; ?>

                    <div id="defaultTab" class="tabcontent">
                    </div>
                </div>
            </div>
            <?php foreach ($category as $ctg) : ?>

                <div id="category-<?= $ctg['id']; ?>" class="tabcontent">
                    <div class="card-body mx-auto col-lg-12 align-middle">
                        <div class="container">
                            <strong>Pilih Kode Kategori</strong><br>
                            <div class="input-group mb-3">
                                <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                    <option value="<?= $ctg['namaCategory']; ?> oleh <?= $ctg['peruntukkanCategory']; ?> "><?= $ctg['namaCategory']; ?> oleh <?= $ctg['peruntukkanCategory']; ?> </option>
                                </select>


                                <small>di option ini harusnya muncul pilihan nama instrumen yang berasal dari nama kategori + oleh + peruntukanmnya tapii peruntukannya baru ke return 1 row karena emg belum nemu caranya biar return semua row yg termasuk dalam kategori tsb.<br><br> terus ini nanti ini bakal disimpen datanya buat dimasukin ke input nama iinstrumen</small>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


            <div class="card mt-2">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="">Tambah Instrumen</h5>
                </div>
                <div class="card-body py-4">
                    <!-- form tambah instrumen -->
                    <form action="<?= base_url(); ?>/admin/saveInstrumen" method="post">
                        <?= csrf_field(); ?>
                        <!-- pilih kode kategori -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="kode-kategori" class="col-sm-2 col-form-label">Pilih Kategori:</label>
                                <div class="col-sm-10">
                                    <select class="form-select <?= ($validation->hasError('kodeCategory')) ? 'is-invalid' : ''; ?>" id="kodeCategory" name="kodeCategory">
                                        <?php foreach ($category as $ctg) :  ?>
                                            <option value="<?= $ctg['namaCategory']; ?> oleh <?= $ctg['peruntukkanCategory']; ?> "><?= $ctg['namaCategory']; ?> oleh <?= $ctg['peruntukkanCategory']; ?> </option>

                                        <?php endforeach; ?>
                                    </select>
                                    <div class=" invalid-feedback">
                                        <?= $validation->getError('namaCategory'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- nama instrumen -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="namaInstrumen" class="col-sm-2 col-form-label">Nama instrumen:</label>

                                <div class="col-sm-10">
                                    <select class="form-select <?= ($validation->hasError('namaInstrumen')) ? 'is-invalid' : ''; ?>" id="namaInstrumen" name="namaInstrumen">
                                        <?php foreach ($category as $ctg) :  ?>
                                            <div id="category-<?= $ctg['id']; ?>" class="tabcontent">
                                                <option value="<?= $ctg['namaCategory']; ?> oleh <?= $ctg['peruntukkanCategory']; ?> "><?= $ctg['namaCategory']; ?> oleh <?= $ctg['peruntukkanCategory']; ?> </option>

                                            </div>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class=" invalid-feedback">
                                        <?= $validation->getError('namaInstrumen'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- kode instrumen -->
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="kode-instrumen" class="col-sm-2 col-form-label">Kode instrumen:</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('kodeInstrumen')) ? 'is-invalid' : ''; ?>" id="kodeInstrumen" name="kodeInstrumen" placeholder="C.4.2">
                                    <div class=" invalid-feedback">
                                        <?= $validation->getError('kodeInstrumen'); ?>
                                    </div>
                                </div>
                                <small>ini nanti auto tulis 2 huruf depan dari kode nya misal kalo dia pilih kode kategori 3, berarti masukin 1 angka depan hrs default dan pakein titik. --> 3. (isi) gitu</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center ">
                            <button type="submit" class="btn btn-success ml-auto mt-3">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>

                    </form>
                    <!-- end form tambah instrumen -->



                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<script>
    function openPage(pageName) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<?= $this->endSection(); ?>