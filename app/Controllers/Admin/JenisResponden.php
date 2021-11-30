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
use App\Models\DataDiriJawabanModel;
use Myth\Auth\Models\AuthGroupsModel;


class JenisResponden extends BaseController
{
    protected $adminModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $respondenModel;
    protected $authGroupsModel;
    protected $pilihanJawabanModel;
    protected $pertanyaanDataDiriModel;

    protected $mRequest;


    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->respondenModel = new RespondenModel();
        $this->dataDiriJawabanModel = new DataDiriJawabanModel();
        $this->dataDiriPertanyaanModel = new DataDiriPertanyaanModel();
        $this->authGroupsModel = new AuthGroupsModel();

        $this->mRequest = service("request");
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Responden',
            'responden' => $this->jenisRespondenModel->getJenisResponden(),

            'validation' => \Config\Services::validation()

        ];

        return view('admin/jenis-responden/jenis_responden', $data);
    }
    public function saveJenisResponden()
    {
        // validasi input
        if (!$this->validate([
            'responden' => [
                'rules'  => 'required|is_unique[jenis_responden.responden]',
                'errors' => [
                    'required' => 'Jenis Responden harus diisi.',
                    'is_unique' => 'Jenis Responden ini sudah terdaftar.'
                ]
            ],

        ])) {
            session()->setFlashdata('messageError', 'Gagal menyimpan. Data sudah ada!');

            return redirect()->to('/admin/jenisResponden')->withInput();
        }

        $dataResponden =
            [
                'responden' => $this->mRequest->getVar('responden'),
            ];
        $this->jenisRespondenModel->save($dataResponden);

        $responden = $this->mRequest->getVar('responden');
        $getRespondenID = $this->jenisRespondenModel->getJenisRespondenID($responden);

        foreach ($getRespondenID as $rID) {
            $resID = $rID['id'];
        }

        $dataAuthGroups =
            [
                'name' => $this->mRequest->getVar('responden'),
                'description' => $this->mRequest->getVar('responden'),
                'jenisRespondenID' => $resID,
            ];
        $this->authGroupsModel->insert($dataAuthGroups);


        session()->setFlashdata('message', 'Data berhasil ditambahkan');

        return redirect()->to('/admin/jenisResponden');
    }

    public function deleteJenisResponden($id)
    {
        $this->jenisRespondenModel->delete($id);

        $this->authGroupsModel->where('jenisRespondenID', $id)->delete();

        session()->setFlashdata('message', 'Jenis Responden berhasil dihapus');

        return redirect()->to('/admin/jenisResponden');
    }

    public function editJenisResponden($id)
    {
        $data = [
            'title' => 'Edit Jenis Responden',
            'responden' => $this->jenisRespondenModel->getJenisResponden($id),

            'validation' => \Config\Services::validation()
        ];

        return view('admin/jenis-responden/edit_JenisResponden', $data);
    }

    //ubah jenis responden
    public function updateJenisResponden($id)
    {
        $this->jenisRespondenModel->save(
            [
                'id' => $id,
                'responden' => $this->mRequest->getVar('responden')

            ]
        );

        session()->setFlashdata('message', 'Data berhasil diubah');

        return redirect()->to('/admin/jenisResponden');
    }

    public function kelolaDataDiri($respondenId)
    {
        $data = [
            'title' => 'Edit Jenis Responden',
            'responden' => $this->jenisRespondenModel->getJenisResponden($respondenId),
            'getPertanyaanByRespId' => $this->dataDiriPertanyaanModel->getPertanyaanByRespId($respondenId),

            'validation' => \Config\Services::validation()
        ];
        // dd($data);

        return view('admin/jenis-responden/kelola_data_diri', $data);
    }
    public function updateDataDiri($id)
    {
        $uniqueId = random_string('alnum', 16);

        // save to table pertanyaan_data_diri 
        $dataPertanyaan =
            [
                'uniqueId' => $uniqueId,
                'pertanyaan' => $this->mRequest->getPost('pertanyaan'),
                'jenisRespondenID' => $this->mRequest->getPost('jenisRespondenID'),
                'jenis' => $this->mRequest->getPost('jenis'),
            ];
        $this->dataDiriPertanyaanModel->save($dataPertanyaan);

        // save to table pilihan_jawaban_data_diri
        $getPertanyaanID = $this->dataDiriPertanyaanModel->getPertanyaan($uniqueId);

        foreach ($getPertanyaanID as $pertanyaan) {
            $pertanyaanId = $pertanyaan['id'];
        }

        $pilihan_jawaban = $this->mRequest->getVar('pilihan[]');
        if (!empty($pilihan_jawaban)) {
            foreach ($pilihan_jawaban as $cols_pilihan) {
                $dataPilihanJawaban =
                    [
                        'pertanyaanID' => $pertanyaanId,
                        'pilihan' => $cols_pilihan,

                    ];
                $this->dataDiriJawabanModel->save($dataPilihanJawaban);
            }
        }
        session()->setFlashdata('message', 'Data berhasil disimpan');
        return redirect()->back();
    }
}
