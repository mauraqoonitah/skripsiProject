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
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- Fontawesome -->
<script src="https://use.fontawesome.com/9cfecb3a05.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>/../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".form-select-responden").select2();
    $(".form-select-kategori").select2();
</script>

<!-- summernote ; include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- run summernote -->
<script>
    $(document).ready(function() {
        $('#summernote-petunjuk-pengisian').summernote({
            placeholder: 'Isi Petunjuk Pengisian',
            height: 300,
            tabsize: 2,
            focus: true,
            dialogsFade: true,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['fontsize', ['fontsize']],
                ['insert', ['link']],
                ['color', ['color']],
                ['view', ['codeview']]
            ]
        });
    });
</script>

<!-- Sweetalert -->
<script src="<?= base_url(); ?>/../../js/sweetalert2.all.min.js"></script>

<!-- My js -->
<script src="<?= base_url(); ?>/../../js/main.js"></script>

<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/../../dist/js/adminlte.min.js"></script>

<!-- chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- datatables -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

<?php

use CodeIgniter\I18n\Time;

date_default_timezone_set('Asia/Jakarta');
$timeNow = Time::now()->toDateTimeString(); ?>


<script>
    $(document).ready(function() {
        $('#tableResponden').DataTable({
            "pageLength": 25,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Responden Instrumen Kepuasan',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Responden Instrumen Kepuasan',
                    messageTop: 'Nama Instrumen',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Responden Instrumen Kepuasan',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',
                    messageTop: 'Responden Instrumen Kepuasan',

                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
    $(document).ready(function() {
        $('#table-jenis-responden').DataTable({
            "pageLength": 25,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Jenis Responden Instrumen Kepuasan',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Jenis Responden Instrumen Kepuasan',
                    messageTop: 'Nama Instrumen',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Jenis Responden Instrumen Kepuasan',
                    messageTop: 'Nama Instrumen',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',
                    messageTop: 'Jenis Responden Instrumen Kepuasan',

                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
    $(document).ready(function() {
        $('#table-kelola-survei').DataTable({
            "pageLength": 25,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Hasil Survei Instrumen',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Hasil Survei Instrumen',
                    messageTop: 'Nama Instrumen',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Hasil Survei Instrumen',
                    messageTop: 'Nama Instrumen',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',
                    messageTop: 'Nama Instrumen/print datetime',

                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
    $(document).ready(function() {
        $('#datatable-chart-instrumen').DataTable({
            "pageLength": 25,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Hasil Survei Instrumen',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Hasil Survei Instrumen',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Hasil Survei Instrumen',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',

                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
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