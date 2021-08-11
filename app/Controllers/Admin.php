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
            'title' => 'Dashboard Admin'

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

    // ---------------- kategori --------------------------

    public function kelolaKategori()
    {
        // $category = $this->adminModel->findAll();

        $data = [
            'title' => 'Kelola Kategori',
            'category' => $this->adminModel->getCategory(),
            'responden' => $this->respondenModel->getResponden(),

            'validation' => \Config\Services::validation()

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
            'category' => $this->adminModel->getCategory(),
            'responden' => $this->respondenModel->getResponden(),

            'validation' => \Config\Services::validation()
        ];
        return view('admin/kelola-survei/tambah_kategori', $data);
    }
    public function saveKategori()
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
        ])) {
            return redirect()->to('admin/kelola-survei/tambah_kategori')->withInput();
        }

        $slug = url_title($this->mRequest->getVar('kodeCategory'), '-', true);

        $this->adminModel->save(
            [
                'slug' => $slug,
                'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                'namaCategory' => $this->mRequest->getVar('namaCategory'),
                'peruntukkanCategory' => $this->mRequest->getVar('peruntukkanCategory')

            ]
        );

        session()->setFlashdata('msgKategori', 'Data kategori berhasil ditambahkan');

        return redirect()->to('/admin/kelolaKategori');
    }

    public function deleteKategori($id)
    {
        $this->adminModel->delete($id);
        session()->setFlashdata('msgKategori', 'Data kategori berhasil dihapus');

        return redirect()->to('/admin/kelolaKategori');
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
            'instrumen' => $this->instrumenModel->getInstrumen($id)
        ];

        return view('admin/kelola-survei/edit_instrumen', $data);
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

        return redirect()->to('/admin/kelolaInstrumen');
    }

    public function deleteInstrumen($id)
    {
        $this->instrumenModel->delete($id);
        session()->setFlashdata('msgInstrumen', 'Data Instrumen berhasil dihapus');

        return redirect()->to('/admin/kelolaInstrumen');
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
            $validation = \Config\Services::validation();
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
