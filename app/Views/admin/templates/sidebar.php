<aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin'); ?>" class="brand-link text-decoration-none mt-3 pb-4">
        <img src="<?= base_url(); ?>/img/unj.png" alt="UNJ Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Admin</span><br>
        <span class="brand-text font-weight-light">GPjM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!--  user logged in  -->
        <div class="user-panel mt-3 pb-3 mb-3">
            <i class="nav-icon fas fa-user mr-2 ml-4"></i> <?= user()->fullname; ?>
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
                            <a href="<?= base_url(); ?>/admin/dataResponden" class="nav-link <?= $uri->getSegment(2) == 'dataResponden' ? 'active"' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Responden</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/admin/hasilSurveiInstrumen" class="nav-link <?= $uri->getSegment(2) == 'hasilSurveiInstrumen' ? 'active"' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instrumen</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link <?= $uri->getSegment(2) == 'kelolaKategori' || $uri->getSegment(2) == 'kelolaInstrumen'  ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Kelola Survei
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/admin/kelola-survei/kategori" class="nav-link <?= $uri->getSegment(2) == 'kelolaKategori' ? 'active"' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instrumen</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/admin/kelolaPernyataan" class="nav-link <?= $uri->getSegment(2) == 'kelolaPernyataan' ? 'active"' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Butir Pernyataan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/kelolaResponden" class="nav-link <?= $uri->getSegment(2) == 'kelolaResponden' ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Kelola Responden
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/analisisKepuasan" class="nav-link <?= $uri->getSegment(2) == 'analisisKepuasan' ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-bar-chart"></i>
                        <p>
                            Analisis Kepuasan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url(); ?>/admin/laporanSurvei" class="nav-link <?= $uri->getSegment(2) == 'laporanSurvei' ? 'active"' : '' ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Laporan
                        </p>
                    </a>
                </li>
                <li>
                    <small>

                        <hr class="text-white dropdown-divider">
                    </small>
                </li>

                <li class=" nav-item">
                    <a href="<?= base_url('logout'); ?>" class="nav-link" role="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class=" fas fa-sign-out-alt mx-2"></i>
                        <p>Keluar
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>