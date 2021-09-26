<?php

namespace App\Controllers\Responden;

use App\Controllers\BaseController;

use App\Models\InstrumenModel;
use App\Models\RespondenModel;
use App\Models\PernyataanModel;
use App\Models\ResponseModel;


class Response extends BaseController
{
    protected $instrumenModel;
    protected $respondenModel;
    protected $pernyataanModel;
    protected $responseModel;



    public function __construct()
    {
        $this->mRequest = service("request");
        $this->instrumenModel = new InstrumenModel();
        $this->respondenModel = new RespondenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->responseModel = new ResponseModel();
    }

    public function index()
    {
        $role = user()->role;

        $data = [
            'title' => 'Pilih Instrumen',
            'instrumen' => $this->instrumenModel->getInstrumen(),
            'instrumenByResponden' => $this->instrumenModel->getInstrumenByResponden($role),

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
        $data = [
            'title' => 'Isi Survei',
            'instrumen' => $this->instrumenModel->getInstrumen($id),
            'lihatPernyataan' => $this->pernyataanModel->getPernyataanByInstrumenID($id),
            'pernyataan' => $this->pernyataanModel->getPernyataan($id),
            'getInstrumenID' =>  $this->pernyataanModel->getPernyataanByInstrumenID($id),

            'validation' => \Config\Services::validation()


        ];
        // jika butir tidak ada di database
        if (empty($data['instrumen'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Instrumen Tidak ditemukan.');
        }
        // if (empty($data['lihatPernyataan'])) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Butir Pernyataan Tidak ditemukan.');
        // }

        return view('responden/isiSurvei', $data);
    }

    public function saveSurvei()
    {
        $instrumenID =  $this->mRequest->getVar('instrumenID');
        $getInstrumenID =   $this->pernyataanModel->getPernyataanByInstrumenID($instrumenID);

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

        session()->setFlashdata('message', 'Terimakasih. Jawaban Survei berhasil dikirim!');

        return redirect()->to('responden');
    }
}