<?php

namespace App\Controllers\Responden;

use App\Controllers\BaseController;

use App\Models\InstrumenModel;
use App\Models\RespondenModel;
use App\Models\PernyataanModel;
use App\Models\ResponseModel;
use App\Models\PetunjukInstrumenModel;
use App\Models\ProdiModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Authorization\PermissionModel;


class Response extends BaseController
{
    protected $instrumenModel;
    protected $respondenModel;
    protected $pernyataanModel;
    protected $responseModel;
    protected $petunjukInstrumenModel;
    protected $userModel;
    protected $prodiModel;
    protected $permissionModel;



    public function __construct()
    {
        $this->mRequest = service("request");
        $this->instrumenModel = new InstrumenModel();
        $this->respondenModel = new RespondenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->responseModel = new ResponseModel();
        $this->petunjukInstrumenModel = new PetunjukInstrumenModel();
        $this->userModel = new UserModel();
        $this->prodiModel = new ProdiModel();
        $this->permissionModel = new PermissionModel();
    }

    public function index()
    {
        $role = user()->role;
        $userId = user()->id;


        $data = [
            'title' => 'Pilih Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),
            'instrumenByResponden' => $this->instrumenModel->getInstrumenByResponden($role),
            'permissionsForUser' => $this->permissionModel->getPermissionsForUser($userId),

        ];

        return view('responden/berandaResponden', $data);
    }
    public function pilihInstrumen($id)
    {
        $data = [
            'title' => 'Pilih Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen($id),

        ];

        // jika instrumen tidak ada di database
        if (empty($data['instrumen'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Instrumen Tidak ditemukan.');
        }
        return view('responden/isiDataDiri', $data);
    }

    public function isiSurvei($id)
    {
        $instrumen = $this->instrumenModel->getInstrumen($id);
        $instrumenID =  $instrumen['id'];
        $userID = user()->id;


        $data = [
            'title' => 'Isi Survei',
            'instrumen' => $this->instrumenModel->getInstrumen($id),
            'lihatPernyataan' => $this->pernyataanModel->getPernyataanByInstrumenID($id),
            'pernyataan' => $this->pernyataanModel->getPernyataan($id),
            'getInstrumenID' =>  $this->pernyataanModel->getPernyataanByInstrumenID($id),
            'getPetunjukIns' =>  $this->petunjukInstrumenModel->getPetunjukIns($id),
            'cekRiwayatTgl' => $this->responseModel->cekRiwayatTgl($userID, $instrumenID),
            'validation' => \Config\Services::validation()
        ];

        // jika butir tidak ada di database
        if (empty($data['instrumen'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Instrumen Tidak ditemukan.');
        }

        return view('responden/isiSurvei', $data);
    }

    public function saveSurvei()
    {
        $instrumenID =  $this->mRequest->getVar('instrumenID');
        $getInstrumenID =   $this->pernyataanModel->getPernyataanByInstrumenID($instrumenID);

        $uniqueID = random_string('alnum', 16);

        foreach ($getInstrumenID as $butir) {
            if ($this->mRequest->getPost("checkbox-jawaban-" . $butir['id']) != Null) {
                $jawaban = $this->mRequest->getPost('checkbox-jawaban-' . $butir['id']);

                $data =
                    [
                        'questionID' => $butir['id'],
                        'slug' => $this->mRequest->getVar('slug'),
                        'kodeInstrumen' => $this->mRequest->getVar('kodeInstrumen'),
                        'instrumenID' => $this->mRequest->getVar('instrumenID'),
                        'responden' => $this->mRequest->getVar('responden'),
                        'jawaban' => $jawaban,
                        'userID'  => user()->id,
                        'uniqueID' => $uniqueID,

                        'created_at'  => date('Y-m-d H:i:s'),
                    ];

                $this->responseModel->save($data);
            }
        }
        //insert log data responden 
        $data_responden =
            [
                'userID'  => user()->id,
                'fullname' => user()->fullname,
                'role' => user()->role,
                'email' => user()->email,
            ];
        $this->respondenModel->save($data_responden);

        session()->setFlashdata('message', 'Terima kasih telah mengisi Survei Kepuasan');

        return redirect()->to('responden');
    }
    public function riwayatSurvei($id)
    {
        $respondenData = $this->responseModel->getResponseByInstrumenID($id);
        foreach ($respondenData as $respData) {
            $instrumenID = $respData['instrumenID'];
        }

        $data = [
            'title' => 'Riwayat Pengisian Survei',
            'responseInsId' => $this->responseModel->getResponseByInstrumenID($id),
            'respondenData' => $this->responseModel->getRespondenData($id),
            'getPetunjukIns' =>  $this->petunjukInstrumenModel->getPetunjukIns($instrumenID),


            'validation' => \Config\Services::validation()


        ];
        return view('responden/riwayat_survei', $data);
    }


    public function isiDataDiri()
    {
        $userID  = user()->id;

        $data = [
            'title' => 'Profil Saya',
            'getDataUser' => $this->userModel->getDataUser($userID),
            'getProdi' => $this->prodiModel->getProdi(),

        ];
        return view('responden/isiDataDiri', $data);
    }

    public function updateDataDiri()
    {

        $userID  = user()->id;
        // validasi input
        if (!$this->validate([
            'programStudi' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Program Studi harus diisi.',
                ]
            ],
            'fullname' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap harus diisi.',
                ]
            ],

        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan. Data belum lengkap!');

            return redirect()->to('/responden/isiDataDiri/' . $userID)->withInput();
        }
        $data =
            [
                'id' => $userID,
                'fullname' => $this->mRequest->getPost('fullname'),
                'programStudi' => $this->mRequest->getPost('programStudi'),

            ];
        $this->userModel->save($data);
        session()->setFlashdata('message', 'Data Berhasil Disimpan. <a href="/responden" class="fw-bold text-black">Klik Disini untuk Isi Survei Kepuasan</a>');

        return redirect()->to('/responden/isiDataDiri/' . $userID);
    }
}
