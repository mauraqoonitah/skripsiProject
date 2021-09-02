<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('admin-body-content'); ?>
<div class="content-wrapper px-2 pb-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="fw-bold">Kelola Butir Pernyataan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin">Home</a></li>
                        <li class="breadcrumb-item active ">Kelola Survei</li>
                    </ol>
                </div>
                <!-- back to page view categories -->
                <a href="<?= base_url(); ?>/admin/kelola-survei/pernyataan">
                    <i class="nav-icon fas fa-arrow-left pl-2 pt-4" style="font-size: 20px;"></i>
                </a>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card border-light shadow ">
                <div class="card-header d-flex align-items-center py-4">
                    <h5> <?= $instrumen['namaInstrumen'] ?></h5>

                </div>
                <div class="card-body">
                    <!-- petunjuk pengisian -->
                    <div class="callout callout-info mb-5 ">
                        <div class="d-flex align-items-center ">
                            <h6 class="my-3 py-2">Petunjuk Pengisian Instrumen</h6>
                            <!-- buat petunjuk pengisian -->
                            <a href="#" class="ml-auto"> <button type="button" class="btn btn-info ">
                                    <i class=" fas fa-plus"></i> Ubah Petunjuk Pengisian
                                </button></a>
                        </div>
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
                    <div class="card-header d-flex align-items-center">
                        <h6> <?= $instrumen['namaInstrumen'] ?></h6>
                        <!-- Button trigger modal -->
                        <a href="#" class="ml-auto">
                            <button type="button" class="btn btn-warning ">
                                <i class=" fas fa-plus"></i> Tambah Butir
                            </button></a>
                    </div>
                    <div class="table-responsive-sm">
                        <table id="example2" class="table table-bordered table-hover align-middle ">
                            <thead class="table-light">

                                <tr>
                                    <th rowspan="2" style="width: 10px">No.</th>
                                    <th rowspan="2">Kriteria Kepuasan</th>
                                    <th colspan="5" class="text-center">Tingkat Kepuasan</th>
                                    <th rowspan="2" style="width: 40px" class="text-center">Aksi</th>
                                </tr>
                                <tr>
                                    <th style="width: 40px">5</th>
                                    <th style="width: 40px">4</th>
                                    <th style="width: 40px">3</th>
                                    <th style="width: 40px">2</th>
                                    <th style="width: 40px">1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Butir Pernyataan 1
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="<?= base_url(); ?>/admin/editButirPernyataan/< ?= $q['id']; ?>" class="btn btn-sm btn-warning text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Pernyataan">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-placement="top" title="Hapus" data-bs-toggle="modal" data-bs-target="#hapusButir">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Butir Pernyataan 2
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Butir Pernyataan 3
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Butir Pernyataan 4
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Butir Pernyataan 5</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="" id="" disabled>

                                        </div>
                                    </td>
                                </tr>
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
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<!-- modal tambah butir -->
<div class="modal fade" id="tambahButirModal" tabindex="-1" aria-labelledby="tambahButirLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahButirLabel">Tambah Butir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form tambah butir -->
                <form action="<?= base_url(); ?>/admin/savePernyataan" method="post">
                    <?= csrf_field(); ?>

                    <!-- pilih kode kategori -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="kode-kategori" class="col-sm-2 col-form-label">Kategori:</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="kodeCategory" name="kodeCategory">
                                    <option value="< ?= $value['kodeCategory']; ?>">
                                        < ?=$ value['kodeCategory']; ?> - < ?=$value['namaCategory']; ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- nama instrumen -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="nama-instrumen" class="col-sm-2 col-form-label">Nama instrumen:</label>

                            <div class="col-sm-10">
                                <select class="form-select" id="peruntukkan-kategori">
                                    <option selected class="text-muted">Pilih </option>
                                    <option value="">ins2 </option>
                                    <option value=""> ins1</option>
                                    <option value="">ins3</option>
                                    <option value="">ins4</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- isi butir -->
                    <div class="form-group">
                        <div class="mb-3 row">
                            <label for="pernyataan" class="col-sm-2 col-form-label">Isi Butir Pernyataan:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="pernyataan" name="pernyataan" rows="3"></textarea>
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
<!-- end modal tambah butir -->


<!-- modal hapus Butir Pernyataan -->
<div class="modal fade" id="hapusButir" tabindex="-1" aria-labelledby="hapusButirLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="hapusButirLabel">Hapus Butir Pernyataan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5>Yakin hapus butir pernyataan ini?</h5>
                <i class="fas fa-exclamation-circle fa-3x" style="width: 3rem; color: #D60C0C"></i>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal hapus butir -->

<?= $this->endSection(); ?>