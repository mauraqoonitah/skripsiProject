<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Tanggapan Survei Responden</h1>
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
                                    <th>Tgl<br>Pengisian</th>
                                    <th>No. Identitas</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis<br>Responden</th>
                                    <th>Kode<br>Instrumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($response as $rps) : ?>

                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $rps['created_at']; ?></td>
                                        <td><?= $rps['noIdentitas']; ?></td>
                                        <td><?= $rps['fullname']; ?></td>
                                        <td><?= $rps['responden']; ?> </td>
                                        <td><?= $rps['kodeInstrumen']; ?></td>
                                        <td>
                                            <div class="d-grid gap-2 d-md-block">
                                                <a href="<?= base_url(); ?>/admin/lihatResponden" class="btn btn-sm btn-primary text-decoration-none">
                                                    Lihat
                                                </a>
                                                <form action="" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin Hapus Data Responden?');">Hapus</button>
                                                </form>


                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
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