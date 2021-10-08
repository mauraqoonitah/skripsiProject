<?= $this->extend('admin/templates/index'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<?= $this->section('admin-body-content'); ?>

<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Data Hasil Survei Kepuasan <br>(Per-Responden)</h1>
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

                                <!-- content collapse - kategori  -->
                                <div id="collapse-<?= $rIns['instrumenID']; ?>" class="accordion-collapse collapse " aria-labelledby="accord-<?= $rIns['instrumenID']; ?>">
                                    <div class="accordion-body">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <section>

                                                    <!-- STACKED BAR CHART -->
                                                    <div class="my-4">
                                                        <div class="chart">
                                                            <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"> </canvas>
                                                        </div>
                                                    </div>
                                                    <div class="container mb-3">
                                                        <div class="row justify-content-center ">
                                                            <?php foreach ($respondenData as $res) :  ?>
                                                                <?php $userID = $res['userID'] ?>

                                                                <span class="text-muted">Tgl Pengisian Survei : <?= $res['created_at'] ?></span>

                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>

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