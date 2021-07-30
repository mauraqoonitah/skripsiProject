<?= $this->extend('admin/hasil-survei/index'); ?>

<?= $this->section('admin-hasil-survei-responden-content'); ?>
<div class="content-wrapper">
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card container bg-light text-dark py-2">
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
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-4 text-end">
                            <label for="total-responden-instrumen" class="form-control-plaintext col-sm-12  text-muted">Total Responden</label>
                        </div>
                        <div class="col-4 text-start">
                            <input type="text" readonly class="form-control-plaintext  text-muted" id="total-responden-instrumen" value=": 15" disabled>
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
                            <table id="tabel-lihat-instrumen" class="display table-bordered table-hover" style="width:100%">
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
                                <tbody class="text-center">
                                    <tr>
                                        <td>1</td>
                                        <td>Sarana pembelajaran yang tersedia di ruang kuliah </td>
                                        <td>5</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ketepatan waktu dosen dalam memulai perkuliahan</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>2</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kemudahan dosen untuk dihubungi melalui telepon, email, dan sebagainya </td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
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