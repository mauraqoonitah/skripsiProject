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

<footer class="main-footer">
    <div class="text-center">
        <span>Copyright &copy; <?= date('Y'); ?> Gugus Penjaminan Mutu FMIPA UNJ</span>
    </div>
</footer>


</html>