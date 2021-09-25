<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>

<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold"><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
                <a href="<?= base_url(); ?>/admin/hasilSurveiResponden">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- data diri responden -->
            <div class="card">
                <h5 class="card-header">Data Diri</h5>
                <div class="card-body">
                    <?php foreach ($respondenData as $res) :  ?>
                        <p class="card-text"><strong>Nama Lengkap :</strong> <?= $res['fullname']; ?></p>
                        <p class="card-text"><strong>Email : </strong> <?= $res['email']; ?></p>
                        <p class="card-text"><strong>No.Identitas : </strong> <?= $res['noIdentitas']; ?></p>
                        <p class="card-text"><strong>Sebagai : </strong><?= $res['role']; ?></p>

                    <?php endforeach; ?>
                </div>
            </div>
            <!-- ./data diri responden -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <h5 class="card-header"> Hasil Tanggapan</h5>
                <div class="card-body py-3">
                    <?php foreach ($responseInsId as $rIns) : ?>
                        <!-- section table 1-->
                        <section>
                            <div class="card container bg-light text-dark py-2 my-5">
                                <div class="container text-center">
                                    <input type="text" readonly class="form-control-plaintext fw-bold text-center text-uppercase" id="instrumen" value="<?= $rIns['namaInstrumen']; ?>" disabled>

                                </div>
                                <div class="container">
                                    <div class="row justify-content-center ">
                                        <div class="col-4 text-end">
                                            <label for="kode-instrumen" class="form-control-plaintext col-sm-12  text-muted">Kode Instrumen</label>
                                        </div>
                                        <div class="col-4 text-start">
                                            <input type="text" readonly class="form-control-plaintext  text-muted" id="kode-instrumen" value="<?= $rIns['kodeInstrumen']; ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center ">
                                        <div class="col-4 text-end">
                                            <label for="kode-instrumen" class="form-control-plaintext col-sm-12  text-muted">Tgl Pengisian Survei : </label>
                                        </div>
                                        <div class="col-4 text-start">
                                            <input type="text" readonly class="form-control-plaintext  text-muted" id="kode-instrumen" value="nnn" disabled>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- section table 1 -->

                            <div class="table-responsive">
                                <table id="tableResponden" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Butir Pernyataan</th>
                                            <th>Tingkat Kepuasan</th>
                                            <th>Skor</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ButirbyUserId as $rId) :  ?>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <?= $rId['butir']; ?>
                                                </td>
                                                <td>Sangat Baik</td>
                                                <td>4</td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endforeach; ?>
                        </section>

                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>