<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Instrumen_ extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->mRequest = service("request");
    }

    // ---------------- instrumen --------------------------

    public function kelolaInstrumen_()
    {
        $data = [
            'title' => 'Kelola Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),
            'instrumenByCtg' => $this->instrumenModel->getInstrumenByCtg(),
            'joinInsCtg' => $this->instrumenModel->joinInsdanCtg(),
            'category' => $this->adminModel->getCategory(),
            'peruntukkan' => $this->adminModel->getPeruntukkan(),
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()
        ];

        return view('admin/kelola-survei/instrumen_', $data);
    }
    // public function lihatInstrumen_($slug)
    // {
    //     $data = [
    //         'title' => 'Kelola Instrumen',
    //         'instrumen' => $this->instrumenModel->getInstrumen($slug),
    //         'instrumenByCtg' => $this->instrumenModel->getInstrumenByCtg($slug),
    //         'category' => $this->adminModel->getCategory($slug),

    //         'validation' => \Config\Services::validation()
    //     ];

    //     return view('admin/kelola-survei/instrumen_', $data);
    // }

    public function editInstrumen_($id)
    {
        $data = [
            'title' => 'Edit Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen($id),
            'category' => $this->adminModel->getCategory(),


            'validation' => \Config\Services::validation()
        ];

        return view('admin/kelola-survei/edit_instrumen_', $data);
    }

    public function updateInstrumen_($id)
    {

        $this->instrumenModel->save(
            [
                'id' => $id,
                'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                'kodeInstrumen' => $this->mRequest->getVar('kodeInstrumen'),
                'namaInstrumen' => $this->mRequest->getVar('namaInstrumen'),
                'peruntukkanInstrumen' => $this->mRequest->getVar('peruntukkanInstrumen')

            ]
        );

        session()->setFlashdata('message', 'Data instrumen berhasil diubah');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }
    public function tambahInstrumen_($slug)
    {
        $data = [
            'title' => 'Tambah Data Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen($slug),
            'category' => $this->adminModel->getCategory($slug),

            'validation' => \Config\Services::validation()

        ];
        return view('admin/kelola-survei/tambah_instrumen_', $data);
    }
    //tambah
    public function saveInstrumen_()
    {
        $slug = url_title($this->mRequest->getVar('kodeCategory'), '-', true);

        // validasi input
        if (!$this->validate([
            'kodeInstrumen' => [
                'rules'  => 'required|is_unique[instrumen.kodeInstrumen]',
                'errors' => [
                    'required' => 'Kode Instrumen harus diisi.',
                    'is_unique' => 'Kode Instrumen sudah terdaftar.'
                ]
            ],
            'namaInstrumen' => [
                'rules'  => 'required|is_unique[instrumen.namaInstrumen]',
                'errors' => [
                    'required' => 'Nama Instrumen harus diisi.',
                    'is_unique' => 'Nama Instrumen sudah terdaftar.'
                ]
            ],

        ])) {
            return redirect()->to('/admin/kelola-survei/tambah_instrumen_/' . $slug)->withInput();
        }

        $data =
            [
                'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                'kodeInstrumen' => $this->mRequest->getVar('kodeInstrumen'),
                'namaInstrumen' => $this->mRequest->getVar('namaInstrumen'),
                'slug' => $slug,
                'peruntukkanInstrumen' => $this->mRequest->getVar('peruntukkanInstrumen')
            ];
        $this->instrumenModel->save($data);

        session()->setFlashdata('message', 'Data instrumen berhasil ditambahkan');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }

    public function deleteInstrumen_($id)
    {
        $this->instrumenModel->delete($id);

        session()->setFlashdata('message', 'Data Instrumen berhasil dihapus');

        return redirect()->to('admin/kelola-survei/instrumen_');
    }
}
