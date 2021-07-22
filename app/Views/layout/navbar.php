<nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="<?= base_url(); ?>/img/unj.png" alt="" width="40" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-white ms-auto">
                <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Beranda</a>
                <a class="nav-link" href="../pages/about">About</a>

                <?php if (logged_in()) : ?>
                    <a class="nav-link" href="<?= base_url('admin'); ?>">Admin</a>
                    <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                <?php else : ?>
                    <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</nav>