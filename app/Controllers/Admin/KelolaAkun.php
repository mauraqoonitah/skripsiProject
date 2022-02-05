<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\KategoriModel;
use App\Models\InstrumenModel;
use App\Models\PernyataanModel;
use App\Models\JenisRespondenModel;
use App\Models\ResponseModel;
use App\Models\RespondenModel;
use Myth\Auth\Models\AuthGroupsModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Authorization\PermissionModel;

class KelolaAkun extends BaseController
{
    protected $kategoriModel;
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
        $this->kategoriModel = new KategoriModel();
        $this->instrumenModel = new InstrumenModel();
        $this->pernyataanModel = new PernyataanModel();
        $this->jenisRespondenModel = new JenisRespondenModel();
        $this->responseModel = new ResponseModel();
        $this->respondenModel = new RespondenModel();
        $this->authGroupsModel = new AuthGroupsModel();
        $this->userModel = new UserModel();
        $this->permissionModel = new PermissionModel();
        $this->authorize = service('authorization');
        $this->mRequest = service("request");
    }

    public function index()
    {
        $roleDosen = 'Dosen';
        $data = [
            'title' => 'Kelola Akun',
            'getAdminUser' => $this->userModel->getAdminUser(),
            'getKontributor' => $this->userModel->getKontributor(),
            'instrumenByResponden' => $this->instrumenModel->getInstrumenByResponden($roleDosen),
            'getAllDosen' => $this->userModel->getDosen(),

            'validation' => \Config\Services::validation()
        ];
        // dd($data);
        return view('admin/kelola-akun/kelola_akun', $data);
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
            session()->setFlashdata('message', 'Akun berhasil dinonaktifkan');
        }
        if ($is_active == null) {
            $this->userModel->save(
                [
                    'id' => $id,
                    'active' => '1'
                ]
            );
            session()->setFlashdata('message', 'Akun berhasil diaktifkan ');
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
        $db = \Config\Database::connect();
        $selectedUserId = $this->mRequest->getPost('addAkunPermission');
        $selectedPermissionId = $this->mRequest->getPost('permission_id');

        $sql_2 = "SELECT * FROM auth_users_permissions WHERE permission_id = ? ";
        $getUsersPermissions =  $db->query($sql_2, [$selectedPermissionId]);
        $oldSelected_userId = [];
        foreach ($getUsersPermissions->getResultArray() as $getUserId) {
            $oldSelected_userId[] = $getUserId['user_id'];
        }
        // dd($oldSelected_userId);

        // ADDED - ambil new insert select nya
        foreach ($selectedUserId as $add_val) {
            if (!in_array($add_val, $oldSelected_userId)) {
                // dd($add_val);
                session()->setFlashdata('message', 'Akses berhasil ditambahkan ke akun');
                $this->authorize->addPermissionToUser($selectedPermissionId, $add_val);
            }
        }

        //REMOVED - ambil data yang di remove
        foreach ($oldSelected_userId as $remove_val) {
            if (!in_array($remove_val, $selectedUserId)) {
                // dd($remove_val);
                session()->setFlashdata('message', 'Akses berhasil dihapus dari akun');
                $this->authorize->removePermissionFromUser($selectedPermissionId, $remove_val);
            }
        }

        return redirect()->to('/admin/kelolaAkun');
    }
}
