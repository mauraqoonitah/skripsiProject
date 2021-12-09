<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Pertanyaan untuk Data Diri pada Kategori Responden</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kategori Responden</li>
                    </ol>
                </div>
                <!-- back to previous page -->
                <a href="<?= base_url(); ?>/admin/jenisResponden">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- flash success tambah data  -->
                <?php if (session()->getFlashdata('message')) :  ?>
                    <div class="col-lg-8">
                        <div class="alert alert-success d-flex align-items-center fw-bold" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">

                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </symbol>
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                <?= session()->getFlashData('message'); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- ./ flash success tambah data  -->

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header text-rouge d-flex align-items-center col-lg-12 py-3">
                            <h5>Data Diri: <?= $responden['responden'] ?></h5>
                            <?php if (in_groups('Admin')) : ?>
                                <!-- Button trigger modal -->
                                <div class="dropdown ml-auto">
                                    <button class="btn btn-rouge dropdown-toggle ml-auto" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class=" fas fa-plus"></i> Buat Pertanyaan
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tambahDataDiri_isian">Isian</a></li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tambahDataDiri_pilihan">Pilihan</a></li>
                                    </ul>
                                </div>


                            <?php endif; ?>
                        </div>

                        <div class="card-body px-4 py-3">

                            <?php if (empty($getPertanyaanByRespId)) : ?>
                                <div class="alert alert-rouge alert-dismissible fade show" role="alert">
                                    <span class="text-cosmic"><i> Pertanyaan Data Diri pada Kategori Responden ini belum dibuat.</i></span>
                                </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <?php foreach ($getPertanyaanByRespId as $data) : ?>
                                    <?php
                                    $pertanyaanId = $data['id'];
                                    $dataDiriJawabanModel = model('DataDiriJawabanModel');
                                    $this->dataDiriJawabanModel = new $dataDiriJawabanModel;
                                    $getPilihan =  $this->dataDiriJawabanModel->getPilihanByPertanyaanId($pertanyaanId);
                                    ?>

                                    <label class="col-form-label mt-3"><?= $data['pertanyaan']; ?></label>

                                    <?php $pertanyaan = $data['pertanyaan'];
                                    $columnPertanyaan = str_replace(' ', '', $pertanyaan);
                                    ?>
                                    <?php if (in_groups('Admin')) : ?>

                                        <!-- aksi -->
                                        <div class="btn-group" role="group">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-delete-pertanyaan-<?= $columnPertanyaan; ?>">
                                                <button type="button" class="btn btn-sm " data-bs-placement="top" title="Hapus">
                                                    <i class="fas fa-trash-alt text-danger fs-6"></i>
                                                </button>
                                            </a>
                                        </div>

                                        <!-- ./aksi -->

                                        <!-- modal hapus pertanyaan -->
                                        <div class="modal fade" id="modal-delete-pertanyaan-<?= $columnPertanyaan; ?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered ">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-cosmic text-white">
                                                        <h5 class="modal-title fw-bold" id="hapusKategoriLabel">Hapus Pertanyaan Data Diri</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i> <br>
                                                        Yakin hapus pertanyaan <?= $data['pertanyaan']; ?> ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>

                                                        <form action="<?= base_url(); ?>/responden/deleteColumnDataDiri/<?= $columnPertanyaan; ?>" method="post">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="delPertanyaanId" value="<?= $data['id']; ?>">
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal hapus pertanyaan -->
                                    <?php endif; ?>

                                    <?php if ($data['jenis'] == 'pilihan') :  ?>
                                        <select class="form-select" readonly>
                                            <?php foreach ($getPilihan as $pilihan) : ?>
                                                <option value="<?= $pilihan['pilihan']; ?>"> <?= $pilihan['pilihan']; ?></option>

                                            <?php endforeach; ?>
                                        </select>
                                    <?php else : ?>
                                        <div class="form-group">
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
                                            <h6 class="modal-title" id="tambahButirLabel">Tambah Pertanyaan Pilihan Data Diri <?= $responden['responden'] ?></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container mt-3">

                                                <!-- form tambah pertanyaan -->
                                                <form action="<?= base_url(); ?>/admin/updateDataDiri/<?= $responden['id']; ?>" method="post">
                                                    <?= csrf_field(); ?>

                                                    <!-- isi -->
                                                    <div class="form-group">
                                                        <label class="form-label">Pertanyaan :</label>
                                                        <input type="text" placeholder="Masukkan pertanyaan" class="form-control mb-3" name="pertanyaan">
                                                        <input type="hidden" name="jenisRespondenID" value="<?= $responden['id'] ?>">

                                                        <div id="pilihanJwb">
                                                            <div class="row">
                                                                <div class="col-10 pilihanCol mb-3">
                                                                    <label class="form-label">Pilihan Jawaban :</label>
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
                                                        <p class="text-muted small ">*Responden hanya dapat memilih satu pilihan jawaban</p>
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
                                            <h6 class="modal-title" id="tambahButirLabel">Buat Pertanyaan Isian Data Diri <?= $responden['responden'] ?></h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container mt-3">
                                                <!-- form tambah pertanyaan -->
                                                <form action="<?= base_url(); ?>/admin/updateDataDiri/<?= $responden['id']; ?>" method="post">
                                                    <?= csrf_field(); ?>

                                                    <!-- isian -->
                                                    <div class="form-group">
                                                        <label class="form-label">Pertanyaan :</label>

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