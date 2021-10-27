<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;

class Instrumen extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->mRequest = service("request");
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

        return view('admin/kelola-survei/lihatInstrumen', $data);
    }
}
