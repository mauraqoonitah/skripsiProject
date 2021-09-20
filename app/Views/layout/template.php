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




    <title><?= $title; ?></title>
</head>

<body>

    <!-- spinner loader -->
    <div class="preloader">
        <img src="<?= base_url(); ?>/img/spinner.svg" alt="spinner">
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


</body>

<!-- <footer class="main-footer">
    <div class="text-center">
        <span>Copyright &copy; <?= date('Y'); ?> Gugus Penjaminan Mutu FMIPA UNJ</span>
    </div>
</footer>
 -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Kontak</h4>
                    <p>GPjM FMIPA UNJ </p>
                    <p> Gedung Ki Hajar Dewantara Lantai 4, UNJ </p>
                    <p> Jalan Pemuda Rawamangun Jakarta Timur 13220 </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            Copyright &copy; <?= date('Y'); ?> <strong><span>Gugus Penjaminan Mutu FMIPA UNJ</span></strong>

        </div>

    </div>
</footer>
<!-- End Footer -->

</html>