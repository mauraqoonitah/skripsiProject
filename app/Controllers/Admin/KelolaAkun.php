<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\RespondenModel;
use Myth\Auth\Models\AuthGroupsModel;
use Myth\Auth\Models\UserModel;



class KelolaAkun extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $respondenModel;
    protected $authGroupsModel;
    protected $userModel;

    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->respondenModel = new RespondenModel();
        $this->authGroupsModel = new AuthGroupsModel();
        $this->userModel = new UserModel();

        $this->mRequest = service("request");
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Akun',
            'responden' => $this->jenisRespondenModel->getJenisResponden(),
            'jenisResponden' => $this->jenisRespondenModel->getJenisResponden(),
            'getAdminUser' => $this->userModel->getAdminUser(),
            'getKontributor' => $this->userModel->getKontributor(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/kelola-akun/kelola_akun', $data);
    }
}
