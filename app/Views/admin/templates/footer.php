<footer class="main-footer">
    <div class="text-center">
        <span>&copy; <?= date('Y'); ?> Gugus Penjaminan Mutu, Fakultas Matematika dan Ilmu Pengetahuan Alam, Universitas Negeri Jakarta
        </span>


    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
    $(".form-select-responden-dosen").select2();
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

<?php

use CodeIgniter\I18n\Time;

date_default_timezone_set('Asia/Jakarta');
$timeNow = Time::now()->toDateTimeString(); ?>


<script>
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
        $('#table-hasil-kategori').DataTable({
            "pageLength": 25,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Data Kategori Instrumen Kepuasan',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Data Kategori Instrumen Kepuasan',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    autoFilter: true,
                    sheetName: 'Daftar Kategori Instrumen',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Data Kategori Instrumen Kepuasan',
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
                    messageTop: 'Data Kategori Instrumen Kepuasan',
                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
    $(document).ready(function() {
        $('#table-hasil-instrumen').DataTable({
            "pageLength": 25,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Data Instrumen Kepuasan',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Data Instrumen Kepuasan',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    autoFilter: true,
                    sheetName: 'Daftar Instrumen',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Data Instrumen Kepuasan',
                    messageBottom: 'created on: <?php echo $timeNow; ?>',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    // download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',
                    messageTop: 'Data Instrumen Kepuasan',
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

<!-- popovers -->
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>


</body>

</html>