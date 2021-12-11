<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\LaporanModel;

class Pages extends BaseController
{
    protected $kategoriModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $laporanModel;
    protected $mRequest;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->responseModel = new ResponseModel();
        $this->laporanModel = new LaporanModel();
        $this->mRequest = service("request");
        $this->config = config('Auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Instrumen Kepuasan FMIPA UNJ',
            'responseActiveShowGrafik' => $this->responseModel->getResponseActiveShowGrafik(),


        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Instrumen Kepuasan FMIPA UNJ'

        ];
        return view('pages/about', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | Instrumen Kepuasan FMIPA UNJ',
            'config' => $this->config

        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register | Instrumen Kepuasan FMIPA UNJ'

        ];
        return view('auth/register', $data);
    }
    public function forgot()
    {
        $data = [
            'title' => 'Lupa Kata Sandi | Instrumen Kepuasan FMIPA UNJ'

        ];
        return view('auth/forgot', $data);
    }
    public function hasilKepuasan($instrumenID)
    {
        $data = [
            'title' => 'Instrumen Kepuasan FMIPA UNJ',
            'responsePertanyaan' => $this->responseModel->getResponseButir($instrumenID),
            'jumlahRespondenIns' => $this->responseModel->getJumlahRespondenIns($instrumenID),
            'jumlahTanggapanIns' => $this->responseModel->getJumlahTanggapanIns($instrumenID),
            'responseJawaban' => $this->responseModel->getResponseJawaban($instrumenID),

            'instrumen' => $this->instrumenModel->getInstrumen($instrumenID),
            'getLaporanInstrumen' => $this->laporanModel->getLaporanInstrumen($instrumenID),



        ];

        return view('pages/grafik_kepuasan', $data);
    }
}
