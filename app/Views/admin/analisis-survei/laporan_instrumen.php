<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold"> Laporan Analisis Survei Instrumen Kepuasan</h1>
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
            <div class="alert alert-primary fw-bold" role="alert">
                <strong class=" fs-6">Pilih Instrumen pada Kategori C.1 untuk Melihat Hasil Analisis Instrumen Kepuasan </strong>
            </div>
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
        </div>

        <div class="row p-4">
            <?php foreach ($getInstrumenBySlug as $ins) : ?>
                <form action="<?= base_url(); ?>/admin/saveTampilGrafik/<?= $ins['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <a href="<?= base_url(); ?>/admin/laporanKepuasan/<?= $ins['id']; ?>" class="pilih-inst text-decoration-none">
                                <span class="text-black"><?= $ins['kodeInstrumen']; ?> <br> <?= $ins['namaInstrumen']; ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        status tampil <?= $ins['tampil_grafik']; ?>

                        <div class="form-check mr-4">
                            <input class="form-check-input form-check-show-grafik-<?= $ins['id']; ?>" type="checkbox" <?= check_tampil($ins['tampil_grafik']); ?> data-tampil="<?= $ins['tampil_grafik']; ?>" data-id="<?= $ins['id']; ?>">
                        </div>
                    </div>

                    <script type="text/javascript">
                        $('.form-check-show-grafik-<?= $ins['id']; ?>').on('click', function() {
                            const tampilId = $(this).data('tampil');
                            const id = $(this).data('id');

                            $.ajax(
                                console.log('masuk <?= $ins['id']; ?>'), {
                                    url: "<?= base_url(); ?>/admin/saveTampilGrafikStatus/<?= $ins['id']; ?>",
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest'
                                    },
                                    type: 'POST',
                                    data: {
                                        tampilId: tampilId,
                                        id: id
                                    },
                                    success: function() {
                                        document.location.href = "<?= base_url(); ?>/admin/laporanInstrumen/<?= $ins['slug']; ?>"
                                        console.log('success ubah tampil grafik')
                                        <?= session()->getFlashdata('message'); ?>



                                    }
                                })
                        });
                    </script>


                <?php endforeach; ?>
                </form>
        </div>
</div>
<div class="card-footer text-muted text-center">
    Switch On Off untuk menampilkan grafik kepuasan ke website
</div>
</div>
</section>

<!-- /.content -->
</div>

<?= $this->endSection(); ?>