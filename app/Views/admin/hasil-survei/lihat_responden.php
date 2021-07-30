<?= $this->extend('admin/hasil-survei/index'); ?>

<?= $this->section('admin-hasil-survei-responden-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Tanggapan Survei</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
                <a href="<?= base_url(); ?>/admin/hasilSurveiResponden">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body py-3">
                    <section>
                        <div class="container mb-5">
                            <div class="mb-2 row">
                                <label for="name" class="col-sm-4 col-form-label fw-bold">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="name" value=": Haniya Hughes" disabled>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="identitas" class="col-sm-4 col-form-label fw-bold">No.Identitas</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="identitas" value=": 1313617009" disabled>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="tgl" class="col-sm-4 col-form-label fw-bold">Tgl Pengisian</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="tgl" value=": 2 Juni 2021" disabled>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="role" class="col-sm-4 col-form-label fw-bold">Jenis Responden </label>
                                <div class="col-sm-8">
                                    <input type="text" readonly class="form-control-plaintext" id="role" value=": Mahasiswa (S1)" disabled>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- section table 1-->
                    <section>
                        <div class="card container bg-light text-dark py-2 my-5">
                            <div class="container text-center">
                                <input type="text" readonly class="form-control-plaintext fw-bold text-center text-uppercase" id="instrumen" value="Instrumen Kepuasan Atas Proses Pendidikan" disabled>

                            </div>
                            <div class="container">
                                <div class="row justify-content-center ">
                                    <div class="col-4 text-end">
                                        <label for="kode-instrumen" class="form-control-plaintext col-sm-12  text-muted">Kode Instrumen</label>
                                    </div>
                                    <div class="col-4 text-start">
                                        <input type="text" readonly class="form-control-plaintext  text-muted" id="kode-instrumen" value=": C.6" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- section table 1 -->

                        <div class="table-responsive">
                            <table id="tableResponden" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Butir Pernyataan</th>
                                        <th>Tingkat Kepuasan</th>
                                        <th>Skor</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Saran pembelajaran yang tersedia di ruang kuliah</td>
                                        <td>Sangat Baik</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ketepatan waktu dosen dalam memulai perkuliahan</td>
                                        <td>Baik</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kemudahan dosen untuk dihubungi melalui telepon, email, dan sebagainya</td>
                                        <td>Sangat Baik</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </section>

                    <!-- section table 2 -->
                    <section>
                        <div class="card container bg-light text-dark py-2 my-5">
                            <div class="container text-center">
                                <input type="text" readonly class="form-control-plaintext fw-bold text-center text-uppercase" id="instrumen" value="Instrumen Kepuasan Atas Layanan Manajemen" disabled>

                            </div>
                            <div class="container text-muted">
                                <div class="row justify-content-center">
                                    <div class="col-4 text-end">
                                        <label for="kode-instrumen" class="form-control-plaintext col-sm-12  text-muted">Kode Instrumen</label>
                                    </div>
                                    <div class="col-4 text-start">
                                        <input type="text" readonly class="form-control-plaintext  text-muted" id="kode-instrumen" value=": C.2" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- section table 2 -->

                        <div class="table-responsive">
                            <table id="tableResponden" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Butir Pernyataan</th>
                                        <th>Tingkat Kepuasan</th>
                                        <th>Skor</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, earum.</td>
                                        <td>Sangat Baik</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, nam.</td>
                                        <td>Baik</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                        <td>Sangat Baik</td>
                                        <td>4</td>
                                    </tr>
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