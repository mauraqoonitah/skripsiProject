<div class="main-footer mt-5">
    <div class="text-center">
        <span>Copyright &copy; <?= date('Y'); ?> Gugus Penjaminan Mutu FMIPA UNJ</span>
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
<script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.textBox p span', {
        duration: 2,
        delay: 1,
        text: 'Selamat Datang, '
    })
</script>

<!-- Sweetalert -->
<script src="<?= base_url(); ?>/../../js/sweetalert2.all.min.js"></script>
<!-- My js -->
<script src="<?= base_url(); ?>/../../js/main.js"></script>


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