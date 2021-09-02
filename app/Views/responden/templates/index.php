<?= $this->include('responden/templates/head'); ?>

<body class="hold-transition layout-top-nav" style="background-color: #fafafa;">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?= $this->include('responden/templates/navbar'); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('responden-body-content'); ?>

        <!-- /.content-wrapper -->

        <!-- footer -->
        <?= $this->include('responden/templates/footer'); ?>