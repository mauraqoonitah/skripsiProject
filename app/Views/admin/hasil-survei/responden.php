<?= $this->extend('admin/hasil-survei/index'); ?>

<?= $this->section('admin-hasil-survei-responden-content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Data Responden</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active">Hasil Survei</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hasil Survei Per-Responden</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableResponden" class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Tgl Pengisian</th>
                                    <th>No. Identitas</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Responden</th>
                                    <th>Kode Instrumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2-06-21 </td>
                                    <td>1313617009</td>
                                    <td>Haniya Hughes</td>
                                    <td>Mahasiswa </td>
                                    <td>C.6</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2-06-21 </td>
                                    <td>15249444393 </td>
                                    <td>Elina Ramirez</td>
                                    <td>Dosen </td>
                                    <td>C.2</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12-06-21 </td>
                                    <td>336690447 </td>
                                    <td>Raditya Kuswoyo</td>
                                    <td>Tenaga Kependidikan </td>
                                    <td>C.5</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>7-06-21</td>
                                    <td>-</td>
                                    <td>Maida Hariyah</td>
                                    <td>Mitra</td>
                                    <td>C.7</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>9-06-21</td>
                                    <td>-</td>
                                    <td>Garan Hutapea</td>
                                    <td>Pengguna Lulusan</td>
                                    <td>C.9</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>7-06-21</td>
                                    <td>13123734</td>
                                    <td>Dara Andrisa</td>
                                    <td>Dosen</td>
                                    <td>C.7</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>9-06-21</td>
                                    <td>-</td>
                                    <td>Garan Hutapea</td>
                                    <td>Pengguna Lulusan</td>
                                    <td>C.9</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>7-06-21</td>
                                    <td>-</td>
                                    <td>Raisa Andriana</td>
                                    <td>Alumni</td>
                                    <td>C.7</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>9-06-21</td>
                                    <td>-</td>
                                    <td>Garan Putu</td>
                                    <td>Pengguna Lulusan</td>
                                    <td>C.9</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>7-06-21</td>
                                    <td>-</td>
                                    <td>Maida Hariyah</td>
                                    <td>Mitra</td>
                                    <td>C.7</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-outline-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>9-06-21</td>
                                    <td>-</td>
                                    <td>Adiba Sarni</td>
                                    <td>Peneliti</td>
                                    <td>C.9</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-sm btn-primary" type="button">Lihat</button>
                                            <button class="btn btn-sm btn-danger" type="button">Hapus</button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>