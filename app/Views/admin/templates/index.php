<?= $this->include('admin/templates/head'); ?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?= $this->include('admin/templates/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('admin/templates/sidebar'); ?>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('admin-body-content'); ?>

        <!-- /.content-wrapper -->

        <!-- footer -->
        <?= $this->include('admin/templates/footer'); ?>