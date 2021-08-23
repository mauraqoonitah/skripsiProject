<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>
<div class="content-wrapper pt-5" style="min-height: 80vh;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="purple-text"> Pilih Instrumen <small class="text-muted"> untuk mengisi kuesioner</small></h1>
                </div>

            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content m-0">
        <div class="container">
            <div class="row">
                <!-- form tambah pernyataan -->
                <div class="col-lg-8 mx-auto">
                    <?php foreach ($instrumen as $ins) : ?>
                        <a href="<?= base_url(); ?>/responden/instrumen/<?= $ins['id']; ?>">
                            <div class="row my-3 mx-auto">
                                <div class="pilih-inst">
                                    <?= $ins['namaInstrumen']; ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <div class="row my-3 mx-auto">
                        <div class="pilih-inst ">
                            <a href="#" class=""> nama instrumen yang sesuai jenis respondennya </a>
                        </div>
                    </div>
                    <div class="row my-3 mx-auto">
                        <div class="pilih-inst ">
                            <a href="#" class=""> nama instrumen yang sesuai jenis respondennya </a>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <a href="<?= base_url(); ?>/responden/isiDataDiri">
                            <button type="submit" class="btn btn-purple">
                                Selanjutnya <i class="fas fa-chevron-right ml-3"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>