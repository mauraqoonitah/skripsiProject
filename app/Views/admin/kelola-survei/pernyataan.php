<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Butir Pernyataan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <a href="<?= base_url(); ?>/admin/tambahPernyataan" class="ml-auto mr-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Pernyataan">
        <button type="button" class="btn btn-warning ">
            <i class="fas fa-plus"></i> Tambah
        </button>
    </a>

    <div class="content col-lg-12 mx-auto">
        <div class=" container-fluid">
            <strong>Pilih Kode Kategori</strong><br>
            <button class="tablink" onclick="openPage('defaultTab')" id="defaultOpen">Default Tab Open</button>

            <?php foreach ($pernyataan as $butir) : ?>
                <button class="tablink" onclick="openPage('Kode-<?= $butir['id']; ?>')"><?= $butir['kodeCategory']; ?></button>
            <?php endforeach; ?>

            <div id="defaultTab" class="tabcontent">
            </div>
        </div>
    </div>

    <?php foreach ($pernyataan as $butir) : ?>
        <div id="Kode-<?= $butir['id']; ?>" class="tabcontent">

            <section class="content col-lg-8 mx-auto d-flex align-items-center" style=" min-height: 30vh">
                <div class=" container-fluid">
                    <p><?= $butir['namaInstrumen']; ?></p>
                    <div class="card">
                        <div class="alert alert-info text-center fw-bold" role="alert">
                            <strong> Pilih instrumen untuk melihat butir pernyataan </strong>
                        </div>

                        <div class="card-body mx-auto col-lg-12 align-middle">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                        <option value="<?= $butir['namaInstrumen']; ?>"><?= $butir['namaInstrumen']; ?></option>
                                    </select>
                                    <span class="input-group-append">
                                        <a href="<?= base_url(); ?>/admin/butir/<?= $butir['id']; ?>" class="btn btn-info btn-flat">Next</a>
                                        <small>harusnya a hreg = $butir['slug'] yang didapatkan dari namaInstrumen, jadi dengan nama yg sama akan muncul smua disini. bener gak ya. gatau.</small>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    <?php endforeach; ?>
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