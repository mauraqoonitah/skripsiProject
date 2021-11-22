<?= $this->extend('responden/templates/index'); ?>

<?= $this->section('responden-body-content'); ?>
<div class="content-wrapper pt-2" style="min-height: 80vh;">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="text-cosmic" data-aos="zoom-in-up" data-aos-delay="500"> Pilih Instrumen <small class="text-muted"> untuk mengisi kuesioner</small></h1>
                    <span class="text-center small text-muted" data-aos="zoom-in-right" data-aos-duration="1000">sebagai <?= user()->role; ?></span>
                    <div class="my-4 col-lg-4 col-md-4 mx-auto">
                        <img src="<?= base_url(); ?>/img/undraw_Choice.svg" class="img-fluid" />
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content m-0">
        <div class="container">
            <!-- flash success tambah data  -->
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
            <!-- ./ flash success tambah data  -->

            <div class="row">
                <div class="col-lg-8 mx-auto d-flex justify-content-center">
                    <?php if (user()->role === 'Dosen') : ?>
                        <?php if (sizeof($permissionsForUser) === 0) : ?>
                            <div class="row mb-4 mx-auto" data-aos="zoom-in-up" data-aos-delay="500">
                                <div class="pilih-inst fst-italic text-rouge fw-bold fs-6" style="cursor: default;">
                                    Maaf, kuesioner belum tersedia.
                                </div>
                            </div>
                        <?php else : ?>

                            <?php
                            $dosenId = user()->id;

                            $permissionsForUser = $this->permissionModel->getPermissionsForUser($dosenId);
                            foreach ($permissionsForUser as $row) : ?>
                                <?php
                                $permissionNameUser = $row;

                                $getSelectedInsByPermission = $this->instrumenModel->getSelectedInsByPermission($permissionNameUser);
                                // get instrumen
                                foreach ($getSelectedInsByPermission as $rowIns) : ?>
                                    <form action="<?= base_url(); ?>/responden/isiSurvei/<?= $rowIns['instrumenId']; ?>" method="post">
                                        <button class="btn" type="submit">
                                            <div class="row mb-4 mx-auto">
                                                <div class="pilih-inst">
                                                    <?= $rowIns['namaInstrumen']; ?>
                                                </div>
                                            </div>
                                        </button>
                                    </form>

                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    <?php else : ?>

                        <div class="row">
                            <div class="col-lg-12 ">
                                <?php if (sizeof($instrumenByResponden) === 0) : ?>
                                    <div class="row mb-4 mx-auto" data-aos="zoom-in-up" data-aos-delay="500">
                                        <div class="pilih-inst fst-italic text-rouge fw-bold fs-6" style="cursor: default;">
                                            Maaf, kuesioner untuk responden <?= user()->role; ?> tidak ditemukan.
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <?php
                                    foreach ($instrumenByResponden as $ins) : ?>
                                        <form action="<?= base_url(); ?>/responden/isiSurvei/<?= $ins['id']; ?>" method="post">
                                            <button class="btn" type="submit">
                                                <div class="mb-4 ">
                                                    <div class="pilih-inst">
                                                        <?= $ins['namaInstrumen']; ?>
                                                    </div>
                                                </div>
                                            </button>
                                        </form>
                                    <?php endforeach; ?>
                                <?php endif; ?>


                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>