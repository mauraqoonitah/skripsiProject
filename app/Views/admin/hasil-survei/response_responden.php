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
            <?php foreach ($responseInsId as $rIns) : ?>
                <div class="card shadow my-5">
                    <h5 class="card-header"> Hasil Tanggapan</h5>
                    <div class="card-body py-3">
                        <!-- section table 1-->
                        <section>
                            <div class="card container bg-light text-dark py-2 mt-2 mb-4">

                                <div class="container text-center">
                                    <input type="text" readonly class="form-control-plaintext fw-bold text-center text-uppercase" id="instrumen" value="<?= $rIns['namaInstrumen']; ?>" disabled>
                                </div>

                                <div class="container">
                                    <div class="row justify-content-center ">
                                        <span class="text-muted text-center">Kode Instrumen : <?= $rIns['kodeInstrumen']; ?> </span>
                                    </div>
                                </div>

                            </div>

                            <div class="container">
                                <div class="row justify-content-center ">
                                    <span class="text-muted text-center">Tgl Pengisian Survei : </span>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row justify-content-center ">
                                    <span class="text-muted text-center">Instrumen ID : <?= $rIns['instrumenID']; ?> </span>
                                </div>
                            </div>

                            <!-- section table 1 -->
                            <div class="table-responsive">
                                <table id="tableResponden" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Butir Pernyataan</th>
                                            <th>Jawaban</th>
                                            <th>Tingkat Kepuasan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        $insID = $rIns['instrumenID'];
                                        $db = db_connect();
                                        $pernyataanModel = model('PernyataanModel');
                                        $this->pernyataanModel = new $pernyataanModel;
                                        $sql =  $this->pernyataanModel->getButirByInstrumenID($insID);

                                        foreach ($sql as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?= $i++; ?></td>
                                                <td>
                                                    <?= $row['butir']; ?>
                                                </td>
                                                <td>4 n</td>
                                                <td>Sangat Baik n</td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>