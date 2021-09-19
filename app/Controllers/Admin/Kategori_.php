<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Kategori_ extends BaseController
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
    // ---------------- kategori --------------------------

    public function kelolaKategori_()
    {
        // $category = $this->adminModel->findAll();

        $data = [
            'title' => 'Kelola Kategori',
            'category' => $this->adminModel->getCategory(),
            'getPeruntukkan' => $this->adminModel->getPeruntukkan(),
            'slug' => $this->mRequest->getVar('slug'),
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/kelola-survei/kategori_', $data);
    }
    public function editKategori_($slug)
    {

        $data = [
            'title' => 'Detail Kategori',
            'category' => $this->adminModel->getCategory($slug),
            'jenisResponden' => $this->jenisRespondenModel->getJenisResponden(),
            'peruntukkan' => $this->adminModel->getPeruntukkan(),
            'getSelectedResponden' => $this->adminModel->getSelectedResponden($slug),
            'validation' => \Config\Services::validation()
        ];

        //jika url diketik asal dan kategori tidak ada di tabel
        // menampilkan custom error page 

        if (empty($data['category'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kategori ' . $slug .
                ' Tidak Ditemukan');
        }
        return view('admin/kelola-survei/edit_kategori_', $data);
    }

    public function updateKategori_($slug)
    {


        $peruntukkanCategory = $this->mRequest->getVar('peruntukkanCategory');
        $kodeCategory = $this->mRequest->getVar('kodeCategory');
        $slug = url_title($this->mRequest->getPost('kodeCategory'), '-', true);
        $namaCategory = $this->mRequest->getVar('namaCategory');
        $sizeSlug = $this->adminModel->sizeSlug($slug);

        //update data by adding new checkbox value
        // looping sebanyak jumlah slug di database


        for ($i = 0; $i < $sizeSlug; $i++) {

            $data[] = array(
                // 'kodeCategory' => $kodeCategory,
                'slug' => $slug,
                // 'namaCategory' => $namaCategory,
                'peruntukkanCategory' => $peruntukkanCategory[$i],
            );
        }

        $this->adminModel->updateBatch($data, 'slug');


        session()->setFlashdata('message', 'Data kategori berhasil diubah');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }
    public function tambahKategori_()
    {
        $data = [
            'title' => 'Tambah Data Kategori',
            'category' => $this->adminModel->getCategory(),
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()
        ];
        return view('/admin/kelola-survei/tambah_kategori_', $data);
    }
    public function saveKategori_()
    {
        // validasi input
        if (!$this->validate([
            'kodeCategory' => [
                'rules'  => 'required|is_unique[category_instrumen.kodeCategory]',
                'errors' => [
                    'required' => 'Kode Kategori harus diisi.',
                    'is_unique' => 'Kode Kategori ini sudah terdaftar.'
                ]
            ],
            'namaCategory' => [
                'rules'  => 'required|is_unique[category_instrumen.namaCategory]',
                'errors' => [
                    'required' => 'Nama Kategori harus diisi.',
                    'is_unique' => 'Nama Kategori ini sudah terdaftar.'
                ]
            ],
            'peruntukkanCategory' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Peruntukkan Kategori harus diisi.',
                ]
            ],
        ])) {
            session()->setFlashdata('messageError', 'Data Tambah Kategori belum lengkap');

            return redirect()->to('/admin/kelola-survei/instrumen_')->withInput();
        }

        $slug = url_title($this->mRequest->getVar('kodeCategory'), '-', true);

        $peruntukkanCategory = $this->mRequest->getVar('peruntukkanCategory');

        for ($i = 0; $i < sizeof($peruntukkanCategory); $i++) {

            $data =
                [
                    'slug' => $slug,
                    'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                    'namaCategory' => $this->mRequest->getVar('namaCategory'),
                    'peruntukkanCategory' => $peruntukkanCategory[$i],
                ];
            $this->adminModel->save($data);
        }

        session()->setFlashdata('message', 'Data kategori berhasil ditambahkan');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }

    public function deleteKategori_($slug)
    {

        $this->adminModel->where('slug', $slug)->delete();

        session()->setFlashdata('message', 'Data kategori berhasil dihapus');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }
}
