<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\RespondenModel;
use App\Models\DataDiriPertanyaanModel;
use Myth\Auth\Models\UserModel;


class Response extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $respondenModel;
    protected $userModel;
    protected $dataDiriPertanyaanModel;

    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->respondenModel = new RespondenModel();
        $this->userModel = new UserModel();
        $this->dataDiriPertanyaanModel = new DataDiriPertanyaanModel();


        $this->mRequest = service("request");
    }

    public function hasilInstrumen()
    {
        $data = [
            'title' => 'Hasil Survei Per-Instrumen',
            'response' => $this->responseModel->getResponseByInstrumen(),


        ];
        return view('admin/hasil-survei/hasil_instrumen', $data);
    }
    public function responseInstrumen($id)
    {
        $data = [
            'title' => 'Hasil Survei Per-Instrumen',
            'responseIns' => $this->responseModel->getResponseByInstrumen(),
            'responsePertanyaan' => $this->responseModel->getResponseButir($id),
            'responseJawaban' => $this->responseModel->getResponseJawaban($id),
            'responseJawabanLagi' => $this->responseModel->getResponseJawabanLagi($id),
            'jumlahRespondenIns' => $this->responseModel->getJumlahRespondenIns($id),
            'jumlahRespondenIns' => $this->responseModel->getJumlahRespondenIns($id),
            'jumlahTanggapanIns' => $this->responseModel->getJumlahTanggapanIns($id),
            'cekTampilGrafik' => $this->instrumenModel->getInstrumen($id),
        ];
        // dd($data);

        return view('admin/hasil-survei/response_instrumen', $data);
    }






    // ---------------- MENU HASIL SURVEI - RESPONDEN --------------------------

    public function hasilResponden()
    {
        $data = [
            'title' => 'Data Responden',
            'responden' => $this->respondenModel->getRespondenList(),
            'getAllPertanyaan' => $this->dataDiriPertanyaanModel->getAllPertanyaan(),

        ];
        return view('admin/hasil-survei/hasil_responden', $data);
    }
    public function responseResponden($id)
    {
        $getDataUser = $this->userModel->getDataUser($id);
        foreach ($getDataUser as $dataUser) {
            $roleUser = $dataUser->role;
        }

        $getJenisRespondenID = $this->jenisRespondenModel->getJenisRespondenID($roleUser);
        foreach ($getJenisRespondenID as $respoId) {
            $jenisRespondenId = $respoId['id'];
        }

        $data = [
            'title' => 'Tanggapan Responden',
            'responseInsId' => $this->responseModel->getResponseByInstrumenID($id),
            'respondenDataDiri' => $this->respondenModel->joinRespondenUsers($id),
            'lastActivity' => $this->userModel->lastActivity($id),
            'lastActivity' => $this->userModel->lastActivity($id),
            'getPertanyaanByRespId' => $this->dataDiriPertanyaanModel->getPertanyaanByRespId($jenisRespondenId),


        ];
        return view('admin/hasil-survei/response_responden', $data);
    }

    public function deleteResponden($id)
    {
        $this->respondenModel->delete($id);

        session()->setFlashdata('message', 'Responden berhasil dihapus');

        return redirect()->to('/admin/hasil-survei/responden');
    }
}
