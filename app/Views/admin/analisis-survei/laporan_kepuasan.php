<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>

<?php

use CodeIgniter\I18n\Time;
?>

<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="fw-bold"> Laporan Analisis Survei Instrumen Kepuasan</h1>
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

        <?php if (empty($responsePertanyaan)) :  ?>
            <div class="row mb-4">
                <div class="mx-auto col-lg-3 col-sm-3">
                    <img src="<?= base_url(); ?>/img/undraw_void.svg" class="img-fluid" />
                </div>
                <p class="text-center my-4 fs-5 text-rouge"> Butir Pernyataan atau Tanggapan belum tersedia.</p>
            </div>

        <?php else : ?>
            <div class="container-fluid">
                <div class="container">
                    <div class="row justify-content-center ">

                        <div class="col-12">
                            <!-- flash success tambah data  -->
                            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
                            <!-- ./ flash success tambah data  -->


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

                            <div class="container pb-3 my-3 obyek-list-no-hov">
                                <h5 class="text-rouge text-center"> <?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?></h5>
                            </div>
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active btn btn-app" id="laporan-tabs-info-tab" data-toggle="pill" href="#laporan-info-upload" role="tab" aria-controls="laporan-tabs-info" aria-selected="false"><i class="fas fa-info"></i>Info</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link btn btn-app" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true"><i class="fas fa-file-alt"></i>Dokumen</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link btn btn-app" id="laporan-tabs-upload-tab" data-toggle="pill" href="#laporan-tabs-upload" role="tab" aria-controls="laporan-tabs-upload" aria-selected="false"><i class="fas fa-upload"></i>Upload</a>
                                        </li>


                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">

                                        <!-- content tab info laporan -->
                                        <div class="tab-pane fade show active" id="laporan-info-upload" role="tabpanel" aria-labelledby="laporan-tabs-info-tab">

                                            <form action="<?= base_url(); ?>" method="post" enctype="multipart/form-data">

                                                <?= csrf_field(); ?>
                                                <div class="container py-4">
                                                    <label for="formFileLg" class="form-label fs-6">Info Hasil Survei Kepuasan pada Instrumen <?= $kodeInstrumen; ?></label>
                                                    <ul class="todo-list" data-widget="todo-list">
                                                        <li>
                                                            <span class="badge rounded-pill badge-cosmic"><?= $jumlahRespondenIns; ?></span>
                                                            <span class="text">Jumlah Responden</span>
                                                        </li>
                                                        <li>
                                                            <span class="badge rounded-pill badge-cosmic"><?= $jumlahTanggapanIns; ?></span>
                                                            <span class="text">Jumlah Tanggapan</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- ./ content tab info laporan -->

                                        <!-- content tab store dokumen -->
                                        <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <div class="container py-4">
                                                <label class="form-label fs-6">Dokumen Laporan Analisis Instrumen <?= $kodeInstrumen; ?></label>

                                                <ul class="list-unstyled">
                                                    <?php if (empty($getLaporanInstrumen)) :  ?>
                                                        <span class="text-rouge"> <i>Dokumen belum dibuat.</span></i>
                                                    <?php endif; ?>
                                                    <?php foreach ($getLaporanInstrumen as $laporanIns) :  ?>
                                                        <li>
                                                            <div class="row mt-3">
                                                                <div class="col-2 text-center">
                                                                    <span style="font-size: 48px; color: Dodgerblue;">
                                                                        <i class="far fa-file"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="col-10 ">
                                                                    <a href="<?= base_url(); ?>/dokumenLaporan/<?= $laporanIns['laporanInstrumen']; ?>" class="btn-link text-dark mt-4" style="font-size: larger;"> <?= $laporanIns['laporanInstrumen']; ?></a>

                                                                    <br>
                                                                    <?php
                                                                    $timeCreated = Time::parse($laporanIns['created_at'], 'Asia/Jakarta');
                                                                    $timeUpdated = Time::parse($laporanIns['updated_at'], 'Asia/Jakarta');
                                                                    ?>
                                                                    <span class="text-muted small">Dibuat pada <?= $timeCreated->toLocalizedString('HH:mm, d MMM yyyy'); ?></span>

                                                                    <?php if ($laporanIns['created_at'] !== $laporanIns['updated_at']) : ?>
                                                                        <br>
                                                                        <span class="text-muted small">Diubah pada <?= $timeUpdated->toLocalizedString('HH:mm, d MMM yyyy'); ?></span>
                                                                    <?php endif; ?>

                                                                    <div class="mt-2">
                                                                        <span class="mr-3">
                                                                            <a href="<?= base_url(); ?>/admin/editLaporanInstrumen/<?= $laporanIns['id']; ?>" class="link-black text-sm text-decoration-none"><i class="fas fa-edit mr-1"></i> Edit</a>
                                                                        </span>
                                                                        <span class="mr-3">
                                                                            <a href="<?= base_url(); ?>/dokumenLaporan/<?= $laporanIns['laporanInstrumen']; ?>" target="_blank" class="link-black text-sm text-decoration-none"><i class="fas fa-download mr-1"></i> Download</a>
                                                                        </span>
                                                                        <span class="mr-3">
                                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-laporanIns-<?= $laporanIns['id']; ?>" class="link-black text-sm text-decoration-none"><i class="fas fa-trash-alt mr-1"></i> Hapus</a>
                                                                        </span>
                                                                    </div>
                                                                    <!-- modal hapus laporan file instrumen -->
                                                                    <div class="modal fade" id="modal-delete-laporanIns-<?= $laporanIns['id']; ?>" tabindex="-1" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered ">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-cosmic text-white">
                                                                                    <h5 class="modal-title fw-bold">Hapus File</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body text-center">
                                                                                    <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                                    Yakin hapus file <?= $laporanIns['laporanInstrumen']; ?> ?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                                    <form action="<?= base_url(); ?>/admin/deleteLaporanInstrumen/<?= $laporanIns['id']; ?>" method="post">
                                                                                        <?= csrf_field(); ?>
                                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                                    </form>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end modal hapus laporan file instrumen -->

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <hr>
                                                    <?php endforeach; ?>
                                                </ul>

                                            </div>
                                        </div>
                                        <!-- ./content tab store dokumen -->


                                        <!-- content tab upload dokumen -->
                                        <div class="tab-pane fade" id="laporan-tabs-upload" role="tabpanel" aria-labelledby="laporan-tabs-upload-tab">

                                            <form action="<?= base_url(); ?>/admin/saveLaporanInstrumen/<?= $instrumenID; ?>" method="post" enctype="multipart/form-data">

                                                <?= csrf_field(); ?>
                                                <div class="container py-4">
                                                    <label for="formFileLg" class="form-label fs-6">Upload Dokumen Laporan Instrumen <?= $kodeInstrumen; ?></label>
                                                    <input class="form-control form-control-lg fs-6 <?= ($validation->hasError('laporanInstrumen')) ? 'is-invalid' : ''; ?>" id="formFileLg" type="file" id="laporanInstrumen" name="laporanInstrumen">
                                                    <div class=" invalid-feedback">
                                                        <?= $validation->getError('laporanInstrumen'); ?>
                                                    </div>
                                                    <input type="hidden" name="instrumenID" value="<?= $instrumenID; ?>">

                                                    <button type="submit" class="btn btn-primary mb-3">Upload</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- ./ content tab upload dokumen -->



                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>

                <div class="container py-3 my-3">
                    <h5 class="text-rouge text-center">Hasil Tingkat Kepuasan per-Butir Pernyataan</h5>
                </div>
                <!-- Chart -->
                <div class="container">
                    <div class="card">
                        <figure class="highcharts-figure">
                            <div id="container-chart-instrumen"></div>

                            <div class="container-fluid my-5">
                                <div class="table-responsive">
                                    <table id="datatable-chart-instrumen" class="table table-bordered table-hover table-striped border border-2">
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
                        </figure>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </section>
    <!-- /.content -->
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php if (empty($responsePertanyaan)) :  ?>
<?php else : ?>
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
<?php endif; ?>

<?= $this->endSection(); ?>