<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>
<div class="content-wrapper pt-5" style="min-height: 80vh;">
    <div class="container">
        <div class="textBox">
            <!-- using gsap animation -->
            <p class="text-center text-muted" data-aos="zoom-in-right" data-aos-duration="1000">(<?= user()->role; ?>)</p>
            <p class="text-center text-muted fs-5" data-aos="zoom-in-right" data-aos-duration="1000"> <span class="welcome fw-bold"> </span> <?= user()->fullname; ?></p>
        </div>
    </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="text-cosmic" data-aos="zoom-in-up" data-aos-delay="1000"> Pilih Instrumen <small class="text-muted"> untuk mengisi kuesioner</small></h1>

                </div>

            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <?php foreach ($instrumenByResponden as $ins) : ?>
                        <a href="<?= base_url(); ?>/responden/instrumen/<?= $ins['id']; ?>" data-aos="fade-down" data-aos-duration="1500">
                            <div class="row mb-4 mx-auto">
                                <div class="pilih-inst">
                                    <?= $ins['namaInstrumen']; ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>