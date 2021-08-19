<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- spinner loader -->
<div class="preloader">
    <img src="<?= base_url(); ?>/img/spinner.svg" alt="spinner">
</div>
<!-- ./spinner loader -->

<section class="landing-page">
    <div class="content">
        <div class="container">
            <div class="textBox">
                <h2> <span>Survei Kepuasan 9 Kriteria</span> <br>
                    Penjaminan Mutu Internal<br>
                </h2>
                <div class="col-lg-12 col-md-10 col-sm-10">

                    <!-- carousel -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" style="top: 100%; margin-top: 1rem;">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner p-2">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p>Sistem Penjaminan Mutu Internal (SPMI) merupakan kegiatan sistemik penjaminan mutu pendidikan tinggi oleh setiap perguruan tinggi secara otonom untuk mengendalikan dan meningkatkan penyelenggaraan pendidikan tinggi secara berencana dan berkelanjutan.</i>


                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p> Sistem penjaminan mutu pendidikan tinggi terdiri atas sistem penjaminan mutu internal yang dikembangkan oleh perguruan tinggi dan sistem penjaminan mutu eksternal yang dilakukan melalui akreditasi. <i>(Undang-Undang Republik Indonesia Nomor 12 Tahun 2012 Tentang Pendidikan Tinggi)
                                        </i>

                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p> Sistem Penjaminan Mutu Internal (SPMI) merupakan kegiatan sistemik penjaminan mutu pendidikan tinggi oleh setiap perguruan tinggi secara otonom untuk mengendalikan dan meningkatkan penyelenggaraan pendidikan tinggi secara berencana dan berkelanjutan. SPMI direncanakan, dilaksanakan, dievaluasi, dikendalikan, dan dikembangkan oleh perguruan tinggi.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" style="top: 100%; margin-top: 1rem;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" style="top: 100%; margin-top: 1rem;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- ./carousel -->
                </div>
                <a class="" href="#obyek-menu" role="button">
                    <button type="button" class="btn btn-success btn-jumbotron ">Isi Survei</button>
                </a>
            </div>
        </div>
        <div class="imgBox">
            <img src="<?= base_url(); ?>/img/jumbotron-img.png" alt="" class="img-fluid jumbotron-image">
        </div>
    </div>

</section>

<section class="menu col-lg-8 mx-auto" id="instrumen">
    <!-- sticky scrolled -->
    <div id=passageWrapper>
        <h3 class="section-title">Kriteria Kepuasan</h3>
    </div>
    <div class="container pt-5">
        <!-- ./sticky scrolled -->
        <div class="row obyek-menu">
            <?php foreach ($category as $ctg) :  ?>
                <div class="obyek-list col-sm shadow-sm">
                    <a href="./about.php" class="list-kategori"> <?= $ctg['namaCategory']; ?></a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="menu col-lg-8 mx-auto">
    <div class="container">
        <h3 class="section-title" id="obyek-menu">Grafik Kepuasan</h3>
        <div class="row obyek-menu">
        </div>
    </div>
</section>

<button id="scrollToTopBtn" class=""><i class="fas fa-angle-double-up"></i></button>
</section>

<?= $this->endSection(); ?>