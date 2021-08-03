<div class="circle-clip-path"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>/img/unj.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
            Sistem Penjaminan Mutu
        </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item px-3">
                    <a class="nav-link active" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="<?= base_url('admin'); ?>"><?php if (logged_in()) : ?>Admin</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                <?php else : ?>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="<?= base_url('ogin'); ?>">Login</a>
                <?php endif; ?>
                </li>

            </ul>
        </div>
    </div>
</nav>