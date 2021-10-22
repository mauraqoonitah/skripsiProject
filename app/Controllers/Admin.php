<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\RespondenModel;

class Admin extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $respondenModel;
    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->respondenModel = new RespondenModel();
        $this->mRequest = service("request");
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'totalResponden' => count($this->respondenModel->getRespondenList()),
            'totalInstrumen' => count($this->instrumenModel->getInstrumen()),
            'totalKategori' => count($this->adminModel->getCategory()),
            'totalTanggapan' => count($this->responseModel->getTotalResponse()),
            'totalPernyataan' => count($this->pernyataanModel->getPernyataan()),

        ];
        return view('admin/index', $data);
    }


    // ---------------- MENU HASIL SURVEI - INSTRUMEN --------------------------


    // ---------------- MENU KELOLA SURVEI --------------------------

    // --------------------------- kelola responden ---------------------------------------------
    public function kelolaResponden()
    {
        $data = [
            'title' => 'Kelola Responden',
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/kelola-survei/jenis_responden', $data);
    }
}
