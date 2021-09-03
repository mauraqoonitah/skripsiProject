<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold"> Laporan Survei Instrumen Kepuasan</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- back to previous page -->
        <a href="<?= base_url(); ?>/admin/laporanSurvei">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>
    </section>

    <!-- Main content -->
    <section class="content mx-auto">
        <div class="container-fluid">
            <div class="card border border-1 border-white rounded-3">
                <h6 class="card-header">C.2 Nama kategori yang tadi</h6>

                <a href="<?= base_url(); ?>/admin/laporanKepuasan">
                    <div class="card col-lg-8 p-2">
                        <div class="card-body">
                            <p class="card-text">C.2.1 Nama instrumennya</p>
                        </div>
                    </div>
                </a>
                <div class="card col-lg-8 p-2">
                    <div class="card-body">
                        <p class="card-text">C.2.2 Nama instrumennya</p>
                    </div>
                </div>
                <div class="card col-lg-8 p-2">
                    <div class="card-body">
                        <p class="card-text">C.2.3 Nama instrumennya</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">OFF</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">ON</label>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    On Off untuk menampilkan ke website
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>