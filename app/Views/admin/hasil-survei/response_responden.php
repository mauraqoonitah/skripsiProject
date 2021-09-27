<?= $this->extend('admin/templates/index'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

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
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- list tanggapan per instrumen -->
                <div class="col-lg-9">
                    <div class="accordion accordion-flush mx-auto" id="accordionExample">
                        <?php foreach ($responseInsId as $rIns) : ?>
                            <div class="accordion-item mb-5">
                                <!-- header collapse - kategori  -->
                                <h5 class="accordion-header" id="accord-<?= $rIns['instrumenID']; ?>">
                                    <div class="accordion-button rounded d-flex align-items-center col-lg-12 " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $rIns['instrumenID']; ?>" aria-expanded="true" aria-controls="collapse-<?= $rIns['instrumenID']; ?>">
                                        <span class="fw-bold fs-6"><?= $rIns['kodeInstrumen']; ?> - <?= $rIns['namaInstrumen']; ?></span>
                                    </div>
                                </h5>
                                <!-- ./header collapse - kategori  -->

                                <!-- content collapse - kategori  -->
                                <div id="collapse-<?= $rIns['instrumenID']; ?>" class="accordion-collapse collapse " aria-labelledby="accord-<?= $rIns['instrumenID']; ?>">
                                    <div class="accordion-body">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <section>
                                                    <!-- <div class="card container bg-light text-dark py-2 mt-2 mb-4">
                                                        <div class="container text-center">
                                                            <input type="text" readonly class="form-control-plaintext fw-bold text-center text-uppercase" id="instrumen" value="< ? = $rIns['namaInstrumen']; ?>" disabled>
                                                        </div>
                                                    </div> -->

                                                    <div class="container mb-3">
                                                        <div class="row justify-content-center ">
                                                            <span class="text-muted">Tgl Pengisian Survei : </span>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-body table-responsive p-0">
                                                            <table class="table table-bordered table-bordered table-hover text-wrap">
                                                                <thead class="bg-thead">
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Butir Pernyataan</th>
                                                                        <th>Jawaban</th>
                                                                        <th class="text-center">Tingkat Kepuasan</th>
                                                                    </tr>
                                                                </thead>


                                                                <tbody>
                                                                    <?php foreach ($respondenData as $res) :  ?>
                                                                        <?php $userID = $res['userID'] ?>
                                                                    <?php endforeach; ?>

                                                                    <?php
                                                                    $i = 1;
                                                                    $insID = $rIns['instrumenID'];
                                                                    $db = db_connect();
                                                                    $pernyataanModel = model('PernyataanModel');
                                                                    $this->pernyataanModel = new $pernyataanModel;
                                                                    $sql =  $this->pernyataanModel->getButirByInstrumenID($insID);

                                                                    foreach ($sql as $row) : ?>
                                                                        <?php $questionID = $row['questionID']; ?>
                                                                        <tr>
                                                                            <td class="text-center"><?= $i++; ?></td>
                                                                            <td>
                                                                                <?= $row['butir']; ?>
                                                                            </td>

                                                                            <?php
                                                                            // get jawaban by questionID
                                                                            $responseModel = model('ResponseModel');
                                                                            $this->responseModel = new $responseModel;
                                                                            $sqlResponse =  $this->responseModel->getResponseByQuestID($userID, $questionID); ?>
                                                                            <td class="text-center">
                                                                                <?php foreach ($sqlResponse as $response) : ?>
                                                                                    <?= $response['jawaban']; ?>
                                                                                <?php endforeach; ?>
                                                                            </td>
                                                                            <td>Sangat Baik</td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#tableResponden-<?= $rIns['instrumenID']; ?>').DataTable({
                                                                "pageLength": 25,
                                                            });
                                                        });
                                                    </script>
                                                </section>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <!-- ./content collapse - kategori  -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- ./list tanggapan per instrumen -->

                <!-- data diri responden -->
                <div class="col-lg-3 col-sm-6">
                    <div class="row">
                        <div class="card card-outline card-primary">
                            <div class="card-header bg-white pt-4">
                                <h3 class="card-title">Data Diri</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php foreach ($respondenData as $res) :  ?>
                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Nama Lengkap</strong>

                                    <p class="text-muted scroll-horiz">
                                        <?= $res['fullname']; ?>
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Email</strong>

                                    <p class="text-muted scroll-horiz"><?= $res['email']; ?></p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> No.Identitas</strong>
                                    <p class="text-muted"> <?= $res['noIdentitas']; ?> -</p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Sebagai</strong>

                                    <p class="text-muted"><?= $res['role']; ?></p>
                                    <p class="text-muted">userID <?= $userID = $res['userID']; ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./data diri responden -->
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>