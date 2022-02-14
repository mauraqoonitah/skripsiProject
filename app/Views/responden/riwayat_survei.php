<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>
<?php

use CodeIgniter\I18n\Time;
?>

<div class="content-wrapper py-2" style="min-height: 80vh;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12 mx-auto text-center">
                    <h1 class="purple-text"> Riwayat Pengisian Survei
                    </h1>

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

                <?php if ((user()->role === 'Admin') || (user()->role === 'Kontributor')) :  ?>
                    <div class="col-lg-6 mx-auto" data-aos="zoom-in-up" data-aos-delay="500">
                        <div class="pilih-inst fst-italic text-rouge fw-bold fs-6" style="cursor: default;">
                            Maaf, Halaman ini hanya dapat diakses responden.
                        </div>
                    </div>
                <?php else : ?>
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
                                <?php
                                $resUniqueID = $rIns['uniqueID'];
                                $responseModel = model('ResponseModel');
                                $this->responseModel = new $responseModel;
                                $responseCreatedAt =  $this->responseModel->getCreatedAtByUniqueID($resUniqueID);
                                foreach ($responseCreatedAt as $date) {
                                    $ddateCreated = $date['created_at'];
                                }

                                $date_created_response = Time::parse($ddateCreated, 'Asia/Jakarta');
                                $dateCreated =  $date_created_response->toLocalizedString('d MMM yyyy, HH:mm');
                                ?>
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
                                        <span class="text-muted mt-2">Tgl Pengisian :
                                            <?= $dateCreated; ?>
                                        </span>
                                    </div>

                                    <div id="collapse-<?= $rIns['responseID']; ?>" class="accordion-collapse collapse " aria-labelledby="accord-<?= $rIns['responseID']; ?>">
                                        <div class="accordion-body">
                                            <section class="content">
                                                <div class="container-fluid">
                                                    <section>
                                                        <div class="col-lg-12 mx-auto">
                                                            <p class="fw-bold mb-4">Terima kasih telah mengisi survei kepuasan. Inilah yang kami dapatkan dari Anda:<br></p>
                                                            <?php $uniqueID = $rIns['uniqueID']; ?>

                                                            <?php if (!empty($getPetunjukIns)) : ?>
                                                                <?php $insID = $rIns['instrumenID'];
                                                                $petunjukInstrumenModel = model('PetunjukInstrumenModel');
                                                                $this->petunjukInstrumenModel = new $petunjukInstrumenModel;
                                                                $sqlPetunjukIns =  $this->petunjukInstrumenModel->getPetunjukIns($insID);
                                                                ?>
                                                                <?php foreach ($sqlPetunjukIns as $petunjuk) : ?>
                                                                    <?php
                                                                    $isiPetunjuk = $petunjuk['isiPetunjuk'];
                                                                    $idPetunjuk = $petunjuk['id'];
                                                                    $insIDPetunjuk = $petunjuk['instrumenID']; ?>


                                                                    <div class="callout callout-info mb-5">
                                                                        <h6 class="my-3">Petunjuk Pengisian Instrumen</h6>
                                                                        <?= $isiPetunjuk; ?>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            <?php else : ?>
                                                                <ul class="mb-3">
                                                                    <li><span>Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan sesuai dengan keadaan yang sebenarnya.</span></li>
                                                                    <li><span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.</span></li>
                                                                    <li>Setiap jawaban Saudara akan dijamin kerahasiaannya.</li>
                                                                    <li>Pilih jawaban tingkat kepuasan pada pernyataan pada kolom yang disediakan dibawah ini.</li>
                                                                    <li>Keterangan Tingkat Kepuasan:</li>
                                                                    <span style="margin-left: 25px;">5 = Sangat Puas</span><br>
                                                                    <span style="margin-left: 25px;"><span>4 = Puas</span></span><br>
                                                                    <span style="margin-left: 25px;"><span>3 = Cukup Puas</span></span><br>
                                                                    <span style=" margin-left: 25px;"><span>2 = Tidak Puas</span></span><br>
                                                                    <span style=" margin-left: 25px;"><span>1 = Sangat Tidak Puas</span></span><br>
                                                                </ul>

                                                            <?php endif; ?>
                                                            <table id="tableResponden" class="table table-bordered text-wrap">
                                                                <thead class="bg-thead">
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Butir Pernyataan</th>
                                                                        <th class="text-center">Skala Kepuasan</th>
                                                                        <th class="text-center">Tingkat Kepuasan</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <?php
                                                                    $i = 1;
                                                                    $insID = $rIns['instrumenID'];
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
                                                                            <?php if (!empty($respondenData)) : ?>
                                                                                <?php foreach ($respondenData as $res) :  ?>
                                                                                    <?php $userID = $res['userID'] ?>
                                                                                <?php endforeach; ?>

                                                                                <?php
                                                                                // get jawaban by questionID
                                                                                $responseModel = model('ResponseModel');
                                                                                $this->responseModel = new $responseModel;
                                                                                $sqlResponse =  $this->responseModel->getResponseByQuestID($userID, $questionID, $uniqueID); ?>
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
                                                                            <?php endif; ?>

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
                <?php endif; ?>



            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>