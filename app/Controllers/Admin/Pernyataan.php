<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Pernyataan extends BaseController
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
    public function butirInstrumen($id)
    {
        $data = [
            'title' => 'Kelola Butir Pernyataan',
            'lihatPernyataan' => $this->pernyataanModel->getPernyataanByInstrumenID($id),

            'pernyataan' => $this->pernyataanModel->getPernyataan($id),
            'category' => $this->adminModel->getCategory($id),
            'instrumen' => $this->instrumenModel->getInstrumen($id),

            'validation' => \Config\Services::validation()
        ];

        // jika butir tidak ada di database
        if (empty($data['instrumen'])) {
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
            return redirect()->to('/admin/kelola-survei/tambah_pernyataan')->withInput();
        }

        $this->pernyataanModel->save(
            [
                'pernyataan' => $this->mRequest->getVar('pernyataan'),
            ]
        );

        session()->setFlashdata('msgButir', 'Data Butir Pernyataan berhasil ditambahkan!');

        return redirect()->to('/admin/kelola-survei/pernyataan');
    }
}
