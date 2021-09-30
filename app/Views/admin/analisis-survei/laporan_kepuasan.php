<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold"> Hasil Survei Instrumen Kepuasan</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- back to previous page -->
        <a href="<?= base_url(); ?>/admin/laporanInstrumen">
            <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
        </a>
    </section>

    <!-- Main content -->

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
                    <h6> <?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?></h6>
                </div>

                <!-- Chart -->
                <figure class="highcharts-figure">
                    <div id="container-chart-instrumen"></div>
                    <p class="highcharts-description my-4">
                        Description
                    </p>
                    <div class="table-responsive">
                        <table id="datatable-chart-instrumen" class="display table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <td>Sangat Puas</td>
                                    <td>Puas</td>
                                    <td>Cukup Puas</td>
                                    <td>Tidak Puas</td>
                                    <td>Sangat Tidak Puas</td>
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
                                        <td>
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
                                        <td>
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
                                        <td>
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
                                        <td>
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
                                        <td>
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
                </figure>

                <!-- DataTables Example -->
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
                                                    <?php $jawaban = $response['jawaban']; ?> ,
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
        </div>
    </section>
    <!-- /.content -->
</div>

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
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
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
<!-- /.content -->
</div>

<?= $this->endSection(); ?>