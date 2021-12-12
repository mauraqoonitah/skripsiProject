<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\KategoriModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Instrumen_ extends BaseController
{
    protected $kategoriModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $authorize;

    protected $mRequest;


    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->authorize = service('authorization');

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
            'category' => $this->kategoriModel->getCategory(),
            'peruntukkan' => $this->kategoriModel->getPeruntukkan(),
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()
        ];

        return view('admin/kelola-survei/instrumen_', $data);
    }

    public function lihatInstrumen()
    {
        $data = [
            'title' => 'Export Data Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),

            'category' => $this->kategoriModel->getCategory(),

            'validation' => \Config\Services::validation()
        ];

        return view('admin/kelola-survei/lihatInstrumen', $data);
    }
    public function editInstrumen_($id)
    {
        $data = [
            'title' => 'Edit Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen($id),
            'category' => $this->kategoriModel->getCategory(),


            'validation' => \Config\Services::validation()
        ];

        return view('admin/kelola-survei/edit_instrumen_', $data);
    }

    public function updateInstrumen_($id)
    {
        // check validasi kode instrumen
        $oldKodeIns = $this->instrumenModel->getInstrumen($id);
        if ($oldKodeIns['kodeInstrumen'] == $this->mRequest->getVar('kodeInstrumen')) {
            $rule_kodeIns = 'required';
        } else {
            $rule_kodeIns = 'required|is_unique[instrumen.kodeInstrumen]';
        }

        // validasi input kode instrumen
        if (!$this->validate([
            'kodeInstrumen' => [
                'rules'  => $rule_kodeIns,
                'errors' => [
                    'required' => 'Kode Instrumen harus diisi.',
                    'is_unique' => 'Kode Instrumen sudah terdaftar.'
                ]
            ],
        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan.');

            return redirect()->to('/admin/editInstrumen_/' . $id)->withInput();
        }


        // check validasi peruntukkan instrumen
        $slug = $oldKodeIns['slug'];
        // ambil old peruntukkan instrumen by slug as array
        $getPeruntukkanCtg = $this->instrumenModel->getPeruntukkanBySlug($slug);
        foreach ($getPeruntukkanCtg as $selected_data) {
            $old_responden[] = $selected_data['peruntukkanInstrumen'];
        }
        // ambil input value peruntukkan instrumen
        $peruntukkanInputVal = $this->mRequest->getVar('peruntukkanInstrumen');

        // ambil old peruntukkan instrumen by instrumenID
        $getInstrumenByID = $this->instrumenModel->getInstrumenByID($id);
        foreach ($getInstrumenByID as $row) {
            $oldPeruntukkanIns = $row['peruntukkanInstrumen'];
        }

        // jika responden belum terdaftar di kategori
        if (!in_array($peruntukkanInputVal, $old_responden) || ($peruntukkanInputVal === $oldPeruntukkanIns)) {
            $this->instrumenModel->save(
                [
                    'id' => $id,
                    'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                    'kodeInstrumen' => $this->mRequest->getVar('kodeInstrumen'),
                    'namaInstrumen' => $this->mRequest->getVar('namaInstrumen'),
                    'peruntukkanInstrumen' => $this->mRequest->getVar('peruntukkanInstrumen')

                ]
            );
        } else {
            // jika responden sudah terdaftar di kategori
            session()->setFlashdata('messageError', 'Gagal menyimpan. Responden sudah pernah terdaftar pada kategori ini.');

            return redirect()->to('/admin/editInstrumen_/' . $id)->withInput();
        }


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
            'category' => $this->kategoriModel->getCategory($slug),

            'validation' => \Config\Services::validation()

        ];
        return view('admin/kelola-survei/tambah_instrumen_', $data);
    }
    //tambah
    public function saveInstrumen_()
    {
        $slug = url_title($this->mRequest->getVar('kodeCategory'), '-', true);
        $kodeCategory = $this->mRequest->getVar('kodeCategory');

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
            session()->setFlashdata('messageError', 'Gagal menyimpan. Periksa kembali data yang dimasukkan.');

            return redirect()->to('/admin/kelola-survei/tambah_instrumen_/' . $slug)->withInput();
        }
        $kodeInstrumen = $this->mRequest->getVar('kodeInstrumen');
        $peruntukkanInstrumen = $this->mRequest->getVar('peruntukkanInstrumen');
        $kodeIns = $kodeCategory . '.' . $kodeInstrumen;
        $data =
            [
                'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                'kodeInstrumen' => $kodeIns,
                'namaInstrumen' => $this->mRequest->getVar('namaInstrumen'),
                'slug' => $slug,
                'peruntukkanInstrumen' =>  $peruntukkanInstrumen
            ];
        $this->instrumenModel->save($data);

        $getIDByKodeIns = $this->instrumenModel->getIDByKodeIns($kodeIns);

        foreach ($getIDByKodeIns as $getInsID) {
            $insID = $getInsID['id'];
        }

        // create permission to table auth_permissions if instrumen is for Dosen
        if ($peruntukkanInstrumen === 'Dosen') {
            $this->authorize->createPermission($insID, 'instrumen ' . $kodeIns);
        }

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
