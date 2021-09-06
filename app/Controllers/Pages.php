<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Pages extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $mRequest;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->mRequest = service("request");
        $this->config = config('Auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Penjaminan Mutu Instrumen Kepuasan Layanan FMIPA UNJ',
            'category' => $this->adminModel->getCategory(),

        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About|Penjaminan Mutu Instrumen Kepuasan Layanan FMIPA UNJ'

        ];
        return view('pages/about', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | SIJAMU',
            'config' => $this->config

        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register | SIJAMU'

        ];
        return view('auth/register', $data);
    }
}
