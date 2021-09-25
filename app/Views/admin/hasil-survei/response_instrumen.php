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
            $skor5 = count(array($jawaban));
            $totalSkor5++;
        }
        if ($jawaban == '4') {
            $skor4 = count(array($jawaban));
            $totalSkor4++;
        }
        if ($jawaban == '3') {
            $skor3 = count(array($jawaban));
            $totalSkor3++;
        }
        if ($jawaban == '2') {
            $skor2 = count(array($jawaban));
            $totalSkor2++;
        }
        if ($jawaban == '1') {
            $skor1 = count(array($jawaban));
            $totalSkor1++;
        }
        ?>

    <?php endforeach; ?>

    <!-- Main content -->

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
                                            <td class="text-center">

                                            </td>

                                            <td class="text-center">


                                            </td>
                                            <td class="text-center">



                                            </td>
                                            <td class="text-center">



                                            </td>
                                            <td class="text-center">



                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th colspan="2" rowspan="2" class="text-center">Total Tingkat Kepuasan</th>
                                    </tr>
                                    <tr class="text-center">
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

<?= $this->endSection(); ?>