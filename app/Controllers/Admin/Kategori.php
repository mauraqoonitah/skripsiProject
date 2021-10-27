<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Kategori extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $jenisRespondenModel;
    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->mRequest = service("request");
    }
    // ---------------- kategori --------------------------

    public function kelolaKategori()
    {

        $data = [
            'title' => 'Kelola Kategori',
            'category' => $this->adminModel->getCategory(),
            'getPeruntukkan' => $this->adminModel->getPeruntukkan(),
            'slug' => $this->mRequest->getVar('slug'),
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/kelola-survei/lihatKategori', $data);
    }
}
