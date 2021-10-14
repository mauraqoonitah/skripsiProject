<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">(bugs) Data Hasil Survei Kepuasan<br> (Per-Instrumen)</h1>
                    <p>kalo ada duplicate instrumen dari user yg sama, dia gmn ya</p>
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
            <div class="card">
                <div class="card-header text-rouge d-flex align-items-center mb-3 py-4">
                    <h5> <?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?></h5>
                </div>

                <div class="container">
                    <div class="row justify-content-center ">
                        <span class="text-muted fs-6">Jumlah Responden : <?= $jumlahRespondenIns; ?> </span>
                    </div>
                </div>

                <!-- STACKED BAR CHART -->
                <div class="col-lg-8 mx-auto mb-5 mt-3">
                    <div class="chart">
                        <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"> </canvas>
                    </div>
                </div>

                <!-- DataTables Example -->
                <div class="card-body m-5">
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
                                        <th>Sangat Puas</th>
                                        <th>Puas</th>
                                        <th>Cukup Puas</th>
                                        <th>Tidak Puas</th>
                                        <th>Sangat Tidak Puas</th>
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
                                            <?php foreach ($sqlResponse as $response) : ?>
                                                <?php $jawaban = $response['jawaban']; ?>
                                            <?php endforeach; ?>
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
                                    <tr class="text-center">
                                        <th></th>
                                        <th class="text-center">Total Tanggapan</th>
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



    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-rouge d-flex align-items-center mb-3 py-4">
                    <h5> <?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?></h5>
                </div>

                <!-- Chart -->
                <figure class="highcharts-figure">
                    <div id="container-chart-instrumen"></div>

                    <div class="container-fluid my-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable-chart-instrumen" class="table table-bordered table-hover table-striped">
                                        <thead>
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
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </section>



</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    Highcharts.chart('container-chart-instrumen', {
        data: {
            table: 'datatable-chart-instrumen'
        },
        chart: {
            type: 'column',
            scrollablePlotArea: {
                minWidth: 900,
                scrollPositionX: 1
            }

        },
        title: {
            text: 'Tingkat Kepuasan'
        },
        subtitle: {
            text: '<?= $namaInstrumen; ?>'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b> : ' +
                    this.point.y;
            }
        },
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        align: 'center',
                        verticalAlign: 'bottom',
                        layout: 'horizontal'
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -5
                        },
                        title: {
                            text: null
                        }
                    },
                    subtitle: {
                        text: null
                    },
                    credits: {
                        enabled: false
                    }
                }
            }]
        }
    });
</script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Tidak Puas', 'Sangat Tidak Puas'],
            datasets: [{
                barPercentage: 0.8,
                label: '# Tanggapan',
                data: [
                    <?= $totalSkor5; ?>,
                    <?= $totalSkor4; ?>,
                    <?= $totalSkor3; ?>,
                    <?= $totalSkor2; ?>,
                    <?= $totalSkor1; ?>,
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

            plugins: {
                title: {
                    display: true,
                    text: '<?= $namaInstrumen; ?>',
                    padding: {
                        top: 10,
                        bottom: 30
                    }
                }
            }

        }
    });
</script>



<?= $this->endSection(); ?>