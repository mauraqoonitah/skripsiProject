<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\RespondenModel;

class Response extends BaseController
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
        ];
        // $responseJawaban = $this->responseModel->getResponseJawaban($id);
        // $countJawaban = $responseJawaban->countAll();
        // dd($countJawaban);
        return view('admin/hasil-survei/response_instrumen', $data);
    }






    // ---------------- MENU HASIL SURVEI - RESPONDEN --------------------------

    public function hasilResponden()
    {
        $data = [
            'title' => 'Data Responden',
            'responden' => $this->respondenModel->getRespondenList(),

        ];
        return view('admin/hasil-survei/hasil_responden', $data);
    }
    public function responseResponden($id)
    {

        $data = [
            'title' => 'Tanggapan Responden',
            'responseInsId' => $this->responseModel->getResponseByInstrumenID($id),
            'respondenData' => $this->responseModel->getRespondenData($id),
            // 'responseByQuestId' => $this->responseModel->getResponseByQuestID($id, $questionID),
            // 'butirByInsId' => $this->responseModel->getButirByInstrumenID($id),

        ];
        return view('admin/hasil-survei/response_responden', $data);
    }
}
