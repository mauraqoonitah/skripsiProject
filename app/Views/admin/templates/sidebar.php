<aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin'); ?>" class="brand-link text-decoration-none bg-cosmic text-white" style="padding-bottom: 13px">
        <img src="<?= base_url(); ?>/img/unj.png" alt="UNJ Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <?php if (in_groups('Admin')) : ?>
            <span class="brand-text font-weight-bold">Admin </span><span class="brand-text font-weight-light">GPjM</span>
        <?php endif; ?>
        <?php if (in_groups('Kontributor')) : ?>
            <span class="brand-text font-weight-light">Kontributor</span>
        <?php endif; ?>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!--  user logged in  -->
        <div class="user-panel mt-3 pb-3 mb-3">
            <?php if (user()->fullname) :  ?>
                <i class="nav-icon fas fa-user mr-2 ml-4"></i> <?= user()->fullname; ?><br>
            <?php endif; ?>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php
                $uri = current_url(true);
                ?>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin" class="nav-link <?= $uri->getSegment(2) == 'admin' && $uri->getSegment(3) == '' ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link <?= $uri->getSegment(2) == 'hasilSurveiResponden' || $uri->getSegment(2) == 'hasilSurveiInstrumen' ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-poll-h"></i>
                        <p>
                            Hasil Survei
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/admin/hasil-survei/responden" class="nav-link <?= $uri->getSegment(2) == 'hasilSurveiResponden' ? 'active"' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Responden</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/admin/hasil-survei/instrumen" class="nav-link <?= $uri->getSegment(2) == 'hasilSurveiInstrumen' ? 'active"' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instrumen</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_" class="nav-link <?= $uri->getSegment(2) == 'kelolaKategori' || $uri->getSegment(2) == 'instrumen_'  ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Kelola Survei
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/jenisResponden" class="nav-link <?= $uri->getSegment(2) == 'kelolaResponden' ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kategori Responden
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/laporanSurvei" class="nav-link <?= $uri->getSegment(2) == 'laporanSurvei' ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-bar-chart"></i>
                        <!-- <i class="nav-icon fas fa-file-alt"></i> -->
                        <p>Laporan
                        </p>
                    </a>
                </li>
                <?php if (in_groups('Admin')) : ?>
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mb-2"> </div>
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>/admin/kelolaAkun" class="nav-link <?= $uri->getSegment(2) == 'kelolaAkun' ? 'active"' : '' ?>">
                            <i class="nav-icon fas fa-user-plus mx-2"></i>Kelola Akun<br>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>

                <div class="user-panel mb-2"> </div>

                <li class=" nav-item">
                    <a href="<?= base_url('logout'); ?>" class="nav-link " role="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class=" fas fa-sign-out-alt mx-2"></i>
                        <p>Keluar
                        </p>
                    </a>
                </li>
                <div class="user-panel mb-2"> </div>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>