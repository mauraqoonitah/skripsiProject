<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\RespondenModel;
use App\Models\ResponseModel;

class Instrumen extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $respondenModel;
    protected $responseModel;
    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->respondenModel = new RespondenModel();
        $this->responseModel = new ResponseModel();
        $this->mRequest = service("request");
    }

    // ---------------- instrumen --------------------------

    public function kelolaInstrumen()
    {
        $data = [
            'title' => 'Kelola Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),
            'category' => $this->adminModel->getCategory(),

            'validation' => \Config\Services::validation()
        ];

        return view('admin/kelola-survei/instrumen', $data);
    }
    public function editInstrumen($id)
    {
        $data = [
            'title' => 'Edit Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen($id),
            'category' => $this->adminModel->getCategory(),


            'validation' => \Config\Services::validation()
        ];

        return view('admin/kelola-survei/edit_instrumen', $data);
    }

    public function updateInstrumen($id)
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

        session()->setFlashdata('msgInstrumen', 'Data instrumen berhasil diubah');

        return redirect()->to('/instrumen/kelolaInstrumen');
    }
    public function tambahInstrumen()
    {
        $data = [
            'title' => 'Tambah Data Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),
            'category' => $this->adminModel->getCategory(),

            'validation' => \Config\Services::validation()

        ];
        return view('admin/kelola-survei/tambah_instrumen', $data);
    }

    public function saveInstrumen()
    {
        // validasi input
        if (!$this->validate([
            'kodeInstrumen' => [
                'rules'  => 'required|is_unique[instrumen.kodeInstrumen]',
                'errors' => [
                    'required' => 'Kode Instrumen harus diisi.',
                    'is_unique' => 'Kode Instrumen ini sudah terdaftar.'
                ]
            ],
            // 'namaInstrumen' => [
            //     'rules'  => 'required|is_unique[instrumen.namaInstrumen]',
            //     'errors' => [
            //         'required' => 'Nama Instrumen harus diisi.',
            //         'is_unique' => 'Nama Instrumen ini sudah terdaftar.'
            //     ]
            // ],
        ])) {
            return redirect()->to('admin/kelola-survei/tambah_instrumen')->withInput();
        }

        $this->instrumenModel->save(
            [
                'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                'kodeInstrumen' => $this->mRequest->getVar('kodeInstrumen'),
                'namaInstrumen' => $this->mRequest->getVar('namaInstrumen'),
                'peruntukkanInstrumen' => $this->mRequest->getVar('peruntukkanInstrumen')

            ]
        );

        session()->setFlashdata('msgInstrumen', 'Data instrumen berhasil ditambahkan');

        return redirect()->to('/instrumen/kelolaInstrumen');
    }

    public function deleteInstrumen($id)
    {
        $this->instrumenModel->delete($id);
        session()->setFlashdata('msgInstrumen', 'Data Instrumen berhasil dihapus');

        return redirect()->to('/instrumen/kelolaInstrumen');
    }
}
