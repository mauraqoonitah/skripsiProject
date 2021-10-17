<?= $this->extend('admin/templates/index'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<?= $this->section('admin-body-content'); ?>
<?php

use CodeIgniter\I18n\Time;
?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Hasil Survei Kepuasan <br>(Responden)</h1>
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


            <!-- data diri responden -->
            <div class="row mb-4 col-lg-6">
                <div class="card card-outline card-primary">
                    <div class="card-header bg-white">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <?php foreach ($respondenDataDiri as $res) :  ?>
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="<?= base_url(); ?>/../../img/user_profile.png" alt="user image">
                                    <span class="username">
                                        <span class="text-rouge fs-5"><?= $res['fullname']; ?></span>
                                    </span>
                                    <span class="description">Last Activity -
                                        <?php foreach ($lastActivity as $last) : ?>
                                            <?php
                                            $time = Time::parse($last->date);
                                            echo $time->humanize();
                                            ?>
                                        <?php endforeach; ?>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row p-0 m-0">
                            <span class="col-sm-4 col-form-label p-0"><strong>Username</strong></span>
                            <span class="col-sm-8 col-form-label p-0">
                                <?= $res['username']; ?>
                            </span>
                        </div>
                        <hr>
                        <div class="form-group row p-0 m-0">
                            <span class="col-sm-4 col-form-label p-0"><strong>Email</strong></span>
                            <span class="col-sm-8 col-form-label p-0">
                                <?= $res['email']; ?>
                            </span>
                        </div>
                        <hr>
                        <div class="form-group row p-0 m-0">
                            <span class="col-sm-4 col-form-label p-0"><strong>Role</strong></span>
                            <span class="col-sm-8 col-form-label p-0">
                                <?= $res['role']; ?>
                            </span>
                        </div>
                        <hr>

                        <p class="text-muted">userID <?= $userID = $res['userID']; ?></p>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- ./data diri responden -->

            <!-- list tanggapan per instrumen -->
            <div class="accordion accordion-flush mx-auto">
                <?php foreach ($responseInsId as $rIns) : ?>
                    <div class="accordion-item mb-5">
                        <!-- header collapse - kategori  -->
                        <h5 class="accordion-header" id="accord-<?= $rIns['instrumenID']; ?>">
                            <div class="accordion-button rounded d-flex align-items-center col-lg-12 " id="accordionResponse" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $rIns['instrumenID']; ?>" aria-expanded="true" aria-controls="collapse-<?= $rIns['instrumenID']; ?>">
                                <span class="fw-bold fs-6"><?= $rIns['kodeInstrumen']; ?> - <?= $rIns['namaInstrumen']; ?></span>
                            </div>
                        </h5>
                        <!-- ./header collapse - kategori  -->
                        <div class="container my-3">
                            <span class="text-muted mt-2">Tgl Pengisian :
                                <?php
                                $date_created_response = Time::parse($rIns['created_at'], 'Asia/Jakarta');
                                echo $date_created_response->toLocalizedString('d MMM yyyy, HH:mm');
                                ?>
                            </span>
                        </div>

                        <!-- content collapse - kategori  -->
                        <div id="collapse-<?= $rIns['instrumenID']; ?>" class="accordion-collapse collapse " aria-labelledby="accord-<?= $rIns['instrumenID']; ?>">
                            <div class="accordion-body">
                                <section class="content">
                                    <div class="container-fluid">
                                        <section>

                                            <!-- STACKED BAR CHART -->
                                            <!-- <div class="my-4">
                                                        <div class="chart">
                                                            <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"> </canvas>
                                                        </div>
                                                    </div> -->

                                            <table id="tableResponden" class="table table-bordered table-bordered table-hover text-wrap">
                                                <thead class="bg-thead">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Butir Pernyataan</th>
                                                        <th>Jawaban</th>
                                                        <th class="text-center">Tingkat Kepuasan</th>
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
                                                        <?php $questionID = $row['questionID']; ?>
                                                        <tr>
                                                            <td class="text-center"><?= $i++; ?></td>
                                                            <td>
                                                                <?= $row['butir']; ?>
                                                            </td>

                                                            <?php foreach ($respondenDataDiri as $res) :  ?>
                                                                <?php $userID = $res['userID'] ?>
                                                            <?php endforeach; ?>

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
                                        </section>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- ./content collapse - kategori  -->
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- ./list tanggapan per instrumen -->
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Tidak Puas', 'Sangat Tidak Puas'],
            datasets: [{
                barPercentage: 0.8,
                label: '# Tingkat Kepuasan',
                data: [
                    1, 2, 3, 4, 5
                ],
                backgroundColor: [
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 159, 64, 1)',
                ],
                borderWidth: 1,
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,

            scales: {
                y: {
                    beginAtZero: true
                }
            },
        }
    });
</script>


<?= $this->endSection(); ?>