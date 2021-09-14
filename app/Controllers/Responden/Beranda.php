<?php

namespace App\Controllers\Responden;

use App\Controllers\BaseController;

use App\Models\InstrumenModel;
use App\Models\RespondenModel;

class Beranda extends BaseController
{
    protected $instrumenModel;
    protected $respondenModel;

    public function __construct()
    {
        $this->mRequest = service("request");
        $this->instrumenModel = new InstrumenModel();
        $this->respondenModel = new RespondenModel();
    }

    public function index()
    {
        $role = user()->role;

        $data = [
            'title' => 'Beranda - Pilih Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),
            'instrumenByResponden' => $this->instrumenModel->getInstrumenByResponden($role),

        ];

        return view('responden/berandaResponden', $data);
    }
    public function pilihInstrumen($id)
    {
        $data = [
            'title' => 'Pilih Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen($id),

        ];

        // jika instrumen tidak ada di database
        if (empty($data['instrumen'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Instrumen Tidak ditemukan.');
        }
        return view('responden/isiDataDiri', $data);
    }

    public function saveDataDiri()
    {
        $this->respondenModel->save(
            [
                'nama' => $this->mRequest->getVar('nama')

            ]
        );
        session()->setFlashdata('insertDataDiri', 'Data berhasil ditambah');

        return redirect()->to('/responden/isiSurvei');
    }


    public function isiSurvei()
    {
        $data = [
            'title' => 'Isi Survei',
            'instrumen' => $this->instrumenModel->getInstrumen(),

            'validation' => \Config\Services::validation()


        ];
        return view('responden/isiSurvei', $data);
    }
}
