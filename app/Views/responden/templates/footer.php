<div class="main-footer <?= logged_in() ? '' : 'mt-5'; ?>">
    <div class="text-center">
        <span>&copy; <?= date('Y'); ?> Gugus Penjaminan Mutu, Fakultas Matematika dan Ilmu Pengetahuan Alam, Universitas Negeri Jakarta
        </span>
    </div>
</div>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>/../../plugins/jquery/jquery.min.js"></script>
<!-- Fontawesome -->
<script src="https://use.fontawesome.com/9cfecb3a05.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>/../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- aos animate library -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- gsap animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>

<!-- Sweetalert -->
<script src="<?= base_url(); ?>/../../js/sweetalert2.all.min.js"></script>
<!-- My js -->
<script src="<?= base_url(); ?>/../../js/main.js"></script>

<!-- // spinner loader -->
<script>
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

<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/../../dist/js/adminlte.min.js"></script>
<!-- datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<!-- tooltip -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

<!-- popovers -->
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</body>

</html>