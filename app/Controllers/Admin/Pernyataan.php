<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\KategoriModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\PetunjukInstrumenModel;

class Pernyataan extends BaseController
{
    protected $kategoriModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $petunjukInstrumenModel;
    protected $mRequest;


    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->petunjukInstrumenModel = new PetunjukInstrumenModel();
        $this->mRequest = service("request");
    }
    // ---------------- butir pernyataan --------------------------

    public function kelolaPernyataan()
    {

        $data = [
            'title' => 'Kelola Butir Pernyataan',
            'pernyataan' => $this->pernyataanModel->getPernyataan(),
            'category' => $this->kategoriModel->getCategory(),
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
            'category' => $this->kategoriModel->getCategory($id),
            'instrumen' => $this->instrumenModel->getInstrumen($id),
            'petunjukInstrumenModel' => $this->petunjukInstrumenModel->getPetunjukIns($id),
            'getPetunjukIns' => $this->petunjukInstrumenModel->getPetunjukIns($id),

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
        $data =  [
            'id' => $id,
            'butir' => $this->mRequest->getVar('butir'),
        ];
        $this->pernyataanModel->save($data);

        session()->setFlashdata('message', 'Data Pertanyaan berhasil diubah');

        return redirect()->back();
    }

    public function tambahPernyataan()
    {
        $data = [
            'title' => 'Tambah Data Butir Pernyataan',
            'pernyataan' => $this->pernyataanModel->getPernyataan(),
            'category' => $this->kategoriModel->getCategory(),

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

        $isian_butir = $this->mRequest->getVar('butir[]');
        foreach ($isian_butir as $cols_isian_butir) {
            $data =
                [
                    'slug' => $slug,
                    'kodeCategory' => $this->mRequest->getVar('kodeCategory'),
                    'instrumenID' => $this->mRequest->getVar('instrumenID'),
                    'namaInstrumen' => $this->mRequest->getVar('namaInstrumen'),
                    'peruntukkanInstrumen' => $this->mRequest->getVar('peruntukkanInstrumen'),
                    'butir' => $cols_isian_butir,

                ];
            $this->pernyataanModel->save($data);
        }

        session()->setFlashdata('message', 'Data Butir Pernyataan berhasil ditambahkan!');
        return redirect()->to('/admin/kelola-survei/butir/' . $id);
    }

    public function deletePernyataan($id)
    {
        $this->pernyataanModel->delete($id);

        session()->setFlashdata('message', 'Data Pernyataan berhasil dihapus');

        return redirect()->back();
    }


    //tambah data petunjuk pengisian instrumen
    public function savePetunjukPengisian($id)
    {
        //validasi input
        if (!$this->validate([
            'isiPetunjuk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Petunjuk Pengisian Instrumen harus di isi.'
                ]
            ],
        ])) {
            session()->setFlashdata('messageError', 'Petunjuk Pengisian Instrumen belum lengkap');

            return redirect()->to('admin/kelola-survei/butir/' . $id)->withInput();
        }

        $data = [
            'instrumenID' => $this->mRequest->getVar('instrumenID'),
            'isiPetunjuk' => $this->mRequest->getVar('isiPetunjuk'),

        ];
        $this->petunjukInstrumenModel->save($data);

        session()->setFlashdata('message', 'Petunjuk Pengisian Instrumen berhasil ditambahkan.');
        return redirect()->to('/admin/kelola-survei/butir/' . $id);
    }

    public function editPetunjukPengisian($id)
    {
        $data = [
            'title' => 'Edit Petunjuk Pengisian Instrumen',
            'getIsiPetunjuk' => $this->petunjukInstrumenModel->getIsiPetunjuk($id),
        ];

        // jika butir tidak ada di database
        if (empty($data['getIsiPetunjuk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan.');
        }

        return view('admin/kelola-survei/edit_petunjuk', $data);
    }

    public function updatePetunjukPengisian($id)
    {
        $data = [
            'id' => $id,
            'isiPetunjuk' => $this->mRequest->getVar('isiPetunjuk'),

        ];
        $this->petunjukInstrumenModel->save($data);

        session()->setFlashdata('message', 'Petunjuk Pengisian Instrumen berhasil diubah.');

        return redirect()->back();
    }
}
