<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon-->
    <link href="<?= base_url(); ?>/img/unj.png" rel="shortcut icon" type="image/icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/../../plugins/fontawesome-free/css/all.min.css">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- aos animate library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- chart js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js
"></script>

    <!-- highchart js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>




    <title><?= $title; ?></title>
</head>

<body>

    <!-- spinner loader -->
    <div class="preloader">
        <img src="<?= base_url(); ?>/img/spinner-cosmic.svg" alt="spinner">
    </div>
    <!-- ./spinner loader -->
    <?= $this->include('layout/navbar'); ?>
    <main>
        <?= $this->renderSection('content'); ?>
    </main>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- aos animate library -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const easeBox = document.querySelectorAll('.obyek-list');

        easeBox.forEach((div, i) => {
            div.dataset.aos = 'zoom-in-down';
            div.dataset.aosDelay = i * 40;
            div.dataset.aosDuration = 600;

        });
        AOS.init();
    </script>

    <!-- gsap animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('#title-animate', {
            duration: 2,
            delay: 1,
            text: 'Instrumen Kepuasan'
        })
    </script>

    <script>
        $('.collapse').collapse()
    </script>

    <script>
        //    spinner loader
        const preloader = document.querySelector('.preloader');
        const fadeEffect = setInterval(() => {
            // if we don't set opacity 1 in CSS, then
            // it will be equaled to "" -- that's why
            // we check it, and if so, set opacity to 1
            if (!preloader.style.opacity) {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) {
                preloader.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
                preloader.style.display = "none";
            }
        }, 100);
        window.addEventListener('load', fadeEffect);
    </script>

    <script>
        // button scroll to top
        var scrollToTopBtn = document.getElementById("scrollToTopBtn")
        var rootElement = document.documentElement

        function scrollToTop() {
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
            })
        }

        scrollToTopBtn.addEventListener("click", scrollToTop)
    </script>


    <!-- tooltip -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>


</body>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>/responden">Isi Survei Instrumen Kepuasan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>/#hasilsurvei">Hasil Survei Instrumen Kepuasan</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>/#laporansurvei">Laporan Survei Instrumen Kepuasan</a></li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 footer-newsletter">
                    <h4>Contact</h4>
                    <span> Gedung Hasjim Asj???arie Kampus A, Universitas Negeri Jakarta </span><br>
                    <span> Jl. Rawamangun Muka, Rawamangun Muka, Jakarta Timur 13220</span><br>
                    <span> 021 4894909</span><br>
                    <span> fmipa@unj.ac.id</span><br>
                    <span> <a href="www.fmipa.unj.ac.id" class="text-white"> www.fmipa.unj.ac.id</a>
                    </span><br>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            <span>&copy; <?= date('Y'); ?> Gugus Penjaminan Mutu, Fakultas Matematika dan Ilmu Pengetahuan Alam, Universitas Negeri Jakarta
            </span>

        </div>

    </div>
</footer>
<!-- End Footer -->

</html>