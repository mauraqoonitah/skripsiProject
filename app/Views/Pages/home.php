<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="landing-page">
    <div class="content">
        <div class="textBox">
            <h2> <span>Survei Kepuasan 9 Kriteria</span> <br>
                Penjaminan Mutu Internal<br>
                <h3>Fakultas Matematika dan Ilmu Pengetahuan Alam UNJ</h3>
            </h2>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos excepturi omnis placeat nisi corporis quisquam sed tempora nostrum aspernatur ut.</p>

            <a class="" href="#obyek-menu" role="button">
                <button type="button" class="btn btn-primary ">Isi Survei</button>
            </a>
        </div>
        <div class="imgBox">
            <img src="<?= base_url(); ?>/img/jumbotron-img.png" alt="" class="jumbotron-image">
        </div>
    </div>
    <ul class="thumbnail-bar">
        <li>
            <img src="<?= base_url(); ?>/img/jumbotron-unj.jpg" alt="" width="40" height="40" onclick="itemSlider('<?= base_url(); ?>/img/default.svg');changeCircleColor('#017143')">
        </li>
        <li>
            <img src="<?= base_url(); ?>/img/jumbotron-img.png" alt="" width="40" height="40" onclick="itemSlider('<?= base_url(); ?>/img/undraw_profile_1.svg');changeCircleColor('#eb7495')">
        </li>
        <li>
            <img src="<?= base_url(); ?>/img/unj.png" alt="" width="40" height="40" onclick="itemSlider('<?= base_url(); ?>/img/undraw_profile_2.svg');changeCircleColor('#d752b1')">
        </li>
    </ul>

    <ul class="thumbnail-bar-content">
        <li><a href=""><i class="fas fa-paperclip"></i></a> </li>
        <li> <a href=""><i class="fas fa-chart-bar"></i></a></li>
        <li><a href=""><i class="fas fa-user"></i></a> </li>
    </ul>
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


<script type="text/javascript">
    function itemSlider(item) {
        document.querySelector('.jumbotron-image').src = item;
    }

    function changeCircleColor(color) {
        const circle = document.querySelector('.circle-clip-path');
        circle.style.background = color;
    }
</script>


<?= $this->endSection(); ?>