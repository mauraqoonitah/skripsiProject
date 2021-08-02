<div class="circle-clip-path"></div>

<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="<?= base_url(); ?>/img/unj.png" alt="" width="40" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-white ms-auto">
                <ul>
                    <li><a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Beranda</a></li>
                    <li><a class="nav-link" href="../pages/about">About</a></li>
                    <li>
                        <?php if (logged_in()) : ?>
                            <a class="nav-link" href="<?= base_url('admin'); ?>">Admin</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                    <?php else : ?>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                    <?php endif; ?>
                    </li>
                </ul>

            </div>
        </div>

    </div>

</nav>