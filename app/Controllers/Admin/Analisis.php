<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\ResponseModel;
use App\Models\InstrumenModel;
use App\Models\LaporanModel;



class Analisis extends BaseController
{
    protected $mRequest;
    protected $adminModel;
    protected $instrumenModel;
    protected $responseModel;
    protected $laporanModel;



    public function __construct()
    {
        $this->mRequest = service("request");
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->responseModel = new ResponseModel();
        $this->laporanModel = new LaporanModel();
    }
    public function home()
    {
        $data = [
            'title' => 'Kelola Instrumen',
            'category' => $this->adminModel->getCategory(),


        ];
        return view('admin/analisis-survei/home', $data);
    }
    public function laporan()
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',
            'category' => $this->adminModel->getCategory(),


        ];
        return view('admin/analisis-survei/laporan', $data);
    }
    public function laporanInstrumen($slug)
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',
            'category' => $this->adminModel->getCategory($slug),
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
            'getLaporanInstrumen' => $this->laporanModel->getLaporanInstrumen($insID),
            'validation' => \Config\Services::validation()

        ];
        return view('admin/analisis-survei/laporan_kepuasan', $data);
    }
    public function saveLaporanInstrumen($insID)
    {
        // validasi input
        if (!$this->validate([
            'laporanInstrumen' => [
                'rules' => 'uploaded[laporanInstrumen]|mime_in[laporanInstrumen,application/pdf,application/msword,application/docx,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation]|ext_in[laporanInstrumen,docx,doc,pdf,xls,xslsx,ppt,pptx]',
                'errors' => [
                    'uploaded' => 'Pilih file terlebih dahulu',
                    'mime_in' => 'File bukan format .doc/.docx/.pdf/.xsl/.xslx file',
                    'ext_in' => 'File extensions bukan format .doc/.docx/.pdf/.xsl/.xslx',
                ]
            ]

        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan.');

            return redirect()->to('/admin/laporanKepuasan/' . $insID)->withInput();
        }
        // ambil file
        $fileLaporanInstrumen = $this->mRequest->getFile('laporanInstrumen');
        // pindahin path simpan file
        $fileLaporanInstrumen->move('dokumenLaporan');
        // ambil nama file
        $namaFileLaporanInstrumen = $fileLaporanInstrumen->getName();

        $data =
            [
                'instrumenID' => $this->mRequest->getVar('instrumenID'),
                'laporanInstrumen' => $namaFileLaporanInstrumen
            ];
        $this->laporanModel->save($data);

        session()->setFlashdata('message', 'Dokumen berhasil disimpan!');

        return redirect()->to('/admin/laporanKepuasan/' . $insID);
    }
    public function deleteLaporanInstrumen($id)
    {
        // cari file berdasarkan id
        $namaFile = $this->laporanModel->find($id);

        // hapus file di path
        unlink('dokumenLaporan/' . $namaFile['laporanInstrumen']);

        $this->laporanModel->delete($id);

        session()->setFlashdata('message', 'File berhasil dihapus');

        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}
