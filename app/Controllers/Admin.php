<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\RespondenModel;
use Myth\Auth\Models\LoginModel;
use Myth\Auth\Models\UserModel;


class Admin extends BaseController
{
    protected $kategoriModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $respondenModel;
    protected $loginModel;
    protected $userModel;
    protected $mRequest;


    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->respondenModel = new RespondenModel();
        $this->loginModel = new LoginModel();
        $this->userModel = new UserModel();
        $this->mRequest = service("request");
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'totalResponden' => count($this->respondenModel->getRespondenList()),
            'totalInstrumen' => count($this->instrumenModel->getInstrumen()),
            'totalKategori' => count($this->kategoriModel->getCategory()),
            'totalTanggapan' => count($this->responseModel->getTotalResponse()),
            'totalPernyataan' => count($this->pernyataanModel->getPernyataan()),
            'getLoginDate' => $this->loginModel->getLoginDate(),

        ];
        // dd($data);
        return view('admin/index', $data);
    }


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
