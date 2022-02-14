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

        if (($userRole === 'Admin') || ($userRole === 'Kontributor')) {
            $data = [
                'title' => 'Profil Saya',
                'getDataUser' => $this->userModel->getDataUser($userID),
                'getProdi' => $this->prodiModel->getProdi(),
            ];
            return view('responden/isiDataDiri', $data);
        }
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
        return view('responden/isiDataDiri', $data);
    }

    public function updateDataDiri()
    {

        // ----------- jika pertanyaan jenis isian ---------------------------

        $getPostPertanyaan = $this->mRequest->getVar('pertanyaan');
        for ($i = 0; $i < sizeof($getPostPertanyaan); $i++) {
            $userID  = user()->id;
            $userRole  = user()->role;

            $getJenisRespondenID = $this->jenisRespondenModel->getJenisRespondenID($userRole);

            foreach ($getJenisRespondenID as $data) {
                $jenisRespondenId = $data['id'];
            }

            $getPertanyaanJenisIsian = $this->dataDiriPertanyaanModel->getJenisPertanyaan('isian', $jenisRespondenId);

            for ($l = 0; $l < sizeof($getPertanyaanJenisIsian); $l++) {
                foreach ($getPertanyaanJenisIsian as $jenisIsian) {
                    $newFieldJawabanIsian = $this->mRequest->getVar("isian-" . $jenisIsian['id']);

                    $pertanyaanIsian = $jenisIsian['pertanyaan'];

                    $strReplace = str_replace(' ', '', $pertanyaanIsian);
                    $strReplace1 = str_replace('(', '-', $strReplace);
                    $strReplace2 = str_replace(')', '-', $strReplace1);
                    $strReplace3 = str_replace('?', '-', $strReplace2);
                    $strReplace4 = str_replace('/', 'atau', $strReplace3);
                    $columnPertanyaanIsian = str_replace('*', '-', $strReplace4);

                    if ($newFieldJawabanIsian != Null) {
                        $dataIsian =
                            [
                                'id' => $userID,
                                $columnPertanyaanIsian => $newFieldJawabanIsian,
                            ];
                        $this->userModel->save($dataIsian);
                    }
                }
            }

            // ----------- jika pertanyaan jenis pilihan ---------------------------
            $getPertanyaanJenisPilihan = $this->dataDiriPertanyaanModel->getJenisPertanyaan('pilihan', $jenisRespondenId);

            for ($k = 0; $k < sizeof($getPertanyaanJenisPilihan); $k++) {
                foreach ($getPertanyaanJenisPilihan as $jenisPilihan) {
                    $pertanyaan = $jenisPilihan['pertanyaan'];
                    $columnPertanyaanPilihan = str_replace(' ', '', $pertanyaan);

                    $strReplace1 = str_replace('(', '-', $columnPertanyaanPilihan);
                    $strReplace2 = str_replace(')', '-', $strReplace1);
                    $strReplace3 = str_replace('?', '-', $strReplace2);
                    $strReplace4 = str_replace('/', 'atau', $strReplace3);
                    $columnPertanyaanPilihan = str_replace('*', '-', $strReplace4);

                    if ($this->mRequest->getVar("pilihan-" . $jenisPilihan['id']) != Null) {
                        $jawaban = $this->mRequest->getVar('pilihan-' . $jenisPilihan['id']);

                        $dataPilihan =
                            [
                                'id' => $userID,
                                $columnPertanyaanPilihan => $jawaban,
                            ];
                        $this->userModel->save($dataPilihan);
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

        $pertId = $this->mRequest->getVar('delPertanyaanId');

        if ($columnPertanyaan === 'fullname') {
            $this->dataDiriPertanyaanModel->delete($pertId);
        } elseif ($columnPertanyaan === 'ProgramStudi') {
            $this->dataDiriPertanyaanModel->delete($pertId);
        } elseif ($columnPertanyaan === 'Prodi') {
            $this->dataDiriPertanyaanModel->delete($pertId);
        } else {
            // delete column di tabel users
            $forge->dropColumn('users', $columnPertanyaan);
            // delete column di tabel pertanyaan_data_diri
            $this->dataDiriPertanyaanModel->delete($pertId);
        }

        session()->setFlashdata('message', 'Pertanyaan berhasil dihapus');

        return redirect()->back();
    }
}
