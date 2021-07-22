<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-dashboard-content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Dashboard GPjM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Selamat Datang!</strong> Aplikasi Penjaminan Mutu FMIPA UNJ
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>