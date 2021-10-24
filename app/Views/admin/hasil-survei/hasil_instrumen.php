<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Hasil Survei Kepuasan<br> (Instrumen)</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- flash success tambah data  -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
    <!-- ./ flash success tambah data  -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- jika belum ada response -->
            <?php if (sizeof($response) === 0) : ?>
                <div class="row mb-4">
                    <div class="mx-auto col-lg-3 col-sm-3">
                        <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                    </div>
                    <p class="text-center my-4 fs-5 text-rouge">Responden belum mengisi survei.</p>
                </div>
            <?php endif; ?>

            <div class="col-12">
                <div class="alert alert-primary fw-bold mb-5" role="alert">
                    Pilih instrumen untuk melihat tanggapan responden</div>
            </div>

            <div class="container">
                <div class="list-group center">
                    <?php foreach ($response as $rspns) : ?>
                        <form action="<?= base_url(); ?>/admin/saveTampilGrafik/<?= $rspns['id']; ?>" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-10">
                                    <div class="mb-4">
                                        <a href="<?= base_url() ?>/admin/hasil-survei/instrumen/<?= $rspns['id']; ?>" class="pilih-inst">
                                            <span class="text-rouge fw-bold"><?= $rspns['kodeInstrumen']; ?> <br> <?= $rspns['namaInstrumen']; ?></span>
                                        </a>
                                    </div>

                                </div>

                                <div class="col-lg-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input form-check-show-grafik-<?= $rspns['id']; ?>" type="checkbox" style="cursor: pointer;" <?= check_tampil($rspns['tampil_grafik']); ?> data-tampil="<?= $rspns['tampil_grafik']; ?>" data-id="<?= $rspns['id']; ?>" id="flexCheckDefault" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php if ($rspns['tampil_grafik'] == '1') :  ?>Klik untuk sembunyikan grafik pada beranda website<?php else : ?> Klik untuk menampilkan grafik pada beranda website<?php endif; ?>">
                                        <label class="form-check-label ml-2 text-muted" for="flexCheckDefault">
                                            <?php if ($rspns['tampil_grafik'] == '1') :  ?>Grafik Ditampilkan<?php else : ?> Grafik Disembunyikan<?php endif; ?>
                                    </div>
                                </div>
                            </div>


                            <script type="text/javascript">
                                $('.form-check-show-grafik-<?= $rspns['id']; ?>').on('click', function() {
                                    const tampilId = $(this).data('tampil');
                                    const id = $(this).data('id');

                                    $.ajax(
                                        console.log('masuk <?= $rspns['id']; ?>'), {
                                            url: "<?= base_url(); ?>/admin/saveTampilGrafikStatus/<?= $rspns['id']; ?>",
                                            headers: {
                                                'X-Requested-With': 'XMLHttpRequest'
                                            },
                                            type: 'POST',
                                            data: {
                                                tampilId: tampilId,
                                                id: id
                                            },
                                            success: function() {
                                                document.location.href = "<?= base_url(); ?>/admin/hasil-survei/instrumen"
                                                console.log('success ubah tampil grafik')
                                            }
                                        })
                                });
                            </script>

                        </form>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- /.content -->
</div>

<?= $this->endSection(); ?>