<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Data Kategori Instrumen</h1>
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>

            <div class="card border-light shadow border border-2 ">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <!-- datatables -->
                        <table id="table-hasil-kategori" class="table table-bordered hover order-column cell-border">
                            <thead>
                                <tr>
                                    <th style="width: 50px;"> No.</th>
                                    <th style="width: 50px;">Kode</th>
                                    <th style="width: 600px;">Nama Kategori</th>
                                    <th style="width: 200px;">Responden</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($category as $ctg) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center"><?= $ctg['kodeCategory']; ?></td>
                                        <td> <?= $ctg['namaCategory']; ?></td>
                                        <td>
                                            <!-- get peruntukkancategory by slug -->
                                            <?php
                                            $db = db_connect();
                                            $slug = $ctg['slug'];

                                            $sql = "SELECT peruntukkanCategory FROM category_instrumen WHERE slug = ?";

                                            $peruntukkan =  $db->query($sql, [$slug]);
                                            foreach ($peruntukkan->getResultArray() as $row) {
                                                echo "
                                                <ul>
                                                <li>" . $row['peruntukkanCategory'] . "</li></ul>";
                                            }
                                            ?>
                                            <!--./ get peruntukkancategory by slug -->

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