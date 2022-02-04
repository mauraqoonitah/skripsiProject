<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use App\Models\ResponseModel;
use App\Models\InstrumenModel;
use App\Models\LaporanModel;



class Analisis extends BaseController
{
    protected $mRequest;
    protected $kategoriModel;
    protected $instrumenModel;
    protected $responseModel;
    protected $laporanModel;

    protected $helpers = ['tampilGrafik'];

    public function __construct()
    {
        $this->mRequest = service("request");
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->responseModel = new ResponseModel();
        $this->laporanModel = new LaporanModel();
    }
    public function home()
    {
        $data = [
            'title' => 'Kelola Instrumen',
            'category' => $this->kategoriModel->getCategory(),


        ];
        return view('admin/analisis-survei/home', $data);
    }
    public function laporan()
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',
            'category' => $this->kategoriModel->getCategory(),
            'getLaporanAnalisis' => $this->laporanModel->getLaporanAnalisis(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/analisis-survei/laporan', $data);
    }
    public function laporanInstrumen($slug)
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',
            'category' => $this->kategoriModel->getCategory($slug),
            'getInstrumenBySlug' => $this->instrumenModel->getInstrumenByCtg($slug),
        ];
        return view('admin/analisis-survei/laporan_instrumen', $data);
    }
    public function laporanKepuasan($insID)
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',
            'instrumen' => $this->instrumenModel->getInstrumen($insID),
            'responsePertanyaan' => $this->responseModel->getResponseButir($insID),
            'responseJawaban' => $this->responseModel->getResponseJawaban($insID),
            'jumlahRespondenIns' => $this->responseModel->getJumlahRespondenIns($insID),
            'jumlahTanggapanIns' => $this->responseModel->getJumlahTanggapanIns($insID),
            'getLaporanInstrumen' => $this->laporanModel->getLaporanInstrumen($insID),
            'validation' => \Config\Services::validation()

        ];
        return view('admin/analisis-survei/laporan_kepuasan', $data);
    }


    public function editLaporanInstrumen($id)
    {
        $data = [
            'title' => 'Edit Laporan Instrumen',
            'joinLaporanWithInstrumen' => $this->laporanModel->joinLaporanWithInstrumen($id),

            'validation' => \Config\Services::validation()
        ];

        return view('admin/analisis-survei/edit_laporan_instrumen', $data);
    }

    public function updateLaporanInstrumen($id)
    {
        $instrumenID = $this->mRequest->getVar('instrumenID');
        if (!$this->validate([
            'laporanInstrumen' => [
                'rules' => 'uploaded[laporanInstrumen]|mime_in[laporanInstrumen,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation]|ext_in[laporanInstrumen,docx,doc,pdf,xls,xlsx,ppt,pptx]',
                'errors' => [
                    'uploaded' => 'Pilih file terlebih dahulu',
                    'mime_in' => 'File bukan format .doc/.docx/.pdf/.xls/.xlsx file',
                    'ext_in' => 'File extensions bukan format .doc/.docx/.pdf/.xls/.xlsx',
                ]
            ]

        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan.');

            return redirect()->to('/admin/editLaporanInstrumen/' . $id)->withInput();
        }
        $laporanInstrumen = $this->mRequest->getFile('laporanInstrumen');
        $laporanInstrumen->move('dokumenLaporan');
        $newNamaFile = $laporanInstrumen->getName();

        unlink('dokumenLaporan/' .  $this->mRequest->getVar('oldNamaFile'));

        $data =      [
            'id' => $id,
            'instrumenID' => $instrumenID,
            'laporanInstrumen' => $newNamaFile,
            'updated_by' => $this->mRequest->getVar('updated_by')
        ];
        $this->laporanModel->save($data);

        session()->setFlashdata('message', 'Dokumen berhasil diubah');

        return redirect()->to('/admin/laporanKepuasan/' . $instrumenID);
    }

    public function saveLaporanInstrumen($insID)
    {
        if (!$this->validate([
            'laporanInstrumen' => [
                'rules' => 'uploaded[laporanInstrumen]|mime_in[laporanInstrumen,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation]|ext_in[laporanInstrumen,docx,doc,pdf,xls,xlsx,ppt,pptx]',
                'errors' => [
                    'uploaded' => 'Pilih file terlebih dahulu',
                    'mime_in' => 'File bukan format .doc/.docx/.pdf/.xls/.xlsx file',
                    'ext_in' => 'File extensions bukan format .doc/.docx/.pdf/.xls/.xlsx',
                ]
            ]

        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan.');

            return redirect()->to('/admin/laporanKepuasan/' . $insID)->withInput();
        }
        $fileLaporanInstrumen = $this->mRequest->getFile('laporanInstrumen');
        $fileLaporanInstrumen->move('dokumenLaporan');
        $namaFileLaporanInstrumen = $fileLaporanInstrumen->getName();

        $data =
            [
                'instrumenID' => $this->mRequest->getVar('instrumenID'),
                'laporanInstrumen' => $namaFileLaporanInstrumen,
                'created_by' => $this->mRequest->getVar('created_by')
            ];
        $this->laporanModel->save($data);

        session()->setFlashdata('message', 'Dokumen berhasil disimpan!');

        return redirect()->to('/admin/laporanKepuasan/' . $insID);
    }
    public function deleteLaporanInstrumen($id)
    {
        $namaFile = $this->laporanModel->find($id);

        unlink('dokumenLaporan/' . $namaFile['laporanInstrumen']);

        $this->laporanModel->delete($id);

        session()->setFlashdata('message', 'File berhasil dihapus');

        return redirect()->back();
    }

    // ===================== analisis ===========================
    public function saveLaporanAnalisis()
    {
        if (!$this->validate([
            'laporanInstrumen' => [
                'rules' => 'uploaded[laporanInstrumen]|mime_in[laporanInstrumen,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation]|ext_in[laporanInstrumen,docx,doc,pdf,xls,xlsx,ppt,pptx]',
                'errors' => [
                    'uploaded' => 'Pilih file terlebih dahulu',
                    'mime_in' => 'File bukan format .doc/.docx/.pdf/.xls/.xlsx file',
                    'ext_in' => 'File extensions bukan format .doc/.docx/.pdf/.xls/.xlsx',
                ]
            ]

        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan.');

            return redirect()->to('/admin/laporanSurvei')->withInput();
        }
        $fileLaporanInstrumen = $this->mRequest->getFile('laporanInstrumen');
        $fileLaporanInstrumen->move('dokumenLaporan');
        $namaFileLaporanInstrumen = $fileLaporanInstrumen->getName();

        $data =
            [
                'laporanInstrumen' => $namaFileLaporanInstrumen,
                'created_by' => $this->mRequest->getVar('created_by')
            ];
        $this->laporanModel->save($data);

        session()->setFlashdata('message', 'Dokumen berhasil disimpan!');

        return redirect()->to('/admin/laporanSurvei');
    }

    public function editLaporanAnalisis($id)
    {
        $data = [
            'title' => 'Edit Laporan Analisis',
            'getLaporanAnalisis' => $this->laporanModel->getLaporanAnalisis($id),

            'validation' => \Config\Services::validation()
        ];

        return view('admin/analisis-survei/edit_laporan_analisis', $data);
    }
    public function updateLaporanAnalisis($id)
    {
        if (!$this->validate([
            'laporanInstrumen' => [
                'rules' => 'uploaded[laporanInstrumen]|mime_in[laporanInstrumen,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation]|ext_in[laporanInstrumen,docx,doc,pdf,xls,xlsx,ppt,pptx]',
                'errors' => [
                    'uploaded' => 'Pilih file terlebih dahulu',
                    'mime_in' => 'File bukan format .doc/.docx/.pdf/.xls/.xlsx file',
                    'ext_in' => 'File extensions bukan format .doc/.docx/.pdf/.xls/.xlsx',
                ]
            ]

        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan.');

            return redirect()->to('/admin/editLaporanAnalisis/' . $id)->withInput();
        }
        $laporanInstrumen = $this->mRequest->getFile('laporanInstrumen');
        $laporanInstrumen->move('dokumenLaporan');
        $newNamaFile = $laporanInstrumen->getName();
        unlink('dokumenLaporan/' . $this->mRequest->getVar('oldNamaFile'));

        $this->laporanModel->save(
            [
                'id' => $id,
                'laporanInstrumen' => $newNamaFile,
                'updated_by' => $this->mRequest->getVar('updated_by')

            ]
        );

        session()->setFlashdata('message', 'Dokumen berhasil diubah');

        return redirect()->to('/admin/laporanSurvei');
    }

    public function saveTampilGrafikStatus($id)
    {
        $tampil_grafik = $this->mRequest->getPost('tampilId');
        $id = $this->mRequest->getPost('id');


        if ($tampil_grafik == "1") {
            $this->instrumenModel->save(
                [
                    'id' => $id,
                    'tampil_grafik' => '0'
                ]
            );
            session()->setFlashdata('message', '  Grafik disembunyikan dari website');
        }
        if ($tampil_grafik == "0") {
            $this->instrumenModel->save(
                [
                    'id' => $id,
                    'tampil_grafik' => '1'
                ]
            );
            session()->setFlashdata('message', '  Grafik ditampilkan ke website');
        }
    }
}
