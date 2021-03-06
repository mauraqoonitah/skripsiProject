<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\KategoriModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\RespondenModel;
use App\Models\ProdiModel;
use App\Models\DataDiriPertanyaanModel;
use App\Models\DataDiriJawabanModel;
use Myth\Auth\Models\AuthGroupsModel;


class JenisResponden extends BaseController
{
    protected $kategoriModel;
    protected $instrumenModel;
    protected $pernyataanModel;
    protected $jenisRespondenModel;
    protected $responseModel;
    protected $respondenModel;
    protected $authGroupsModel;
    protected $pilihanJawabanModel;
    protected $pertanyaanDataDiriModel;
    protected $prodiModel;

    protected $mRequest;


    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->respondenModel = new RespondenModel();
        $this->dataDiriJawabanModel = new DataDiriJawabanModel();
        $this->dataDiriPertanyaanModel = new DataDiriPertanyaanModel();
        $this->prodiModel = new ProdiModel();
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

        $data =
            [
                'id' => $id,
                'responden' => $this->mRequest->getVar('responden')

            ];
        $this->jenisRespondenModel->save($data);

        $updateData = $this->authGroupsModel->updateData($id);
        foreach ($updateData as $authdata) {
            $authDataId = $authdata['id'];
        }

        $dataAuth =
            [
                'id' => $authDataId,
                'name' => $this->mRequest->getVar('responden'),
                'description' => 'responden ' . $this->mRequest->getVar('responden')
            ];
        $this->authGroupsModel->save($dataAuth);

        session()->setFlashdata('message', 'Data berhasil diubah');

        return redirect()->to('/admin/jenisResponden');
    }

    public function kelolaDataDiri($respondenId)
    {
        $data = [
            'title' => 'Edit Jenis Responden',
            'responden' => $this->jenisRespondenModel->getJenisResponden($respondenId),
            'getPertanyaanByRespId' => $this->dataDiriPertanyaanModel->getPertanyaanByRespId($respondenId),
            'getAllProdi' => $this->prodiModel->getProdi(),

            'validation' => \Config\Services::validation()
        ];
        // dd($data);

        return view('admin/jenis-responden/kelola_data_diri', $data);
    }
    public function updateDataDiri()
    {
        $uniqueId = random_string('alnum', 16);

        // save to table pertanyaan_data_diri 
        $inputPertanyaan = ucwords($this->mRequest->getPost('pertanyaan'));

        $strReplace1 = str_replace('(', '-', $inputPertanyaan);
        $strReplace3 = str_replace(')', '-', $strReplace1);
        $strReplace4 = str_replace('?', '-', $strReplace3);
        $strReplace5 = str_replace('/', ' atau ', $strReplace4);
        $newInputPertanyaan = str_replace('*', '-', $strReplace5);

        if (($newInputPertanyaan === 'Nama Lengkap') || ($newInputPertanyaan === 'Nama') || ($newInputPertanyaan === 'Fullname')) {
            $newInputPertanyaan = 'fullname';
        } else {
            $newInputPertanyaan = ucwords($this->mRequest->getPost('pertanyaan'));
        }

        $dataPertanyaan =
            [
                'uniqueId' => $uniqueId,
                'pertanyaan' => $newInputPertanyaan,
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

        $getPostPertanyaan = ucwords($this->mRequest->getPost('pertanyaan'));
        if (($getPostPertanyaan === 'Nama Lengkap') || ($getPostPertanyaan === 'Nama') || ($getPostPertanyaan === 'Fullname') || ($getPostPertanyaan === 'Name')) {
            $getPostPertanyaan = 'fullname';
        } else {
            $getPostPertanyaan = ucwords($this->mRequest->getPost('pertanyaan'));
        }

        $strReplace = str_replace(' ', '', $getPostPertanyaan);
        $strReplace1 = str_replace('(', '-', $strReplace);
        $strReplace2 = str_replace(')', '-', $strReplace1);
        $strReplace3 = str_replace('?', '-', $strReplace2);
        $strReplace4 = str_replace('/', ' atau ', $strReplace3);
        $strReplace5 = str_replace(' ', '', $strReplace4);

        $columnPertanyaan = str_replace('*', '-', $strReplace5);

        $fields = [
            $columnPertanyaan => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ];

        $db = \Config\Database::connect();
        // check if column is already exist
        if ($db->fieldExists($columnPertanyaan, 'users')) {
            session()->setFlashdata('message', 'Data berhasil disimpan');
            return redirect()->back();
        }
        // add new column to users table
        $forge = \Config\Database::forge();
        $forge->addColumn('users', $fields);


        session()->setFlashdata('message', 'Data berhasil disimpan');
        return redirect()->back();
    }
}
