<nav class="main-header navbar navbar-expand navbar-cosmic">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto ">

        <li class="nav-item">
            <!-- Button logout modal -->
            <a class="nav-link text-columbia-blue " href="#" role="button" data-bs-toggle="modal" data-bs-target="#logoutModal">
                Keluar
                <i class="fas fa-sign-out-alt mx-2"></i>
            </a>

        </li>

    </ul>
</nav>



<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mx-auto"> Keluar dari Halaman Admin?</h5>
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