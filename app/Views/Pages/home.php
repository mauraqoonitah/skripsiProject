<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="jumbotron text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-6">Sistem Informasi Penjaminan Mutu </h1>
                <h5 class="">Fakultas Matematika dan Ilmu Pengetahuan Alam <br> Universitas Negeri Jakarta </h5>

                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

                <a class="btn btn-light" href="#obyek-menu" role="button">Isi Survei</a>

            </div>
        </div>
    </div>

</section>


<section class="menu">
    <div class="container">
        <h3 class="section-title " id="obyek-menu">Obyek Instrumen</h3>
        <div class="row obyek-menu">
            <a href="./about.php" class="obyek-list col-sm text-reset"> Dosen
            </a>
            <div class="obyek-list col-sm">
                Tenaga Kependidikan
            </div>
            <div class="obyek-list col-sm">
                Mahasiswa
            </div>
            <div class="obyek-list col-sm">
                Alumni/Lulusan
            </div>
            <div class="obyek-list col-sm">
                Pengguna Lulusan
            </div>
            <div class="obyek-list col-sm">
                Mitra
            </div>
            <div class="obyek-list col-sm">
                Peneliti
            </div>
            <div class="obyek-list col-sm">
                Pengabdi
            </div>
        </div>
    </div>
</section>



<?= $this->endSection(); ?>