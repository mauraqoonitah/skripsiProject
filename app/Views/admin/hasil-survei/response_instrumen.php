<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Tanggapan Survei Per-Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
                <a href="<?= base_url(); ?>/admin/hasilSurveiInstrumen">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <?php foreach ($responsePertanyaan as $rID) {
        $namaInstrumen = $rID['namaInstrumen'];
        $kodeInstrumen = $rID['kodeInstrumen'];
        $questionID = $rID['questionID'];
        $instrumenID = $rID['instrumenID'];
    }  ?>

    <?php
    $totalSkor5 = 0;
    $totalSkor4 = 0;
    $totalSkor3 = 0;
    $totalSkor2 = 0;
    $totalSkor1 = 0;
    foreach ($responseJawaban as $rJwb) : ?>
        <?php
        $jawaban = $rJwb['jawaban'];

        if ($jawaban == '5') {
            $totalSkor5++;
        }
        if ($jawaban == '4') {
            $totalSkor4++;
        }
        if ($jawaban == '3') {
            $totalSkor3++;
        }
        if ($jawaban == '2') {
            // $skor2 = count(array($jawaban));
            $totalSkor2++;
        }
        if ($jawaban == '1') {
            $totalSkor1++;
        }
        ?>

    <?php endforeach; ?>





    <section class="content">
        <div class="container-fluid">

            <div class="card container bg-light text-dark py-4">
                <div class="container text-center">
                    <input type="text" readonly class="form-control-plaintext fw-bold text-center text-uppercase" id="instrumen" value="<?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?>" disabled>
                </div>

                <div class="container">
                    <div class="row justify-content-center ">
                        <span class="text-muted text-center">Jumlah Responden : <?= $jumlahRespondenIns; ?> </span>
                    </div>
                </div>

            </div>


            <!-- STACKED BAR CHART -->
            <div class="card shadow my-5">
                <div class="card-header">
                    <h5 class="card-title">Hasil Survei Kepuasan</h5>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"> </canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DataTales Example -->

            <div class="card shadow mb-4">
                <div class="card-body py-3">
                    <!-- section table 1-->
                    <section>
                        <!-- section table 1 -->
                        <div class="table-responsive ">
                            <table id="table-kelola-survei" class="display table-bordered table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th rowspan="2"> No.</th>
                                        <th rowspan="2">Butir Pernyataan</th>
                                        <th colspan="5" class="text-center">Jumlah Tanggapan</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>print jwbn</th>
                                        <th>Sangat Puas (5)</th>
                                        <th>Puas (4)</th>
                                        <th>Cukup Puas (3)</th>
                                        <th>Tidak Puas (2)</th>
                                        <th>Sangat Tidak Puas (1)</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php $i = 1; ?>
                                    <?php foreach ($responsePertanyaan as $rID) :  ?>
                                        <tr>
                                            <td class="text-center"><?= $i++; ?></td>
                                            <td><?= $questionID = $rID['id']; ?> - <?= $rID['butir']; ?> </td>
                                            <?php
                                            // get jawaban by questionID
                                            $responseModel = model('ResponseModel');
                                            $this->responseModel = new $responseModel;
                                            $sqlResponse =  $this->responseModel->getAllResponses($instrumenID, $questionID); ?>
                                            <td class="text-center">
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?= $jawaban = $response['jawaban']; ?> ,
                                                <?php endforeach; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $skor5 = 0;
                                                $skor4 = 0;
                                                $skor3 = 0;
                                                $skor2 = 0;
                                                $skor1 = 0;
                                                $skorNull = '';
                                                ?>
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '5' && $questID == $questionID) {
                                                        $skor5++;
                                                    }
                                                    ?>
                                                <?php endforeach; ?>
                                                <?= $skor5; ?>
                                            </td>

                                            <td class="text-center">
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '4' && $questID == $questionID) {
                                                        $skor4++;
                                                    } ?>
                                                <?php endforeach; ?>
                                                <?= $skor4; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '3' && $questID == $questionID) {
                                                        $skor3++;
                                                    } ?>
                                                <?php endforeach; ?>
                                                <?= $skor3; ?>
                                            </td>
                                            <td class="text-center">

                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '2' && $questID == $questionID) {
                                                        $skor2++;
                                                    } ?>
                                                <?php endforeach; ?>
                                                <?= $skor2; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '1' && $questID == $questionID) {
                                                        $skor1++;
                                                    } ?>
                                                <?php endforeach; ?>
                                                <?= $skor1; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th colspan="2" rowspan="2" class="text-center">Total Tingkat Kepuasan Instrumen</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th> total</th>
                                        <th> <?= $totalSkor5 ?></th>
                                        <th><?= $totalSkor4 ?></th>
                                        <th><?= $totalSkor3 ?></th>
                                        <th><?= $totalSkor2 ?></th>
                                        <th><?= $totalSkor1 ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </section>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Tidak Puas', 'Sangat Tidak Puas'],
            datasets: [{
                label: '# Tingkat Kepuasan',
                data: [
                    <?= $totalSkor5; ?>,
                    <?= $totalSkor4; ?>,
                    <?= $totalSkor3; ?>,
                    <?= $totalSkor2; ?>,
                    <?= $totalSkor1; ?>,
                ],
                backgroundColor: [
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 159, 64, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,

            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<?= $this->endSection(); ?>