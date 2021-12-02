<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>

<!-- flash success tambah data  -->
<div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
<!-- ./ flash success tambah data  -->

<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Hasil Survei Kepuasan - Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
                <a href="<?= base_url(); ?>/admin/hasil-survei/instrumen">
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
                <div class="card-header text-rouge d-flex align-items-center  mb-3 py-4">
                    <h5> <?= $kodeInstrumen; ?> - <?= $namaInstrumen; ?></h5>

                    <div class="ml-auto">
                        <form action="<?= base_url(); ?>/admin/saveTampilGrafik/<?= $cekTampilGrafik['id']; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input form-check-show-grafik-<?= $cekTampilGrafik['id']; ?>" type="checkbox" style="cursor: pointer;" <?= check_tampil($cekTampilGrafik['tampil_grafik']); ?> data-tampil="<?= $cekTampilGrafik['tampil_grafik']; ?>" data-id="<?= $cekTampilGrafik['id']; ?>" id="flexCheckDefault" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php if ($cekTampilGrafik['tampil_grafik'] == '1') :  ?>Klik untuk sembunyikan grafik pada beranda website<?php else : ?> Klik untuk menampilkan grafik kepuasan pada beranda website<?php endif; ?>">
                                <label class="form-check-label ml-2 text-muted" for="flexCheckDefault">
                                    <?php if ($cekTampilGrafik['tampil_grafik'] == '1') :  ?>Grafik Ditampilkan<?php else : ?> Grafik Disembunyikan<?php endif; ?>

                                </label>
                            </div>
                            <script type="text/javascript">
                                $('.form-check-show-grafik-<?= $cekTampilGrafik['id']; ?>').on('click', function() {
                                    const tampilId = $(this).data('tampil');
                                    const id = $(this).data('id');

                                    $.ajax(
                                        console.log('masuk <?= $cekTampilGrafik['id']; ?>'), {
                                            url: "<?= base_url(); ?>/admin/saveTampilGrafikStatus/<?= $cekTampilGrafik['id']; ?>",
                                            headers: {
                                                'X-Requested-With': 'XMLHttpRequest'
                                            },
                                            type: 'POST',
                                            data: {
                                                tampilId: tampilId,
                                                id: id
                                            },
                                            success: function() {
                                                document.location.href = "<?= base_url(); ?>/admin/hasil-survei/instrumen/<?= $cekTampilGrafik['id'] ?>"
                                                console.log('success ubah tampil grafik')
                                            }
                                        })
                                });
                            </script>
                        </form>
                    </div>
                </div>

                <div class="container">
                    <!-- BAR CHART -->
                    <div class="col-md-10 mx-auto mt-4">
                        <figure class="highcharts-figure-instrumen">
                            <div id="chart-hasil-instrumen"></div>
                        </figure>
                    </div>

                    <div class="col-lg-4 mx-5 mt-3">
                        <div class="container">
                            <ul class="todo-list">
                                <li class="border">
                                    <span class="text">Jumlah Responden: </span>
                                    <span class="badge  badge-cosmic"><?= $jumlahRespondenIns; ?></span>
                                </li>
                                <li class="border">
                                    <span class="text">Jumlah Tanggapan:</span>
                                    <span class="badge  badge-cosmic"><?= $jumlahTanggapanIns; ?> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- DataTables Example -->
                    <div class="card-body m-5">
                        <!-- section table 1-->
                        <section>
                            <!-- section table 1 -->
                            <div class="table-responsive ">
                                <table id="table-response-instrumen" class="display table-bordered table-hover border border-2" style="width:100%">
                                    <thead class="card-header text-rouge">
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
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($responsePertanyaan as $rID) :  ?>
                                            <?php $questionID = $rID['id']; ?>
                                            <tr>
                                                <td class="text-center"><?= $i++; ?></td>
                                                <td><?= $rID['butir']; ?> </td>
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
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- chart -->
<script>
    Highcharts.chart('chart-hasil-instrumen', {
        chart: {
            type: 'column'
        },
        title: {
            text: '<?= $namaInstrumen; ?>',
        },
        subtitle: {
            text: 'Tanggapan Responden'
        },
        xAxis: {
            categories: [
                'Sangat Puas',
                'Puas',
                'Cukup Puas',
                'Tidak Puas',
                'Sangat Tidak Puas'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
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
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                colorByPoint: true
            },

        },
        borderColor: '#303030',
        colors: ['rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
        ],

        series: [{
            name: 'Tingkat Kepuasan',
            data: [
                <?= $totalSkor5; ?>,
                <?= $totalSkor4; ?>,
                <?= $totalSkor3; ?>,
                <?= $totalSkor2; ?>,
                <?= $totalSkor1; ?>,
            ]

        }],

    });
</script>

<!-- datatables -->
<script>
    $(document).ready(function() {
        $('#table-response-instrumen').DataTable({
            "pageLength": 50,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    title: 'Hasil Survei Kepuasan <?= $namaInstrumen; ?>',
                    messageTop: 'Jumlah Responden : <?= $jumlahRespondenIns; ?>',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }

                },
                {
                    extend: 'excel',
                    title: 'Hasil Survei Kepuasan <?= $namaInstrumen; ?>',
                    messageTop: 'Jumlah Responden : <?= $jumlahRespondenIns; ?>',
                    autoFilter: true,
                    sheetName: 'Hasil Survei',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Hasil Survei Kepuasan | <?= $namaInstrumen; ?>',
                    messageTop: 'Jumlah Responden : <?= $jumlahRespondenIns; ?>',
                    orientation: 'potrait',
                    pageSize: 'A4',
                    download: 'open',
                    exportOptions: {
                        columns: [0, 1, ':visible']
                    },
                    footer: true

                },
                {
                    extend: 'print',
                    messageTop: 'Hasil Survei Kepuasan | <?= $namaInstrumen; ?> | Jumlah Responden : <?= $jumlahRespondenIns; ?>',
                },
                {
                    extend: 'colvis',
                    postfixButtons: ['colvisRestore']
                },

            ]
        });
    });
</script>

<?= $this->endSection(); ?>