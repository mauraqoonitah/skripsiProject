<?php

namespace App\Controllers\Responden;

use App\Controllers\BaseController;

use App\Models\InstrumenModel;
use App\Models\RespondenModel;
use App\Models\PernyataanModel;
use App\Models\ResponseModel;
use App\Models\PetunjukInstrumenModel;
use App\Models\ProdiModel;
use App\Models\JenisRespondenModel;
use App\Models\DataDiriPertanyaanModel;
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
    protected $jenisRespondenModel;
    protected $pertanyaanDataDiriModel;
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
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->dataDiriPertanyaanModel = new DataDiriPertanyaanModel();
        $this->permissionModel = new PermissionModel();
    }

    public function index()
    {
        $role = user()->role;
        $userId = user()->id;

        $getJenisRespondenID = $this->jenisRespondenModel->getJenisRespondenID($role);
        foreach ($getJenisRespondenID as $jenisRespondenId) {
            $jenisRespId =  $jenisRespondenId['id'];
        }

        $getPertanyaanByRespId = $this->dataDiriPertanyaanModel->getPertanyaanByRespId($jenisRespId);
        // dd($getPertanyaanByRespId);


        foreach ($getPertanyaanByRespId as $getPertanyaan) {
            $pertanyaan = $getPertanyaan['pertanyaan'];
            $columnPertanyaan = str_replace(' ', '', $pertanyaan);

            $strReplace1 = str_replace('(', '-', $columnPertanyaan);
            $strReplace2 = str_replace(')', '-', $strReplace1);
            $strReplace3 = str_replace('?', '-', $strReplace2);
            $strReplace4 = str_replace('/', 'atau', $strReplace3);
            $columnPertanyaan = str_replace('*', '-', $strReplace4);

            // dd($columnPertanyaan);
        }
        $getDataUser = $this->userModel->getDataUser($userId);
        if (!empty($columnPertanyaan)) {
            foreach ($getDataUser as $userdata) {
                $dataUser = $userdata->$columnPertanyaan;
                // jika data diri user belum diisi lengkap
                if ($dataUser === Null) {
                    // dd('ada yg empty');
                    session()->setFlashdata('messageWarning', 'Lengkapi data diri Anda sebelum isi survei instrumen kepuasan');
                    return redirect()->to('responden/isiDataDiri/' . $userId);
                }
            }
        }



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
        $userRole = user()->role;
        $getJenisRespondenID = $this->jenisRespondenModel->getJenisRespondenID($userRole);
        foreach ($getJenisRespondenID as $data) {
            $jenisRespondenId = $data['id'];
        }


        $data = [
            'title' => 'Isi Survei',
            'instrumen' => $this->instrumenModel->getInstrumen($id),
            'lihatPernyataan' => $this->pernyataanModel->getPernyataanByInstrumenID($id),
            'pernyataan' => $this->pernyataanModel->getPernyataan($id),
            'getInstrumenID' =>  $this->pernyataanModel->getPernyataanByInstrumenID($id),
            'getPetunjukIns' =>  $this->petunjukInstrumenModel->getPetunjukIns($id),
            'cekRiwayatTgl' => $this->responseModel->cekRiwayatTgl($userID, $instrumenID),

            'getDataUser' => $this->userModel->getDataUser($userID),
            'getPertanyaanByRespId' => $this->dataDiriPertanyaanModel->getPertanyaanByRespId($jenisRespondenId),


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
        // dd(sizeof($getInstrumenID));
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
        if (!empty(user()->fullname)) {
            $fullname = user()->fullname;
        } else {
            $fullname = user()->namalengkap;
        }

        $data_responden =
            [
                'userID'  => user()->id,
                'fullname' => $fullname,
                'role' => user()->role,
                'email' => user()->email,
            ];
        // dd($data_responden);
        $this->respondenModel->save($data_responden);


        // update data diri 
        // insert new field jawaban
        $getPostPertanyaan = $this->mRequest->getVar('pertanyaan');
        $columnPertanyaan = str_replace(' ', '', $getPostPertanyaan);

        $strReplace1 = str_replace('(', '-', $columnPertanyaan);
        $strReplace3 = str_replace(')', '-', $strReplace1);
        $strReplace4 = str_replace('?', '-', $strReplace3);
        $strReplace5 = str_replace('/', 'atau', $strReplace4);
        $newColumnPertanyaan = str_replace('*', '-', $strReplace5);

        // dd(sizeof($columnPertanyaan));

        for ($i = 0; $i < sizeof($getPostPertanyaan); $i++) {
            $userID  = user()->id;
            $userRole  = user()->role;

            $getJenisRespondenID = $this->jenisRespondenModel->getJenisRespondenID($userRole);

            foreach ($getJenisRespondenID as $data) {
                $jenisRespondenId = $data['id'];
            }
            $getPertanyaanByRespId = $this->dataDiriPertanyaanModel->getPertanyaanByRespId($jenisRespondenId);

            foreach ($getPertanyaanByRespId as $getPertanyaanId) {
                $pertanyaanId = $getPertanyaanId['id'];

                $newFieldJawabanIsian = $this->mRequest->getVar('isian');
                $newFieldJawabanPilihan = $this->mRequest->getVar('pilihan-' . $pertanyaanId);
                // dd(sizeof($newFieldJawabanIsian));
                // if jenis isian
                for ($j = 0; $j < sizeof($newFieldJawabanIsian); $j++) {

                    $dataIsian =
                        [
                            'id' => $userID,
                            $newColumnPertanyaan[$j] => $newFieldJawabanIsian[$j],
                        ];
                    $this->userModel->save($dataIsian);
                }

                // if jenis pilihan
                $getJenisPilihan = $this->dataDiriPertanyaanModel->getJenisPertanyaan('pilihan', $jenisRespondenId);
                // dd($getJenisPilihan);


                for ($k = 0; $k < sizeof($getJenisPilihan); $k++) {
                    foreach ($getJenisPilihan as $jenisPilihan) {
                        // dd(sizeof($getJenisPilihan));
                        $pertanyaan = $jenisPilihan['pertanyaan'];
                        $columnPertanyaanIsian = str_replace(' ', '', $pertanyaan);

                        $strReplace1 = str_replace('(', '-', $columnPertanyaanIsian);
                        $strReplace3 = str_replace(')', '-', $strReplace1);
                        $strReplace4 = str_replace('?', '-', $strReplace3);
                        $strReplace5 = str_replace('/', 'atau', $strReplace4);
                        $newColumnPertanyaanIsian = str_replace('*', '-', $strReplace5);


                        if ($this->mRequest->getVar("pilihan-" . $jenisPilihan['id']) != Null) {
                            $jawaban = $this->mRequest->getVar('pilihan-' . $jenisPilihan['id']);
                            // dd($jawaban);

                            $dataPilihan =
                                [
                                    'id' => $userID,
                                    $newColumnPertanyaanIsian => $jawaban,
                                ];
                            // dd($pert);
                            // dd($newColumnPertanyaanIsian);

                            $this->userModel->save($dataPilihan);
                        }
                    }
                }
            }
        }

        session()->setFlashdata('message', 'Terima kasih telah mengisi Survei Kepuasan');

        return redirect()->to('responden');
    }
    public function riwayatSurvei($id)
    {
        $data = [
            'title' => 'Riwayat Pengisian Survei',
            'responseInsId' => $this->responseModel->getResponseByInstrumenID($id),
            'respondenData' => $this->responseModel->getRespondenData($id),
            'validation' => \Config\Services::validation()


        ];
        return view('responden/riwayat_survei', $data);
    }
}
