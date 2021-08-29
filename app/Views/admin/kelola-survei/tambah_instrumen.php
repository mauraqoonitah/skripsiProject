<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Tambah Instrumen</h1>
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
            <div class="card mt-2">
                <div class="card-header d-flex align-items-center py-4">
                    <h5 class="">Tambah Instrumen</h5>
                </div>

                <!-- pilih kategori untuk membuat instrumen -->
                <div class="card">
                    <div class="alert alert-info text-center fw-bold" role="alert">
                        <strong> Pilih Kategori untuk membuat Instrumennya </strong>
                    </div>

                    <div class="card-body mx-auto col-lg-12 align-middle">
                        <div class="container">
                            <div class="input-group mb-3">
                                <div class="content col-lg-12 mx-auto">
                                    <div class=" container-fluid">
                                        <strong>Pilih Kode Kategori</strong><br>
                                        <!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> -->
                                        <button class="tablink" onclick="openPage('defaultTab')" id="defaultOpen">Default Tab Open</button>

                                        <?php foreach ($category as $ctg) : ?>
                                            <a href="#form">
                                                <button type="button" class="btn btn-primary tablink mb-2" onclick="openPage('category-<?= $ctg['id']; ?>')"><?= $ctg['namaCategory']; ?></button> <br></a>
                                        <?php endforeach; ?>

                                        <div id="defaultTab" class="tabcontent">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </div>
                </div>
                <!-- ./pilih kategori untuk membuat instrumen -->



                <div class="card-body py-4">
                    <div class="container">

                        <!-- form tambah instrumen -->
                        <form action="<?= base_url(); ?>/admin/saveInstrumen" method="post" id="form">
                            <?= csrf_field(); ?>


                            <?php foreach ($category as $ctg) : ?>
                                <div id="category-<?= $ctg['id']; ?>" class="tabcontent">

                                    <!-- PILIH kode kategori -->
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="kode-kategori" class="col-sm-2 col-form-label">Kategori:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="<?= $ctg['kodeCategory']; ?>" disabled>

                                                <small class="text-muted"><?= $ctg['namaCategory']; ?></small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./ PILIH kode kategori -->

                                    <!-- PILIH nama instrumen -->
                                    <div class="form-group">
                                        <div class="mb-3 row">
                                            <label for="namaInstrumen" class="col-sm-2 col-form-label">Nama instrumen:</label>
                                            <div class="col-sm-10">

                                                <div class="input-group mb-3">
                                                    <select class="form-select form-select-lg" name="namaInstrumen" aria-label=".form-select-lg example">
                                                        <?php
                                                        $db = db_connect();
                                                        $slug = $ctg['slug'];

                                                        $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";

                                                        $peruntukkan =  $db->query($sql, [$slug]);
                                                        foreach ($peruntukkan->getResultArray() as $row) : ?>

                                                            <option value="<?= $ctg['namaCategory']; ?> oleh <strong><?= $row['peruntukkanCategory']; ?>"><?= $ctg['namaCategory']; ?> oleh <strong><?= $row['peruntukkanCategory']; ?></strong> </option>
                                                        <?php endforeach; ?>

                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./PILIH nama instrumen -->



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
                                            <small>INI kalo is-invalid, dia tabnya gamau kebuka, mending diganti aja jadi yang tabcontent nya itu digimanain gitu, ini nanti auto tulis 2 huruf depan dari kode nya misal kalo dia pilih kode kategori 3, berarti masukin 1 angka depan hrs default dan pakein titik. --> 3. (isi) gitu</small>
                                        </div>
                                    </div>
                                    <!-- ./kode instrumen -->

                                </div>
                            <?php endforeach; ?>


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
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="nav-icon far fa-check-circle mr-2 text-success"> </i>

            <strong class="me-auto"> Success</strong>
            <small class="text-muted">a second ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Silakan Isi Form Data Instrumen.
        </div>
    </div>

</div> -->

<!-- <script>
    document.getElementById("liveToastBtn").onclick = function() {

        var myAlert = document.getElementById('liveToast'); //select id of toast

        var bsAlert = new bootstrap.Toast(myAlert); //inizialize it
        bsAlert.show(); //show it
    }
</script> -->
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