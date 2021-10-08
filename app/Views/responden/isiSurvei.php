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
                <!-- back to previous page  -->
                <a href="<?= base_url(); ?>/responden">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px"></i>
                </a>
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
                    <div class="callout callout-info mb-5">
                        <h5 class="my-3">Petunjuk Pengisian Instrumen</h5>
                        <?php if (empty($getPetunjukIns) || empty($getPetunjukIns['isiPetunjuk'])) : ?>
                            <ul>
                                <li><span>Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan sesuai dengan keadaan yang sebenarnya.</span></li>
                                <li><span>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.</span></li>
                                <li>Setiap jawaban Saudara akan dijamin kerahasiaannya.</li>
                                <li>Pilih jawaban tingkat kepuasan pada pernyataan pada kolom yang disediakan dibawah ini.</li><br>
                                <li>Keterangan Tingkat Kepuasan:</li>
                                <p style="margin-left: 25px;">5 = Sangat Puas</p>
                                <p style="margin-left: 25px;"><span>4 = Puas</span></p>
                                <p style="margin-left: 25px;"><span>3 = Cukup Puas</span></p>
                                <p style=" margin-left: 25px;"><span>2 = Tidak Puas</span></p>
                                <p style=" margin-left: 25px;"><span>1 = Sangat Tidak Puas</span></p>
                            </ul>

                        <?php endif; ?>

                        <?php foreach ($getPetunjukIns as $isi) : ?>
                            <?= $isi['isiPetunjuk']; ?>
                        <?php endforeach; ?>
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
                                                            <?= $butir['id'] ?> -
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
                                <a href="<?= base_url(); ?>/responden/saveSurvei">
                                    <button type="submit" class="btn btn-purple">
                                        Submit <i class="fas fa-check ml-3"></i>
                                    </button> </a>
                            </div>
                        </div>
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