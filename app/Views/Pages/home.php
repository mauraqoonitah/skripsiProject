<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="landing-page d-flex justify-content-center">

    <div class="bd-masthead mb-3" id="content">
        <div class="container px-4 px-md-3">
            <div class="row align-items-lg-center">

                <!-- flash success tambah data  -->
                <?php if (session()->getFlashdata('message')) :  ?>
                    <div class="alert alert-success d-flex align-items-center fw-bold" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div class="fs-6">
                            <?= session()->getFlashData('message'); ?>

                        </div>
                    </div>
                <?php endif; ?>

                <!-- ./ flash success tambah data  -->

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
                        <div class="carousel-indicators" style="top: 100%; margin-top: 1rem;" data-aos="zoom-in-right" data-aos-delay="100">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="margin-top: 2rem;"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" style="margin-top: 2rem;"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" style="margin-top: 2rem;"></button>
                        </div>
                        <div class="carousel-inner mb-4" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="2000">
                            <div class="carousel-item active" data-bs-interval="1000">
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
                        <a class="" href="<?= base_url(); ?>/responden" role="button" data-aos="fade-down" data-aos-delay="500">
                            <button type="button" class="btn btn-jumbotron btn-purple ">Isi Survei</button>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>


<section class="menu col-lg-8 mx-auto" id="hasilsurvei">
    <!-- sticky scrolled -->
    <div id=passageWrapper>
        <h2 class="section-title">Hasil Survei Kepuasan</h2>
    </div>
    <h5 class="text-center text-muted">Silakan akses untuk melihat hasil Survei Kepuasan di FMIPA UNJ</h5>

    <div class="container pt-5">
        <!-- ./sticky scrolled -->
        <div class="row">
            <div class="mx-auto col-6">
                <img src=" <?= base_url(); ?>/img/undraw_Report.svg" class="img-fluid" />
                <?php if (empty($responseActiveShowGrafik)) : ?>
                    <p class="text-muted text-center my-4 fs-5"> No results found</p>
                <?php endif; ?>
            </div>
        </div>

        <div class="row obyek-menu mt-5">
            <?php foreach ($responseActiveShowGrafik as $showGrafik) :  ?>
                <div class="obyek-list col-sm shadow-sm ">
                    <form action="<?= base_url(); ?>/grafik_kepuasan/<?= $showGrafik['id']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <button class="btn btn-no-focus" type="submit">
                            <div class="list-kategori">
                                <?= $showGrafik['namaInstrumen']; ?>
                            </div>
                        </button>
                    </form>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="menu col-lg-8 mx-auto mt-5" id="laporansurvei">
    <div class="container-fluid">
        <h2 class="section-title" id="obyek-menu">Laporan Instrumen Kepuasan</h3>
            <h5 class="text-center text-muted fs-5"> Penyusunan laporan diperlukan untuk memberikan gambaran kinerja FMIPA UNJ secara berkala sebagai rekomendasi tindak lanjut peningkatan kualitas mutu layanan.
            </h5>
            <div class="row mt-5">
                <div class="mx-auto col-lg-4 col-md-8 col-sm-6">
                    <a href="<?= base_url(''); ?>/admin/laporanSurvei" class="img-fluid img-hover-zoom">
                        <img src="<?= base_url(); ?>/img/undraw_Documents.png" class="img-fluid rounded-3 border border-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Klik untuk Lihat Laporan" />
                    </a>
                </div>
            </div>
    </div>
</section>


<button id="scrollToTopBtn" class=""><i class="fas fa-angle-double-up"></i></button>
</section>

<?= $this->endSection(); ?>