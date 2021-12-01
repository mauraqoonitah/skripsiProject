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


class DataDiri extends BaseController
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

    public function isiDataDiri()
    {
        $userID  = user()->id;
        $userRole  = user()->role;

        $getJenisRespondenID = $this->jenisRespondenModel->getJenisRespondenID($userRole);

        foreach ($getJenisRespondenID as $data) {
            $jenisRespondenId = $data['id'];
        }

        $data = [
            'title' => 'Profil Saya',
            'getDataUser' => $this->userModel->getDataUser($userID),
            'getProdi' => $this->prodiModel->getProdi(),
            'getPertanyaanByRespId' => $this->dataDiriPertanyaanModel->getPertanyaanByRespId($jenisRespondenId),


        ];
        // dd($data);
        return view('responden/isiDataDiri', $data);
    }

    public function updateDataDiri()
    {

        // insert new field jawaban
        $getPostPertanyaan = $this->mRequest->getVar('pertanyaan');
        $columnPertanyaan = str_replace(' ', '', $getPostPertanyaan);
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
                            $columnPertanyaan[$j] => $newFieldJawabanIsian[$j],
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

                        if ($this->mRequest->getVar("pilihan-" . $jenisPilihan['id']) != Null) {
                            $jawaban = $this->mRequest->getVar('pilihan-' . $jenisPilihan['id']);
                            // dd($jawaban);

                            $dataPilihan =
                                [
                                    'id' => $userID,
                                    $columnPertanyaanIsian => $jawaban,
                                ];
                            // dd($pert);
                            // dd($dataPilihan);

                            $this->userModel->save($dataPilihan);
                        }
                    }
                }
            }
        }

        session()->setFlashdata('message', 'Data Berhasil Disimpan. <a href="/responden" class="fw-bold text-black">Klik Disini untuk Isi Survei Kepuasan</a>');

        return redirect()->to('/responden/isiDataDiri/' . $userID);
    }

    public function deleteColumnDataDiri($columnPertanyaan)
    {

        $forge = \Config\Database::forge();
        $forge->dropColumn('users', $columnPertanyaan); // to drop one single column

        $pertId = $this->mRequest->getVar('delPertanyaanId');
        $this->dataDiriPertanyaanModel->delete($pertId);

        session()->setFlashdata('message', 'Data Pernyataan berhasil dihapus');

        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}
