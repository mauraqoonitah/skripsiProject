<?= $this->extend('admin/templates/index'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<?= $this->section('admin-body-content'); ?>
<?php

use CodeIgniter\I18n\Time;
?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <!-- ./ flash success tambah data  -->


            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Hasil Survei Kepuasan - Responden</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
                <a href="<?= base_url(); ?>/admin/hasil-survei/responden">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">


            <!-- data diri responden -->
            <div class="row mb-4 col-lg-12">
                <div class="card card-outline card-primary">
                    <div class="card-header bg-white">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <?php foreach ($respondenDataDiri as $res) :  ?>
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="<?= base_url(); ?>/../../img/user_profile.png" alt="user image">
                                    <span class="username">
                                        <?php if (!empty($res['fullname'])) :  ?>
                                            <span class="text-rouge fs-5"><?= $fullname = $res['fullname']; ?></span>
                                        <?php else : ?>
                                            <span class="text-rouge fs-5"><?= $res['email']; ?></span>
                                        <?php endif; ?>
                                    </span>
                                    <span class="description">Last Activity -
                                        <?php foreach ($lastActivity as $last) : ?>
                                            <?php
                                            $time = Time::parse($last->date);
                                            echo $time->humanize();
                                            ?>
                                        <?php endforeach; ?>
                                    </span>
                                </div>
                                <!-- /.user-block -->
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row p-0 m-0">
                            <span class="col-sm-4 col-form-label p-0"><strong>Username</strong></span>
                            <span class="col-sm-8 col-form-label p-0">
                                <?= $res['username']; ?>
                            </span>
                        </div>
                        <hr>
                        <div class="form-group row p-0 m-0">
                            <span class="col-sm-4 col-form-label p-0"><strong>Email</strong></span>
                            <span class="col-sm-8 col-form-label p-0">
                                <?= $email = $res['email']; ?>
                            </span>
                        </div>
                        <hr>
                        <div class="form-group row p-0 m-0">
                            <span class="col-sm-4 col-form-label p-0"><strong>Role</strong></span>
                            <span class="col-sm-8 col-form-label p-0">
                                <?= $role = $res['role']; ?>
                            </span>
                        </div>
                        <hr>

                        <?php foreach ($getPertanyaanByRespId as $data) : ?>
                            <?php
                                $pertanyaanId = $data['id'];
                                $dataDiriJawabanModel = model('DataDiriJawabanModel');
                                $this->dataDiriJawabanModel = new $dataDiriJawabanModel;
                                $getPilihan =  $this->dataDiriJawabanModel->getPilihanByPertanyaanId($pertanyaanId);
                                $oldJawaban = str_replace(' ', '', $data['pertanyaan']);


                                $strReplace1 = str_replace('(', '-', $oldJawaban);
                                $strReplace2 = str_replace(')', '-', $strReplace1);
                                $strReplace3 = str_replace('?', '-', $strReplace2);
                                $strReplace4 = str_replace('/', 'atau', $strReplace3);
                                $oldJawaban_ = str_replace('*', '-', $strReplace4);
                            ?>

                            <div class="form-group row p-0 m-0">
                                <span class="col-sm-4 col-form-label p-0"><strong><?= $data['pertanyaan']; ?> </strong></span>
                                <span class="col-sm-8 col-form-label p-0">
                                    <?= $res[$oldJawaban_]; ?>

                                </span>
                            </div>
                            <hr>

                            <?php
                            ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- ./data diri responden -->
            <h5 class="fw-bold mb-4 text-cosmic">Tanggapan Survei dari Responden:<br></h5>

            <!-- list tanggapan per instrumen -->
            <div class="accordion accordion-flush mx-auto">
                <?php foreach ($responseInsId as $rIns) : ?>
                    <?php $instrumenID =  $rIns['instrumenID'];  ?>
                    <?php $responseID =  $rIns['responseID'];  ?>
                    <?php $uniqueID =  $rIns['uniqueID'];  ?>
                    <div class="accordion-item mb-5">
                        <!-- header collapse - kategori  -->
                        <h5 class="accordion-header" id="accord-<?= $rIns['responseID']; ?>">
                            <div class="accordion-button rounded d-flex align-items-center col-lg-12 " id="accordionResponse" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $rIns['responseID']; ?>" aria-expanded="true" aria-controls="collapse-<?= $rIns['responseID']; ?>">
                                <span class="fw-bold fs-6"><?= $rIns['kodeInstrumen']; ?> - <?= $rIns['namaInstrumen']; ?></span>
                            </div>
                        </h5>
                        <!-- ./header collapse - kategori  -->
                        <div class="container my-3">
                            <span class="text-muted mt-2">Tgl Pengisian :
                                <?php
                                $date_created_response = Time::parse($rIns['created_at'], 'Asia/Jakarta');
                                echo $date_created_response->toLocalizedString('d MMM yyyy, HH:mm');
                                ?>
                            </span>
                        </div>

                        <!-- content collapse - kategori  -->
                        <div id="collapse-<?= $rIns['responseID']; ?>" class=" accordion-collapse collapse " aria-labelledby="accord-<?= $rIns['responseID']; ?>">
                            <div class="accordion-body">
                                <section class="content">
                                    <div class="container-fluid">

                                        <section>
                                            <div class="table-responsive">
                                                <table id="tableResponden-<?= $responseID; ?>" class="display table-bordered table-hover" style="width:100%">
                                                    <thead class="bg-thead">
                                                        <tr>
                                                            <th class="text-center p-0 fw-bold">No.</th>
                                                            <th>Butir Pernyataan</th>
                                                            <th class="text-center p-0">Jawaban</th>
                                                            <th class="text-center">Tingkat Kepuasan</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        $insID = $rIns['instrumenID'];
                                                        $uniqueID = $rIns['uniqueID'];
                                                        $db = db_connect();
                                                        $pernyataanModel = model('PernyataanModel');
                                                        $this->pernyataanModel = new $pernyataanModel;
                                                        $sql =  $this->pernyataanModel->getButirByInstrumenID($insID);

                                                        foreach ($sql as $row) : ?>
                                                            <?php $questionID = $row['questionID']; ?>
                                                            <tr>
                                                                <!-- no. -->
                                                                <td class="text-center"><?= $i++; ?></td>

                                                                <!--Butir Pernyataan  -->
                                                                <td>
                                                                    <?= $row['butir']; ?>
                                                                </td>

                                                                <?php foreach ($respondenDataDiri as $res) :  ?>
                                                                    <?php $userID = $res['userID'] ?>
                                                                <?php endforeach; ?>

                                                                <?php
                                                                // get jawaban by questionID
                                                                $responseModel = model('ResponseModel');
                                                                $this->responseModel = new $responseModel;
                                                                $sqlResponse =  $this->responseModel->getResponseByQuestID($userID, $questionID, $uniqueID);
                                                                ?>
                                                                <!-- jawaban -->
                                                                <td class="text-center p-0 ">
                                                                    <?php foreach ($sqlResponse as $response) : ?>
                                                                        <?php $jwb = $response['jawaban']; ?>
                                                                        <?php if (empty($jwb)) : ?>
                                                                            <span class="text-muted"><i>null</i></span>
                                                                        <?php else : ?>
                                                                            <?= $jwb; ?>

                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                </td>

                                                                <!-- tingkat kepuasan -->
                                                                <td>
                                                                    <?php if (empty($jwb)) : ?>
                                                                        <span class="text-muted"><i>null</i></span>
                                                                    <?php else : ?>
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
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php if (in_groups('Admin')) : ?>

                                                <div class="btn-group my-3" role="group">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-tanggapan-<?= $uniqueID; ?>">
                                                        <button type="button" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash-alt"></i> Hapus Tanggapan
                                                        </button>
                                                    </a>
                                                </div>

                                                <!-- modal hapus Tanggapan -->
                                                <div class="modal fade" id="modal-delete-tanggapan-<?= $uniqueID; ?>" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered ">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-cosmic text-white">
                                                                <h5 class="modal-title fw-bold">Hapus Tanggapan Survei</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center fw-bold">
                                                                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                                Yakin Hapus Tanggapan?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                                <form action="<?= base_url(); ?>/admin/deleteTanggapan/<?= $uniqueID; ?>" method="post">
                                                                    <?= csrf_field(); ?>
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end modal hapus Tanggapan -->
                                            <?php endif; ?>

                                            <!-- script export datatables -->
                                            <?php
                                            date_default_timezone_set('Asia/Jakarta');
                                            $timeNow = Time::now()->toDateTimeString(); ?>
                                            <script>
                                                $(document).ready(function() {
                                                    $('#tableResponden-<?= $responseID; ?>').DataTable({
                                                        "pageLength": 25,
                                                        dom: 'Bfrtip',
                                                        buttons: [{
                                                                extend: 'copy',
                                                                title: 'Tanggapan Responden | <?= $rIns['namaInstrumen']; ?> | <?= $role; ?> | <?php echo (empty($fullname)) ? '' : $fullname; ?> | <?= $email; ?> | (tgl pengisian: <?= $rIns['created_at']; ?>)',
                                                                exportOptions: {
                                                                    columns: [0, 1, ':visible']
                                                                }

                                                            },
                                                            {
                                                                extend: 'excel',
                                                                title: 'Tanggapan Responden | <?= $rIns['namaInstrumen']; ?>',
                                                                messageTop: '<?= $role; ?> | <?php echo (empty($fullname)) ? '' : $fullname; ?> | <?= $email; ?> | (tgl pengisian: <?= $rIns['created_at']; ?>)',
                                                                autoFilter: true,
                                                                sheetName: 'Hasil Survei',
                                                                download: 'open',
                                                                exportOptions: {
                                                                    columns: [0, 1, ':visible']
                                                                }
                                                            },
                                                            {
                                                                extend: 'pdf',
                                                                title: 'Tanggapan Responden | <?= $rIns['namaInstrumen']; ?>',
                                                                messageTop: 'sebagai: <?= $role; ?> | <?php echo (empty($fullname)) ? '' : $fullname; ?> | <?= $email; ?> | (tgl pengisian: <?= $rIns['created_at']; ?>)',
                                                                orientation: 'potrait',
                                                                pageSize: 'A4',
                                                                // download: 'open',
                                                                exportOptions: {
                                                                    columns: [0, 1, ':visible']
                                                                },
                                                                footer: true

                                                            },
                                                            {
                                                                extend: 'print',
                                                                messageTop: 'Tanggapan Responden | <?= $rIns['namaInstrumen']; ?> | <?= $role; ?> | <?php echo (empty($fullname)) ? '' : $fullname; ?> | <?= $email; ?> | (tgl pengisian: <?= $rIns['created_at']; ?>)',

                                                            },
                                                            {
                                                                extend: 'colvis',
                                                                postfixButtons: ['colvisRestore']
                                                            },

                                                        ]
                                                    });
                                                });
                                            </script>
                                            <!-- script export datatables -->
                                        </section>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- ./content collapse - kategori  -->
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- ./list tanggapan per instrumen -->
        </div>
    </section>
</div>

<?= $this->endSection(); ?>