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
            'pernyataan' => $this->pernyataanModel->getPernyataan($id),
            'instrumen' => $this->instrumenModel->getInstrumen($id),

        ];
        return view('admin/kelola-survei/edit_pernyataan', $data);
    }

    //edit data
    public function updatePernyataan($id)
    {
        $this->pernyataanModel->save(
            [
                'id' => $id,
                'butir' => $this->mRequest->getVar('butir'),
            ]
        );

        session()->setFlashdata('message', 'Data Pertanyaan berhasil diubah');

        return redirect()->to('/admin/editPernyataan/' . $id);
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

    //tambah data
    public function savePernyataan($id)
    {
        $slug = url_title($this->mRequest->getVar('kodeCategory'), '-', true);

        //validasi input
        if (!$this->validate([
            'butir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Butir pernyataan harus di isi.'
                ]
            ],
        ])) {
            session()->setFlashdata('messageError', 'Data Butir Pernyataan belum lengkap');

            return redirect()->to('admin/kelola-survei/butir/' . $id)->withInput();
        }

        $data = [
            'slug' => $slug,
            'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
            'instrumenID' => $this->mRequest->getVar('instrumenID'),
            'namaInstrumen' => $this->mRequest->getVar('namaInstrumen'),
            'peruntukkanInstrumen' => $this->mRequest->getVar('peruntukkanInstrumen'),
            'butir' => $this->mRequest->getVar('butir'),

        ];
        $this->pernyataanModel->save($data);

        session()->setFlashdata('message', 'Data Butir Pernyataan berhasil ditambahkan!');
        return redirect()->to('/admin/kelola-survei/butir/' . $id);
    }

    public function deletePernyataan($id)
    {
        $this->pernyataanModel->delete($id);

        session()->setFlashdata('message', 'Data Pernyataan berhasil dihapus');

        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}
