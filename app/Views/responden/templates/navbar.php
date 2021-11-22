<header class="p-3 mb-3 border-bottom navbar-cosmic">

    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a class="navbar-brand nav-link link-light d-flex align-items-center mb-2 mb-lg-0 text-decoration-none " href="#">
                <img src="<?= base_url(); ?>/img/unj.png" alt="" class="d-inline-block align-text-top mr-3">
                <span class="fs-4">Instrumen Kepuasan</span>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= base_url(); ?>/responden" class="nav-link text-solitude">Isi Survei</a> </li>

                <li><a href="<?= base_url(); ?>/responden/riwayatSurvei/<?= user()->id; ?>" class="nav-link px-2 link-light">Riwayat Survei</a></li>

            </ul>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle nav-link text-columbia-blue" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user mx-2"></i>
                    <span class="d-none d-md-inline"><?= user()->username; ?></span>

                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="<?= base_url(); ?>/responden/isiDataDiri/<?= user()->id; ?>">Profil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mx-auto"> Yakin ingin keluar?</h5>
            </div>

            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="<?= base_url('logout'); ?>">
                    <button type="button" class="btn btn-yellow-sea">Keluar</button>
                </a>
            </div>
        </div>
    </div>
</div>