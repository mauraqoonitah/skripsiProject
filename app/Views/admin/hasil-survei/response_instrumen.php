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
    }  ?>

    <?php foreach ($responseJawaban as $rJwb) : ?>
        <b>id butir :</b> <?= $rJwb['id']; ?><br>
        <b>pertanyaan : </b><?= $rJwb['butir']; ?><br>
        <b>jawaban: </b><?= $rJwb['jawaban']; ?><br><br>
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
                        <div class="col-4 text-end">
                            <label for="total-responden-instrumen" class="form-control-plaintext col-sm-12  text-muted">Total Responden</label>
                        </div>
                        <div class="col-4 text-start">
                            <input type="text" readonly class="form-control-plaintext  text-muted" id="total-responden-instrumen" value=": n" disabled>
                        </div>
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
                                            <td><?= $rID['butir']; ?></td>
                                            <td class="text-center">
                                                <?php if ($rID['jawaban'] == 5) : ?>
                                                    disini 5
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($rID['jawaban'] == 4) : ?>
                                                    disini 4
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($rID['jawaban'] == 3) : ?>
                                                    disini 3
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($rID['jawaban'] == 2) : ?>
                                                    disini 2
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($rID['jawaban'] == 1) : ?>
                                                    disini 1
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
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