<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Data Instrumen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Laporan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <!-- ./ flash success tambah data  -->

            <!-- Main content -->
            <div class="card border-light shadow border">
                <div class="card-body ">
                    <div class="table-responsive">
                        <!-- datatables -->
                        <table id="table-hasil-instrumen" class="table table-bordered hover order-column cell-border">

                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode<br>Instrumen</th>
                                    <th>Nama Instrumen</th>
                                    <th>Responden</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($instrumen as $ins) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center"><?= $ins['kodeInstrumen']; ?></td>
                                        <td>
                                            <?= $ins['namaInstrumen']; ?>
                                        </td>

                                        <td> <?= $ins['peruntukkanInstrumen']; ?> </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>
</section>
<!-- /.content -->
</div>


<?= $this->endSection(); ?>