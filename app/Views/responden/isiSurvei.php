<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>

<div class="content-wrapper py-5" style="min-height: 80vh;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2 mt-4 mb-5">
                <div class="col-lg-12 mx-auto text-center">
                    <h1 class="purple-text"> Isi Kuesioner
                    </h1>

                    <p class="fs-5 fw-bold"><?= $instrumen['kodeInstrumen']; ?> - <?= $instrumen['namaInstrumen']; ?> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    <!-- flash success tambah data  -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>

    <!-- ./ flash success tambah data  -->

    <!-- Main content -->
    <section class="content m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="col-lg-6 mx-auto pb-3">
                        <?php if (!empty($cekRiwayatTgl)) : ?>
                            <div class="col-lg-6 col-md-6 mx-auto">
                                <img src="<?= base_url(); ?>/img/undraw_Confirm.svg" class="img-fluid my-4" />
                            </div>
                            <p class=" text-cosmic text-center mb-4 fs-5"> Anda telah mengisi kuesioner ini</p>
                            <div class="d-flex justify-content-center my-2">
                                <a href="<?= base_url(); ?>/responden/riwayatSurvei/<?= user()->id; ?>" type="button" class="btn btn-sm btn-rouge">
                                    Lihat Riwayat Survei
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- /.card -->

                    <div class="callout callout-info mb-5">
                        <h5 class="my-3">Petunjuk Pengisian Instrumen</h5>

                        <?php foreach ($getPetunjukIns as $petunjuk) : ?>
                            <?php
                            $isiPetunjuk = $petunjuk['isiPetunjuk'];
                            $idPetunjuk = $petunjuk['id'];
                            $insIDPetunjuk = $petunjuk['instrumenID']; ?>
                        <?php endforeach; ?>

                        <?php if (empty($idPetunjuk) || empty($isiPetunjuk)) : ?>
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
                        <?php if (!empty($isiPetunjuk)) : ?>
                            <?= $isiPetunjuk; ?>
                        <?php endif; ?>

                    </div>

                    <div class=" card">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold"><?= $instrumen['kodeInstrumen']; ?> - <?= $instrumen['namaInstrumen']; ?></h6>
                        </div>
                        <div class="card-body">
                            <!-- form tambah instrumen -->
                            <form action="<?= base_url(); ?>/responden/saveSurvei/<?= $instrumen['id']; ?>" method="post" id="form">
                                <?= csrf_field(); ?>

                                <div class="table-responsive-sm">
                                    <?php $i = 1; ?>
                                    <!-- jika butir pernyataan tidak ada -->
                                    <?php if (sizeof($lihatPernyataan) === 0) : ?>
                                        <div class="alert alert-rouge alert-dismissible fade show" role="alert">
                                            <span class="text-rouge"><strong>Oops! </strong> butir pernyataan belum ditambahkan.</span>
                                        </div>
                                        <div class="card-footer clearfix">
                                            <div class="d-flex justify-content-center">
                                                <a href="<?= base_url(); ?>/responden">
                                                    <button type="button" class="btn btn-outline-dark mr-3">
                                                        <i class="fas fa-chevron-left mr-3"></i> Kembali
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    <?php else :  ?>
                                        <table id="example2" class="table table-bordered table-hover align-middle ">
                                            <thead class="table-light ">
                                                <tr>
                                                    <th rowspan="2" style="width: 10px">No.</th>
                                                    <th rowspan="2">Kriteria Kepuasan</th>
                                                    <th colspan="5" class="text-center">Tingkat Kepuasan</th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 50px">5</th>
                                                    <th style="width: 50px">4</th>
                                                    <th style="width: 50px">3</th>
                                                    <th style="width: 50px">2</th>
                                                    <th style="width: 50px">1</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- jika butir pernyataan ada -->
                                                <?php
                                                $i = 1;
                                                foreach ($lihatPernyataan as $butir) : ?>
                                                    <tr>
                                                        <td class="text-center"><?= $i++; ?></td>
                                                        <td>
                                                            <?= $butir['butir']; ?></td>

                                                        <!-- checkbox iteration-->
                                                        <?php $jawabanValue = $v = 5 ?>

                                                        <td>
                                                            <div class="form-check">
                                                                <input type="radio" name="checkbox-jawaban-<?= $butir['id'] ?>" value="<?= $v--; ?>" required></input><br>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="radio" name="checkbox-jawaban-<?= $butir['id'] ?>" value="<?= $v--; ?>"></input><br>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="radio" name="checkbox-jawaban-<?= $butir['id'] ?>" value="<?= $v--; ?>"></input><br>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="radio" name="checkbox-jawaban-<?= $butir['id'] ?>" value="<?= $v--; ?>"></input><br>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="radio" name="checkbox-jawaban-<?= $butir['id'] ?>" value="<?= $v--; ?>"></input><br>
                                                            </div>
                                                        </td>
                                                        <!-- ./checkbox iteration  -->

                                                    </tr>

                                                    <!-- hidden input for table response -->

                                                    <!-- questionID -->
                                                    <input type="hidden" class="form-control" value="<?= $butir['id']; ?>" name="questionID">
                                                    <!-- slug -->
                                                    <input type="hidden" class="form-control" value="<?= $instrumen['slug']; ?>" name="slug">
                                                    <!-- instrumenID -->
                                                    <input type="hidden" class="form-control" value="<?= $instrumen['id']; ?>" name="instrumenID">
                                                    <!-- kodeInstrumen -->
                                                    <input type="hidden" class="form-control" value="<?= $instrumen['kodeInstrumen']; ?>" name="kodeInstrumen">
                                                    <!-- userID (soon)-->
                                                    <!-- responden-->
                                                    <?php $userRole = user()->role; ?>
                                                    <input type="hidden" class="form-control" value="<?= $userRole; ?>" name="responden">


                                                    <!-- ./hidden input for table response -->


                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot class="table-light">
                                                <tr>
                                                    <th rowspan="2" style="width: 10px">No.</th>
                                                    <th rowspan="2">Kriteria Kepuasan</th>
                                                    <th style="width: 12px">5</th>
                                                    <th style="width: 12px">4</th>
                                                    <th style="width: 12px">3</th>
                                                    <th style="width: 12px">2</th>
                                                    <th style="width: 12px">1</th>

                                                </tr>

                                            </tfoot>
                                        </table>
                                </div>


                        </div>
                        <div class="card-footer clearfix py-5">
                            <div class="d-flex justify-content-center">
                                <a href="<?= base_url(); ?>/responden/isiDataDiri">
                                    <button type="submit" class="btn btn-outline-purple mr-3">
                                        <i class="fas fa-chevron-left mr-3"></i> Kembali
                                    </button>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalConfirmDataDiri">
                                    <button type="submit" class="btn btn-purple">
                                        Submit <i class="fas fa-check ml-3"></i>
                                    </button> </a>
                            </div>
                        </div>


                        <!-- modal confirm data diri -->
                        <div class="modal fade" id="modalConfirmDataDiri" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- form confirm data diri -->
                                        <form action="<?= base_url(); ?>/responden/saveSurvei" method="post">
                                            <?= csrf_field(); ?>

                                            <div class="form-group">
                                                <div class="container">
                                                    <!-- kolom data diri -->
                                                    <?php foreach ($getDataUser as $user) : ?>
                                                        <div class="d-flex justify-content-end mb-3">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="alert alert-warning" role="alert">
                                                            Pastikan data diri Anda sudah benar sebelum mengirim tanggapan.
                                                        </div>

                                                        <div class="mx-auto pr-3">
                                                            <div class="mb-3 ">
                                                                <label for="email" class="col-form-label">Email :</label>
                                                                <input type="text" readonly class="form-control" id="email" name="email" value="<?= $user->email; ?>">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="username" class="col-form-label">Username :</label>
                                                                <input type="text" readonly class="form-control" id="username" name="username" value="<?= $user->username; ?>">
                                                            </div>

                                                            <!-- data diri kategori responden -->
                                                            <div class="mb-3">
                                                                <?php foreach ($getPertanyaanByRespId as $data) : ?>
                                                                    <?php
                                                                    $pertanyaanId = $data['id'];
                                                                    $dataDiriJawabanModel = model('DataDiriJawabanModel');
                                                                    $this->dataDiriJawabanModel = new $dataDiriJawabanModel;
                                                                    $getPilihan =  $this->dataDiriJawabanModel->getPilihanByPertanyaanId($pertanyaanId);
                                                                    ?>

                                                                    <label class="col-form-label"><?= $data['pertanyaan']; ?> :</label>
                                                                    <input type="hidden" name="pertanyaan[]" value="<?= $data['pertanyaan']; ?> 
                                            ">
                                                                    <?php
                                                                    $oldJawaban = str_replace(' ', '', $data['pertanyaan']);
                                                                    ?>

                                                                    <!-- jika pertanyaan pilihan -->
                                                                    <?php if ($data['jenis'] == 'pilihan') :  ?>
                                                                        <select name="pilihan-<?= $pertanyaanId; ?>" class="form-select" aria-label="Default select example" required>
                                                                            <option></option>
                                                                            <?php foreach ($getPilihan as $pilihan) : ?>
                                                                                <option value="<?= $pilihan['pilihan']; ?>" <?php echo ($pilihan['pilihan'] === $user->$oldJawaban) ? 'selected' : '' ?>> <?= $pilihan['pilihan']; ?></option>

                                                                            <?php endforeach; ?>
                                                                        </select>


                                                                        <!-- jika pertanyaan isian -->
                                                                    <?php else : ?>

                                                                        <div class="form-group mb-3">
                                                                            <input type="text" class="form-control" name="isian[]" value="<?= $user->$oldJawaban; ?>" required>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            </div>

                                                            <div class="d-grid gap-2 mt-5">
                                                                <button type="submit" class="btn btn-success p-2">
                                                                    <i class="far fa-check-circle mr-2 fa-lg"></i>Kirim Tanggapan
                                                                </button>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>

                                                </div>
                                            </div>
                                        </form>
                                        <!-- end form confirm data diri -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal confirm data diri -->
                        <!-- /.card-body -->
                        </form>
                    <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>