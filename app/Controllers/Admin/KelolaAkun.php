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
use Myth\Auth\Authorization\PermissionModel;
use Myth\Auth\Authorization\FlatAuthorization;



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
    protected $permissionModel;
    protected $authorize;

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
        $this->permissionModel = new PermissionModel();
        // $this->load->database();
        $this->authorize = service('authorization');
        // $this->flatAuthorization = new FlatAuthorization();
        $this->mRequest = service("request");
    }

    public function index()
    {
        $roleDosen = 'Dosen';
        $data = [
            'title' => 'Kelola Akun',
            'responden' => $this->jenisRespondenModel->getJenisResponden(),
            'jenisResponden' => $this->jenisRespondenModel->getJenisResponden(),
            'getAdminUser' => $this->userModel->getAdminUser(),
            'getKontributor' => $this->userModel->getKontributor(),
            'instrumenByResponden' => $this->instrumenModel->getInstrumenByResponden($roleDosen),
            'getAllDosen' => $this->userModel->getDosen(),

            'validation' => \Config\Services::validation()

        ];


        return view('admin/kelola-akun/kelola_akun', $data);
    }

    public function editAkunDosen($userId)
    {
        // $getPermissionsForUser = $this->permissionModel->getPermissionsForUser($userId);

        // $selected_permissionName = [];
        // foreach ($getPermissionsForUser as $selected_data) {
        //     $selected_permissionName[] = $selected_data;
        //     var_dump($selected_permissionName);

        //     $getSelectedInsByPermission = $this->instrumenModel->getSelectedInsByPermission($selected_permissionName);
        //     var_dump($getSelectedInsByPermission);
        // };


        $data = [
            'title' => 'Ubah Data Instrumen Dosen',
            'getDataDosen' => $this->userModel->getDataDosen($userId),
            'getPermissionsForUser' => $this->permissionModel->getPermissionsForUser($userId),
            'getAllInstrumenDosen' => $this->instrumenModel->getAllInstrumenDosen(),


            'validation' => \Config\Services::validation()
        ];
        return view('/admin/kelola-akun/edit_akun_dosen', $data);
    }

    public function updateInsDosen($userId)
    {
        $db = \Config\Database::connect();
        $instrumenDosen = $this->mRequest->getPost('instrumenDosen');


        $arrPermissionId =  $this->permissionModel->getPermissionsForUser($userId);
        $permissionId = array_map('intval', $arrPermissionId);

        foreach ($permissionId as $pId) {
            $name = $pId;

            $query   = $db->query("SELECT * FROM instrumen INNER JOIN auth_permissions ON auth_permissions.name = instrumen.id WHERE name = $name ");
            $results = $query->getResultArray();
        }

        // get selected value (old data)
        $oldSelectedInstrumen = [];
        foreach ($results as $selected_data) {
            $oldSelectedInstrumen[] = $selected_data['namaInstrumen'];
        }
        // ADDED - ambil new insert nya
        foreach ($instrumenDosen as $add_val) {
            if (!in_array($add_val, $oldSelectedInstrumen)) {
                $data = [
                    'permissionID' => $add_val,
                    'userID' => $add_val,
                    'name' => $add_val,

                ];
                // var_dump($data);

                var_dump($add_val . " ADDED <br>");
                // $this->adminModel->insert($data);
            }
        }

        //REMOVED - ambil data yang di remove
        foreach ($oldSelectedInstrumen as $remove_val) {
            if (!in_array($remove_val, $instrumenDosen)) {

                $data = [
                    'name' => $remove_val,
                ];
                // var_dump($data);
                var_dump($remove_val . " REMOVED <br>");
                // $this->adminModel->where($data)->delete();
            }
        }


        // session()->setFlashdata('message', ' Pilihan Instrumen berhasil diubah');

        // return redirect()->to('/admin/kelolaAkun');
    }

    public function activeStatus($id)
    {

        $is_active = $this->mRequest->getPost('activeId');

        if ($is_active == "1") {
            $this->userModel->save(
                [
                    'id' => $id,
                    'active' => '0'
                ]
            );
            session()->setFlashdata('message', 'Admin dinonaktifkan');
        }
        if ($is_active == null) {
            $this->userModel->save(
                [
                    'id' => $id,
                    'active' => '1'
                ]
            );
            session()->setFlashdata('message', 'Admin diaktifkan ');
        }
    }


    public function deleteUser($id)
    {
        $this->userModel->delete($id);

        // $this->authGroupsModel->where('jenisRespondenID', $id)->delete();

        session()->setFlashdata('message', 'Akun berhasil dihapus');

        return redirect()->to('/admin/kelolaAkun');
    }

    public function removePermission($permissionId, $userId)
    {
        $this->authorize->removePermissionFromUser($permissionId, $userId);

        session()->setFlashdata('message', 'Akses berhasil dihapus');

        return redirect()->to('/admin/kelolaAkun');
    }

    public function addAkunPermission()
    {
        $selectedInput = $this->mRequest->getPost('addAkunPermission');
        $input = explode("/", $selectedInput);

        $permissionId = $input[0];
        $userId = $input[1];
        $this->authorize->addPermissionToUser($permissionId, $userId);

        session()->setFlashdata('message', 'Akses berhasil ditambahkan ke akun');

        return redirect()->to('/admin/kelolaAkun');
    }
}
