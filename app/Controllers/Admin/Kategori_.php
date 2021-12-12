<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\KategoriModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Kategori_ extends BaseController
{
    protected $kategoriModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $mRequest;


    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->mRequest = service("request");
    }
    // ---------------- kategori --------------------------

    public function kelolaKategori_()
    {
        // $category = $this->kategoriModel->findAll();

        $data = [
            'title' => 'Kelola Kategori',
            'category' => $this->kategoriModel->getCategory(),
            'getPeruntukkan' => $this->kategoriModel->getPeruntukkan(),
            'slug' => $this->mRequest->getVar('slug'),
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/kelola-survei/kategori_', $data);
    }


    public function lihatKategori()
    {

        $data = [
            'title' => 'Export Data Kategori',
            'category' => $this->kategoriModel->getCategory(),
            'getPeruntukkan' => $this->kategoriModel->getPeruntukkan(),
            'slug' => $this->mRequest->getVar('slug'),
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/kelola-survei/lihatKategori', $data);
    }
    public function editKategori_($slug)
    {

        $data = [
            'title' => 'Detail Kategori',
            'category' => $this->kategoriModel->getCategory($slug),
            'allCategory' => $this->kategoriModel->getCategory(),
            'jenisResponden' => $this->jenisRespondenModel->getJenisResponden(),
            'peruntukkan' => $this->kategoriModel->getPeruntukkan(),
            'getSelectedResponden' => $this->kategoriModel->getSelectedResponden($slug),
            'validation' => \Config\Services::validation()
        ];
        // dd($data);

        //jika url diketik asal dan kategori tidak ada di tabel
        // menampilkan custom error page 

        if (empty($data['category'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kategori ' . $slug .
                ' Tidak Ditemukan');
        }
        return view('admin/kelola-survei/edit_kategori_', $data);
    }

    public function updateKategori_($id)
    {
        $peruntukkanCategory = $this->mRequest->getPost('peruntukkanCategory');
        $slug = url_title($this->mRequest->getPost('kodeCategory'), '-', true);

        $oldCtg = $this->kategoriModel->getCategoryById($id);
        foreach ($oldCtg as $row) {
            $oldSlug = $row['slug'];
            $uniqueID =  $row['uniqueID'];
        }

        $oldSelectedResponden = $this->kategoriModel->getSelectedResponden($oldSlug);
        // dd($oldSelectedResponden);
        $sizeSlug = $this->kategoriModel->sizeSlug($oldSlug);

        // update nama kategori
        for ($i = 0; $i < $sizeSlug; $i++) {

            $data[] = array(
                'uniqueID' => $uniqueID,
                'slug' => $slug,
                'namaCategory' => $this->mRequest->getVar('namaCategory'),
                'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
            );
            $this->kategoriModel->updateBatch($data, 'uniqueID');
        }

        // get selected value (old data)
        $old_responden = [];
        foreach ($oldSelectedResponden as $selected_data) {
            $old_responden[] = $selected_data['peruntukkanCategory'];
        }
        // dd($old_responden);


        // ADDED responden kategori - ambil new insert nya
        foreach ($peruntukkanCategory as $add_val) {
            if (!in_array($add_val, $old_responden)) {
                $data = [
                    'slug' => $slug,
                    'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                    'namaCategory' => $this->mRequest->getVar('namaCategory'),
                    'peruntukkanCategory' => $add_val,
                ];
                // var_dump($add_val . " ADDED <br>");
                $this->kategoriModel->insert($data);
            }
        }

        //REMOVED responden kategori- ambil data yang di remove
        foreach ($old_responden as $remove_val) {
            if (!in_array($remove_val, $peruntukkanCategory)) {

                $data = [
                    'slug' => $slug,
                    'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                    'namaCategory' => $this->mRequest->getVar('namaCategory'),
                    'peruntukkanCategory' => $remove_val,
                ];
                // var_dump($remove_val . " REMOVED <br>");
                $this->kategoriModel->where($data)->delete();
            }
        }
        session()->setFlashdata('message', ' Data Kategori Instrumen berhasil diubah');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }

    public function tambahKategori_()
    {

        $data = [
            'title' => 'Tambah Data Kategori',
            'category' => $this->kategoriModel->getCategory(),
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
        $uniqueID = random_string('alnum', 16);
        $peruntukkanCategory = $this->mRequest->getVar('peruntukkanCategory');

        for ($i = 0; $i < sizeof($peruntukkanCategory); $i++) {

            $data =
                [
                    'slug' => $slug,
                    'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                    'namaCategory' => $this->mRequest->getVar('namaCategory'),
                    'peruntukkanCategory' => $peruntukkanCategory[$i],
                    'uniqueID' => $uniqueID,
                ];
            $this->kategoriModel->save($data);
        }

        session()->setFlashdata('message', 'Kategori Instrumen berhasil ditambahkan');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }

    public function deleteKategori_($slug)
    {

        $this->kategoriModel->where('slug', $slug)->delete();

        session()->setFlashdata('message', 'Data kategori berhasil dihapus');

        return redirect()->to('/admin/kelola-survei/instrumen_');
    }
}
