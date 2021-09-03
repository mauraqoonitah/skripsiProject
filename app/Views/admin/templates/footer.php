<footer class="main-footer">
    <div class="text-center">
        <span>Copyright &copy; FMIPA UNJ <?= date('Y'); ?></span>

    </div>
</footer>

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


<!-- summernote ; include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- run summernote -->
<script>
    $(document).ready(function() {
        $('#summernote-petunjuk-pengisian').summernote({
            placeholder: 'Isi Pernyataan',
            tabsize: 2,
            toolbar: [
                ['font', ['bold', 'underline']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ]
        });
    });
</script>

<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/../../dist/js/adminlte.min.js"></script>
<!-- datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#tableResponden').DataTable({
            "pageLength": 25,
        });
    });
    $(document).ready(function() {
        $('#table-kelola-survei').DataTable({
            "pageLength": 25
        });

    });
</script>

<!-- sidebar menu active -->
<script>
    /** add active class and stay opened when selected */
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
        return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>

<!-- tooltip -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

<!-- modal -->
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
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