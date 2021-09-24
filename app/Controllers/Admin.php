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

        ];


        return view('admin/index', $data);
    }
    // ---------------- MENU HASIL SURVEI - RESPONDEN --------------------------

    public function dataResponden()
    {
        $data = [
            'title' => 'Data Responden',
            'responden' => $this->respondenModel->getResponden(),

        ];
        return view('admin/hasil-survei/responden', $data);
    }
    public function hasilSurveiResponden($id)
    {
        $data = [
            'title' => 'Tanggapan Responden',
            'responden' => $this->respondenModel->getResponden($id),

        ];
        return view('admin/hasil-survei/lihat_responden', $data);
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
