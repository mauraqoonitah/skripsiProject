<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\QuestionModel;

class Admin extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $questionModel;
    protected $mRequest;

    public function __construct()
    {
        $this->mRequest = service("request");
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->questionModel = new QuestionModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin'

        ];
        return view('admin/index', $data);
    }
    public function hasilSurveiResponden()
    {
        $data = [
            'title' => 'Tanggapan Responden'

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
    public function hasilSurveiInstrumen()
    {
        $data = [
            'title' => 'Hasil Survei Per-Instrumen'

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

    // ---------------- kategori --------------------------

    public function kelolaKategori()
    {
        // $category = $this->adminModel->findAll();

        $data = [
            'title' => 'Kelola Kategori',
            'category' => $this->adminModel->getCategory()
        ];

        return view('admin/kelola-survei/kategori', $data);
    }
    public function editKategori($slug)
    {
        $data = [
            'title' => 'Detail Kategori',
            'category' => $this->adminModel->getCategory($slug)
        ];

        //jika url diketik asal dan kategori tidak ada di tabel
        // menampilkan custom error page 

        if (empty($data['category'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kategori ' . $slug .
                ' Tidak Ditemukan');
        }
        return view('admin/kelola-survei/edit_kategori', $data);
    }
    public function tambahKategori()
    {
        $data = [
            'title' => 'Tambah Data Kategori',
            'category' => $this->adminModel->getCategory()
        ];
        return view('admin/kelola-survei/kategori', $data);
    }
    public function saveKategori()
    {
        $slug = url_title($this->mRequest->getVar('kodeCategory'), '-', true);
        $this->adminModel->save(
            [
                'slug' => $slug,
                'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                'namaCategory' => $this->mRequest->getVar('namaCategory')

            ]
        );

        session()->setFlashdata('msgKategori', 'Data kategori berhasil ditambahkan');

        return redirect()->to('/admin/kelolaKategori');
    }
    // ---------------- instrumen --------------------------


    public function kelolaInstrumen()
    {
        $data = [
            'title' => 'Kelola Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen()
        ];

        return view('admin/kelola-survei/instrumen', $data);
    }
    public function editInstrumen($id)
    {
        $data = [
            'title' => 'Edit Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen($id)
        ];

        return view('admin/kelola-survei/edit_instrumen', $data);
    }

    // ---------------- butir pernyataan --------------------------

    public function kelolaButirPernyataan()
    {
        $data = [
            'title' => 'Kelola Butir Pernyataan',
            'question' => $this->questionModel->getButirPernyataan()
        ];

        return view('admin/kelola-survei/question', $data);
    }
    public function editButirPernyataan($id)
    {
        $data = [
            'title' => 'Edit Butir Pernyataan Instrumen',
            'question' => $this->questionModel->getButirPernyataan($id)
        ];

        return view('admin/kelola-survei/edit_butir', $data);
    }
}
