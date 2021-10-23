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
                    <h2 class="bd-title"> <span id="title-animate" class="purple-text"> </span>
                        <h4 class="mb-4" data-aos="zoom-in-right" data-aos-duration="500">Sistem Penjaminan Mutu Internal</h4>
                    </h2>

                    <!-- carousel -->
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" style="top: 100%; margin-top: 1rem;" data-aos="zoom-in-right" data-aos-delay="500">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="margin-top: 2rem;"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" style="margin-top: 2rem;"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" style="margin-top: 2rem;"></button>
                        </div>
                        <div class="carousel-inner mb-4" data-aos="zoom-in-down" data-aos-delay="500" data-aos-duration="2000">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p class="fs-6">Memelihara dan meningkatkan mutu pendidikan FMIPA UNJ secara internal untuk mewujudkan visi serta untuk memenuhi kebutuhan stakeholders melalui penyelenggaraan Tridharma Perguruan Tinggi.
                                        </i>

                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p class="fs-6"> SPMI merupakan kegiatan sistemik penjaminan mutu pendidikan tinggi
                                        oleh perguruan tinggi untuk mengawasi penyelenggaraan pendidikan tinggi secara berkelanjutan.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="d-md-block">
                                    <p class="fs-6"> Suatu perguruan tinggi dinyatakan bermutu apabila: (1) perguruan tinggi mampu menetapkan dan mewujudkan visinya; (2) perguruan tinggi mampu menjabarkan visinya ke dalam sejumlah standar dan standar turunan; (3) perguruan tinggi mampu menerapkan, mengendalikan, dan mengembangkan sejumlah standar dan standar turunan untuk memenuhi kebutuhan stakeholders.</p>
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
                        <a class="" href="<?= base_url(); ?>/responden" role="button" data-aos="fade-down" data-aos-delay="1000">
                            <button type="button" class="btn btn-jumbotron btn-purple ">Isi Survei</button>
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
    <h5 class="text-center text-muted">Silakan akses untuk melihat hasil Survei Kepuasan di FMIPA UNJ</h5>

    <div class="container pt-5">
        <!-- ./sticky scrolled -->
        <div class="row">
            <div class="mx-auto col-6">
                <img src="<?= base_url(); ?>/img/undraw_Report.svg" class="img-fluid" />
                <?php if (empty($response)) : ?>
                    <p class="text-muted text-center my-4 fs-5"> No results found</p>
                <?php endif; ?>
            </div>
        </div>

        <div class="row obyek-menu mt-5">
            <?php foreach ($response as $rspns) :  ?>
                <div class="obyek-list col-sm shadow-sm">
                    <a href="./about.php" class="list-kategori"> <?= $rspns['namaInstrumen']; ?></a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="menu col-lg-8 mx-auto mt-5">
    <div class="container-fluid">
        <h2 class="section-title" id="obyek-menu">Laporan Instrumen Kepuasan</h3>
            <h5 class="text-center text-muted fs-5"> Penyusunan laporan diperlukan untuk memberikan gambaran kinerja FMIPA UNJ secara berkala sebagai rekomendasi tindak lanjut peningkatan kualitas mutu layanan.
            </h5>

            <div class="row mt-5">
                <div class="mx-auto col-lg-4 col-sm-4">
                    <a href="<?= base_url(''); ?>/admin/laporanSurvei" class="img-hover-zoom">
                        <img src="<?= base_url(); ?>/img/undraw_Documents.png" class="img-fluid rounded-3 border border-2" />
                    </a>
                </div>
            </div>
    </div>
</section>


<button id="scrollToTopBtn" class=""><i class="fas fa-angle-double-up"></i></button>
</section>

<?= $this->endSection(); ?>