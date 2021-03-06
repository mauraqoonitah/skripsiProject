<?= $this->include('responden/templates/head'); ?>

<body class="hold-transition layout-top-nav" style="background-color: #f4f6f9;">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- spinner loader -->
        <div class="preloader">
            <img src="<?= base_url(); ?>/img/spinner-cosmic.svg" alt="spinner">
        </div>
        <!-- ./spinner loader -->

        <!-- Navbar -->
        <?= $this->include('responden/templates/navbar'); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('responden-body-content'); ?>

        <!-- /.content-wrapper -->

        <!-- footer -->
        <?= $this->include('responden/templates/footer'); ?>