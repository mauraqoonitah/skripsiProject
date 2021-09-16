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
    <?php if (session()->getFlashdata('insertDataDiri')) :  ?>
        <div class="alert alert-success d-flex align-items-center fw-bold mb-3" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </symbol>
            </svg>
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                <?= session()->getFlashData('insertDataDiri'); ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- ./ flash success tambah data  -->

    <!-- Main content -->
    <section class="content m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="callout callout-info mb-5">
                        <h5 class="my-3">Petunjuk Pengisian Instrumen</h5>
                        <ol type="a">
                            <li>Saudara adalah dosen UNJ. Saudara diminta untuk memberikan penilaian terhadap layanan yang diberikan selama menjadi dosen di UNJ sesuai dengan keadaan yang sebenarnya.</li>
                            <li>Setiap informasi yang Saudara berikan sangat besar manfaatnya untuk perbaikan dan peningkatan layanan UNJ di masa datang.</li>
                            <li>Setiap jawaban Saudara akan dijamin kerahasiaannya.</li>
                            <li>Berilah tanda centang (√) pada pernyataan pada kolom yang disediakan dibawah ini.</li>
                            <li>Keterangan:<br>
                                5 = Sangat Puas<br>
                                4 = Puas<br>
                                3 = Cukup Puas<br>
                                2 = Tidak Puas<br>
                                1 = Sangat Tidak Puas</li>
                        </ol>
                    </div>

                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold"><?= $instrumen['kodeInstrumen']; ?> - <?= $instrumen['namaInstrumen']; ?></h6>
                        </div>
                        <div class="card-body">
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
                                                <button type="submit" class="btn btn-outline-dark mr-3">
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
                                            <?php foreach ($lihatPernyataan as $butir) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $i++; ?></td>
                                                    <td>
                                                        <?= $butir['butir']; ?></td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="" id="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="" id="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="" id="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="" id="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="" id="">
                                                        </div>
                                                    </td>
                                                </tr>
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
                                <a href="<?= base_url(); ?>/responden">
                                    <button type="submit" class="btn btn-purple">
                                        Submit <i class="fas fa-check ml-3"></i>
                                    </button> </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>