<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if (empty($responsePertanyaan)) : ?>

    <section>
        <div class="bd-masthead mb-3">
            <div class="container px-4">
                <div class="row my-4 pt-3">
                    <div class="mx-auto col-lg-3 col-sm-3">
                        <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                    </div>
                    <p class="text-center my-4 fs-5 text-rouge"> Data tidak tersedia.</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="<?= base_url(); ?>/#instrumen">
                        <button type="button" class="btn btn-cosmic mr-3">
                            <i class="fas fa-chevron-left mr-3"></i> Kembali
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </section>

<?php else : ?>
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
            <div class="bd-masthead" id="content">
                <div class="container">
                    <div class="row align-items-lg-center obyek-list-no-hov">
                        <h4 class="text-rouge text-center">Hasil Survei Kepuasan</h4>
                        <h5 class="text-cosmic"> <?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?></h5>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- BAR CHART -->
            <div class="container">
                <div class="card col-6 mx-auto">
                    <div class="card-header text-center fw-bold bg-rouge">
                        Tanggapan Tingkat Kepuasan pada Instrumen
                    </div>
                    <div class="card-body">
                        <div class="container mb-5">
                            <span class="card-title text-muted fs-6">Jumlah Responden : <?= $jumlahRespondenIns; ?> </span><br>
                            <span class="card-title text-muted fs-6">Terjawab : x </span>
                        </div>
                        <canvas id="chart-hasil-instrumen"></canvas>
                    </div>
                </div>

                <div class="container mt-5 pt-5">
                    <div class="card">
                        <div class="card-header text-center fw-bold bg-rouge">
                            Tingkat Kepuasan pada Butir Pernyataan Instrumen
                        </div>
                        <div class="card-body">
                            <div class="container mb-5">
                                <span class="card-title text-muted fs-6">Jumlah Responden : <?= $jumlahRespondenIns; ?> </span><br>
                                <span class="card-title text-muted fs-6">Terjawab : x </span>
                            </div>
                            <!-- highchart per butir pernyataan -->
                            <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script src="https://code.highcharts.com/modules/data.js"></script>
                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                            <figure class="highcharts-figure">
                                <div id="container-highcharts" class="m-3"></div>

                                <div class="content">
                                    <div class="container">
                                        <table id="datatable-chart-instrumen" class="table table-bordered table-hover mb-5 mt-3 border rounded-3 border-secondary">
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
                                    </div>
                                </div>

                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <button id="scrollToTopBtn" class=""><i class="fas fa-angle-double-up"></i></button>
    </section>


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

<?php endif; ?>
<?= $this->endSection(); ?>