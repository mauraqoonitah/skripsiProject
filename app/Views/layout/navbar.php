<nav class="navbar navbar-expand-lg navbar-light mt-2">
    <div class="container">
        <a class="navbar-brand purple-text" href="#">
            <img src="<?= base_url(); ?>/img/unj.png" alt="" class="d-inline-block align-text-top">
            Instrumen Kepuasan SPMI
        </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>/responden">Isi Survei</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hasilsurvei">Hasil Survei</a>
                </li>
                <?php if (in_groups('Admin') || in_groups('Kontributor')) : ?>
                    <li class="nav-item">
                        <a class=" nav-link" href="<?= base_url('admin'); ?>"> Admin</a>
                    </li>
                <?php endif; ?>
                <?php if (logged_in()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>