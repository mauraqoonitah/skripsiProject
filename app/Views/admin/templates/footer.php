<footer class="main-footer">
    <div class="text-center">
        <span>Copyright &copy; FMIPA UNJ <?= date('Y'); ?></span>

    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light">
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
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/../../dist/js/adminlte.min.js"></script>
<!-- datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#tableResponden').DataTable();
    });
</script>
</body>

</html>