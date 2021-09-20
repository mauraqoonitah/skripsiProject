<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="landing-page d-flex justify-content-center">

    <div class="bd-masthead mb-3" id="content">
        <div class="container px-4 px-md-3">
            <div class="row align-items-lg-center">
                <div class="col-8 mx-auto col-md-4 order-md-2 col-lg-5">

                    <div class="imgBox" data-aos="zoom-in-up" data-aos-duration="1000">
                        <img src="<?= base_url(); ?>/img/jumbotron-img.png" alt="" class="img-fluid mb-3 mb-md-0" width="600" height="533">
                    </div>
                </div>
                <div class="col-md-8 order-md-1 col-lg-7 text-center text-md-start">
                    <h1 class="bd-title"> <span id="title-animate" class="purple-text"> </span>
                        <h2 class="mb-4" data-aos="zoom-in-right" data-aos-duration="500">Sistem Penjaminan Mutu Internal</h2>
                    </h1>

                    <!-- carousel -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" style="top: 100%; margin-top: 1rem;" data-aos="zoom-in-right" data-aos-delay="500">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="margin-top: 2rem;"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" style="margin-top: 2rem;"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" style="margin-top: 2rem;"></button>
                        </div>
                        <div class="carousel-inner mb-4" data-aos="zoom-in-right" data-aos-delay="500" data-aos-duration="2000">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p class="lead">Sistem Penjaminan Mutu Internal (SPMI) merupakan kegiatan sistemik penjaminan mutu pendidikan tinggi oleh setiap perguruan tinggi secara otonom untuk mengendalikan dan meningkatkan penyelenggaraan pendidikan tinggi secara berencana dan berkelanjutan.</i>


                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p class="lead"> Sistem penjaminan mutu pendidikan tinggi terdiri atas sistem penjaminan mutu internal yang dikembangkan oleh perguruan tinggi dan sistem penjaminan mutu eksternal yang dilakukan melalui akreditasi. <i>(Undang-Undang Republik Indonesia Nomor 12 Tahun 2012 Tentang Pendidikan Tinggi)
                                        </i>

                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p class="lead"> Sistem Penjaminan Mutu Internal (SPMI) merupakan kegiatan sistemik penjaminan mutu pendidikan tinggi oleh setiap perguruan tinggi secara otonom untuk mengendalikan dan meningkatkan penyelenggaraan pendidikan tinggi secara berencana dan berkelanjutan. SPMI direncanakan, dilaksanakan, dievaluasi, dikendalikan, dan dikembangkan oleh perguruan tinggi.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" style="top: 100%; margin-top: 6rem;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" style="top: 100%; margin-top: 6rem;" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- ./carousel -->
                    <div class="d-flex flex-column flex-md-row">
                        <a class="" href="<?= base_url(); ?>/responden" role="button" data-aos="fade-down" data-aos-delay="2000">
                            <button type="button" class="btn btn-lg btn-jumbotron btn-purple ">Isi Survei</button>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>


<section class="menu col-lg-8 mx-auto" id="instrumen">
    <!-- sticky scrolled -->
    <div id=passageWrapper>
        <h2 class="section-title">Kriteria Kepuasan</h2>
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
        <h2 class="section-title" id="obyek-menu">Grafik Kepuasan</h3>
            <div class="row obyek-menu">
            </div>
    </div>
</section>


<button id="scrollToTopBtn" class=""><i class="fas fa-angle-double-up"></i></button>
</section>

<?= $this->endSection(); ?>