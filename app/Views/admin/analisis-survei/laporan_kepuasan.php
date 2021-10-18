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
    <?php foreach ($responsePertanyaan as $rID) : ?>
        <?php
        $namaInstrumen = $rID['namaInstrumen'];
        $kodeInstrumen = $rID['kodeInstrumen'];
        $questionID = $rID['questionID'];
        $instrumenID = $rID['instrumenID'];
        ?>
    <?php endforeach; ?>

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

                        <div class="row">
                            <div class="col-12">
                                <!-- flash gagal tambah data  -->
                                <?php if (session()->getFlashdata('messageError')) :  ?>
                                    <div class="alert alert-danger d-flex align-items-center fw-bold" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </symbol>
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        <div>
                                            <?= session()->getFlashData('messageError'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- ./ flash gagal tambah data  -->

                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active btn btn-app" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true"><i class="fas fa-file-alt"></i>Dokumen</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-app" id="laporan-tabs-create-tab" data-toggle="pill" href="#laporan-tabs-create" role="tab" aria-controls="laporan-tabs-create" aria-selected="false"><i class="fas fa-plus-square"></i>Create</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-app" id="laporan-tabs-upload-tab" data-toggle="pill" href="#laporan-tabs-upload" role="tab" aria-controls="laporan-tabs-upload" aria-selected="false"><i class="fas fa-upload"></i>Upload</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-four-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                                Dokumen yang tersimpan
                                            </div>
                                            <div class="tab-pane fade" id="laporan-tabs-upload" role="tabpanel" aria-labelledby="laporan-tabs-upload-tab">

                                                <form action="<?= base_url(); ?>/admin/saveLaporanInstrumen/<?= $instrumenID; ?>" method="post" enctype="multipart/form-data">

                                                    <?= csrf_field(); ?>
                                                    <div class="container">
                                                        <label for="formFileLg" class="form-label">Large file input example</label>
                                                        <input class="form-control form-control-lg fs-6 <?= ($validation->hasError('uploadLaporanIns')) ? 'is-invalid' : ''; ?>" id="formFileLg" type="file" id="uploadLaporanIns" name="uploadLaporanIns">
                                                        <div class=" invalid-feedback">
                                                            <?= $validation->getError('uploadLaporanIns'); ?>
                                                        </div>

                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-primary mb-3">Upload</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane fade" id="laporan-tabs-create" role="tabpanel" aria-labelledby="laporan-tabs-create-tab">
                                                create laporan
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>



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