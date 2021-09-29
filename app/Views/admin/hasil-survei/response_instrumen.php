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
                                                $skor5 = '|';
                                                $skor4 = '|';
                                                $skor3 = '|';
                                                $skor2 = '|';
                                                $skor1 = '|';
                                                ?>
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '5' && $questID == $questionID) {
                                                        echo  $skor5;
                                                    } ?>
                                                <?php endforeach; ?>
                                            </td>

                                            <td class="text-center">
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '4' && $questID == $questionID) {
                                                        echo  $skor4++;
                                                    } ?>
                                                <?php endforeach; ?>

                                            </td>
                                            <td class="text-center">
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '3' && $questID == $questionID) {
                                                        echo  $skor3;
                                                    } ?>
                                                <?php endforeach; ?>

                                            </td>
                                            <td class="text-center">

                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '2' && $questID == $questionID) {
                                                        echo  $skor2;
                                                    } ?>
                                                <?php endforeach; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php foreach ($sqlResponse as $response) : ?>
                                                    <?php $jawaban = $response['jawaban']; ?>
                                                    <?php $questID = $response['questionID']; ?>
                                                    <?php if ($jawaban == '1' && $questID == $questionID) {
                                                        echo  $skor1;
                                                    } ?>
                                                <?php endforeach; ?>
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

<?= $this->endSection(); ?>