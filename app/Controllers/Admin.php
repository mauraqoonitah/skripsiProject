<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\RespondenModel;
use App\Models\ResponseModel;

class Admin extends BaseController
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

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',

        ];


        return view('admin/index', $data);
    }
    // ---------------- MENU HASIL SURVEI - RESPONDEN --------------------------

    public function hasilSurveiResponden()
    {
        $data = [
            'title' => 'Tanggapan Responden',
            'response' => $this->responseModel->getResponse(),

        ];
        return view('admin/hasil-survei/responden', $data);
    }
    public function lihatResponden()
    {
        $data = [
            'title' => 'Lihat Responden'

        ];
        return view('admin/hasil-survei/lihat_responden', $data);
    }
    // ---------------- MENU HASIL SURVEI - INSTRUMEN --------------------------

    public function hasilSurveiInstrumen()
    {
        $data = [
            'title' => 'Hasil Survei Per-Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),


        ];
        return view('admin/hasil-survei/instrumen', $data);
    }
    public function lihatInstrumen()
    {
        $data = [
            'title' => 'Hasil Survei Per-Instrumen'

        ];
        return view('admin/hasil-survei/lihat_instrumen', $data);
    }

    // ---------------- MENU KELOLA SURVEI --------------------------


    // ---------------- butir pernyataan --------------------------

    public function kelolaPernyataan()
    {

        $data = [
            'title' => 'Kelola Butir Pernyataan',
            'pernyataan' => $this->pernyataanModel->getPernyataan(),
            'category' => $this->adminModel->getCategory(),
            'instrumen' => $this->instrumenModel->getInstrumen()
        ];

        return view('admin/kelola-survei/pernyataan', $data);
    }
    public function butirInstrumen($kodeCategory)
    {
        $data = [
            'title' => 'Kelola Butir Pernyataan',
            'pernyataan' => $this->pernyataanModel->getPernyataan($kodeCategory),
            'category' => $this->adminModel->getCategory(),
            'instrumen' => $this->instrumenModel->getInstrumen(),

        ];

        // jika butir tidak ada di database
        if (empty($data['pernyataan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Butir Pernyataan Tidak ditemukan.');
        }
        return view('admin/kelola-survei/pernyataan_detail', $data);
    }
    public function editPernyataan($id)
    {
        $data = [
            'title' => 'Edit Butir Pernyataan Instrumen',
            'pernyataan' => $this->pernyataanModel->getPernyataan($id)
        ];

        return view('admin/kelola-survei/edit_pernyataan', $data);
    }
    public function tambahPernyataan()
    {
        $data = [
            'title' => 'Tambah Data Butir Pernyataan',
            'pernyataan' => $this->pernyataanModel->getPernyataan(),
            'category' => $this->adminModel->getCategory(),

            'validation' => \Config\Services::validation()


        ];
        return view('admin/kelola-survei/tambah_pernyataan', $data);
    }
    public function savePernyataan()
    {

        //validasi input
        if (!$this->validate([
            'pernyataan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Butir pernyataan harus di isi.'
                ]
            ],
        ])) {
            return redirect()->to('admin/tambahPernyataan')->withInput();
        }

        $this->pernyataanModel->save(
            [
                'pernyataan' => $this->mRequest->getVar('pernyataan'),
            ]
        );

        session()->setFlashdata('msgButir', 'Data Butir Pernyataan berhasil ditambahkan!');

        return redirect()->to('/admin/kelolaPernyataan');
    }

    // --------------------------- kelola responden ---------------------------------------------
    public function kelolaResponden()
    {
        $data = [
            'title' => 'Kelola Responden',
            'responden' => $this->respondenModel->getResponden(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/kelola-survei/jenis_responden', $data);
    }
}
