<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

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


<section class=" d-flex justify-content-center">
    <div class="bd-masthead mb-3" id="content">
        <div class="container px-4 px-md-3">
            <div class="row align-items-lg-center obyek-list-no-hov">
                <h4 class="text-rouge text-center">Hasil Survei Kepuasan</h4>
                <h5 class="text-cosmic"> <?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?></h5>
            </div>
            <span class="text-muted fs-6">Jumlah Responden : <?= $jumlahRespondenIns; ?> </span>

        </div>
    </div>
</section>

<!-- BAR CHART -->
<div class="col-lg-12">
    <div class="container">

        <div class="col-6 mx-auto">
            <canvas id="chart-hasil-instrumen" width="400" height="400"></canvas>
        </div>

        <div class="col-12 mt-5">

            <!-- highchart per butir pernyataan -->
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/data.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <figure class="highcharts-figure">
                <div id="container-highcharts" class="border rounded-3 m-3"></div>
                <table id="datatable-chart-instrumen" class="table table-bordered table-hover my-5 border rounded-3 border-dark">
                    <thead class="bg-rouge">
                        <tr class="text-center">
                            <th>Butir Pernyataan</th>
                            <th>Sangat Puas</th>
                            <th>Puas</th>
                            <th>Cukup Puas</th>
                            <th>Tidak Puas</th>
                            <th>Sangat Tidak Puas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($responsePertanyaan as $rID) :  ?>
                            <?php
                            $skor5 = 0;
                            $skor4 = 0;
                            $skor3 = 0;
                            $skor2 = 0;
                            $skor1 = 0;
                            $skorNull = '';
                            ?>
                            <tr>
                                <th>
                                    <?php $questionID = $rID['id']; ?>
                                    <?= $rID['butir']; ?>
                                </th>
                                <?php
                                // get jawaban by questionID
                                $responseModel = model('ResponseModel');
                                $this->responseModel = new $responseModel;
                                $sqlResponse =  $this->responseModel->getAllResponses($instrumenID, $questionID); ?>
                                <td class="text-center">
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
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                    <?= $skor4; ?>
                                </td>
                                <td class="text-center">
                                    <?php foreach ($sqlResponse as $response) : ?>
                                        <?php $jawaban = $response['jawaban']; ?>
                                        <?php $questID = $response['questionID']; ?>
                                        <?php if ($jawaban == '3' && $questID == $questionID) {
                                            $skor3++;
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                    <?= $skor3; ?>
                                </td>
                                <td class="text-center">
                                    <?php foreach ($sqlResponse as $response) : ?>
                                        <?php $jawaban = $response['jawaban']; ?>
                                        <?php $questID = $response['questionID']; ?>
                                        <?php if ($jawaban == '2' && $questID == $questionID) {
                                            $skor2++;
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                    <?= $skor2; ?>
                                </td>
                                <td class="text-center">
                                    <?php foreach ($sqlResponse as $response) : ?>
                                        <?php $jawaban = $response['jawaban']; ?>
                                        <?php $questID = $response['questionID']; ?>
                                        <?php if ($jawaban == '1' && $questID == $questionID) {
                                            $skor1++;
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                    <?= $skor1; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </figure>
        </div>
    </div>

    <!-- pie chart per instrumen -->
    <script>
        var ctx = document.getElementById('chart-hasil-instrumen').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',

            data: {
                labels: [
                    'Sangat Puas',
                    'Puas',
                    'Cukup Puas',
                    'Tidak Puas',
                    'Sangat Tidak Puas'
                ],
                datasets: [{
                    label: '# Jumlah Tanggapan',
                    data: [
                        <?= $totalSkor5; ?>,
                        <?= $totalSkor4; ?>,
                        <?= $totalSkor3; ?>,
                        <?= $totalSkor2; ?>,
                        <?= $totalSkor1; ?>,
                    ],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)',
                        'rgba(255, 99, 132, 0.5)',

                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',

                    ],
                    borderWidth: 1,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Jumlah Tanggapan Tingkat Kepuasan Instrumen'
                    }
                }
            },

        });
    </script>

    <!-- chart per butir pernyataan -->
    <script type="text/javascript">
        Highcharts.chart('container-highcharts', {
            data: {
                table: 'datatable-chart-instrumen'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Tingkat Kepuasan Butir Pernyataan'
            },
            subtitle: {
                text: '<?= $namaInstrumen; ?>'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Jumlah Tanggapan'
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + '</b> : ' +
                        this.point.y;
                }
            },
        });
    </script>


</div>

<button id="scrollToTopBtn" class=""><i class="fas fa-angle-double-up"></i></button>
</section>

<?= $this->endSection(); ?>