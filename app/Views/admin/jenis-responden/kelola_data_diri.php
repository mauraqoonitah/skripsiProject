<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Data Diri Kategori Responden</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kategori Responden</li>
                    </ol>
                </div>
                <!-- back to previous page -->
                <a href="<?= base_url(); ?>/admin/kelola-survei/instrumen_">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- flash success tambah data  -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
    <!-- ./ flash success tambah data  -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-8">
                    <div class="card mt-2">
                        <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-4">
                            <h5><?= $responden['responden'] ?></h5>
                            <?php if (in_groups('Admin')) : ?>
                                <!-- Button trigger modal -->
                                <div class="dropdown ml-auto">
                                    <button class="btn btn-rouge dropdown-toggle ml-auto" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class=" fas fa-plus"></i> Tambah Pertanyaan
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tambahDataDiri_isian">Isian</a></li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tambahDataDiri_pilihan">Pilihan</a></li>
                                    </ul>
                                </div>


                            <?php endif; ?>
                        </div>

                        <div class="card-body p-4">


                            <div class="mb-3">
                                <?php foreach ($getPertanyaanByRespId as $data) : ?>
                                    <?php
                                    $pertanyaanId = $data['id'];
                                    $dataDiriJawabanModel = model('DataDiriJawabanModel');
                                    $this->dataDiriJawabanModel = new $dataDiriJawabanModel;
                                    $getPilihan =  $this->dataDiriJawabanModel->getPilihanByPertanyaanId($pertanyaanId);
                                    ?>

                                    <label class="col-form-label mb-2"><?= $data['pertanyaan']; ?></label>
                                    <?php if ($data['jenis'] == 'pilihan') :  ?>
                                        <select class="form-select" readonly>
                                            <?php foreach ($getPilihan as $pilihan) : ?>
                                                <option value="<?= $pilihan['pilihan']; ?>"> <?= $pilihan['pilihan']; ?></option>

                                            <?php endforeach; ?>
                                        </select>
                                    <?php else : ?>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <!-- modal tambah  pilihan -->
                            <div class=" modal fade" id="tambahDataDiri_pilihan" tabindex="-1" aria-labelledby="tambahButirLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header bg-cosmic text-white">
                                            <h6 class="modal-title" id="tambahButirLabel">Tambah Pertanyaan Data Diri <?= $responden['responden'] ?></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container mt-3">
                                                <!-- form tambah pertanyaan -->
                                                <form action="<?= base_url(); ?>/admin/updateDataDiri/<?= $responden['id']; ?>" method="post">
                                                    <?= csrf_field(); ?>

                                                    <!-- isi -->
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Masukkan pertanyaan" class="form-control mb-3" name="pertanyaan">
                                                        <input type="hidden" name="jenisRespondenID" value="<?= $responden['id'] ?>">

                                                        <div id="pilihanJwb">
                                                            <div class="row">
                                                                <div class="col-10 pilihanCol mb-3">
                                                                    <input type="text" placeholder="Masukkan Pilihan Jawaban" class="form-control" name="pilihan[]">
                                                                    <input type="hidden" name="jenis" value="pilihan">

                                                                </div>
                                                                <div class="col-2 HapusColButir d-flex align-items-center">
                                                                    <button type="button" class="btn btn-sm btn-info" type="button" onclick="tambahDataDiri(); return false">
                                                                        <i class="fas fa-plus"></i>
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </form>
                                                <!-- end form tambah butir -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end modal tambah pilihan -->

                            <!-- modal tambah isian -->
                            <div class="modal fade" id="tambahDataDiri_isian" tabindex="-1" aria-labelledby="tambahButirLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header bg-cosmic text-white">
                                            <h6 class="modal-title" id="tambahButirLabel">Tambah Pertanyaan Data Diri <?= $responden['responden'] ?></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container mt-3">
                                                <!-- form tambah pertanyaan -->
                                                <form action="<?= base_url(); ?>/admin/updateDataDiri/<?= $responden['id']; ?>" method="post">
                                                    <?= csrf_field(); ?>

                                                    <!-- isian -->
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Masukkan pertanyaan" class="form-control mb-3" name="pertanyaan">
                                                        <input type="hidden" name="jenisRespondenID" value="<?= $responden['id'] ?>">
                                                        <input type="hidden" name="jenis" value="isian">

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </form>
                                                <!-- end form tambah butir -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end modal tambah isian -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<script type="text/javascript">
    var z = 1;

    function tambahDataDiri() {
        var group = document.getElementById('pilihanJwb');

        var row = document.createElement('div');
        var pilihanCol = document.createElement('div');
        var hapusColButir = document.createElement('div');
        row.setAttribute('class', 'row')
        pilihanCol.setAttribute('class', 'col-10 pilihanCol mb-3')
        hapusColButir.setAttribute('class', 'col-2 HapusColButir d-flex align-items-center')

        group.appendChild(row);
        row.appendChild(pilihanCol);
        row.appendChild(hapusColButir);

        var butir = document.createElement('input');
        butir.setAttribute('name', 'pilihan[' + z + ']');
        butir.setAttribute('class', 'form-control');
        butir.setAttribute('placeholder', 'Pilihan Jawaban Lainnya');

        var hapus = document.createElement('span');

        pilihanCol.appendChild(butir);
        hapusColButir.appendChild(hapus);

        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function() {
            row.parentNode.removeChild(row);
        };

        z++;
    }
</script>

<?= $this->endSection(); ?>