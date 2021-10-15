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
    <?= $instrumen['id']; ?>
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
                        <span>Tampilkan chart di website:</span>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        </div>

                    </div>
                </div>

                <!-- Chart -->
                <figure class="highcharts-figure">
                    <div id="container-chart-instrumen"></div>

                    <div class="container-fluid my-5">
                        <div class="">
                            <div class="">
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
    <!-- /.content -->
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



<?= $this->endSection(); ?>