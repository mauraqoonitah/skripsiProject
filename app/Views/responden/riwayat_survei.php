<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>

<div class="content-wrapper py-5" style="min-height: 80vh;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2 mt-4 mb-5">
                <div class="col-lg-12 mx-auto text-center">
                    <h1 class="purple-text"> Riwayat Pengisian Survei
                    </h1>
                    <?php if (!empty($responseInsId)) : ?>
                        <span class="text-muted">Terima kasih telah mengisi survei kepuasan. Inilah yang kami dapatkan dari Anda:</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- flash success tambah data  -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>

    <!-- ./ flash success tambah data  -->

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <?php if (empty($responseInsId)) : ?>
                    <div class="col-lg-6 mx-auto">
                        <div class="pilih-inst fst-italic text-rouge fw-bold fs-6" style="cursor: default;">
                            Anda belum mengisi survei.
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <a href="<?= base_url(); ?>/responden">
                                <button type="button" class="btn btn-purple mr-3">
                                    Isi Survei
                                </button>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- list tanggapan per instrumen -->
                <div class="col-lg-12">
                    <div class="accordion accordion-flush mx-auto">
                        <?php foreach ($responseInsId as $rIns) : ?>
                            <div class="accordion-item mb-5">
                                <!-- header collapse - kategori  -->
                                <h5 class="accordion-header" id="accord-<?= $rIns['responseID']; ?>">
                                    <div class="accordion-button rounded d-flex align-items-center col-lg-12 " id="accordionResponse" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $rIns['responseID']; ?>" aria-expanded="true" aria-controls="collapse-<?= $rIns['responseID']; ?>">
                                        <span class="fw-bold fs-6"><?= $rIns['kodeInstrumen']; ?> - <?= $rIns['namaInstrumen']; ?></span>
                                    </div>
                                </h5>
                                <!-- ./header collapse - kategori  -->

                                <!-- content collapse - kategori  -->
                                <div class="container my-3">
                                    <span class="text-muted mt-2">Date Created : <?= $rIns['created_at'] ?></span>
                                </div>

                                <div id="collapse-<?= $rIns['responseID']; ?>" class="accordion-collapse collapse " aria-labelledby="accord-<?= $rIns['responseID']; ?>">
                                    <div class="accordion-body">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <section>
                                                    <div class="col-lg-12 mx-auto">
                                                        <div class="callout callout-info mb-5">
                                                            <h6 class="my-3">Petunjuk Pengisian Instrumen</h6>
                                                        </div>

                                                        <table id="tableResponden" class="table table-bordered table-striped  table-hover text-wrap">
                                                            <thead class="bg-thead">
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>Butir Pernyataan</th>
                                                                    <th class="text-center">Jawaban</th>
                                                                    <th class="text-center">Tingkat Kepuasan</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                                $i = 1;
                                                                $insID = $rIns['instrumenID'];
                                                                $db = db_connect();
                                                                $pernyataanModel = model('PernyataanModel');
                                                                $this->pernyataanModel = new $pernyataanModel;
                                                                $sql =  $this->pernyataanModel->getButirByInstrumenID($insID);

                                                                foreach ($sql as $row) : ?>
                                                                    <?php $questionID = $row['questionID']; ?>
                                                                    <tr>
                                                                        <td class="text-center"><?= $i++; ?></td>
                                                                        <td>
                                                                            <?= $row['butir']; ?>
                                                                        </td>
                                                                        <?php foreach ($respondenData as $res) :  ?>
                                                                            <?php $userID = $res['userID'] ?>
                                                                        <?php endforeach; ?>

                                                                        <?php
                                                                        // get jawaban by questionID
                                                                        $responseModel = model('ResponseModel');
                                                                        $this->responseModel = new $responseModel;
                                                                        $sqlResponse =  $this->responseModel->getResponseByQuestID($userID, $questionID); ?>
                                                                        <td class="text-center">
                                                                            <?php foreach ($sqlResponse as $response) : ?>
                                                                                <?= $jwb =  $response['jawaban']; ?>
                                                                            <?php endforeach; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($jwb === '5') : ?>
                                                                                Sangat Puas
                                                                            <?php endif; ?>
                                                                            <?php if ($jwb === '4') : ?>
                                                                                Puas
                                                                            <?php endif; ?>
                                                                            <?php if ($jwb === '3') : ?>
                                                                                Cukup Puas
                                                                            <?php endif; ?>
                                                                            <?php if ($jwb === '2') : ?>
                                                                                Tidak Puas
                                                                            <?php endif; ?>
                                                                            <?php if ($jwb === '1') : ?>
                                                                                Sangat Tidak Puas
                                                                            <?php endif; ?>

                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </section>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <!-- ./content collapse - kategori  -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- ./list tanggapan per instrumen -->

                <!-- data diri responden -->
                <div class="col-lg-3 col-sm-6">
                    <?php foreach ($respondenData as $res) :  ?>
                        <p class="text-muted scroll-horiz">
                            <?= $res['fullname']; ?>
                        </p>
                        <p class="text-muted"><?= $res['role']; ?></p>
                        <p class="text-muted">userID <?= $userID = $res['userID']; ?></p>
                    <?php endforeach; ?>
                </div>
                <!-- ./data diri responden -->


            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>